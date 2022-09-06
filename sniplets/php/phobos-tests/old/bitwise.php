<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

$categories = gfGetCategoriesByType(XPINSTALL_TYPES['extension']);

$requestCats = gfSuperVar('get', 'cat') ?? [];

$result = 0;

foreach ($requestCats as $_value) {
  if (!array_key_exists($_value, $categories)) {
    continue;
  }

  $result |= $categories[$_value]['bit'];
}

$newCategories = [];

foreach ($categories as $_key => $_value) {
  if ($_value['bit'] & $result) {
    $newCategories[] = $_key;
  }
}

gfContent(null, ['valid-categories' => array_keys($categories), 
                    'expected-request-categories' => ['appearance', 'other'],
                    'actual-request-categories' => $requestCats,
                    'expected-bitwise' => decbin($categories['appearance']['bit'] | $categories['other']['bit']),
                    'actual-bitwise' => decbin($result),
                    'the-checked-categories' => $newCategories]);

// ====================================================================================================================

?>