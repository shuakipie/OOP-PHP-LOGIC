<?php

    class Person{


        // properties
        public $age;
        public $height;
        public $name;
        
        // methods
        function greeting(){
            return "Hello all!";

        }

    }

    // Creating and Object of the Class or Instance of the Person Class
    $person1 = new Person();
    // access the properties and assign some values
    echo $person1->age = 25;
    echo "<br>";
    echo $person1->height = 185;
    echo "<br>";
    echo $person1->name= "ShuakiPie";
    echo "<br>";

    // access the methods
    echo $person1->greeting();


?>