<?php

    // how to access methods insdie the class with $this keyword

    class PaintBrush{

            // methods

            function hasColor(){
                return "This PaintBrush has Red color";
            }

            function showColor(){
                echo $this->hasColor();

            }


    }
    $paintBrush = new PaintBrush();
    $paintBrush->showColor();

?>