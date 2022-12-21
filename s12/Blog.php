<?php

    class Block{

        // property
        public $address;
        function __construct($address){
            $this->address = $address;
        }   

        // method
        public function printAddress(){

            echo " This is block is at " . $this->address;

        }

    }

    class Apartment extends Block{

        function __construct($block){ 

            $this->address = $block->address;

 
        }

    }

 $myblock = new Block("42 Sibonga Cebu St.");
 $newAppartment = new Apartment($myblock); 
 $newAppartment->printAddress();

?>