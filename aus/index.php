<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Basic Functions | =====================================================

// Prints a text error message
function funcError($_value) {
  header('Content-Type: text/plain');
  die('Error: ' . $_value);
  
  // We are done here
  exit();
}

// Gets a value from $_GET or returns null.
// Also, only allows following A-Z a-z 0-9 - { } . % anything else is filtered out
function funcHTTPGetValue($_value) {
  if (!isset($_GET[$_value]) || $_GET[$_value] === '' || $_GET[$_value] === null || empty($_GET[$_value])) {
    return null;
  }
  else {  
    $_finalValue = preg_replace('/[^-a-zA-Z0-9_\-\/\{\}\@\.\%\s]/', '', $_GET[$_value]);
    return $_finalValue;
  }
}

// Sends the standard headers
function funcSendHeader($_value) {
  $_arrayHeaders = array(
    '404' => 'HTTP/1.0 404 Not Found',
    '501' => 'HTTP/1.0 501 Not Implemented',
    'html' => 'Content-Type: text/html',
    'text' => 'Content-Type: text/plain',
    'xml' => 'Content-Type: text/xml',
    'css' => 'Content-Type: text/css',
  );
  
  if (array_key_exists($_value, $_arrayHeaders)) {
    header($_arrayHeaders[$_value]);
    
    if ($_value == '404') {
      // We are done here
      exit();
    }
  }
}

// Sends a redirect header to the supplied url
function funcRedirect($_strURL) {
	header('Location: ' . $_strURL , true, 302);
  
  // We are done here
  exit();
}

// startsWith and endsWith polyfills
function startsWith($haystack, $needle) {
   $length = strlen($needle);
   return (substr($haystack, 0, $length) === $needle);
}
function endsWith($haystack, $needle) {
  $length = strlen($needle);
  if ($length == 0) {
    return true;
  }
  return (substr($haystack, -$length) === $needle);
}

function contains($haystack, $needle) {
  if (strpos($haystack, $needle) > -1) {
    return true;
  }
  else {
    return false;
  }
}

// 404's if user agent starts with wget and curl
// Stop scraping our sites damn it!
function funcCheckUserAgent() {
  if (startsWith(strtolower($_SERVER['HTTP_USER_AGENT']), 'wget/') ||
    startsWith(strtolower($_SERVER['HTTP_USER_AGENT']), 'curl/')) {
    funcSendHeader('404');
  }
}

// ============================================================================

// == | Vars | ================================================================

$boolBasiliskTake2Override = true;
$strUpdateBasePath = $_SERVER['DOCUMENT_ROOT'];
$arrayUpdateValues = null;

$arrayRequest = [
  'application' => funcHTTPGetValue('application'),
  'version' => funcHTTPGetValue('version'),
  'arch' => funcHTTPGetValue('arch'),
  'buildid' => funcHTTPGetValue('buildid'),
  'channel' => funcHTTPGetValue('channel')
];

$arrayApprovedRequests = array(
  'application' => array(
    'pale moon' => 'palemoon',
    'palemoon' => 'palemoon',
    'basilisk' => 'basilisk'
  ),
  'buildTarget' => array(
    'winnt_x86-msvc' => 'win32',       // VS2013
    'winnt_x86_64-msvc' => 'win64',    // VS2013
    'winnt_x86-msvc-x86' => 'win32',     // VS2015 32-on-32
    'winnt_x86-msvc-x64' => 'win32',     // VS2015 32-on-64
    'winnt_x86_64-msvc-x64' => 'win64',  // VS2015 64-on-64
    'linux_x86_64-gcc3' => 'linux-x86_64',
    'linux_x86-gcc3' => 'linux-i686'
  ),
  'channel' => [
    'release',
    'unstable'
  ]
);

// ============================================================================

// == | funcReadUpdateFiles | =================================================

function funcReadUpdateFiles($_strUpdatePath, $_strApplication, $strVersion, $_strChannel, $_strBuildTarget) {
  $_strJSONPath = null;
  $_strMARPath = null;

  // Glob for matching files based on application and build target
  $_listBuildFiles = glob(
    $_strUpdatePath .
    '*' .
    $_strApplication .
    '*' .
    $_strBuildTarget .
    '*'
  );

  // We should have NO MORE than two matches if we do then return null
  if (count($_listBuildFiles) > 2) {
    return null;
  }

  // Iterate through and pick out the json and mar files and assign them to vars
  foreach ($_listBuildFiles as $_value) {
    if (endsWith($_value, '.json')) {
      $_strJSONPath = $_value;
    }
    elseif (endsWith($_value, '.mar')) {
      $_strMARPath = $_value;
    }
  }

  // If either var is null then return null
  if($_strJSONPath == null || $_strMARPath == null) {
    return null;
  }

  // Define the update manifest data structure which will serve for string replace in the XML file
  $_arrayUpdateValues = array(
    '@UPDATE_TYPE@' => null,
    '@UPDATE_DISPLAY_VERSION@' => null,
    '@UPDATE_VERSION@' => null,
    '@UPDATE_BUILDID@' => null,
    '@UPDATE_DETAILS_URL@' => null,
    '@UPDATE_MAR_URL@' => null,
    '@UPDATE_MAR_HASH@' => null,
    '@UPDATE_MAR_FILESIZE@' => null
  );

  // Read and decode the build generated json file
  $_arrayJSON = json_decode(file_get_contents($_strJSONPath), true);

  // If we can't read the json file return null
  if ($_arrayJSON == null) {
    return null;
  }

  // Set values from build json to the update manifest data structure
  // Set the update type
  $_arrayUpdateValues['@UPDATE_TYPE@'] = 'major';

  // Special case for display version
  // Basilisk Release gets a sliced version of MOZ_APP_VERSION
  // Everything else simply gets MOZ_APP_VERSION
  if ($_strApplication == 'basilisk' && $_strChannel == 'release') {
    $_arrayUpdateValues['@UPDATE_DISPLAY_VERSION@'] = substr($_arrayJSON['moz_app_version'], 5);
  }
  else {
    $_arrayUpdateValues['@UPDATE_DISPLAY_VERSION@'] = $_arrayJSON['moz_app_version'];
  }

  // Set Application version
  $_arrayUpdateValues['@UPDATE_VERSION@'] = $_arrayJSON['moz_app_version'];

  // Set Application build id
  $_arrayUpdateValues['@UPDATE_BUILDID@'] = $_arrayJSON['buildid'];

  // Special case for Update Details
  if ($_strApplication == 'basilisk') {
    $_arrayUpdateValues['@UPDATE_DETAILS_URL@'] = 'http://www.basilisk-browser.org/';
  }
  elseif ($_strApplication == 'palemoon' && $_strChannel == 'unstable') {
    $_arrayUpdateValues['@UPDATE_DETAILS_URL@'] = 'http://www.palemoon.org/unstable/';
  }
  else {
    $_arrayUpdateValues['@UPDATE_DETAILS_URL@'] = 'http://www.palemoon.org/releasenotes.shtml';
  }

  // Special case for MAR URL
  if ($_strApplication == 'basilisk') {
    $_arrayUpdateValues['@UPDATE_MAR_URL@'] = 'http://aus.basilisk-browser.org' . str_replace($GLOBALS['strUpdateBasePath'], '', $_strMARPath);
  }
  elseif ($_strApplication == 'palemoon') {
    $_arrayUpdateValues['@UPDATE_MAR_URL@'] = 'http://aus.palemoon.org' . str_replace($GLOBALS['strUpdateBasePath'], '', $_strMARPath);
  }

  // Get Hash
  $_arrayUpdateValues['@UPDATE_MAR_HASH@'] = hash_file('sha256', $_strMARPath);

  // Get Filesize
  $_arrayUpdateValues['@UPDATE_MAR_FILESIZE@'] = filesize($_strMARPath);

  return $_arrayUpdateValues;
}

// ============================================================================

// == | funcGenerateXML | =====================================================

function funcGenerateXML($_arrayUpdateValues) {
  // Special case for Basilisk Take 1
  if ($GLOBALS['boolBasiliskTake2Override'] == true &&
      ($GLOBALS['arrayRequest']['application'] == 'basilisk' &&
      startsWith($GLOBALS['arrayRequest']['version'], '55.'))) {
    $_arrayUpdateValues['@UPDATE_VERSION@'] = '55.0.2025.01.01';
  }

  // Define the XML file parts
  $_arrayUpdateXML = array(
    'head' => '<?xml version="1.0"?>' . "\n" . '<updates>' . "\n",
    'tail' => "\n" . '</updates>',
    'body' => '<update type="@UPDATE_TYPE@" displayVersion="@UPDATE_DISPLAY_VERSION@" appVersion="@UPDATE_VERSION@" extensionVersion="@UPDATE_VERSION@"
        buildID="@UPDATE_BUILDID@"
        detailsURL="@UPDATE_DETAILS_URL@">
    <patch type="complete"
       URL="@UPDATE_MAR_URL@"
       hashFunction="SHA256"
       hashValue="@UPDATE_MAR_HASH@"     
       size="@UPDATE_MAR_FILESIZE@"/>
    </update>'
  );

  // Send an XML content type header
  funcSendHeader('xml');

  // Print the head of the XML file
  print($_arrayUpdateXML['head']);

  // If this is null then it is an error
  if ($_arrayUpdateValues != null) {
    foreach ($_arrayUpdateValues as $_key => $_value) {
      $_arrayUpdateXML['body'] = str_replace($_key, $_value, $_arrayUpdateXML['body']);
    }
    
    print($_arrayUpdateXML['body']);
  }

  // Print the tail of the XML file
  print($_arrayUpdateXML['tail']);
  
  // We are done here
  exit();
}

// ============================================================================

// == | Main | ================================================================

// Make sure request strings are knocked down to lowercase
foreach ($arrayRequest as $_key => $_value) {
  if (is_string($_value)) {
    $arrayRequest[$_key] = strtolower($_value);
  }
}

// Sanity Checks
// Ensure required arguments are existing
if ($arrayRequest['application'] == null ||
    $arrayRequest['version'] == null ||
    $arrayRequest['arch'] == null ||
    $arrayRequest['channel'] == null) {
  funcGenerateXML(null);
}

// No updates for Vista
if(contains($_SERVER['HTTP_USER_AGENT'],"Windows NT 6.0")) {
  funcGenerateXML(null);
}

// Ensure the requested application is one we can deal with
if (!array_key_exists($arrayRequest['application'], $arrayApprovedRequests['application'])) {
  funcGenerateXML(null);
}

// Ensure the requested build target is one we can deal with
if (!array_key_exists($arrayRequest['arch'], $arrayApprovedRequests['buildTarget'])) {
  funcGenerateXML(null);
}

// Ensure the requested channel is one we can deal with
if (!in_array($arrayRequest['channel'], $arrayApprovedRequests['channel'])) {
  funcGenerateXML(null);
}

// Check if final update path physically exists
if (file_exists($strUpdateBasePath . '/' . $arrayRequest['channel']. '/')) {
  $strUpdatePath = $strUpdateBasePath . '/' . $arrayRequest['channel']. '/';
}
else {
  funcGenerateXML(null);
}

// Set vars to be the fully qualified path of manifest file and temp file
$strUpdateManifestPath = $strUpdatePath . '/' . $arrayApprovedRequests['application'][$arrayRequest['application']] . '-' . $arrayRequest['arch'] . '.manifest';
$strUpdateTempPath = $strUpdatePath . '/' . $arrayApprovedRequests['application'][$arrayRequest['application']] . '-' . $arrayRequest['arch'] . '.temp';

// HERE is the big guy.. If manifest file and temp file doesn't exist generate it else output xml will get a null
// else if manifest file exists and temp file doesn't then read it and output xml
// Transitional phases will get an empty xml response
if (!file_exists($strUpdateManifestPath)) {
  if (!file_exists($strUpdateTempPath)) {
    // Process the files
    $arrayUpdateValues = funcReadUpdateFiles(
      $strUpdatePath,
      $arrayApprovedRequests['application'][$arrayRequest['application']],
      $arrayRequest['version'],
      $arrayRequest['channel'],
      $arrayApprovedRequests['buildTarget'][$arrayRequest['arch']]
    );
    
    if ($arrayUpdateValues != null) {
      // Write manifest file
      $_fileTemp = fopen($strUpdateTempPath, 'w+');
      fwrite($_fileTemp, json_encode($arrayUpdateValues, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
      fclose($_fileTemp);
      rename($strUpdateTempPath, $strUpdateManifestPath);
    }
  }
}
elseif (file_exists($strUpdateManifestPath))  {
  if (!file_exists($strUpdateTempPath)) {
    $arrayUpdateValues = json_decode(file_get_contents($strUpdateManifestPath), true);
  }
}

// Output XML
funcGenerateXML($arrayUpdateValues);

// ============================================================================
?>