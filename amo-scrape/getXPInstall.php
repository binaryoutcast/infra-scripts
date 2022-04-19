<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL

require_once('./amoIDs.php');
$shouldContinue = false;

foreach ($arrayAMOIDS as $_value) {
  if (!in_array($_value, array(954361, 973183 ))) {
    
    if ($_value == 683857) {
      $shouldContinue = true;
    }
    
    if ($shouldContinue == true) {
      $dir = '../raw/' . $_value;
      $amoJSON = file_get_contents('https://addons.mozilla.org/api/v3/addons/addon/' . $_value . '/versions/?page_size=50');
      
      $amoDecoded = json_decode($amoJSON, true);
      
      file_put_contents($dir . '/addonXPInstall-1.json', $amoJSON);
      
      if ($amoDecoded['next']) {
        print($_value . ' - ' . 'Has Additional Pages' . ' - ' . $http_response_header[0] . "\n");
      }
      else {
        print($_value . ' - ' . $http_response_header[0] . "\n");
      }
    }
    else {
      print('Skipping ' . $_value . '...' . "\n");
    }
    
  }
}

?>