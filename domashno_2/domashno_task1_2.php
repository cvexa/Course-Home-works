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

header('content-type:text/html; charset=utf-8');
/* Comment 
Домашно зад. 1 Напишете програма, която проверява дали със зададените три
дължини на страни може да се построи триъгълник.
Домашно зад. 2 Напишете програма, която проверява по зададени три ъгъла, дали с
тях може да се построи триъгълник.
 Comment */

 //Първи метод за образуване на триъгълник ( по зададени страни )задача 1

 $a=rand(0,100); //страна1
 $b=rand(0,100); //страна2
 $c=rand(0,100); //страна3

 $calc1=$a+$c; //формула
 $calc2=$a+$b; //формула
 $calc3=$c+$b; //формула

echo "Страна А = $a см. Страна B = $b см. Страна C = $c см.";
echo "<p>A + C = $calc1 см. A + B = $calc2 см.  B + C = $calc3 см.";

 if ($a < $calc3) {
    echo "<p><span id='cant'>Не може</span> да се образува триъгълник.</p>";	
 }else{
 	echo "<p><span id='can'>Може</span> да се образува триъгълник!</p>";
 }

 echo "Формула за триъгълник според страни: 
 <p>ако A + C > B = има триъгълник,</p> 
 <p>ако А + B > C = има триъгълник,</p> 
 <p>ако B + C > A = няма триъгълник.</p>";

 /* Comment
 Моля бъдете търпеливи, и за да изпробвате методите, използвайте REFRESH (копчето F5) 
 докато бъдат изпълнени всичките функции.
 Comment */

//Втори метод за образуване на триъгълник ( по зададени ъгли )задача 2 

$a=rand(55,65); //Ъгъл1
$b=rand(55,65); //Ъгъл2
$c=rand(55,65); //Ъгъл3

$calc=$a+$b+$c;

echo "Ъгъл A = $a Ъгъл B = $b Ъгъл C = $c";
echo "<p>A + B + C = $calc</p>";

if ($calc == 180) {
	echo "<p><span id='can'>Може</span> да се образува триъгълник!</p>";
}else{
	echo "<p><span id='cant'>Не може</span> да се образува триъгълник.</p>";
}

echo "Формула за триъгълник според ъгли: 
 <p>ако A + B + C = 180 градуса има триъгълник,</p>";

?>
</body>
</html>