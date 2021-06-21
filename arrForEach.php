<?php
// atspausdinti kas antra nari su forEach.
$arr = [1, 4, 6, 7, 8, 9, 10, 11, 13];
$arrLenght = count($arr); 


foreach ($arr as $key => $value) {
    if ($key % 2 == 0 && $key != $arrLenght -1 && $key != $arrLenght -2) {
        print $value . ',';
    } else if ($key % 2 == 0) print $value; 
}

