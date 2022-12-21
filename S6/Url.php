<?php

    class Url{

        
        // methods

        function openUrl($url){

            header("Location: $url");


        }


    }

        // object

        $url1 = new Url();
  
        // access methods
        $url1->openUrl("http://www.google.com");

    ?>