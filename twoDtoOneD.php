<?php

$twoD_Arr = [
    [5, 3],
    [1, 2, 8]
];

$oneD_Arr = [];

for ($i=0; $i < count($twoD_Arr); $i++) { 
    for ($j=0; $j < count($twoD_Arr[$i]); $j++) { 
        array_push($oneD_Arr, $twoD_Arr[$i][$j]);
    }
}
sort($oneD_Arr);
print_r ($oneD_Arr);