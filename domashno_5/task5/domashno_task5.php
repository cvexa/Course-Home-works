<?php
header('content-type:text/html; charset=utf-8');

/* Comment
домашно зад. 5 Напишете програма, която отпечатва в браузъра
таблица с две колони. В първата колона съдържа случайно число /четно
число в интервала 0 до 100/, а втората колона трябва да съдържа
квадратния корен на това число, с точност до втория знак след
десетичната запетая. Последния ред от таблицата трябва да съдържа
сумата на всички квадратни корени.


*/
$m=10;


$count=0;
$arr = range(0, 100);
shuffle($arr);
echo "<table border='1'>";
echo "<tr>
<td id='number'>Число</td>
<td id='square'>√</td>
</tr>";
for ($i=0; $i < $m ; $i+=2) { 
	echo "<tr>";
	echo "<td id='number'>".$arr[$i]."</td>";
	
	for ($k=0; $k < 1 ; $k+=2) { 
		$num=(sqrt($arr[$i]));
		echo "<td id='square'>".number_format($num,'2',',','0'). "</td>";
		$count+=$num;

	
	}

	echo "</tr>";
}


echo "<tr>";
echo "<td colspan='2' id ='calc'>".number_format($count,'2',',','0')."</td>";
echo "</tr>";




echo "</table>";



?>
<!html>
<head>
<title>Task4</title>
<meta charset="UTF-8">
<style type="text/css">
#calc{
	background-color: #EFE93A;
	color: red;
	text-align: center;
	font-weight: bold;
}
#number{
	background-color: #5DD9F3;
}
#square{
	background-color: #43EA36;
}

</style>
</head>
<body>
	<p>/Моля използвайте REFRESH ( Копчето F5) за да се заредят други числа ./</p>
	</body>
	</html>