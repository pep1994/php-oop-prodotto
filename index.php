<?php 

    // esempio magazzino ortrofrutticolo con varie referenze

    class Peach {
        protected $varieta;
        protected $calibro;
        protected $quantita;

        public function __construct($var, $cal, $kg)
        {
           $this -> varieta = $var;
           $this -> calibro = $cal;
           $this -> quantita = $kg;
           $this -> scartoMedio = 8 ;
        }

       protected function getBasketsNumber1kg(){
            return floor(($this -> quantita -= $this -> quantita * $this -> scartoMedio / 100) / 1);
        }

        public function print() {
            echo "La pesca di varietà " . $this -> varieta . " e di calibro " . $this -> calibro . ", è stoccata in magazzino per la quantità di " . $this -> quantita . "kg." . " Con la seguente partita, considerando lo scarto medio, è possibile realizzare " . $this -> getBasketsNumber1kg() . " cestini da 1kg" . "<br></br>";
        }

    }


    class Apricot extends Peach {

        public function __construct($var, $cal, $kg){
            parent::__construct($var, $cal, $kg);
            $this -> scartoMedio = 12;
        }

        protected function getBasketsNumber500g(){
            return floor(($this -> quantita -= $this -> quantita * $this -> scartoMedio / 100) / 0.5);
        }

        public function print() {
            echo "L'albicocca di varietà " . $this -> varieta . " e di calibro " . $this -> calibro . ", è stoccata in magazzino per la quantità di " . $this -> quantita . "kg." . " Con la seguente partita, considerando lo scarto medio, è possibile realizzare " . $this -> getBasketsNumber1kg() . " cestini da 1kg, oppure " . $this -> getBasketsNumber500g() . " cestini da 500g" . "<br></br>";
        }

    }

    class Plum extends Apricot {

        public function __construct($var, $cal, $kg){
            parent::__construct($var, $cal, $kg);
            $this -> scartoMedio = 5 ;
        }

        protected function getBasketsNumber750g(){
            return floor(($this -> quantita -= $this -> quantita * $this -> scartoMedio / 100) / 0.75);
        }

        public function print() {
            echo "La susina di varietà " . $this -> varieta . " e di calibro " . $this -> calibro . ", è stoccata in magazzino per la quantità di " . $this -> quantita . "kg." . " Con la seguente partita, considerando lo scarto medio, è possibile realizzare " . $this -> getBasketsNumber1kg() . " cestini da 1kg, oppure " . $this -> getBasketsNumber750g() . " cestini da 750g" . "<br></br>";
        }
    }

    $peach_1 = new Peach('Big Top', 'A', 230);

    $peach_1 -> print();

    $apricot_1 = new Apricot('Lady Cot', '50/55', 190);

    $apricot_1 -> print();

    $apricot_2 = new Apricot('Faralia', '55/60', 436);

    $peach_2 = new Peach('Stark Red Gold', 'B', 348);

    $peach_2 -> print();

    $apricot_2 -> print();

    $plum_1 = new Plum ('Angeleno', '45/50', 1364);

    $plum_2 = new Plum ('Ruby Crunch', '60+', 385);

    $plum_2 -> print();
    
    $plum_1 -> print();

    $peach_3 = new Peach ('Dulciva', 'AA', 3297);

    $peach_3 -> print();

