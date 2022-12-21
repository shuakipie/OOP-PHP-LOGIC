<?php

    // contruction and destruction
    // contruct enable to create and object


    class Person{

        public $name;
        public  $age;
        public $height;
       
        // create constructor  - with no parameters
        function __construct(){
            $this->name = "SHuakipie";
            $this->age = 35;
            $this->height = 180;

        }

        function describePerson(){
            echo "$this->name is $this->age years old and he is $this->height cm tall";

        }

       
    }

    $shuakipie = new Person();
    $shuakipie->describePerson();



 

        // properties


        // methods


  

    // object

    // access methods and properties

?>