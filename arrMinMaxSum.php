<?php

//vienmatis masyvas
// $arr = [2, 1, 5];

// print array_sum($arr); 
// print min($arr);
// print max($arr);
// print ('<br>');

// $asoArr = array(
//     "Marius" => "Budreika",
//     "Jonas" => "Jonaitis"
// );

// print($asoArr["Marius"]);

// 2. Rasti lengviausia, sunkiausia zmogu ir bendra ju svori.
$peopleWeightArr = array(
    "Petras" => 80,
    "Jonas" => 77,
    "Ona" => 99,
    "Joana" => 60
);

$weightSum = array_sum($peopleWeightArr);

print("Lightiest weight person: ");
$lightiest = min($peopleWeightArr);
$keyl = array_search($lightiest, $peopleWeightArr);
print $keyl;

print("heaviest weight person: ");
$heaviest = max($peopleWeightArr);
$keyh = array_search($heaviest, $peopleWeightArr);
print $keyh;

if ($weightSum < 500) return print(". Gali kilti liftu, nes bendras zmoniu svoris nevirsija 500kg\t");
else return print("Negali kilti liftu , nes bendras zmoniu svoris virsija 500kg");



