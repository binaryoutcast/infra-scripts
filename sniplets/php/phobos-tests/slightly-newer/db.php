<?php

// == | Main | ========================================================================================================

gfImportModules('database');

$rv = $gmDatabase->parse("?s ?i ?u", true, 1, ['beer' => true]);

gfContent(null, $rv);

// ====================================================================================================================

?>