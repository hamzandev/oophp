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