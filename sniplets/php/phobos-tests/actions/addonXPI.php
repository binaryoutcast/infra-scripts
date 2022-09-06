<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

gfImportModules('aviary', 'database');

$basePath = gfBuildPath(ROOT_PATH, DATASTORE_RELPATH, 'addons');
$glob = glob(gfBuildPath($basePath, WILDCARD, WILDCARD . XPINSTALL_EXTENSION));

$manifests = EMPTY_ARRAY;

const addonManifest = array(
  'id'                => null,
  'slug'              => null,
  'enabled'           => true,
  'reviewed'          => true,
  'blocked'           => false,
  'userDisabled'      => false,
  'hasIcon'           => false,
  'hasPreview'        => false,
  'owner'             => 3,
  'type'              => 2,
  'release'           => 0,
  'beta'              => null,
  'targetApplication' => 0,
  'name'              => null,
  'description'       => null,
  'category'          => 0,
  'tags'              => null,
  'addonURL'          => null,
  'homepageURL'       => null,
  'repositoryURL'     => null,
  'supportURL'        => null,
  'supportEmail'      => null,
  'contentType'       => 'phoebus',
  'content'           => null,
);

const xpiManifest = array(
  'addonID'           => null,
  'enabled'           => true,
  'reviewed'          => true,
  'blocked'           => false,
  'busted'            => false,
  'targetApplication' => 0,
  'filename'          => null,
  'version'           => null,
  'epoch'             => 0,
  'hash'              => null,
  'changelog'         => null,
  'license'           => ['slug' => null, 'url' => null, 'content' => null],
  'installManifest'   => null,
);

foreach ($glob as $_value) {
  $_manifest = gfReadFile(dirname($_value) . SLASH . 'shadow.json');

  if (!$_manifest) {
    continue;
  }

  $_manifest['xpinstall'] = $gmAviary->parseInstallManifest($_manifest['xpinstall']);

  $_addon = addonManifest;
  $_xpi = xpiManifest;

  $_owner = $gmDatabase->get('col', "SELECT `id` FROM `users` WHERE `username` = ?s", $_manifest['owner']);
  $_targetApplication = gfGetClientBits($_manifest['xpinstall']['targetApplication']);
  $_license = ['slug' => $_manifest['license'] ?? null,
               'url' => $_manifest['licenseURL'] ?? null,
               'content' => $_manifest['licenseText'] ?? null];


  $_addon['id'] = $_manifest['xpinstall']['id'];
  $_addon['slug'] = $_manifest['slug'];
  $_addon['owner'] = (int)$_owner[0];
  $_addon['targetApplication'] = $_targetApplication;
  $_addon['name'] = $_manifest['xpinstall']['name']['en-US'];
  $_addon['description'] = $_manifest['xpinstall']['description']['en-US'];
  $_addon['category'] = CATEGORIES[$_manifest['category']]['bit'];
  $_addon['tags'] = $_manifest['tags']  ?? EMPTY_STRING;
  $_addon['addonURL'] = gfBuildPath('addons', $_manifest['slug']);
  $_addon['homepageURL'] = $_manifest['homepageURL'] ?? EMPTY_STRING;
  $_addon['repositoryURL'] = $_manifest['repository'] ?? EMPTY_STRING;
  $_addon['supportURL'] = $_manifest['supportURL'] ?? EMPTY_STRING;
  $_addon['supportEmail'] = $_manifest['supportEmail'] ?? EMPTY_STRING;
  $_addon['content'] = $_manifest['content'] ?? EMPTY_STRING;

  $_xpi['addonID'] = $_manifest['xpinstall']['id'];
  $_xpi['targetApplication'] = $_targetApplication;
  $_xpi['filename'] = basename($_value);
  $_xpi['version'] = $_manifest['xpinstall']['version'];
  $_xpi['epoch'] = filemtime($_value);
  $_xpi['hash'] = 'sha256' . COLON . hash_file('sha256', $_value);
  $_xpi['license'] = json_encode($_license, JSON_STORAGE_FLAGS);
  $_xpi['installManifest'] = json_encode($_manifest['xpinstall'], JSON_STORAGE_FLAGS);
/*
  $gmDatabase->query("INSERT INTO `addons` SET ?u", $_addon);
  $gmDatabase->query("INSERT INTO `xpinstall` SET ?u", $_xpi);
*/
  $manifests[$_manifest['slug']]['addons'] = $_addon;
  $manifests[$_manifest['slug']]['xpinstall'] = $_xpi;
}

$rv = $manifests;

gfContent('phpEncode', $rv);

// ====================================================================================================================

?>