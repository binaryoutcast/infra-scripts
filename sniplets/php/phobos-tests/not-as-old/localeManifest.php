<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

gfImportModules('aviary');

$basePath = gfBuildPath(ROOT_PATH, DATASTORE_RELPATH, 'locales');
$glob = glob(gfBuildPath($basePath, WILDCARD . XPINSTALL_EXTENSION));

$files = EMPTY_ARRAY;

foreach ($glob as $_value) {
  $_file = gfReadFileFromArchive($_value, RDF_INSTALL_MANIFEST);
  $files[] = $_file;
  break;
}

$rv = $files;

gfContent('phpEncode', $rv);

// ====================================================================================================================

?>