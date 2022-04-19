<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL

require_once('./amoIDs.php');

$amoVersionsMulti = array();

foreach ($arrayAMOIDS as $_value) {
  if (!in_array($_value, array(954361, 973183))) {
    $dir = '../raw/' . $_value;
    if (!file_exists($dir . '/addonXPInstall-8.json')) {
      continue;
    }
    $amoMetadata = json_decode(file_get_contents($dir . '/addonXPInstall-8.json'), true);
    
    if ($amoMetadata['next']) {
      $amoVersionsMulti[] = $_value;
    }
  }
}

unset($arrayAMOIDS);

foreach ($amoVersionsMulti as $_value) {
  $dir = '../raw/' . $_value;
  $amoJSON = file_get_contents('https://addons.mozilla.org/api/v3/addons/addon/' . $_value . '/versions/?page_size=50' . '&page=9');
  
  $amoDecoded = json_decode($amoJSON, true);
  
  file_put_contents($dir . '/addonXPInstall-9.json', $amoJSON);
  
  if ($amoDecoded['next']) {
    print($_value . ' - ' . 'Has Additional Pages' . ' - ' . $http_response_header[0] . "\n");
  }
  else {
    print($_value . ' - ' . $http_response_header[0] . "\n");
  }
}

//var_export($amoVersionsMulti);

?>