<?php
    // static methods
    class Truck{

       static public $brand = "Volvo";

       static public function Accelerate(){

            echo "Now I am increasing Speed";

        }

    }

    // $truck1 = new Truck();
    // echo $truck1->brand;
    // echo "<br>";
    // $truck1->Accelerate();

    echo Truck::$brand;
    echo "<br>";
    Truck::Accelerate();
?>
