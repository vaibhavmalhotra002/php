<?php
$str="This";
echo $str."<br>";
$len=strlen($str);
echo "The lenght of the string is: ".$len;
echo "<br>The number of words in the string is: ".str_word_count($str);
echo "<br>reversed string is: ".strrev($str);
echo "<br>(is) in the string is at: ".strpos($str, "is");
echo "<br>The Replaced string is: ".str_replace("is","at",$str);
?>