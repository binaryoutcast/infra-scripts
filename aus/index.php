<?php
// == | Setup | =======================================================================================================

error_reporting(E_ALL);
ini_set("display_errors", "on");

define('DEBUG_MODE', $_GET['debug'] ?? null);

// This has to be defined using the function at runtime because it is based
// on a variable. However, constants defined with the language construct
// can use this constant by some strange voodoo. Keep an eye on this.
// NOTE: DOCUMENT_ROOT does NOT have a trailing slash.
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);

const NEW_LINE              = "\n";
const EMPTY_STRING          = "";
const EMPTY_ARRAY           = [];
const SPACE                 = " ";
const DOT                   = ".";
const SLASH                 = "/";
const DASH                  = "-";
const WILDCARD              = "*";

const APPLICATIONS          = ['palemoon', 'basilisk'];
const UPDATE_CHANNELS       = ['release', 'beta', 'unstable'];
/*
const WIDGET_TOOLKITS       = ['windows', 'cocoa', 'gtk2', 'gtk3'];
const FLAVORS               = ['illumos'];
*/

const BUILD_TARGETS = array(
  'winnt_x86-msvc'          => 'win32', // Tycho and Older and >= 28.9.0
  'winnt_x86-msvc-x86'      => 'win32', // 28.0.0-28.8.4 (VS2015 32-on-32)
  'winnt_x86-msvc-x64'      => 'win32', // 28.0.0-28.8.4 (VS2015 32-on-64)
  'winnt_x86_64-msvc'       => 'win64', // Tycho and Older and >= 28.9.0
  'winnt_x86_64-msvc-x64'   => 'win64', // 28.0.0-28.8.4 (VS2015 64-on-64)
  'linux_x86-gcc3'          => 'linux-i686',
  'linux_x86_64-gcc3'       => 'linux-x86_64',
  'darwin_x86-gcc3'         => 'mac32',
  'darwin_x86_64-gcc3'      => 'mac64',
  'sunos_x86-gcc3'          => 'solaris2.11-i386',
  'sunos_x86_64-gcc3'       => 'solaris2.11-x86_64',
);

const JSON_EXTENSION        = DOT . 'json';
const XML_EXTENSION         = DOT . 'manifest';
const MAR_EXTENSION         = DOT . 'complete' . DOT .'mar';
const TEMP_EXTENSION        = DOT . 'temp';

const XML_TAG               = '<?xml version="1.0" encoding="utf-8" ?>';
const XML_AUS_BLANK         = '<updates />';

const JSON_ENCODE_FLAGS     = JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
const FILE_WRITE_FLAGS      = "w+";

// ====================================================================================================================

// == | Global Functions | ============================================================================================

/**********************************************************************************************************************
* Error function that will display data (Error Message)
**********************************************************************************************************************/
function gfError($aValue, $phpError = false) { 
  if (is_string($aValue) || is_int($aValue)) {
    header('Content-Type: text/xml', false);
    print(XML_TAG . NEW_LINE);

    $error = EMPTY_STRING;

    if ($phpError) {
      $error = '<error>PHP:' . SPACE . $aValue . '</error>';
    }
    else {
      if (DEBUG_MODE) {
        $error = '<error>Unable to Comply:' . SPACE . $aValue . '</error>';        
      }
      else {
        $error = XML_AUS_BLANK;
      }
    }

    print($error);
  }
  else {
    header('Content-Type: text/plain', false);
    print(var_export($aValue, true));
  }

  // We're done here.
  exit();
}

/**********************************************************************************************************************
* PHP Error Handler
**********************************************************************************************************************/

function gfErrorHandler($errno, $errstr, $errfile, $errline) {
  $errorCodes = array(
    E_ERROR => 'Fatal Error',
    E_WARNING => 'Warning',
    E_PARSE => 'Parse',
    E_NOTICE => 'Notice',
    E_CORE_ERROR => 'Fatal Error (Core)',
    E_CORE_WARNING => 'Warning (Core)',
    E_COMPILE_ERROR => 'Fatal Error (Compile)',
    E_COMPILE_WARNING => 'Warning (Compile)',
    E_USER_ERROR => 'Fatal Error (User Generated)',
    E_USER_WARNING => 'Warning (User Generated)',
    E_USER_NOTICE => 'Notice (User Generated)',
    E_STRICT => 'Strict',
    E_RECOVERABLE_ERROR => 'Fatal Error (Recoverable)',
    E_DEPRECATED => 'Depercated',
    E_USER_DEPRECATED => 'Depercated (User Generated)',
    E_ALL => 'All',
  );

  $errorType = $errorCodes[$errno] ?? $errno;
  $errorMessage = $errorType . ': ' . $errstr . SPACE . 'in' . SPACE .
                  str_replace(ROOT_PATH, '', $errfile) . SPACE . 'on line' . SPACE . $errline;

  if (error_reporting() !== 0) {
    gfError($errorMessage, 1);
  }
}

set_error_handler("gfErrorHandler");

/**********************************************************************************************************************
* Unified Var Checking
*
* @param $_type           Type of var to check
* @param $_value          GET/SERVER/EXISTING Normal Var
* @param $_allowFalsy     Optional - Allow falsey returns (really only works with case var)
* @returns                Value or null
**********************************************************************************************************************/
function gfSuperVar($_type, $_value, $_allowFalsy = null) {
  $finalValue = null;

  switch ($_type) {
    case 'get':
      $finalValue = $_GET[$_value] ?? null;

      if ($finalValue) {
        $finalValue = preg_replace('/[^-a-zA-Z0-9_\-\/\{\}\@\.\%\\:s\,]/', '', $_GET[$_value]);
      }

      break;
    case 'server':
      $finalValue = $_SERVER[$_value] ?? null;
      break;
    case 'var':
      $finalValue = $_value ?? null;
      break;
    default:
      gfError('Incorrect var check');
  }

  if (!$_allowFalsy && (empty($finalValue) || $finalValue === 'none' || $finalValue === '' || $finalValue === 'false')) {
    return null;
  }

  return $finalValue;
}

/**********************************************************************************************************************
* Sends HTTP Headers to client using a short name
*
* @param $aHeader    Short name of header
**********************************************************************************************************************/
function gfHeader($aHeader) {
  $headers = array(
    404             => 'HTTP/1.1 404 Not Found',
    501             => 'HTTP/1.1 501 Not Implemented',
    'text'          => 'Content-Type: text/plain',
    'xml'           => 'Content-Type: text/xml',
  );
  
  if (!headers_sent() && array_key_exists($aHeader, $headers)) {   
    header($headers[$aHeader]);

    if (in_array($aHeader, [404, 501])) {
      exit();
    }
  }
}

/**********************************************************************************************************************
* Read file (decode json if the file has that extension)
*
* @param $aFile     File to read
* @returns          file contents or array if json
                    null if error, empty string, or empty array
**********************************************************************************************************************/
function gfReadFile($aFile) {
  $file = @file_get_contents($aFile);

  if (str_ends_with($aFile, JSON_EXTENSION)) {
    $file = json_decode($file, true);
  }

  return gfSuperVar('var', $file);
}

/**********************************************************************************************************************
* Write file (encodes json if the file has that extension)
*
* @param $aData     Data to be written
* @param $aFile     File to write
* @returns          true else return error string
**********************************************************************************************************************/
function gfWriteFile($aData, $aFile, $aRenameFile = null) {
  if (!gfSuperVar('var', $aData)) {
    return 'No useful data to write';
  }

  if (file_exists($aFile)) {
    return 'File already exists';
  }

  if (str_ends_with($aFile, JSON_EXTENSION)) {
    $aData = json_encode($aData, JSON_ENCODE_FLAGS);
  }

  $file = fopen($aFile, FILE_WRITE_FLAGS);
  fwrite($file, $aData);
  fclose($file);

  if ($aRenameFile) {
    rename($aFile, $aRenameFile);
  }

  return true;
}

/**********************************************************************************************************************
* Polyfills for missing/proposed functions
* str_starts_with, str_ends_with, str_contains
*
* @param $haystack  string
* @param $needle    substring
* @returns          true if substring exists in string else false
**********************************************************************************************************************/
if (!function_exists('str_starts_with')) {
  function str_starts_with($haystack, $needle) {
     $length = strlen($needle);
     return (substr($haystack, 0, $length) === $needle);
  }
}

// --------------------------------------------------------------------------------------------------------------------

if (!function_exists('str_ends_with')) {
  function str_ends_with($haystack, $needle) {
    $length = strlen($needle);
    if ($length == 0) {
      return true;
    }

    return (substr($haystack, -$length) === $needle);
  }
}

// --------------------------------------------------------------------------------------------------------------------

if (!function_exists('str_contains')) {
  function str_contains($haystack, $needle) {
    if (strpos($haystack, $needle) > -1) {
      return true;
    }
    else {
      return false;
    }
  }
}

/**********************************************************************************************************************
* Generate Update XML
*
* @returns          XML or error
**********************************************************************************************************************/
function gfGenerateUpdateXML() {
  global $gaRuntime;

  // Read the package json
  $manifest = gfReadFile($gaRuntime['channelPath'] . $gaRuntime['packageName'] . JSON_EXTENSION);

  // Prevent the possiblity of an update channel mismatch from being pushed out
  if ($manifest['moz_update_channel'] != $gaRuntime['reqChannel']) {
    gfError('Update channel mismatch');
  }

  $patchFile = $gaRuntime['packageName'] . MAR_EXTENSION;
  
  // Prepare the substs for the update xml
  $update = array(
    '{%VERSION}'          => $manifest['moz_app_version'],
    '{%BUILD_ID}'         => $manifest['buildid'],
    '{%DISPLAY_VERSION}'  => $manifest['moz_app_version'],
    '{%DETAILS_URL}'      => 'http://www.palemoon.org/releasenotes.shtml',
    '{%PATCH_URL}'        => 'http://aus.palemoon.org/' . $gaRuntime['reqChannel'] . SLASH . $patchFile,
    '{%PATCH_HASH}'       => hash_file('sha256', $gaRuntime['channelPath'] . $patchFile),
    '{%PATCH_SIZE}'       => filesize($gaRuntime['channelPath'] . $patchFile),
  );

  // Not-Release channels for Pale Moon have relnotes elsewhere
  if ($gaRuntime['reqApplication'] == 'palemoon' && $gaRuntime['reqChannel'] != 'release') {
    $update['{%DETAILS_URL}'] = str_replace('releasenotes.shtml',
                                            $gaRuntime['reqChannel'] . SLASH . 'releasenotes.shtml',
                                            $update['{%DETAILS_URL}']);
  }

  // Basilisk isn't on Pale Moon's domain but the paths are the same so just replace the domain
  // Also fix up the displayVersion
  if ($gaRuntime['reqApplication'] == 'basilisk') {
    $update['{%DISPLAY_VERSION}'] = substr($manifest['moz_app_version'], 5);
    $update['{%DETAILS_URL}']     = str_replace('palemoon', 'basilisk-browser', $update['{%DETAILS_URL}']);
    $update['{%PATCH_URL}']       = str_replace('palemoon', 'basilisk-browser', $update['{%PATCH_URL}']);
  }

  // The Update XML Template
  $xml = XML_TAG . NEW_LINE .
'<updates>
  <update type="major" 
          appVersion="{%VERSION}"
          buildID="{%BUILD_ID}"
          extensionVersion="{%VERSION}"
          displayVersion="{%DISPLAY_VERSION}"
          detailsURL="{%DETAILS_URL}">
    <patch type="complete"
           URL="{%PATCH_URL}"
           hashFunction="SHA256"
           hashValue="{%PATCH_HASH}"     
           size="{%PATCH_SIZE}"/>
  </update>
</updates>';

  // Iterate through the substs on the template
  foreach ($update as $_key => $_value) {
    $xml = str_replace($_key, $_value, $xml);
  }

  return $xml;
}

// ====================================================================================================================

// == | Main | ========================================================================================================

// Define an array that will hold the current application state
$gaRuntime = array(
  'currentScheme'       => gfSuperVar('server', 'SCHEME') ??
                           gfSuperVar('server', 'HTTPS') ? 'https' : 'http',
  'phpServerName'       => gfSuperVar('server', 'SERVER_NAME'),
  'phpRequestURI'       => gfSuperVar('server', 'REQUEST_URI'),
  'remoteAddr'          => gfSuperVar('server', 'HTTP_X_FORWARDED_FOR') ??
                           gfSuperVar('server', 'REMOTE_ADDR'),
  'userAgent'           => gfSuperVar('server', 'HTTP_USER_AGENT'),
  'reqApplication'      => gfSuperVar('get', 'application'),
  'reqVersion'          => gfSuperVar('get', 'version'),
  'reqBuildTarget'      => gfSuperVar('get', 'arch'),
  'reqBuildID'          => gfSuperVar('get', 'buildid'),
  'reqWidgetToolkit'    => gfSuperVar('get', 'toolkit'),
  'reqFlavor'           => gfSuperVar('get', 'flavor'),
  'reqChannel'          => gfSuperVar('get', 'channel'),
  'channelPath'         => null,
  'packageName'         => null,
  'packageTarget'       => null,
  'packageManifest'     => EMPTY_ARRAY,
  'packagePatch'        => EMPTY_ARRAY,
  'patchXMLName'        => null,
  'patchXMLWritten'     => null,
  'patchXML'            => null,
);

// --------------------------------------------------------------------------------------------------------------------

// Deny some UAs
foreach (['NT 5', 'NT 6.0', 'curl/', 'wget/'] as $_value) {
  if (str_contains($gaRuntime['userAgent'], $_value)) {
    gfError('Reference Code - ID-10-T');
  }
}

// --------------------------------------------------------------------------------------------------------------------

// We need AT LEAST these to provide an update
if (!$gaRuntime['reqApplication'] || !$gaRuntime['reqBuildTarget']) {
  gfError('Insufficent query arguments');
}

// Knock the following to lowercase
foreach (['reqApplication', 'reqVersion', 'reqBuildTarget', 'reqWidgetToolkit',
         'reqWidgetToolkit', 'reqFlavor', 'reqChannel'] as $_value) {
  if ($gaRuntime[$_value]) {
    $gaRuntime[$_value] = strtolower($gaRuntime[$_value]);
  }
}

// --------------------------------------------------------------------------------------------------------------------

// Translate a legacy value where application had a space in it for Pale Moon
if ($gaRuntime['reqApplication'] == 'pale moon') {
  $gaRuntime['reqApplication'] = 'palemoon';
}

// Only allow approved applications
if (!in_array($gaRuntime['reqApplication'], APPLICATIONS)) {
  gfError('Unknown application');
}

// --------------------------------------------------------------------------------------------------------------------

// If the update channel is unknown then assume release
if (!in_array($gaRuntime['reqChannel'], UPDATE_CHANNELS)) {
  $gaRuntime['reqChannel'] = 'release';
}

// Set the channelPath to the absolute path where files are
$gaRuntime['channelPath'] = ROOT_PATH . SLASH . $gaRuntime['reqChannel'] . SLASH;

// --------------------------------------------------------------------------------------------------------------------

// We need to translate the build target to the package target form
// We won't really need this value if we aren't generating but it also doubles as a sanity check
if (array_key_exists($gaRuntime['reqBuildTarget'], BUILD_TARGETS)) {
  $gaRuntime['packageTarget'] = BUILD_TARGETS[$gaRuntime['reqBuildTarget']];
}
else {
  gfError('Unknown build target');
}

// If widget or flavor is not specificed for linux we should assume gtk2
if (str_starts_with($gaRuntime['reqBuildTarget'], 'linux') && $gaRuntime['reqApplication'] != 'basilisk') {
  if (!$gaRuntime['reqWidgetToolkit']) {
    $gaRuntime['reqWidgetToolkit'] = 'gtk2';
  }

  if (!$gaRuntime['reqFlavor']) {
    $gaRuntime['reqFlavor'] = $gaRuntime['reqWidgetToolkit'];
  }
}

// --------------------------------------------------------------------------------------------------------------------

// Set the patch XML Name
$gaRuntime['patchXMLName'] = $gaRuntime['reqApplication'] . DASH . $gaRuntime['reqBuildTarget'];

// If we have a flavor then append it to the patch XML name
if ($gaRuntime['reqFlavor']) {
  $gaRuntime['patchXMLName'] .= DASH . $gaRuntime['reqFlavor'];
}

// Construct the patch XML and TEMP file names
$gvXMLFile = $gaRuntime['channelPath'] . $gaRuntime['patchXMLName'] . XML_EXTENSION;
$gvTEMPFile = $gaRuntime['channelPath'] . $gaRuntime['patchXMLName'] . TEMP_EXTENSION;

// --------------------------------------------------------------------------------------------------------------------

// Now we have fun.. Like last time we want to read a cached xml response and spit it out.
// However, if there is no cached response we need to generate it in a way that will pretty much eliminate
// the possiblity of multiple requests trying to write and read files at the same time. 
if (!file_exists($gvXMLFile)) {
  if (!file_exists($gvTEMPFile)) {
    // Build the inital package name used as a glob
    if ($gaRuntime['reqApplication'] == 'palemoon' && $gaRuntime['reqChannel'] == 'unstable') {
      // Pale Moon Unstables have a special case
      $gaRuntime['packageName'] = 'palemoon-unstable-latest' . DOT . $gaRuntime['packageTarget'];
    }
    else {
      $gaRuntime['packageName'] = $gaRuntime['reqApplication'] . DASH . WILDCARD . DOT . $gaRuntime['packageTarget'];
    }

    // If we have a flavor then append it to the package name
    if ($gaRuntime['reqFlavor']) {
      $gaRuntime['packageName'] .= DASH . $gaRuntime['reqFlavor'];
    }

    // ----------------------------------------------------------------------------------------------------------------

    // Glob for package files
    $gvPackageGlob = glob($gaRuntime['channelPath'] . $gaRuntime['packageName'] . WILDCARD);

    if (!gfSuperVar('var', $gvPackageGlob)) {
      gfError('There are no files for this application or build target');
    }

    // Find the package manifest and patch file
    foreach ($gvPackageGlob as $_value) {
      if (str_ends_with($_value, JSON_EXTENSION)) {
        $gaRuntime['packageManifest'][] = $_value;
      }
      else if (str_ends_with($_value, MAR_EXTENSION)) {
        $gaRuntime['packagePatch'][] = $_value;
      }
    }

    // There should NEVER be more than one package manifest or patch file for a given application/build target combo
    if (count($gaRuntime['packageManifest']) > 1 || count($gaRuntime['packagePatch']) > 1) {
      gfError('Multiple package manifests or patch files'); 
    }

    // Make sure we have the files and not just empty arrays
    if (!gfSuperVar('var', $gaRuntime['packageManifest']) || !gfSuperVar('var', $gaRuntime['packagePatch'])) {
      gfError('Missing package manifest or patch file'); 
    }

    // Set the final package name based on the package manifest
    $gaRuntime['packageName'] = str_replace(JSON_EXTENSION, EMPTY_STRING, $gaRuntime['packageManifest'][0]);
    $gaRuntime['packageName'] = str_replace($gaRuntime['channelPath'], EMPTY_STRING, $gaRuntime['packageName']);

    // Set these as true since we are done checking them out
    $gaRuntime['packageManifest'] = true;
    $gaRuntime['packagePatch'] = true;

    // ----------------------------------------------------------------------------------------------------------------

    // Generate the XML File
    $gaRuntime['patchXML'] = gfGenerateUpdateXML();

    // Write the XML File
    gfWriteFile($gaRuntime['patchXML'], $gvTEMPFile, $gvXMLFile);

    // Indicate we wrote the XML file
    $gaRuntime['patchXMLWritten'] = true;
  }
}
elseif (file_exists($gvXMLFile)) {
  if (!file_exists($gvTEMPFile)) {
    $gaRuntime['patchXML'] = gfReadFile($gvXMLFile);

    // Set some status
    $gaRuntime['patchXMLWritten'] = false;
    $gaRuntime['packageManifest'] = null;
    $gaRuntime['packagePatch'] = null;
  }
}

// --------------------------------------------------------------------------------------------------------------------

$gvReqRuntime = gfSuperVar('get', 'runtime');

if (DEBUG_MODE && $gvReqRuntime) {
  // This will allow us to show the runtime array if no other errors occured
  $gaRuntime['channelPath'] = str_replace(ROOT_PATH, '[FULL PATH REDACTED]', $gaRuntime['channelPath']);
  gfError($gaRuntime);
}
else {
  // Output the UpdateXML or if error blank xml (or error in debug mode)
  if (!$gaRuntime['patchXML']) {
    gfError('Could not generate or read the update xml');
  }
  else {
    // XML Header
    gfHeader('xml');
    
    // Output the Update XML
    print($gaRuntime['patchXML']);
    
    // We're done here.
    exit();
  }
}

// ====================================================================================================================
?>