<?php
/*
 *
 * Lemonade project->web routes basic file
 *
 * */

use Lemon\Sessions\Session;
use Lemon\Sessions\Csrf;

Session::start();
Csrf::setToken();

// Basic web page
Route::get('/', "index");

Route::get("/check", "checkerController");

?>
