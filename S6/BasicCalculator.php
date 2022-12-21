<?php


class BasicCalculator{

    // methods
    function showResult($number1 , $operation, $number2){
        switch($operation){
            case "+":
                $result = $number1 + $number2;
                echo "The Result of $number1 + $number2 is : " . $result;
                break;

                case "-":
                    $result = $number1 - $number2;
                    echo "The Result of $number1 - $number2 is : " . $result;
                    break;

                case "*":
                    $result = $number1 * $number2;
                    echo "The Result of $number1 * $number2 is : " . $result;
                    break;
                case "/":
                    $result = $number1 / $number2;
                    echo "The Result of $number1 / $number2 is : " . $result;
                    break;



        }

    }


}

    // object
    $calculator1 = new BasicCalculator();
    $calculator1->showResult(2, "+" , 5);
    echo "<br>";

    // object
    $calculator3 = new BasicCalculator();
    $calculator3->showResult(20, "*" , 5);
    echo "<br>";

    $calculator2 = new BasicCalculator();
    $calculator2->showResult(10, "-" , 5);
    echo "<br>";


    $calculator4 = new BasicCalculator();
    $calculator4->showResult(25, "/" , 5);
    echo "<br>";


    // access methods

?>