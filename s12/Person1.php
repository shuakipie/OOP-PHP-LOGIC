<?php

    class Person1{

        // overriden method
        public function whatAmI(){

            echo "I am just a person";

        }


    }

    class Student extends Person1{

        // overriding method replaces the method.
        public function whatamI(){

        echo "I am just a student";

        }


    }

    // Object

    $student1 = new Student();
    $student1->whatAmI();
?> 