<?php

    // Animal is called parent class or super class or base class
   
   // first class with parent
    class Animal{

        // property
        public $name;
        public $weight;

        // methods
        function sleep(){
            echo "I am sleeping now <br>";

        }
    }

        // Dog class is called child class or sub class or derived class
       // second class with child
        class Dog extends Animal {

            //properties

            // methods
            public function weight(){
                echo "$this->name weighs $this->weight kg.";

            }





        }
   
    // $newAnimal = new Animal();
    // echo $newAnimal->name = "Spark";
    // echo $newAnimal->weight = 120;
    // $newAnimal-> sleep();

    $dog1 = new Dog();
    echo $dog1->name = " Spark ";
    echo "<br>";
    echo $dog1->weight = 7;
    $dog1-> sleep();
    $dog1->weight();
    
?>