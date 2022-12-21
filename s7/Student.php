<?php

        // COmbination on how to access properties & methods using $this classes

        class Student{

            // properties

            public $name = "Shuakipie";




            // methods
            function getName(){
                return $this->name;
            }

            function presentStudent(){
                echo $this->getName() . " is the best student in the school";

            }


        }

        // object

        $student = new Student();

        // access properties and methods
        $student->presentStudent();

?>