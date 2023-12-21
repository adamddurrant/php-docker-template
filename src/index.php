<?php

/**
 * Strings
 */

// Name variable
$name = 'Adam Durrant';

// String methods
$nameUpper = strtoupper($name);
$nameLower = strtolower($name);
$nameLen = strlen($name);
$nameLen = strlen($name);
$nameSub = substr($name,1);

// Print output
echo 'Name upper = ' . $nameUpper;
echo '<br/><br/>';
echo 'Name length = ' . $nameLen;
echo '<br/><br/>';
echo 'Name lower = ' . $nameLower;
echo '<br/><br/>';
echo 'Name sub = ' . $nameSub;

/**
 * Integer
 */

$number = 5;

echo '<br/><br/>';
echo rand(0, $number);

?>
