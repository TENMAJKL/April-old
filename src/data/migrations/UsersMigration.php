<?php

require_once __DIR__.'/../../app/data/DataManager.php';
require_once __DIR__.'/../../app/helpers/config.php';

/**
 *
 * users migration
 *
 * Creates file users.tree in data folder
 *
 * */
$manager = new DataManager('users');
$manager->create();
$manager->set([
    'root' => [
        'password' => 'xNVXYA91S8$fd8463b61d80fb13e1bf16c154600dcd339391e0aa350ed461fa2abe453ed5b4',
        'created_at' => date("d.m.Y H:i:s"),
        'active' => 1
    ]
]);


?>

