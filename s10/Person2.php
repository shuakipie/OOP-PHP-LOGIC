<?php

        
    
        class Person2{

               
                // private access modifiers
                // The property or method can ONLY be accessed within the class.
                // So once it is define as private nobody can change it or access it from outside
                // so in that case if we try to change it to private as we show we will get an error.
                private $name;
                private $age;

                // If we do not mention any access modifier in front of a function 
                // then it means it is of type public
               private  function setInfo(){

                        return "My Name is " . $this->name . " and i am "  . $this->age . " years old ";
                }

                private function getInfo(){

                   echo $this->setInfo();
                }

        }

        // object

        $anna = new Person2();

        // We can access the property and methods from outside the class.
        $anna->name = "Anna";
        $anna->age = 26;
        $anna->getInfo();

?>