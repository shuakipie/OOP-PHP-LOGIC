<?php
 // self:: used when belonging into the class
    class Fullname{
        // property
        static public $fullname;
        static public function sayMyName($myfirstName, $myLastName){
            self::$fullname = "My fullname is " . $myfirstName . " " . $myLastName;

        }

    }

    Fullname::sayMyName("ShuakiPie", "Dingcong");
    echo Fullname::$fullname;
?>