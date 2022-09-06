<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

gfImportModules('aviary');

$xpi = gfBuildPath(ROOT_PATH, DOTDOT, DOTDOT, 'storage', 'legacy', 'addons', 'cutebuttons', 'CuteButtonsCrystalSVG-0.5.8.xpi');

$installManifest = gfReadFileFromArchive($xpi, RDF_INSTALL_MANIFEST);

$targetApplication = EMPTY_ARRAY;

if (array_key_exists('{8de7fcbb-c55c-4fbe-bfc5-fc555c87dbc4}', $installManifest['targetApplication'])) {
  $targetApplication[TARGET_APPLICATION['palemoon']['id']] =
    $installManifest['targetApplication']['{8de7fcbb-c55c-4fbe-bfc5-fc555c87dbc4}'];

  $targetApplication[TARGET_APPLICATION['palemoon']['id']]['minVersion'] = '30.0.0a1';
  $targetApplication[TARGET_APPLICATION['palemoon']['id']]['maxVersion'] = '30.*';
}

if (array_key_exists('{a3210b97-8e8a-4737-9aa0-aa0e607640b9}', $installManifest['targetApplication'])) {
  $targetApplication[TARGET_APPLICATION['borealis']['id']] =
    $installManifest['targetApplication']['{a3210b97-8e8a-4737-9aa0-aa0e607640b9}'];

  $targetApplication[TARGET_APPLICATION['borealis']['id']]['minVersion'] = '8.5.7900a1';
  $targetApplication[TARGET_APPLICATION['borealis']['id']]['maxVersion'] = '8.5.*';
}

if (array_key_exists(TARGET_APPLICATION['interlink']['id'], $installManifest['targetApplication'])) {
    if (ToolkitVersionComparator::compare($installManifest['targetApplication'][TARGET_APPLICATION['interlink']['id']]['maxVersion'], '52.9') >= 0) {
      $targetApplication[TARGET_APPLICATION['interlink']['id']] =
        $installManifest['targetApplication'][TARGET_APPLICATION['interlink']['id']];

      $targetApplication[TARGET_APPLICATION['interlink']['id']]['minVersion'] = '52.9.7900a1';
      $targetApplication[TARGET_APPLICATION['interlink']['id']]['maxVersion'] = '52.9.*';
    }
}

$installManifest['targetApplication'] = $targetApplication;

$installManifest = $gmAviary->createInstallManifest($installManifest);
$installManifest = $gmAviary->parseInstallManifest($installManifest);
$installManifest = $gmAviary->createUpdateManifest($installManifest, true);

gfContent(null, $installManifest);




// ====================================================================================================================

?>