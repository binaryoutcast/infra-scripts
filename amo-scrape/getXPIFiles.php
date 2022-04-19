<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL

require_once('./amoIDs.php');

$arrayAMOIDS = array_chunk($arrayAMOIDS, 2500);

$intPart = $argv[1];

foreach ($arrayAMOIDS[$intPart] as $_value) {
  $dir = '../raw/' . $_value;
  $addonMetadata = json_decode(file_get_contents($dir . '/addonMetadata.json'), true);
  if (!$addonMetadata) {
    continue;
  }
  
  $xpiSlug = $addonMetadata['slug'];
  
  $xpiJSONGlob = glob($dir . '/addonXPInstall-*');

  if ($xpiJSONGlob) {
    foreach ($xpiJSONGlob as $_value2) {
      $metafile = json_decode(file_get_contents($_value2), true);
      if ($metafile) {
        foreach ($metafile['results'] as $_value3) {
          $xpiVersion = $_value3['version'];
          foreach ($_value3['files'] as $_value4) {           
            $xpiURL = str_replace('?src=', '', $_value4['url']);

            if ($_value4['platform'] == 'all') {
              $xpiFileName = $xpiSlug . '-' . $xpiVersion . '.xpi';
            }
            else {
              $xpiFileName = $xpiSlug . '-' . $xpiVersion . '-' . $_value4['platform'] . '.xpi';
            }

            if (!file_exists($dir . '/' . $xpiFileName)) {
              $xpiFile = @file_get_contents($xpiURL);
              if ($http_response_header[0] == 'HTTP/1.1 302 FOUND' || $http_response_header[0] == 'HTTP/1.1 200 OK') {
                file_put_contents($dir . '/' . $xpiFileName, $xpiFile);
              }
              print($_value . ' - ' . $xpiFileName . ' - Response: ' . $http_response_header[0] . "\n");
            }
            /*
            else {
              $xpiFileHash = 'sha256:' . hash_file('sha256', $dir . '/' . $xpiFileName);
              
              if ($_value4['hash'] != $xpiFileHash) {
                print($_value . ' - ' . $xpiFileName . ' - Hash Check: [ FAILED ]' . "\n");
                //unlink($dir . '/' . $xpiFileName);
              }
            }
            */
          }
        }
      }
    }
  }
}
?>