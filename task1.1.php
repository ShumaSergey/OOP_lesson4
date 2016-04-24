<?php

class Power{
    public function power2($number){
        return $number * $number;
    }

    public function power3($number){
        return $number * $number * $number;
    }

    public function power4($number){
    return $number * $number * $number * $number;
    }

    public function power5($number){
    return $number * $number * $number * $number * $number;
    }
}

$number = new Power();
$number = $number->power2(2);
echo $number;
echo "<br>";

$number = new Power();
$number = $number->power3(2);
echo $number;
echo "<br>";


$number = new Power();
$number = $number->power4(2);
echo $number;
echo "<br>";


$number = new Power();
$number = $number->power5(2);
echo $number;