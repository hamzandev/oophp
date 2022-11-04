<?php

class Person {
    private $nama, $gender, $umur;
    
    public function __construct($nama = 'no name', $gender = 'not gender set', $umur = 0) {
        $this->nama = $nama;
        $this->gender = $gender;
        $this->umur = $umur;
    }
    
    public function sayHallo(){
        echo 'Halloo I am '.$this->nama.', i am a '.$this->gender.', and i am '.$this->umur.' years old';
    }
    
}