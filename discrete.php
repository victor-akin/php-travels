<?php

function discrete($input = [], $k, $display_pair = false ) { 
    $length = count($input);
    $output = [];

    $bigArray = [];
    $finalArray = [];

    for($i = 0; $i < $length; $i++) {
        for($j = 0; $j < $length; $j++) {
            if($i < $j) { $bigArray[] = array($i ,$j); }   
        }
    }
    foreach($bigArray as $ba) {
        if ( ($input[$ba[0]] + $input[$ba[1]]) % $k === 0 ) {
            $finalArray[]= array($input[$ba[0]] ,$input[$ba[1]]) ;
        }

    }
    if ($display_pair) {
        echo $output[] = "(i,j) array is =>>".json_encode($bigArray) ."\n". "number of discrete pairs ". count($finalArray);
    } else {
        echo count($finalArray);
    }

}

$array = [1, 3, 2, 6, 1, 2];
$k = 3;
discrete($array, $k, true);



