<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

gfImportModules('database');

$gmDatabase->changeDB('phoebus_live');

$extensions = $gmDatabase->get('all', "SELECT `name`, `slug`, `releaseXPI`, `xpinstall` FROM `addon` WHERE `type` = 'extension'");

$rv = EMPTY_ARRAY;

foreach ($extensions as $_value) { 
  $rv[$_value['releaseXPI']] = json_decode($_value['xpinstall'], true)[$_value['releaseXPI']]['targetApplication'];
}

gfContent(null, json_encode($rv, JSON_ENCODE_FLAGS), true);

// ====================================================================================================================

?>