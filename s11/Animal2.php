<?php

    //protected Modifier

    class Animal2{


        public $name = "Sparky";

    }

    class Dog extends Animal2{

        
    }

    $animals = new Animal2();
    echo $animals->name;

    // $dog1 = new Dog();

    // echo $dog1->name;

?>