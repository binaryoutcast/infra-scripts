<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

gfImportModules('database', 'aviary');

$gmDatabase->changeDB('phoebus_live');

$extensions = $gmDatabase->get('all', "SELECT `name`, `slug`, `releaseXPI`, `xpinstall` FROM `addon` WHERE `type` = 'extension'");
$deadPeople = $gmDatabase->get('all', "SELECT `username`, `addons` FROM `user`
                                       WHERE `email` IS NULL OR `displayName` IS NULL
                                       OR `username` = 'riiis' OR `username` = 'lootyhoof'");
$oldExtensions = EMPTY_ARRAY;

foreach ($deadPeople as $_value) { 
  $oldExtensions = array_merge($oldExtensions, json_decode($_value['addons']));
}

$rv = EMPTY_ARRAY;

foreach ($extensions as $_value) { 
  if (!in_array($_value['slug'], $oldExtensions)) {
    $_value['xpinstall'] = json_decode($_value['xpinstall'], true);

    $_targetApplication = $_value['xpinstall'][$_value['releaseXPI']]['targetApplication'];
    
    if (!array_key_exists('{8de7fcbb-c55c-4fbe-bfc5-fc555c87dbc4}', $_targetApplication)) {
      continue;
    }

    if (ToolkitVersionComparator::compare($_targetApplication['{8de7fcbb-c55c-4fbe-bfc5-fc555c87dbc4}']['maxVersion'], '28.0.0a1') < 0) {
      continue;
    }

    $xpi = gfBuildPath(ROOT_PATH, DOTDOT, DOTDOT, 'storage', 'legacy', 'addons', $_value['slug'], $_value['releaseXPI']);

    $installManifest = gfReadFileFromArchive($xpi, RDF_INSTALL_MANIFEST);
    $rv[] = $_value['slug'] . SLASH . $_value['releaseXPI'];
  }
}

gfContent(null, $rv);

// ====================================================================================================================

?>