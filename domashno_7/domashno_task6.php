<?php
header('content-type:text/html; charset=utf-8');

/* Comment
 Домашно зад. 6
*/
$n=4;
$m=5;

$arr2= array(array('1','16','31','46',),
	        array('4','19','34','49',),
	        array('7','22','37','52',),
	        array('10','25','40','55',),
	        array('13','28','43','58',),
	        );
echo "<p><table border='1'>";
for ($y=0; $y < $m; $y++) { 
	echo "<tr>";
	for ($q=0; $q < $n; $q++) { 
		echo "<td>".$arr2[$y][$q]."</td>";
	}
	echo "</tr>";
}
echo "</table></p>";

?>