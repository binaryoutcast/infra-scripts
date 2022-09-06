<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL

//require_once('./amoIDs.php');

$arrayAMOIDS = array(252515, 319519, 330908, 365998, 954361, 973183);

foreach ($arrayAMOIDS as $_value) {
  $amoMetadata = file_get_contents('https://services.addons.mozilla.org/api/v3/addons/addon/' . $_value);
  $dir = '../raw/' . $_value;
  mkdir($dir);
  $file = fopen($dir . '/addonMetadata.json', 'w');
  print(var_export(json_decode($amoMetadata, true), true) . "\n" . '^-- ' . $_value . "\n");
  fwrite($file, $amoMetadata);
  fclose($file);
}

?>
