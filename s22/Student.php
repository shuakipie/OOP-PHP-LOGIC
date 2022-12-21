<?php
    // traits
    trait University{

        function showUniversityGrade(){
            echo "Your universite grades ar not very well! <br>";
        }
     }

     trait School{

        function ShowSchoolGrade(){

            echo " Your School Grades are very Good! <br>";
        }

     }


    class Student{

         use University;
         use School;

         function getAllGrades(){
            $this->showUniversityGrade();
            $this->ShowSchoolGrade();

         }
    }

    // object
 $student1 = new Student();
 $student1->getAllGrades();

?>