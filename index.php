<?php

require ("classes/Test.php");

$myTest = new Test();

echo "Siandienos data yra: " . $myTest->dayToday() . "<br><br>";

$siandienos_data = $myTest->dayToday() . "<br><br>";

$myTest->storeToCookie($siandienos_data);

echo "Cookie data: " . $_COOKIE["datoscookie"];

echo $myTest->isEven(16) . "<br><br>";

echo $myTest->setLanguage("Russia") . "<br><br>";

print_r ($myTest->discount([5,10,15,20,30,58]));

echo $myTest->storeRandom() . "<br><br>";

echo $myTest->glueText("this is a very simple sentence") . "<br><br>";

echo $myTest->textGen();
