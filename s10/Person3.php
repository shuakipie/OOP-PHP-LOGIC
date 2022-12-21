<?php

    class Person{

        // property
        private $name;

        // A setter sets a new value for the private property
        public function setName($name){

            $this->name=$name;

        }

        // a getter returns the value of the private property

        public function getName(){

            return $this->name;
        }


    }

    // object


    $shuakipie = new Person();
     $shuakipie->setName('Mary');
    echo  $shuakipie->getName();

?>