<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

$targetApplications = array(
  '{86c18b42-e466-45a9-ae7a-9b95ba6f5640}',
  '{ec8030f7-c20a-464f-9b0e-13a3a9e97384}',
  'toolkit@mozilla.org',
  '{3550f703-e582-4d05-9a08-453d09bdfdc6}',
);

$rv = gfGetClientBits($targetApplications);

gfContent(null, [$targetApplications, str_pad(decbin($rv), 8, '0', STR_PAD_LEFT)]);

// ====================================================================================================================

?>