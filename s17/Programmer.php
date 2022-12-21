<?php
// polymorphism have many methods used on different classes
abstract class Programmer{

  abstract function solveTheProblem();
}

class EmplyeeA extends Programmer{

    public function solveTheProblem(){

        echo "I solve the problem using my imagination";
    }

}

class EmplyeeB extends Programmer{ 

    public function solveTheProblem(){

        echo "I solve the problem using Tutorials";
    }

}

class EmplyeeC extends Programmer{

    public function solveTheProblem(){

        echo "I solve the problem using Google";
    }

}

?>