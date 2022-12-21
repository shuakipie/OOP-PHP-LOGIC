<?php
// Data Abstraction

abstract class Name{

    abstract protected function sayMyName($name);
      
  
}

class Myname extends Name {

    // methods

    public function sayMyName($name){
        return "My Name is $name";


    }

}

 // object

 $newname = new Myname();
echo $newname->sayMyName("ShuakiPie");


?>