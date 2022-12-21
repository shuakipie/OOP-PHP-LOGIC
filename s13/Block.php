<?php

    class Block{

        public $address = "Poblacion Sibonga Cebu";

    }

    class Apartment extends Block{



    }

    // object

    $myAppartment = new Apartment();
    echo $myAppartment->address;

?>