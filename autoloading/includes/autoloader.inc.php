<?php

spl_autoload_register(myAutoLoader);

function myAutoLoader($className) {
    $path = "classes/";
    $extension = ".class.php";
    $fullPath = $path . $className . $extension;

//error handler
    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}