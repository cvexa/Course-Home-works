<?php
header('content-type:text/html; charset=utf-8');

/* Comment
. Домашно зад 4 Да се напише метод, който сумира 2 масива в трети масив ($c[$i] =
$a[$i] + $b[$i]). Двата масива може да са с различен размер.
*/

function massive_plus($a,$b,$c,$counter,$counter2,$pre,$pre2){//елементи:масив,масив,създаване на масив,броячи и елегантен изглед

	echo "Новия Масив : ";
for ($i=0; $i < $counter ; $i++) {
	$c[$i]=$a[$i];//взимаме стойностите от първия масив
	
}
for ($k=0 ; $k < $counter2 ; $k++) { 
 	$c[$i][$k]=$b[$k];//прибавяме стойностите от 2-я масив
 	
}
		
	echo $pre;
	print_r($c);//печатим новия масив който се получава двумерен,иначе се застъпват индексите
	echo $pre2;
}


$arr1=array('aa','bb','cc','dd','ee','ff','gg','hh','h','g','f','e','d','c','b','a','a','b','c','d','e','fф');
$arr2=array('1','2','3','4','5');
$arr3=array();

$counta=count($arr1);//брояч на 1-я
$counta2=count($arr2);//брояч на 2-я

$skobe="<pre>";
$eboks="</pre>";

echo "<pre>";
echo "Масив 1:";
print_r($arr1);
echo "Масив 2: ";
print_r($arr2);
echo "</pre>";


massive_plus($arr1,$arr2,$arr3,$counta,$counta2,$skobe,$eboks);//използване на функцията




 ?>