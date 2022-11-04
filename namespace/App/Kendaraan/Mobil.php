<?php


class Mobil extends Kendaraan implements CetakInfo{
    
    public function __construct(String $merk, String $warna, String $dealer = 'Owner' ) {
        $this->setProperti([$merk, $warna, $dealer]);
    }
    
    public function cetakInfoKendaraan()
    {
        echo "Info Kendaraan : <br>";
        echo "- Merk : {$this->getMerk()} <br>";
        echo "- Warna : {$this->getWarna()} <br>";
        echo "- Dealer : {$this->getDealer()} <br>";
    }
}