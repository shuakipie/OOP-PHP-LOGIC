<?php


    class School{

        public $schoolname;
        public $schoolstep;

        function __construct($schoolname, $schoolstep){

            $this->schoolname = $schoolname;
            $this->schoolstep = $schoolstep;


        }

        public function showSchoolInfo(){

            echo "$this->schoolname <br>";
            echo "$this->schoolstep <br>";
        

        }


    }

    class Student extends School{

        public $studentname;
        public $studentage;

        function __construct($studentname, $studentage, $school){

            $this->studentname = $studentname;
            $this->studentage = $studentage;

            $this->schoolname = $school->schoolname;
            $this->schoolstep =$school->schoolstep;

        }

        function showStudentInfo(){

            echo "$this->studentname <br>";
            echo "$this->studentage <br>";
            echo "$this->schoolstep <br>";
            echo "$this->schoolname <br>";
        }

    }

    // object

    $myschool = new School("ACT", "secondary");
    $student1 = new Student("ShuakiPie", 35 , $myschool);
    $student1->showStudentInfo();

?>