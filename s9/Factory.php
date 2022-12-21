<?php

    class Factory{

        // methods

        function process1(){

            echo "Process 1 completed!";
            return $this;
        }

        function process2(){

            echo "Process 2 Completed!";
            return $this;
        }

        function process3(){

            echo " Process 3 Completed";
        }

    }

    // object

    $factory = new Factory();
    $factory->process1()->process2()->process3();

?>