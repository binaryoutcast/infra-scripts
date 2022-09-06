<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

gfImportModules('database');

$addon = $gmDatabase->get('all', "SELECT `id`, `slug`, `addonURL` FROM `addons`");

foreach ($addon as $_value) {
  $gmDatabase->query("UPDATE `addons` SET `addonURL` = ?s WHERE `id` = ?s",
                     gfBuildPath('addon', strtolower($_value['slug'])),
                     $_value['id']);
}

$rv = $gmDatabase->get('all', "SELECT `id`, `slug`, `addonURL` FROM `addons`");

gfContent(null, $rv);

// ====================================================================================================================

?>