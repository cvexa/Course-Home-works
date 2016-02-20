<?php
header('content-type:text/html; charset=utf-8');
?>
<!html>

<head>
	<title>task06</title>
	<style type="text/css">
	#first{
	       color:#F40F0F ;

	}
	#second{
	       color:#0E28E7 ;

	}
	#third{
	       color:#BC9447 ;

	}
	#fourth{
	       color:#1DAA41 ;

	}
	#fifth{
	       color:#BA0BF4 ;

	}
	</style>
</head>
<body>
<?php
/* Comment
 Домашно зад. 6 *Да се напише програма, която подрежда 5 числа в нарастващ ред.
 Comment */

$num1=rand(1,100);
$num2=rand(1,100);
$num3=rand(1,100);
$num4=rand(1,100);
$num5=rand(1,100);

echo "<p>5 случайни числа: </p>";
echo "<p><span id='first'>Първо число: $num1</span> ;
         <span id='second'>Второ число: $num2</span> ;
         <span id='third'>Трето число: $num3</span> ;
         <span id='fourth'>Четвърто число: $num4</span> ;
         <span id='fifth'>Пето число: $num5</span> ;</p>";
echo "<p>Като ги подредим в нарастващ ред, изглеждат така: </p>";

$numbers = array("$num1","$num2","$num3","$num4","$num5" );
sort($numbers);
foreach ($numbers as $key => $value) {
	echo  $value . "\n";
}

 //Използвайте REFRESH (копчето F5), за да изпълните задачата с различни числа.


?>
</body>
</html>