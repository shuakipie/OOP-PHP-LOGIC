<?php

    class Dice{
        // parameters

        private $min = 1;
        private $max = 6;

        // method
        public function roletoDice(){

            echo rand($this->min, $this->max);
        }

    }

$roll = new Dice();
$roll->roletoDice();

?>