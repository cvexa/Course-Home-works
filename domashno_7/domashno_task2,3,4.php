<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Домашно зад. 2,3,4
*/

$n=4;
$m=5;
echo "<p>Задача 2 : </p>";
$arr= array(array('1','2','3','4',),
	        array('41','42','43','44',),
	        array('441','442','443','444',),
	        array('4441','4442','4443','4444',),
	      
	        );

echo "<table border='1'>";
for ($i=0; $i < $n; $i++) { 
	echo "<tr>";
	for ($k=0; $k < $n; $k++) { 
		echo "<td>".$arr[$k][$i]."</td>";
	}
	echo "</tr>";
}
echo "</table>";
echo "<p>Задача 3 : </p>";
//задача 3
$arr2= array(array('1','2','3','4',),
	        array('0','1','2','3',),
	        array('0','0','1','2',),
	        array('0','0','0','1',),
	      
	        );
echo "<p><table border='1'>";
for ($y=0; $y < $n; $y++) { 
	echo "<tr>";
	for ($q=0; $q < $n; $q++) { 
		echo "<td>".$arr2[$y][$q]."</td>";
	}
	echo "</tr>";
}
echo "</table></p>";

echo "<p>Задача 4 : </p>";
//задача 4
$arr2= array(array('3','5','7','9','11'),
	        array('24','26','28','30','32'),
	        array('66','68','70','72','74'),
	        array('150','152','154','156','158'),
	      
	        );
echo "<p><table border='1'>";
for ($y=0; $y < $n; $y++) { 
	echo "<tr>";
	for ($q=0; $q < $m; $q++) { 
		echo "<td>".$arr2[$y][$q]."</td>";
	}
	echo "</tr>";
}
echo "</table></p>";


?>