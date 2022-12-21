<?php
    // static methods can access the property and method without creating the object or initialize
    class Apple{

       static public $color = "Red";

       static public function Hastaste(){

            echo "Apples has greate taste! ";
        }

    }

    // $truck1 = new Truck();
    // echo $truck1->brand;
    // echo "<br>";
    // $truck1->Accelerate();

    echo Apple::$color;
    echo "<br>";
    Apple::Hastaste();
?>
