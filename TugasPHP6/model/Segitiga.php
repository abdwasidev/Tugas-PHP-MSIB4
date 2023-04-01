<?php

    require_once 'BangunDatar.php';
    
    class Segitiga extends BangunDatar {
        public $alas;
        public $tinggi;

        public function __construct($alas, $tinggi){
            $this->alas = $alas;
            $this->tinggi = $tinggi;
        }

        public function namaBidang(){
            return "Segitiga Sama Sisi";
        }

        public function luasBidang(){
            $luas = ($this->alas * $this->tinggi) / 2;
            return $luas;
        }
        
        public function kelilingBidang(){
            $keliling = 2 * ($this->alas + $this->tinggi);
            return $keliling;
        }
    }

?>