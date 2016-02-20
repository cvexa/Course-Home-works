<?php
header('content-type:text/html; charset=utf-8');

/* Comment
=Домашно зад. 6*. Напишете програма, която за
положително цяло число n (n < 20), отпечатва таблица с числа
като на фигурата по­долу:
за n = 4;
n = 5



*/


$n = 7;
$n1 = $n;
$x = 1;
$y = 1;
echo "<table border = 1>";
while ( $y <= $n1) {
	echo "<tr>";
	while ($x <= $n) {
		echo '<td>'.$x.' ';
		$x++;
		echo '</td>';
	}
	echo "</tr>";
	$y++;
	$x = $y;
	$n++;	
}
echo "</table>";
?>
