<?php

$random_number = [];
$numbers_length = 15;
$i = 0;

while($i < $numbers_length){
    $number = rand(1,100);

    if(strpos($random_number,$number) !== false){
        $random_number[] = $number;
        $i++;
    }
}

var_dump($random_number);

?>