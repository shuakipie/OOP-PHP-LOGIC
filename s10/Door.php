<?php

    class Door{

        // property

        // method

        public function open(){
            
          echo "I can open this door";
            
        }
        private function close(){

            echo "I can close this door";
        }
     
    
   }

    // object
    $door = new Door();
    $door->open();
    $door->close();
?>