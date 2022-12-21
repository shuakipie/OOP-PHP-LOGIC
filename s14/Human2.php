<?php

interface Human{
    
    public function canSpeak();
    public function canWalk();
    public function canSmell();
}

interface HumanCharacteristics{

    public function hasHeight();
    public function hasWeight();

}

    class Woman implements Human, HumanCharacteristics{

        public function canSpeak(){

            echo "Woman can Speak";
        }

        public function canWalk(){

            echo "Woman can Walk";
        }

        public function canSmell(){

            echo "Woman can Smell";
        }

        public function hasHeight(){

            echo "My Height is 5'9";
        }

        public function hasWeight(){

            echo "My Weight is 200 lbs";
        }
    }


    // object

    $newhuman = new Woman();
    $newhuman->canSpeak();
    $newhuman->canSmell();
    $newhuman->canWalk();
    $newhuman->hasHeight();
    $newhuman->hasWeight();

?>