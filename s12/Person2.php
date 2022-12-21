<?php

    class Person2{

        // property
        public $name = "SHuakipie";

        // methods overidden method
        public function ShowName(){

            echo "My Name is $this->name";
        }

    }


    class Student extends Person2{

        //property
        

        // methods overriding rpelace parent class
        public function ShowName(){

            echo "My Name is $this->name " . "but my class called me Alex";
        }



    }

    // object

    $student1 = new Student();
    $student1->ShowName();
?>