<?php

    //optional Contructor

    class Tree{

        // properties
        public $leavesColor;
        public $numberofLeaves;
        // optional contructor
        function __construct($leavesColor = "", $numberofLeaves = ""){

            $this->leavesColor = $leavesColor;
            $this->numberofLeaves = $numberofLeaves;

       }
       // methods
        function describeTree(){
            echo "This tree has $this->numberofLeaves $this->leavesColor leaves.";

        }
    }

    // object case 1: with parameters
    $tree = new Tree("green", 1000);
    $tree->describeTree();
 echo "<br>";
    //object case 2: without parameters
    $tree2 = new Tree();
    $tree2->leavesColor = "yellow";
    $tree2->numberofLeaves = 2000;
    $tree2->describeTree();

?>