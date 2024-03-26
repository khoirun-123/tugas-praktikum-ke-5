<?php

class Manusia {
    public $nama;
    public $umur;
   
    public function setNama($nama){
        $this->nama = $nama;
    }

    public function setUmur($umur){
        $this->umur = $umur;
    }

    public function getInfo(){
        return "Nama: " . $this->nama . ", umur: " . $this->umur;
    }
}

// Membuat objek nya

$khoirunn = new Manusia();
$khoirunn->setNama("khoirunnas");
$khoirunn->setUmur("18");

$riko = new Manusia();
$riko->setNama("Riko simanjuntak");
$riko->setUmur("30");

echo $khoirunn->getInfo();

echo "<br>";

echo $riko->getInfo();