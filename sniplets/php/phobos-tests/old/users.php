<?php
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this
// file, You can obtain one at http://mozilla.org/MPL/2.0/.

// == | Main | ========================================================================================================

gfImportModules('database');

$users = $gmDatabase->get('all', "SELECT * FROM `users`");

foreach ($users as $_key => $_value) { 
  unset($users[$_key]['password'], $users[$_key]['token']);
  
  $users[$_key]['verified'] = (bool)$_value['verified'];
  $users[$_key]['restricted'] = (bool)$_value['restricted'];
  $users[$_key]['showEmail'] = (bool)$_value['showEmail'];
  $users[$_key]['hasAvatar'] = (bool)$_value['hasAvatar'];
  
  $users[$_key]['joined'] = gfDate('longUS', $_value['epoch']);
  $users[$_key]['levelType'] = USER_LEVELS[$_value['level']];
  $users[$_key]['levelName'] = USER_DISPLAYNAMES[$_value['level']];
}

gfContent(null, $users);

// ====================================================================================================================

?>