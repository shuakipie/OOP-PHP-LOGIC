<?php
    // desctructor

    class Message{

        // property

        // contructor
        function __construct(){

            echo "This is a new message <br><br>";

        }

        // create a destructor

        function __destruct(){

            echo "The message was deleted";
        }

        // methods
    }  
 
    // object

    $sms = new Message();
?>