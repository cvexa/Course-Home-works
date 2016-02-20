<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Домашно зад. 7*.Да се напише програма, която отпечатва
следната последователност от букви:
а
а а
а а а
...
а а а .... а ($n на брой пъти)



*/
$n = "a";
$x = 1;
$c = 1;
  
while ( $x <= 29) {
	while ( $c<= $x) {
		echo $n;
		$c++;
	}
	echo "<br>";
	$c = 1;
	$x++;
}




?>
