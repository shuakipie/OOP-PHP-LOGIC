<?php

    class Salary{


        // properties

        // methods
        function calculateSalary($name, $daysoff){
            $monthSalary = (23 - $daysoff)*8*5;
            echo "The salary of the employee $name this month is $monthSalary euros!";

        }


    }
     $JuneSalary = new Salary();
     $JuneSalary->calculateSalary("ShuakiPie",10);

    // Object

?>