<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

$rv = array(
  'link' => gfBuildURL('link', null, 'addon', 'abprime'),
  'linkWithQuery' => gfBuildURL('link', ['celery' => 'overcoat'], 'addon', 'abprime'),
  'url' => gfBuildURL('https://binaryoutcast.com', null, 'projects', 'abprime'),
  'urlWithQuery' => gfBuildURL('https://binaryoutcast.com', ['brats' => 'beer', 'soda' => 'pepsi black'], 'addon', 'abprime'),
);

gfContent(null, $rv);

// ====================================================================================================================

?>