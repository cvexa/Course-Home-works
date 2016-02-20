<?php
header('content-type:text/html; charset=utf-8');
?>
<!html>
<head>
	<title>task01_02</title>
	<style type="text/css">
	#cant{
		color: red;
		font-weight: bold;
	}
	#can{
		color:blue;
		font-weight: bold;
	}
	</style>
</head>
<body>

<?php

/* Comment 
Преработете кода на още 2 задачи по избор от
предишната тема, като позволите на потребителя чрез форма да
въвежда стойности, с които да се решават зададените задачи.

1-Напишете програма, която проверява по зададени три ъгъла, дали с
тях може да се построи триъгълник.
 Comment */

$a=$_POST['first']; //Ъгъл1
$b=$_POST['second']; //Ъгъл2
$c=$_POST['third']; //Ъгъл3

$calc=$a+$b+$c;

echo "Ъгъл A = $a Ъгъл B = $b Ъгъл C = $c"; //въведените ъгли
echo "<p>A + B + C = $calc</p>";            //сметката от въведените ъгли

if ($calc == 180) {
	echo "<p><span id='can'>Резултат: Може</span> да се образува триъгълник!</p>";
}else{
	echo "<p><span id='cant'>Резултат: Не може</span> да се образува триъгълник.</p>";
}

echo "Формула за триъгълник според ъгли: 
 <p>ако A + B + C = 180 градуса има триъгълник,</p>";



?>
