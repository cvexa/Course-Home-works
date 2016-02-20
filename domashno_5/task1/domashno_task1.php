<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Напишете програма, която изчислява и отпечатва
средната температура за период от 3 месеца /90 дни/, отпечатва петте
най­ниски и петте най­високи температури./hint генерирайте масив като
използвате rand() за температурите в определен интервал/

*/

$tot_temp1 = 0;
$tot_temp2 = 0;  
$tot_temp3 = 0;    


$random_temp=range(-10, 40);//обхват на градусите

shuffle($random_temp); //разбъркваме градусите
$random_temp=array_slice($random_temp,0,30); //правим градусите да отговарят за 30 дни.
echo "<p>Засечените градуси за месец Януари : </p>";
foreach ($random_temp as $key => $value) {
    echo ", $value ";//градуси
    $tot_temp1 += $value;

}
shuffle($random_temp); //разбъркваме градусите
$random_temp=array_slice($random_temp,0,30);//правим градусите да отговарят за 30 дни.
echo "<p>Засечените градуси за месец Февруари : </p>";
foreach ($random_temp as $key2 => $value2) {
    echo ", $value2 ";//градуси
    $tot_temp2 += $value2;

}

shuffle($random_temp); //разбъркваме градусите
$random_temp=array_slice($random_temp,0,30);//правим градусите да отговарят за 30 дни.
echo "<p>Засечените градуси за месец Март : </p>";
foreach ($random_temp as $key3 => $value3) {
    echo ", $value3 ";//градуси
    $tot_temp3 += $value3;
}

$days=$key+$key2+$key3+3; //90 дни
$calc=($tot_temp1+$tot_temp2)+$tot_temp3; //сбора от всичките градуси
$calc2=$calc/$days; //разделен на дните
$done=number_format($calc2);//получаваме средната температура
echo "<p>Средната температура за трите месеца е : </p>";
echo "$done градуса";

sort($random_temp);  
echo "<p> Петте най-ниски температури за трите месеца са : </p>";  
echo implode(", ", array_slice($random_temp, 0, 5));
sort($random_temp);   
echo "<p>Петте най-високи температури за трите месеца са  : </p>";  
echo implode(", ", array_slice($random_temp, -5, 5));

echo "<p>Използвай РЕФРЕШ/REFRESH ( копчето F5) за други стойности!</p>";




?>
