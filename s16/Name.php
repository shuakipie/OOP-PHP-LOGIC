<?php

    class Name{

        static public $name;
        static public function echoMyName($name){

            self::$name = $name;

        }

    }

    Name::echoMyName("ShuakiPie");
    echo Name::$name;

?>