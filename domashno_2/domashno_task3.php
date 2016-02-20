<!html>
<head>
	<title>task03</title>
	<style type="text/css">
	#none{
		color:red;
		font-weight: bold;
	}
	</style>
</head>
<body>


<?php

header('content-type:text/html; charset=utf-8');
/* Comment 
Домашно зад. 3 Проверете дали дадено число се дели на 3, 5 и 7
 едновременно или само на някое от тях.
 Comment */
 $a=rand(1,200);
 $b=3;
 $c=5;
 $d=7;
 $zero=0;


 echo "<p>Числото $a дели ли се на 3 , 5 или 7 ? </p>";

 if ($a % 3  == $zero && $a % 5 == $zero)  {
 	echo "Да дели се на 3 и 5 и е равно на = ". $a/$b ." , и ". $a/$c;
 }elseif ($a % 5 == $zero && $a % 7 == $zero) {
 	echo "Да дели се на 5 и 7 и е равно на = ". $a/$c ." , и ". $a/$d;
 }elseif ($a % 3  == $zero && $a % 5 == $zero && $a % 7 == $zero) {
 	echo "Да дели се на 3 и 5 и 7 и е равно на = ". $a/$b ." , и ". $a/$c .",и ". $a/$d;
 }elseif ($a % 3 == $zero && $a % 7 == $zero) {
 	echo "Да дели се на 3 и 7 и е равно на = ". $a/$b ." , и ". $a/$d;
 }elseif ($a % 3 == $zero) {
 	echo "Да дели се на 3 и е равно на = ". $a/$b;
 }elseif ($a % 5 == $zero) {
 	echo "Да дели се на 5 и е равно на = ". $a/$c;
 }elseif ($a % 7 == $zero) {
 	echo "Да дели се на 7 и е равно на = ". $a/$d;
 }
 else{
 	echo "<span id = 'none'>Не се дели нито на 3 , 5 или 7.</span>";
 }
 /* Comment Заради случайните цифри използвайте REFRESH 
 ( копчето F5) за да видите всичките функции на задачата.
 Comment */

?>
</body>
</html>