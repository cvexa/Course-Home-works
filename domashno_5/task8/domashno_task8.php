<?php
header('content-type:text/html; charset=utf-8');

/* Comment

домашно зад. 8 Напишете, програма която променя стойностите на
елементите на масива от главни в малки букви и обратно.


*/


$arr = array("Geography is the science that studies the lands, the features, the inhabitants, and the phenomena of the Earth. A literal translation would be to describe or write about the Earth. 
	The first person to use the word geography was Eratosthenes (276–194 BC).");

echo "Original TEXT : ";
echo "<pre><b>";
print_r($arr);
echo "</pre></b>";
$counter=count($arr);
for ($i=0; $i < $counter; $i++) { 
 	
 
$big = array_flip(array_change_key_case(array_flip($arr), CASE_UPPER));
echo "TEXT in Uppercase : ";
echo "<pre><b>";
print_r($big);
echo "</pre></b>";
}
for ($k=0; $k < $counter ; $k++) { 
	$small = array_flip(array_change_key_case(array_flip($arr), CASE_LOWER));

echo "TEXT in Lowercase :";
echo "<pre><b>";
print_r($small);
echo "</pre></b>";	
}

?>
