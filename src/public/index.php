<?php

/**
 *
 * Lemon Framework
 *
 * This file takes all requests and returns valid response using the booter.php
 *
 *
 */

require __DIR__ . "/../vendor/autoload.php";

$app = require __DIR__ . "/../booter.php";

define("PROJECT_DIR",  $app->booter_dir);

$app->boot();


?>
