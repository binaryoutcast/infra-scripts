<?php

// == | Main | ========================================================================================================

gfImportModules('aviary', 'database');

$xpi = $gmDatabase->get('row', "SELECT `filename`, `hash`, `installManifest`
                                FROM `xpinstall`
                                WHERE `addonID` = 'inspector@mozilla.org' AND `version` = '3.1.7534.1-fxguid'");
$manifest = json_decode($xpi['installManifest'], true);
$manifest['updateHash'] = $xpi['hash'];
$manifest['updateLink'] = gfBuildURL(null, ['component' => 'download',
                                             'id' => $manifest['id'],
                                             'version' => $manifest['version']]);

$gmAviary->createUpdateManifest($manifest, true);

// ====================================================================================================================

?>