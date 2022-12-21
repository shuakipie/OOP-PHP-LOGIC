<?php

    // Chaining Methods
    class Greeting{

        // methods

        function hello(){
            echo "Hello neighbor";
            return $this;

        }

        function goodbye(){
          
        
            echo "<br>";
            echo "I got to go now! GoodBye";
        }

    }

    // object

    $greeting = new Greeting();
    $greeting->hello()->goodbye();
?>