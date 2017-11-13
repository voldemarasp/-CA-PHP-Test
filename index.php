<?php

require ("classes/Test.php");

$test = new Test();

echo "Siandienos data yra: " . $test->dayToday() . "<br><br>";

$siandienos_data = $test->dayToday() . "<br><br>";

$test->storeToCookie($siandienos_data);

echo "Cookie data: " . $_COOKIE["datoscookie"];

echo $test->isEven(16) . "<br><br>";

echo $test->setLanguage("Russia") . "<br><br>";

print_r ($test->discount([5,10,15,20,30,58]));

echo $test->storeRandom() . "<br><br>";

echo $test->glueText("this is a very simple sentence") . "<br><br>";

echo $test->textGen();
