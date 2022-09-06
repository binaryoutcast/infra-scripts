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

$installManifest = $gmAviary->createInstallManifest($installManifest, true, true);
$installManifest = $gmAviary->parseInstallManifest($installManifest);

gfContent(null, $installManifest);

/*
$xmlArray = array(
  '@element' => 'RDF',
  '@attributes' => array(
    'xmlns' => 'http://www.w3.org/1999/02/22-rdf-syntax-ns#',
    'xmlns:em' => 'http://www.mozilla.org/2004/em-rdf#',
  ),
  array(
    '@element' => 'Description',
    '@attributes' => array(
      'about' => 'urn:mozilla:install-manifest',
      'em:type' => '2',
      'em:id' => 'extension@org',
      'em:version' => '1.0.0',
      'em:name' => 'An Extension',
      'em:description' => 'Some kind of Extension',
      'em:creator' => 'Extension Creator',
      'em:license' => 'MPL-2.0',
    ),
    array(
      '@element' => 'em:targetApplication',
      array(
        '@element' => 'Description',
        '@attributes' => array(
          'em:id' => 'application@org',
          'em:minVersion' => '1.0.0a1',
          'em:maxVersion' => '1.*',
        ),
      ),
    ),
    array(
      '@element' => 'em:targetApplication',
      array(
        '@element' => 'Description',
        '@attributes' => array(
          'em:id' => 'other-application@org',
          'em:minVersion' => '8.5.0a1',
          'em:maxVersion' => '8.*',
        ),
      ),
    ),
  ),
);
*/

/*
$rv = null;
gfContent(EMPTY_STRING, json_encode($rv, JSON_ENCODE_FLAGS), true);
*/


// ====================================================================================================================

?>