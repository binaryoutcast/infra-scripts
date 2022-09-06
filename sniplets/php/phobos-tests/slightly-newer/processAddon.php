<?php

// == | Main | ========================================================================================================

gfImportModules('addons', 'content', 'database');

$addon = $gmDatabase->get('all', "SELECT * FROM `addons` WHERE `slug` = ?s", 'aboutconfigbutton');

$rv = $gmAddons->processAddon($addon);

gfContent(null, $rv);

// ====================================================================================================================

?>