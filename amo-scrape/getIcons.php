<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL

require_once('./amoIDs.php');
require_once('/regolith/account/addons-dev.palemoon.org/modules/basicFunctions.php');

$arrayAMOIDS = array_chunk($arrayAMOIDS, 2500);

$intPart = $argv[1];

foreach ($arrayAMOIDS[$intPart] as $_value) {
  $dir = '../raw/' . $_value;
  $addonMetadata = json_decode(file_get_contents($dir . '/addonMetadata.json'), true);
  if (!$addonMetadata) {
    continue;
  }
  
  $iconURL = $addonMetadata['icon_url'];
  
  if (!contains($iconURL, 'user-media')) {
    continue;
  }

  if (!file_exists($dir . '/icon.png')) {
    $iconFile = @file_get_contents($iconURL);
    
    if ($http_response_header[0] == 'HTTP/1.1 302 FOUND' || $http_response_header[0] == 'HTTP/1.1 200 OK') {
      file_put_contents($dir . '/icon.png', $iconFile);
    }

    print($_value . ' - Response: ' . $http_response_header[0] . "\n");
  }
}
?>