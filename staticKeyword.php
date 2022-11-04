<?php

class Coba {
    public static $nama = 'No name';
    
    public function __construct(String $nama) {
        self::$nama = $nama;
    }
    
    public static function cetakNama()
    {
        return self::$nama;
    }
} 

$obj = new Coba(nama: "Hamzan Wahyudi");
echo Coba::$nama." Coding";