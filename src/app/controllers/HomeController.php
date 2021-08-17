<?php


function index()
{
    $services = Service::all();
    return view("services", compact("services"));
}

?>
