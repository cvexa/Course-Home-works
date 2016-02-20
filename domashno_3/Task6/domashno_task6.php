<?php
/* Comment
Домашно зад. 6**.Да се направи игра, която дава аритметични задачи
на потребителя. Играта всеки път генерира 2 произволни числа и
потребителя трябва намери техния сбор. Ако познае печели точки.
(Жокер: ползвайте rand() и <input type=”hidden”>)
18.1. Доразвийте играта: Да се включат и други аритметични операции.
Да се добавят нива на сложност и тн.

*/
session_start();
header('content-type:text/html; charset=utf-8');
$num=rand(1,100);
$num2=rand(1,100);

$actual_number=($num+$num2);



echo "<form action='domashno_task6.php' method='post'>
	<h1>НИВО 1</h1>Да изиграем една игра, аз ще си измисля две числа от 1 до 100, а ти опитай да познаеш техния сбор
    <p>ще се опитам да запомня опитите които си направил да познаеш / ако познаеш от първия път печелиш [10] точки /</p>
    <p>едното е $num , а другото e $num2 :</p> 
	<input type='text' name='guess_number' placeholder='Сбора от числата е ?'>
	<input type='hidden' name='actual_number'  value='$actual_number'>
<input type='submit' name='submit' value='Познай'>
</form>";
echo "<i><p>Ако познаеш от първия опит ще имаш възможност да отидеш на 2-ро ниво!</i></p> ";


if (!isset($_POST["submit"])) {
     $_SESSION["count"] = 0; //Initialize count
     $message = "Здравейте!!!";
     
     
} else if ($_POST["guess_number"] > $_POST["actual_number"]) { 
    echo  "НЕ ПОЗНА!";
    echo "<p><a href='domashno_task6.php'> Играй пак от 1-во ниво</a></p>";
    $_SESSION["count"]++; 

} else if ($_POST["guess_number"] < $_POST["actual_number"]) { 
    echo  "НЕ ПОЗНА!";
    echo "<p><a href='domashno_task6.php'> Играй пак от 1-во ниво</a></p>";
    $_SESSION["count"]++; 
} else {
    $_SESSION["count"]++;
    echo "БРАВО!!!ПОЗНА сбора с  ".$_SESSION["count"]." опита!"; 
    $bonus=1;
    if ($_SESSION["count"] == $bonus){
    	$_SESSION["count"]++;
    	echo " Получаваш +10 точки бонус!";
    	echo "<p><i>Искаш ли по-голямо предизвикателство ? (НИВО 2)</p></i> ";
    	echo "<p><a href='domashno_task6_lvl2.php'> ДА </a></p>";
    }else{
        $_SESSION["count"]++;
    	echo " Получаваш + 0 точки бонус! И НЕ можеш да продължиш напред !";
        echo "<p><a href='domashno_task6.php'> Играй пак от 1-во ниво</a></p>";
    	unset($_SESSION["count"]);
    }
    	
    
}

































?>