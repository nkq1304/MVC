<?php


session_start(); //load only one page

require "../app/core/init.php";

$app = new App;
$app->loadController();