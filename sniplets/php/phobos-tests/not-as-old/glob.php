<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================
$basePath = gfBuildPath(ROOT_PATH, DATASTORE_RELPATH, 'addons');
$glob = glob(gfBuildPath($basePath, WILDCARD, WILDCARD . XPINSTALL_EXTENSION));

$files = EMPTY_ARRAY;

foreach ($glob as $_value) {
  $_file = gfExplodePath(str_replace($basePath, EMPTY_STRING, $_value));
  $files[$_file[0]]['file'] = $_file[1];
  $files[$_file[0]]['shadow'] = gfReadFile(dirname($_value) . SLASH . 'shadow.json');
}

$rv = $files;

gfContent('phpEncode', $rv);

// ====================================================================================================================

?>