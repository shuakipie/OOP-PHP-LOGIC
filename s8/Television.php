<?php

    class Television{

        public $brand;
        public $dimensions;

        function __construct(){

            $this->brand = "Samsung";
            $this->dimensions = 50;

        }
        // method
        function printInfo(){

            return "This is a $this->dimensions inches $this->brand televisions.";

        }

    }

    // object

    $samsung = new Television();
  echo  $samsung->printInfo();

?>