<?php

    class Animal5{

        public $name = "Sparky";

        protected function getName(){

            return " The Animals name is : $this->name ";
        }

    }
    class Dog extends Animal5{

        public function getDogName(){

            echo $this->getName();


        }

       
    }



    // object

    $dog1 = new Dog();
    $dog1->getDogName();

?>

