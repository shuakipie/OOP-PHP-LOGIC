<?php

    abstract class Television{

        public $brand;

         public function __construct($brand){
            $this->brand = $brand;

         }

         abstract public function showInches($inches);

         
    }

    class Samsung extends Television{


         public function showInches($inches){

            echo "This $this->brand TV is $inches is inches";

         }

    }

    //instance or object

    $samsung = new Samsung("Samsung");
    $samsung->showInches(20);

 
?>