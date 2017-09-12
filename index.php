<?php

spl_autoload_register('loadclass');
$app = new Application;
$app->run();

function loadclass($name)
{
    require "classes/$name.php";
}