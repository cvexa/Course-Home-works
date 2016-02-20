<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Напишете програма, която отпечатва на екрана
таблицата за умножение ­ 1*1 = 1, 2*1 =2 и т. н. Да се сложи в таблица с
border=1 и празните полета да са с colspan. /вижте снимката по­долу/

*/

$num=range(0, 11);
$num2=range(0, 11);


echo "<table border='1'>";



	echo "<tr>";
	echo "<td colspan ='10'>1*1 = 1</td>";
	echo "</tr>";
for ($i=2; $i < 3 ; $i++) { 
    echo "<tr>";
    echo "<td>". $i. "*". $num['1'] . " = " .$i."</td>";
    for ($j=3; $j < 4 ; $j++) { 
    	echo "<td colspan ='9'>". $i. "*". $num['2'] . " = " .$num['4']."</td></tr>";
    }
   }
for ($y=4; $y < 5; $y++) { 
	echo "<tr>";
   	echo "<td>". $i. "*". $num['1'] . " = " .$num['3']."</td>";
   	for ($x=5; $x < 6; $x++) { 
   		echo "<td colspan ='9'>". $num['3']. "*". $num['2'] . " = " .$num['6'];
   	
   	for ($b=5; $b < 6; $b++) { 
   		echo "<td>".$num['3']. "*". $num['3'] . " = " .$num['9']."</td></tr>";
   	}
   	}
   } 
for ($l=5; $l < 6; $l++) { 
	echo "<tr>";
   	echo "<td>". $num['4']. "*". $num['1'] . " = " .$num['4']."</td>";
   	for ($o=6; $o < 7; $o++) { 
   		echo "<td colspan ='8'>". $num['4']. "*". $num['2'] . " = " .$num['8']."</td></tr>";

   	}
   }        












echo "</table>";

?>