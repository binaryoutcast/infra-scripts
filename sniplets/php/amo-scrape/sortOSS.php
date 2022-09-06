<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL

require_once('./amoIDs.php');

$arrayAMOIDS = array_chunk($arrayAMOIDS, 2500);

$intPart = $argv[1];

foreach ($arrayAMOIDS[$intPart] as $_value) {
  $dir = '../raw/' . $_value;
  $xpiJSONGlob = glob($dir . '/addonXPInstall-*');

  if ($xpiJSONGlob) {
    foreach ($xpiJSONGlob as $_value2) {
      $metafile = json_decode(file_get_contents($_value2), true);
      if ($metafile) {
        foreach ($metafile['results'] as $_value3) {
          foreach ($_value3['files'] as $_value4) {
            $xpiURL = $_value4['url'];
            $xpiFile = $dir . '/' . basename(str_replace('?src=', '', $_value4['url']));
            print(basename($xpiFile) . "\n");
          }
        }
      }
    }
  }
}



?>