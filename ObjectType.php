<?php

class Orang {
    private $name, $age, $gender;
    
    public function __construct(String $name = 'Nameless', int $age = 0, String $gender = 'Not set') {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    
    public function getDataDiri()
    {
        echo "$this->name | $this->age tahun ($this->gender)";
    }
}

class CetakInfo {
    public function __construct(Orang $orang) {
       return $orang->getDataDiri();
    }
}



$orang1 = new Orang(name: 'Hamzan Wahyudi', age: 18, gender: 'Male');
// $orang1->getDataDiri();

$cetakInfo = new CetakInfo($orang1);