<?php

    class Car {
        public $name;
        private $color;
        protected $prix;
        

        public function afficher (){

            $this->name = "BMW";
            $this->color = "black";
            $this->prix = 500;
            return $this->name.$this->color.$this->prix;
        }
    }

    
    
    $dacia = new Car();
    echo $dacia->name;
    $dacia->name = "bMW";
    var_dump($dacia);
    
    $afficher = new Car();
    echo $afficher->afficher();