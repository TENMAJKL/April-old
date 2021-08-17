<?php

use Lemon\Http\Response;

function checkerController()
{
    check();
    Response::redirect("/");
}

?>
