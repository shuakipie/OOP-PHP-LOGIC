<?php

    class Animal {

        public $numberofEyes;

        function __construct($numberofEyes){

            $this->numberofEyes = $numberofEyes;
         

        }

        function showAnimalInfo(){
            echo "Most Animals have $this->numberofEyes Eyes.";

        }

    }


    class Cat extends Animal{ 
        

        function __construct($animal){
            
            $this->numberofEyes = $animal->numberofEyes;
          
            
        }


    }

    $mynewanimal = new Animal(20);
    $cat = new Cat($mynewanimal);
    $cat->showAnimalInfo();





?>