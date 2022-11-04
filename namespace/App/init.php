<?php

// standard php libary (spl)
spl_autoload_register(function($className) {
    $className = explode('\\', $className);
    $className = end($className);
    require_once __DIR__ . "/Kendaraan/". $className .".php";
}, );

spl_autoload_register(function($className) {
    $className = explode('\\', $className);
    $className = end($className);
    require_once __DIR__ . "/Service/". $className .".php";
}, );