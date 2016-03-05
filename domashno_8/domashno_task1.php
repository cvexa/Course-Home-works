<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Домашно зад 1 Да се напише метод, който по зададен масив отпечатва всички
негови елементи и намира и отпечатва сумата на елементите с четен индекс. Да се
извика метода 2 пъти за 2 различни масива.
*/

function even($var,$sum,$p1,$p2){
	$sum=0;
	echo $p1;
	foreach ($var as $key => $value) {
		echo $value." ";
		if ($key % 2 == 0) {
			$sum+=$value;
			
		}
	}
	echo " Сбора на елементите с четен индекс е :   ".$sum." ";
echo $p2;

}
$number=0;
$para1="<p>";
$para2="</p>";
$arr=range(1, 6);
$arr2=range(10,40);
echo "<pre>";
even($arr,$number,$para1,$para2);
echo "</pre>";
even($arr2,$number,$para1,$para2);
?>