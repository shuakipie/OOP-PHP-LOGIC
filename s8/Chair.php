<?php

    // contructor with optional parameters

    class Chair{

        //property

        public $type;
        public $numberofLegs;

        // create a contructor with optional parameters

        function __construct($type = "", $numberofLegs = ""){

            $this->type= $type;
            $this->numberofLegs= $numberofLegs;


        }
        
        // method

        function describeChair(){

            echo "This chair $this->type has this number of $this->numberofLegs";
        }

    }

    // object
    $chair = new Chair("modern", 3);
    $chair->describeChair();
    echo "<br>";
    $chair2 = new Chair();
    $chair2->type = "moderno";
    $chair2->numberofLegs = 100;
    $chair2->describeChair();

?>