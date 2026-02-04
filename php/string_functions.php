<?php

echo "<h2 align='center'><u>PHP String Functions</u></h2>";
$str=" Hello WT Professor VasuNeninthe";

//basic string functions

echo "Original String: '$str' <br>";
echo "Length of string: ".strlen($str)."<br>";
echo "Word count: ".str_word_count($str)."<br>";
echo "Reversed string: ".strrev($str)."<br><hr>";

//case conversion
echo "Uppercase: ".strtoupper($str)."<br>";
echo "Lowercase: ".strtolower($str)."<br>";
echo "Capitalize first letter: ".ucfirst($str)."<br>";
echo "Capitalize each word: ".ucwords($str)."<br><hr>";

//Searching and replacing
echo "Position of 'Professor': ".strpos($str,"Professor")."<br>";
echo "Replace 'Professor' with 'lecturer': ".str_replace("Professor","lecturer",$str)."<br><hr>";

//Substring and Trimming
echo "Substring (7,10): ".substr($str,7,10)."<br>";
echo "Trimmed string: '".trim("   $str   ")."'<br>";
echo "LeftTrimmed string (ltrim): '".ltrim("   $str   ")."'<br>";
echo "RightTrimmed string (rtrim): '".rtrim("   $str   ")."'<br><hr>";

//String comparison
echo "Comparison of 'mahi' and 'mahi': ".strcmp("mahi","mahi")."<br>";
echo "Comparison of 'mahi' and 'harsha': ".strcmp("mahi","harsha")."<br>";
echo "Case-insensitive comparison of 'hello' and 'HELLO': ".strcasecmp("hello","HELLO")."<br><hr>"; //0 means equal

//special characters and security
echo "String with special characters: ".htmlspecialchars("<Hello> & 'WT' \"Professor\"")."<br>";
echo "Add slashes: ".addslashes("Hello 'WT' Professor")."<br>";
?>