<?php

// == | Main | ========================================================================================================

gfImportModules('addons', 'content', 'database');

$addon = $gmDatabase->get('all', "SELECT * FROM `xpinstall` WHERE `addonID` = ?s", 'aboutconfigbutton@wolfbeast.com');

$rv = $gmAddons->processXPI($addon);

gfContent(null, $rv);

// ====================================================================================================================

?>