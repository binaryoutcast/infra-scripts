<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

gfImportModules('database');

$xpi = $gmDatabase->get('all', "SELECT `id`, `addonID` FROM `xpinstall`");

foreach ($xpi as $_value) {
  $gmDatabase->query("UPDATE `addons` SET `release` = ?i WHERE `id` = ?s", $_value['id'], $_value['addonID']);
}

$rv = $gmDatabase->get('all', "SELECT `slug`, `release` FROM `addons`");

gfContent(null, $rv);

// ====================================================================================================================

?>