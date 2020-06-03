<?php 

    // esempio magazzino ortrofrutticolo con varie referenze

    class Peach {
        private $varieta;
        private $calibro;
        private $quantita;

        public function __construct($var, $cal, $kg)
        {
           $this -> varieta = $var;
           $this -> calibro = $cal;
           $this -> quantita = $kg;
        }

        public function print() {
            echo "La pesca di varietà " . $this -> varieta . " e di calibro " . $this -> calibro . ", è stoccata in magazzino per la quantità di " . $this -> quantita . "kg";
        }

    }

    $peach_1 = new Peach('Big Top', 'A', 230);

     $peach_1 -> print();