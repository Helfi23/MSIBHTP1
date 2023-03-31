<?php
require_once "./Abstrack.php";
class Segitiga extends Bentuk2D{
    public $alas;
    public $tinggi;
    public $sisia;

    public function __construct($alas,$tinggi,$sisia)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisia = $sisia;
    }
    public function namaBidang(){
        $segitiga = 'Segitiga Sama Kaki';
        return $segitiga;
    }
    public function luasBidang(){
        $luas = 1/2 * $this->alas * $this->tinggi;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = (2*$this->sisia) + $this->alas;
        return $keliling;
    }
}


?>