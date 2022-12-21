<?php
    // polymorphism

    interface Student{

        // method

        public function learnTheLesson();


    }
    class StudentA implements Student{

        function learnTheLesson(){

            echo " I learn the lesson by writing it down.";
        }
    }

    class StudentB implements Student{

        function learnTheLesson(){

            echo " I learn the lesson when i listen to it";
        }
    }

    class StudentC implements Student{

        function learnTheLesson(){

            echo " I learn the lesson when i just read it";
        }
    }

    $newstudentB = new StudentB();
    $newstudentB->learnTheLesson();
    



?>