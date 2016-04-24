<?php
include_once 'task1.1.php';

class arraySum extends Power{
    public function arr($number){
        $arr = [];
        $arr[] = $number;

        $power = new Power();
        $arr[] = $power->power2($number);
        $arr[] = $power->power3($number);
        $arr[] = $power->power4($number);
        $arr[] = $power->power5($number);
        return $arr;
    }

}

$number =3;

$arr = new arraySum();

echo "<pre>";
print_r($arr->arr($number));
