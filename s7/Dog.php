<?php
    // how to access methods inside the class with $this keyword.
    class Dog{
        // properties


        // methods
        function makeSound(){
            return "Woooff Wooff";
           

        }
        function echoSound(){

                echo $this->makeSound();
                
        }

    }
    $dog = new Dog();
    echo $dog->makeSound();
    echo "<br> <br>";
    $dog->echoSound();
    
    

?>