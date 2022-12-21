<?php

    class Phone{

        // properties
        public $brand;
        
        // methods
        function sendMessage(){
            return "Write your message and press the button!";

        }


    }
    //OBJECT-1
    // Create the Object / instance of that class
    $phone1 = new Phone();
     
    // access on properties
    echo $phone1->brand = "Samsung";
    echo "<br>";
        // access on methods
    echo $phone1->sendMessage();
    echo "<br>";

    //OBJECT-2
    //Create the object
    $phone2 = new Phone();
    
    // access on properties
   echo $phone2->brand = "Nokia";
   echo "<br>";

    //access on properties
    echo $phone2->sendMessage();

  



?>