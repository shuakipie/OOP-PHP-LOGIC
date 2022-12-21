<?php

 // Final Name
 class Animal{
    //property


    // method

    function makeSound(){

         echo "wowowowooww";
    }

 }

 final class Dog extends Animal{

    function againMakeSound(){

        echo "mewoewoeowoew";

    }
 }

 // object
$newdog = new Dog();
$newdog->makeSound();



?>