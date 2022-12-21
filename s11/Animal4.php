<?php


    class Animal4{

        public $name = "Sparky";

        public function getName(){

            return "The Animals name is $this->name";

        }
 
    }

    class Dog extends Animal4{


    }


    // object
    $dog1 = new Dog();
    echo $dog1->getName();
?>