<?php

interface Human{
    
    public function canSpeak();
    public function canWalk();
    public function canSmell();
}

    class Woman implements Human{

        public function canSpeak(){

            echo "Woman can Speak";
        }

        public function canWalk(){

            echo "Woman can Walk";
        }

        public function canSmell(){

            echo "Woman can Smell";
        }
    }


    // object

    $newhuman = new Woman();
    $newhuman->canSpeak();
    $newhuman->canSmell();
    $newhuman->canWalk();

?>