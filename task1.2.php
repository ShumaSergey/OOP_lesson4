<?php

class Calculator{
    public function addition($number1, $number2){
        $res = $number1 + $number2;
        echo "{$number1} + {$number2} = " . "{$res}" . "<br>";
    }

    public function subtraction($number1, $number2){
        $res = $number1 - $number2;
        echo "{$number1} - {$number2} = " . "{$res}" . "<br>";
    }

    public function multiplication($number1, $number2){
        $res = $number1 * $number2;
        echo "{$number1} x {$number2} = " . "{$res}" . "<br>";
    }

    public function division($number1, $number2){
        if ( $number2 == 0 ) {
            echo "Black Hole Attacks! Division by 0 !!!!!!!!<br>";
        } else {
            $res = $number1 / $number2;
            echo "{$number1} / {$number2} = " . "{$res}" . "<br>";
        }
    }
}

$number1 = 100;
$number2 = 0;

$result = new Calculator();
$result->division($number1, $number2);
$result->addition($number1, $number2);
$result->subtraction($number1, $number2);
$result->multiplication($number1, $number2);
