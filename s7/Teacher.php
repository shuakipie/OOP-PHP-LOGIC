<?php

    // Getters and Setters

    class Teacher{

        // properties
        public $name = "";

        // set method or setter
         function setName($teacher_name){
            $this->name = $teacher_name;

         }
        // methods
        // set method or getter
        function getName(){
            echo "My Teacher name is: " . $this->name;

        }

    }


    // object
    $teacher = new Teacher();

    // access properties & methods
    $teacher->setName("ShuakiPie");
    $teacher->getName();
    

?>