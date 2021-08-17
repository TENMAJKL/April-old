<?php

use Lemon\Kernel\Application;

/**
 * Initializes whole application
 */
$app = new Application(__DIR__);

/**
 * Setting folders to load
 */
$app->load(
    "routes",
    "app",
    "events",
);

return $app;

?>
