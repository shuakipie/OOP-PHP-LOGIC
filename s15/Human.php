<?php
 // abstact 
abstract class Human{
     // property
     // method
     abstract public function canTalk();
     public function canWalk(){

        echo "I can walk <br>";
     }

     public function canEat(){

        echo "I can eat <br>";
     }
     
}

 class Man extends Human{

     public function canTalk(){

        echo "I can talk";
     }

 }



 //  we can not create an instance of an abstact class
$neMan= new Man();
$neMan->canWalk();
$neMan->canTalk();
$neMan->canEat();


?>