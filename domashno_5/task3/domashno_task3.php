<?php
header('content-type:text/html; charset=utf-8');

/* Comment
домашно зад. 3 Напишете програма, която намира най­малкия елемент в
масив, различен от 0./без да използвате готови функции!/


*/


$arr = array('12345','50','505','213123','15','123123123213','44','100','512312322','16', );//масив
echo "<pre>";
print_r($arr);
echo "</pre>";
$sort=sort($arr);//сортираме масива 

$min=$arr['0'];//задаваме минума- най-малкото число

$counter=count($arr);//преброяваме дължината на масива
for ($i=0; $i < $counter ; $i++) { //започва цикъла от 0 до дължината на масив
	 
     if ($min == $arr[$i] ) {//ако някой елемент е равен на най-малкото число
      	
      	echo "<p>Най - малкия елемент в масива е : ".$arr[$i]."</p>";//отпечатваме го 
      	
      } 

}



?>