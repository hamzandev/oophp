<?php

abstract class Kendaraan {
    
    private $merk, $warna, $dealer;
    
    // Settet & getter untuk properti diatas
    
    // setter
    public function setProperti(array $props)
    {
        $this->merk = $props[0];
        $this->warna = $props[1];
        $this->dealer = $props[2];
    }
    
    // getter
    public function getMerk()
    {
        return $this->merk;
    }
    
    public function getWarna()
    {
        return $this->warna;
    }
    
    public function getDealer()
    {
        return $this->dealer;
    }
    
    
    abstract public function getInfoKenadraan();
    
    public function jalankan()
    {
        return "{$this->merk} dijalankan...";
    }
    
    public function tambahKecepatan()
    {
        return 'Kecepatan bertambah...';
    }
    
    public function kurangiKecepatan()
    {
        return "Be careful! kecepatan dikurangi...";
    }
    
    public function berhenti()
    {
        return "{$this->merk} berhenti.";
    }
    
}


class Mobil extends Kendaraan {
    
    public function __construct(String $merk, String $warna, String $dealer = 'Owner' ) {
        $this->setProperti([$merk, $warna, $dealer]);
    }
    
    public function getInfoKenadraan()
    {
        echo "Info Kendaraan : <br>";
        echo "- Merk : {$this->getMerk()} <br>";
        echo "- Warna : {$this->getWarna()} <br>";
        echo "- Dealer : {$this->getDealer()} <br>";
    }
}


$avanza = new Mobil('Avanza', 'Silver', 'Daihatsu');
$avanza->getInfoKenadraan();

echo "<br>";

$mercedes = new Mobil('Mercedes Benz', 'Hitam', 'Mercedes');
$mercedes->getInfoKenadraan();

echo "<br>";

$owii = new Mobil('Pak Owii Poenya', 'Sky blue');
$owii->getInfoKenadraan();