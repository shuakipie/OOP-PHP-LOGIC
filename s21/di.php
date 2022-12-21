<?php

    // depedency Injection

    class Person{

        // property

        public $name1 = "ShuakiPie";

        // methods

        public function getName(){

            return $this->name1;

        }

    } 

    class Dog{

        public $name2;

        function __construct($person1){

            $this->name2 = $person1->name1;

        }

    }

    $person1 = new Person();
    $dog1 = new Dog($person1);
    echo $dog1->name2;



?> 