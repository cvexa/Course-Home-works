<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Домашно зад. 2.Напишете програма, която сортира
асоциативния масив
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"
40")
a. във възходящ ред според value
b. във възходящ ред според key
c. низходящ ред според value
d. низходящ ред според кey

*/


echo "<p><b>a. Във възходящ ред според value:</b></p>";
$arr = array("Sophia"=>"31",
	         "Jacob"=>"41",
	         "William"=>"39",
	         "Ramesh"=>"40");
asort($arr);
foreach ($arr as $name => $value) {
	echo "<p> Name: $name , Years: $value </p>";
}

echo "<p><b>b. Във възходящ ред според key:</b></p>";
$arr = array("Sophia"=>"31",
	         "Jacob"=>"41",
	         "William"=>"39",
	         "Ramesh"=>"40");
ksort($arr);
foreach ($arr as $name => $value) {
	echo "<p> Name: $name , Years: $value </p>";
}

echo "<p><b>c. низходящ ред според value:</b></p>";
$arr = array("Sophia"=>"31",
	         "Jacob"=>"41",
	         "William"=>"39",
	         "Ramesh"=>"40");
arsort($arr);
foreach ($arr as $name => $value) {
	echo "<p> Name: $name , Years: $value </p>";
}

echo "<p><b>d. низходящ ред според кey:</b></p>";
$arr = array("Sophia"=>"31",
	         "Jacob"=>"41",
	         "William"=>"39",
	         "Ramesh"=>"40");
krsort($arr);
foreach ($arr as $name => $value) {
	echo "<p> Name: $name , Years: $value </p>";
}

?>