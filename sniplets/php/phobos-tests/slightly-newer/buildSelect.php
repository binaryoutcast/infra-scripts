<?php

// == | Main | ========================================================================================================

gfImportModules('database', 'addons');

$select = ['id', 'slug', 'enabled', 'reviewed', 'blocked', 'type', 'owner', 'release', 'beta', 'targetClient'];
$rv = $gmAddons->buildSelect($select);

gfContent(null, $rv);

// ====================================================================================================================

?>