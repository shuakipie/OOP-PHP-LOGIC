<?php

    // constructor with property

    class Student{

        // property

        public $name;
        public $grade;

        // constructor with parameters
        function __construct($name, $grade){
            $this->name = $name;
            $this->grade = $grade;
            

        }

        // method

        function printStudentInfo(){

            return "$this->name graduated high school with $this->grade";

        }


    

    }

    // objeact

    $shuakipie = new Student("Mike", "A");
  echo  $shuakipie->printStudentInfo();
   

?>