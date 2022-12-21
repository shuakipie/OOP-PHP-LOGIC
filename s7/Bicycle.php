<?php

    // how to access properties inside the class with $this keyword
    class Bicycle{

        // properties
        public $type = "Mountain";
        public $color = "Green";

        // methods
        function giveBicycleDetials(){
            echo "This $this->type bicycle has a $this->color color.";

        }
    }

    // object
    $bicycle = new Bicycle();
    // access methods and properties
    $bicycle->giveBicycleDetials();

?>