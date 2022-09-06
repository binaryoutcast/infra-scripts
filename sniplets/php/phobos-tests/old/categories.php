<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

$rv = ['extensionCats'        => gfGetCategoriesByType(XPINSTALL_TYPES['extension']),
       'themeCats'            => gfGetCategoriesByType(XPINSTALL_TYPES['theme']),
       'personaCats'          => gfGetCategoriesByType(XPINSTALL_TYPES['persona']),
       'invalidLangPackCats'  => gfGetCategoriesByType(XPINSTALL_TYPES['locale'])];

gfContent(null, $rv);

// ====================================================================================================================

?>