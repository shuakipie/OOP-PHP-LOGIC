<?php

    abstract class Airplane{

        // Abstact classes can have property too. While Interface can not
        public $numberofWings = 4;
        abstract public function canFly();

        public function canTakeOff(){

            echo "All airplanes can talk Off <br>";

        }
        public function canLand(){


            echo " ALL airplanes can land <br>";
        }

        
    }

    class Fighterplane extends Airplane{

        public function canFly(){

            echo "Fighter Plane are really fast <br>";
        }

    }

    $newAirplane = new Fighterplane();
    echo $newAirplane->numberofWings;
    echo "<br>";
    $newAirplane->canFly();
    $newAirplane->canTakeOff();
    $newAirplane->canLand();

?>