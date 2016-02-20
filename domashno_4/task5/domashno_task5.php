<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Домашно зад. 5 Напишете програма, която изчислява
факториел на числото n, което потребителя въвежда.
Използвайте форма за въвеждане на числото и след
натискане на бутон “Изчисли !n” на мястото на формата да се
появи резултата от изчислението.
/Факториел е функция на естествено число n, която изразява произведението на всички
естествени числа, по­малки или равни на n. Записва се n! и по дефиниция:
n! = 1*2*3.......(n­1)*n, за n>1;
1! = 1;
0! = 1./


*/
session_start();

$num =$_POST['number'];
$factorial = 1;
for ($x=$num; $x>=1; $x--) {
  $factorial = $factorial * $x;
  echo $x." * ";
}
echo "<p>Факториел на <span id='selected'> $num </span> е   <span id='final'> $factorial </span></p>";
echo "<p><a href='domashno_task5_form.html'>Изчисли друго число</a></p>";
?>
<!html>
<head>
<title>Task5_code</title>
<meta charset="UTF-8">
<style type="text/css">
#final{
	color: red;
	font-weight: bold;
}
#selected{
	color:blue;
	font-weight: bold;
}

</style>
</head>
<body>
	</body>
	</html>
