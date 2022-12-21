<?php

        // Access Modifier Public and Private
        // The Property or Method can be access on from anywhere.
        // [From both inside and outside the class];
        class Person1{

                // the Following "public" is called access modifier

                public $name;
                public $age;

                // If we do not mention any access modifier in front of a function 
                // then it means it is of type public
                function setInfo(){

                        return "My Name is " . $this->name . " and i am "  . $this->age . " years old ";
                }

                public function getInfo(){

                   echo $this->setInfo();
                }

        }

        // object

        $anna = new Person1();

        // We can access the property and methods from outside the class.
        $anna->name = "Anna";
        $anna->age = 26;
        $anna->getInfo();

?>