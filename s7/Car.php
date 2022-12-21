<?php

    // Combination on how to access on properties and methods inside the class with $this keyword


    class Car{

        // properties
        public $color = "Red";
        public $brand = "Mitsubishi";
        // methods
        // get the properties insdie method-1
        function method1(){
            return "This $this->color $this->brand is fast";

        }
        // get Method-1 inside Method2
        function method2(){
            echo $this->method1();

        }

    }

    $car = new Car();
    $car->method2();
?>