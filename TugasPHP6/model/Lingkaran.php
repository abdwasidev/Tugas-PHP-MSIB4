<?php

    require_once 'BangunDatar.php';
    
    class Lingkaran extends BangunDatar {
        public $jari2;

        public function __construct($jari2){
            $this->jari2 = $jari2;
        }

        public function namaBidang(){
            return "Lingkaran";
        }

        public function luasBidang(){
            $phi = ($this->jari2 % 7 == 0) ? (22/7) : 3.14;
            $luas = $phi * $this->jari2 * $this->jari2;
            return round($luas, 2);
        }
        
        public function kelilingBidang(){
            $phi = ($this->jari2 % 7 == 0) ? (22/7) : 3.14;
            $keliling = $phi * ($this->jari2 * 2);
            return round($keliling, 2);
        }
    }

?>