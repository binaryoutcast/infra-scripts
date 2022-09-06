<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

gfImportModules('database');

$oldDS = gfBuildPath(ROOT_PATH, DOTDOT, DOTDOT, 'storage', 'legacy', 'addons');
$newDS = gfBuildPath(ROOT_PATH, DATASTORE_RELPATH, 'addons');
$slugs = $gmDatabase->get('col', "SELECT `slug` FROM `addons`");

$iconPreviews = EMPTY_ARRAY;

foreach ($slugs as $_value) {
  $_slug = strtolower($_value);
  $_oldIcon = gfBuildPath($oldDS, $_slug, 'icon.png');
  $_oldPreview = gfBuildPath($oldDS, $_slug, 'preview.png');

  $_update = array(
    'hasIcon' => file_exists($_oldIcon),
    'hasPreview' => file_exists($_oldPreview),
  );

  if ($_update['hasIcon']) {
    copy($_oldIcon, gfBuildPath($newDS, $_slug, 'icon.png'));
  }

  if ($_update['hasPreview']) {
    copy($_oldPreview, gfBuildPath($newDS, $_slug, 'preview.png'));
  }

  $gmDatabase->query("UPDATE `addons` SET ?u WHERE `slug` = ?s", $_update, $_slug);

  $iconPreviews[$_value] = $_update;
}

$rv = $iconPreviews;

gfContent(null, $rv);

// ====================================================================================================================

?>