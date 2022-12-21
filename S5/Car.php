<?php 

    // create class
    class Car{

            // properties
            public $color = "Red";

            // methods
            function startEngine(){
                echo " This car can now start moving";

            }

        }

        // create an object of the Class on an instance of the Car class
        $car1 = new Car();


        //accessing the properties
        echo $car1->color;
        echo "<br>";

        // access the methods
        $car1->startEngine();


?>