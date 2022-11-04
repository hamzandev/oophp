<?php

// standard php libary (spl)
spl_autoload_register(function($className) {
    require_once __DIR__ . "/Kendaraan/". $className .".php";
}, );