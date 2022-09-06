<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL

// Open the file
$file = fopen('amoIDs.php', 'w');

// Write the opening bracket
fwrite($file, "array(");

// Set the number of Search Pages (496)
$intAMOPageNumber = 496;

while ($intAMOPageNumber != 0) {
  $arrayAMO = json_decode(file_get_contents('https://services.addons.mozilla.org/api/v3/addons/search/?app=firefox&page=' . $intAMOPageNumber . '&page_size=50&sort=created&type=extension'),true);
  print('-- Page: ' . $intAMOPageNumber . "\n");

  foreach ($arrayAMO['results'] as $_value) {
    $id = $_value['id'];

    // Write the lines
    print($id . "\n");
    fwrite($file, $id . ', ');
  }

  // Decriment the Page Number
  $intAMOPageNumber--;

  // Sleep for 1 second
  sleep(1);
}

// Write the closing bracket
fwrite($file, ");\n");

fclose($file);

?>