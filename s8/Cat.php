<?php

    class Cat{

        // property
        public $color;
        public $weight;

        function __construct($color, $weight){

            $this->color = $color;
            $this->weight = $weight;

        }

        // method

        function describeCat(){
            echo "This cat $this->color $this->weight kg";

        }

    }

    // object

    $cat = new Cat("Red", 10);
    $cat->describeCat();



?>