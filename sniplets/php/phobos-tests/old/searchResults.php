<?php

// == | Main | ========================================================================================================

gfImportModules('aviary','addons');

$slug = 'abprime';
$version = '3.1.7770';
$uid = 1;

$xpi = gfBuildPath(ROOT_PATH, DOTDOT, DOTDOT, 'storage', 'legacy', 'addons', $slug, $slug . DASH . $version . '.xpi');

$installManifest = gfReadFileFromArchive($xpi, RDF_INSTALL_MANIFEST);
$installManifest = $gmAviary->createInstallManifest($installManifest);
$installManifest = $gmAviary->parseInstallManifest($installManifest);

$installManifest['slug'] = $slug;
$installManifest['hasIcon'] = true;
$installManifest['epoch'] = time();
$installManifest['hash'] = 'sha256:null';
$installManifest['size'] = '1048576';
$installManifest['creatorURL'] = gfBuildURL('link', ['id' => $uid], 'profile');
$installManifest['downloadURL'] = gfBuildURL('link', ['component' => 'download',
                                                      'id' => $installManifest['id'],
                                                      'version' => 'latest']);
$installManifest['addonURL'] = gfBuildURL('link', null, 'addon', 'cutebuttons');
$installManifest['iconURL'] = gfBuildURL('link', null,
                                            DATASTORE_RELPATH, 'addons',
                                            ($installManifest['hasIcon'] ? $installManifest['slug'] : 'default'),
                                            'icon.png');

$rv = $gmAviary->createSearchResults([$installManifest], true);

gfContent('phpEncode', $rv);

// ====================================================================================================================

?>