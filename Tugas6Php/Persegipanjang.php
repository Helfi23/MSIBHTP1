<?php
    require_once "./Abstrack.php";

    class Persegipanjang extends Bentuk2D{
        public $panjang;
        public $lebar;

        public function __construct($panjang,$lebar)
        {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }
        public function namaBidang(){
             $persegiPanjang = 'Persegi Panjang';
             return $persegiPanjang;
        }
        public function luasBidang()
        {
            $luas = $this->panjang * $this->lebar;
            return $luas;

        }
        public function kelilingBidang()
        {
            $keliling = (2*$this->panjang)+(2*$this->lebar);
            return $keliling;
        }
    }


?>