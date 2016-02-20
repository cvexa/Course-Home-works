<?php
header('content-type:text/html; charset=utf-8');

/* Comment
домашно зад. 2 Напишете програма, която създава масив от 20
елемента, като стойността на всеки елемент се получава от
произведението на съответния индекс и 5.

*/

$stack = array();
for ($x = 0; $x <= 19; $x++) {
	array_push($stack, $x*5);
	$counter=count($stack);
	if ($x == $counter) {
		break;
	}
	} 
	foreach ($stack as $key => $value) {
		echo "<pre>";
		echo $key."=>".$value;
		echo "</pre>";
	}


?>