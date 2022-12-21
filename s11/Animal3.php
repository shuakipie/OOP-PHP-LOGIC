<?php

    class Animal3{

        //when we have protected access modifiers - the property or method can be access 
        //within the class and by classes derived for that class.

        // private can access only within the class
        
        // private $name = "Shuakipie";

        protected $name = "Shuakipie";
        //methods



    }

    class Dog extends Animal3{
        // methods
        public function getAnimalName(){
            return "The dog's name is $this->name";

        }
    }

    // object

    $dog1 = new Dog();

    echo $dog1->getAnimalName();
?>
