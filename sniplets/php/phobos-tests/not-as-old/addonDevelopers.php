<?php

// == | Main | ========================================================================================================

gfImportModules('aviary', 'database');

$basePath = gfBuildPath(ROOT_PATH, DATASTORE_RELPATH, 'addons');
$glob = glob(gfBuildPath($basePath, WILDCARD, WILDCARD . XPINSTALL_EXTENSION));

$users = EMPTY_ARRAY;

foreach ($glob as $_value) {
  $users[] = gfReadFile(dirname($_value) . SLASH . 'shadow.json')['owner'];
}

$users = array_values(array_unique($users));

$uManifests = EMPTY_ARRAY;

foreach ($users as $_value) {
  $gmDatabase->changeDB('phoebus_live');
  $_user = $gmDatabase->get('row', "SELECT * FROM `user` WHERE `username` = ?s", $_value);

  if (in_array($_user['username'], ['mattatobin', 'moonchild', 'addons-team', 'justoff', 'riiis'])) {
    continue;
  }

  $_user['epoch'] = json_decode($_user['extraData'], true)['regEpoch'];
  $_user['level'] = 3;
  $_user['verified'] = true;
  $_user['token'] = gfHexString();
  unset($_user['active'], $_user['extraData'], $_user['addons']);
/*
  $gmDatabase->changeDB('phoebus_dev');
  $gmDatabase->query("INSERT INTO `users` SET ?u", $_user);
*/
  unset($_user['password'], $_user['email'], $_user['token']);
  $uManifests[] = $_user;
}

$rv = $uManifests;

gfContent('phpEncode', $rv);

// ====================================================================================================================

?>