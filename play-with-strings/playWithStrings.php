<?php

// Task 1

echo "## 1. Let's From a Sentence</br>";

$word = 'PHP';
$second = 'is';
$third = 'awesome';
$fourth = 'and';
$fifth = 'I';
$sixth = 'love';
$seventh = 'it!';

$output = "$word "."$second "."$third "."$fourth "."$fifth "."$sixth "."$seventh ";
echo "$output </br></br>";

// Task 2

echo "## 2. Index Accessing - 1 by 1</br>";

$word2 = 'wow PHP is so cool';
$firstWord = $word2[0] . $word2[1] . $word2[2] . "</br>";
$secondWord = $word2[4] . $word2[5] . $word2[6] . "</br>";
$thirdWord = $word2[8] . $word2[9] . "</br>";
$fourthWord = $word2[11] . $word2[12] . "</br>";
$fifthWord = $word2[14] . $word2[15] . $word2[16] . $word2[17] . "</br>";

echo 'First Word: ' . $firstWord;
echo 'Second Word: ' . $secondWord;
echo 'Third Word: ' . $thirdWord;
echo 'Fourth Word: ' . $fourthWord;
echo 'Fifth Word: ' . $fifthWord . "</br></br>";

echo "## 3. Breaking Sentence (Again) using Substring</br>";

$word3 = 'wow PHP is so cool';
$firstWord3 = substr($word3, 0, 3) . "</br>";
$secondWord3 = substr($word3, 4, 3) . "</br>";
$thirdWord3 = substr($word3, 8, 2) . "</br>";
$fourthWord3 = substr($word3, 11, 2) . "</br>";
$fifthWord3 = substr($word3, 14, 4) . "</br>";

echo 'First Word: ' . $firstWord3;
echo 'Second Word: ' . $secondWord3;
echo 'Third Word: ' . $thirdWord3;
echo 'Fourth Word: ' . $fourthWord3;
echo 'Fifth Word: ' . $fifthWord3 . "</br></br>";

echo "## 4. Breaking Sentence (yet Again) and Count Each Length</br>";

$word4 = 'wow PHP is so cool';
$firstWord4 = substr($word4, 0, 3);
$secondWord4 = substr($word4, 4, 3);
$thirdWord4 = substr($word4, 8, 2);
$fourthWord4 = substr($word4, 11, 2);
$fifthWord4 = substr($word4, 14, 4);

$firstWordLength = strlen($firstWord4);
$secondWordLength = strlen($secondWord4);
$thirdWordLength = strlen($thirdWord4);
$fourthWordLength = strlen($fourthWord4);
$fifthWordLength = strlen($fifthWord4);


echo "First Word: " .  $firstWord4 . ", with length: " .  $firstWordLength . "</br>";
echo "Second Word: " .  $secondWord4 . ", with length: " .  $secondWordLength . "</br>";
echo "Third Word: " .  $thirdWord4 . ", with length: " .  $thirdWordLength . "</br>";
echo "Fourth Word: " .  $fourthWord4 . ", with length: " .  $fourthWordLength . "</br>";
echo "Fifth Word: " .  $fifthWord4 . ", with length: " .  $fifthWordLength;



?>