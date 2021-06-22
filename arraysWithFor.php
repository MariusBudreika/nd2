<?php
// atspausdinti kas antra nari, atskiriant kableliais.
$arrOfNumbers = [1, 2, 3, 4, 5];
$lenght = count($arrOfNumbers);

for ($i=0; $i < $lenght; $i+=2) { 
    if ($i < $lenght - 1) {
    print $arrOfNumbers[$i] . ',';
    } else print $arrOfNumbers[$i];
}
print('     ');

//2. Associatyvus masyvas.
$assocArr = [
    "a" => 1,
    "b" => 5,
    "c" => 3];

$assoLenght = count($assocArr);

for ($i=0; $i < $assoLenght; $i++) { 
    if ($i < $assoLenght - 1) {
        print $assocArr[array_keys($assocArr)[$i]] . ',';
    } else print $assocArr[array_keys($assocArr)[$i]];
}

print $assoLenght;
