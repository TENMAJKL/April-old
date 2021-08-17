<?php

require_once __DIR__."/../../app/data/DataManager.php";
require_once __DIR__.'/../../app/helpers/config.php';

/**
 *
 * Services migration
 *
 * Creates file status.tree in data folder
 *
 * */
$manager = new DataManager("services");
$manager->create();
$manager->set([]);


?>
