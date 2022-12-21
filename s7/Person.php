<?php

    class Person{

        // property
        public $name = "Shuakipie";
        
        // $this to refer the instance of the class
        // methods

        function printName(){
            echo "My name is $this->name";


        }
 
    }

    // object
    $person1 = new Person();
    $person1->printName();

?>