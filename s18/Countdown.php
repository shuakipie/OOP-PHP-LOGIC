<?php
// Data encapsulation
    class Countdown{
        // property
        // private 
        private $maxDuration = 10;

        public function startCountdownFromTenTo($time){

           for ($duration = 10; $duration > $time; $duration--){

            sleep(1);   
            $this->maxDuration = $this->maxDuration -1;
            echo $this->maxDuration . " <br> ";


            
           }

        }

    }

    $timer1 = new Countdown();
    $timer1->startCountdownFromTenTo(3);

?>