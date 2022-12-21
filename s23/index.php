<?php
    //autoloading
    spl_autoload_register( function($classname){
        require_once ("$classname.php");


    });
    // require_once("Class1.php");
    // require_once("Class2.php");

    $cl1 = new Class1();
    $cl1->showInfo();

    echo "<br>";

    $cl2 = new Class2();
    $cl2->showInfo();


?>