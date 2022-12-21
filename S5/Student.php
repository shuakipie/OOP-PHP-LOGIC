<?php

    class Student{

        // properties
        public $name;
        public $class;

        // methods
        function canWrite(){
            echo "can Write with pen or pencil";

        }
          

       

    }

    // create object

    $student1 = new Student();
    
    // access properties
    $student1->name = "ShuakiPie";
    $student1->class = "A";
    echo "$student1->name is attending $student1->class class and ...";
    echo "<br> <br>";
    // access methods
    $student1->canwrite();
    echo "<br> <br>";

    // create object

    $student2 = new Student();
     // access properties
     $student2->name = "ShuakiPie2";
     $student2->class = "B";
     echo "$student2->name is attending $student2->class class and ...";
     echo "<br> <br>";
     // access methods
     $student2->canwrite();
     echo "<br> <br>";


   


?>