<?php

    // Chaining Methods

    class Cleaner{

        // property
        public $name;

        //methods

        function wipeTheFloor(){
            echo " Please first wipe the floor";
            $this->name = "Alex";
            return $this;
        }

        function mopTheFloor(){

            echo "and then mop it" . $this->name . " !";
        }


    }

    $cleaner = new Cleaner();
    $cleaner->wipeTheFloor()->mopTheFloor();

?>