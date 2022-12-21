<?php

    class Name{

        //property
        public $name ="";
        //construct
        function __construct($name){

            $this->name = $name;
            echo "My Name is $this->name <br> <br>";

        }

        //desctruct

        function __destruct(){
            $empty = $this->name = "";
            echo "delete my name:" . $empty;

            


        }



    }
    // object

    $name = new Name("ShuakiPie");

?>