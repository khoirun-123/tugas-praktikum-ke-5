<?php

class Mahasiswa {
    public $nama;
    public $tinggiBadan;
    public $beratBadan;
    public $umur;

    public function __construct($nama, $tinggiBadan, $beratBadan, $umur) {
        $this->nama = $nama;
        $this->tinggiBadan = $tinggiBadan;
        $this->beratBadan = $beratBadan;
        $this->umur = $umur;
}
    

    public function getNama(){
        return $this->nama;
    }

    public function getTinggi(){
        return $this->tinggiBadan;
    }

    public function getBb(){
        return $this->beratBadan;
    }

    public function getUmur(){
        return $this->umur;
    }


}