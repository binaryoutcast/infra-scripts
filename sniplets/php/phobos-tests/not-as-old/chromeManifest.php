<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

gfImportModules('aviary');

$basePath = gfBuildPath(ROOT_PATH, DATASTORE_RELPATH, 'addons');
$glob = glob(gfBuildPath($basePath, WILDCARD, WILDCARD . XPINSTALL_EXTENSION));

$addons = EMPTY_ARRAY;

/*
foreach ($glob as $_value) {
  $_file = gfExplodePath(str_replace($basePath, EMPTY_STRING, $_value));
  $addons[$_file[0]]['file'] = $_file[1];
  $addons[$_file[0]]['shadow'] = gfReadFile(dirname($_value) . SLASH . 'shadow.json');
}

foreach ($addons as $_key => $_value) {
  $xpi = new ZipArchive;
  $xpi->open(gfBuildPath($basePath, $_key, $_value['file']));
  $xpi->addFromString(RDF_INSTALL_MANIFEST, $_value['shadow']['xpinstall']);
  $xpi->close();
}
*/

$manifests = EMPTY_ARRAY;

foreach ($glob as $_value) {
  $_chromeManifest = gfReadFileFromArchive($_value, 'chrome.manifest');

  if ($_chromeManifest == EMPTY_STRING) {
    continue;
  }

  if (str_contains($_chromeManifest, 'application=') ||
      str_contains($_chromeManifest, 'appversion') ||
      str_contains($_chromeManifest, 'platformversion')) {
    $manifests[basename($_value)] = $_chromeManifest;
    //$manifests[] = basename($_value);
  }
}

$rv = $manifests;

gfContent('phpEncode', $rv);

// ====================================================================================================================

?>