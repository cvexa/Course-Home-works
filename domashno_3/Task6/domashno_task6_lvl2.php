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
$num=rand(1,10);
$num2=rand(1,10);

$actual_number2=($num*$num2);
$countmulti=10;





echo "<form action='domashno_task6_lvl2.php' method='post'>
	<h1>НИВО 2</h1>Aз ще си измисля две числа от 1 до 10, а ти опитай да ги умножиш и получиш резултат
    <p>ще се опитам да запомня опитите които си направил да познаеш / ако познаеш от първия път печелиш [10] точки /</p>
    <p>едното е $num , а другото e $num2 :</p> 
	<input type='text' name='guess_number' placeholder='Умножени двете числа ?'>
	<input type='hidden' name='actual_number2'  value='$actual_number2'>
<input type='submit' name='submit2' value='Познай'>
</form>";
echo "<i><p>Ако познаеш от първия опит ще имаш възможност да отидеш на 3-то ниво!</i></p> ";


if (!isset($_POST["submit2"])) {
     $_SESSION["count2"] = 0; //Initialize count
     $message = "Здравейте!!!";
     
     
} else if ($_POST["guess_number"] > $_POST["actual_number2"]) { 
    $_SESSION["count2"]++;
    echo  "НЕ ПОЗНА!";
    echo "<p><a href='domashno_task6.php'> Играй пак от 1-во ниво</a></p>";
     

} else if ($_POST["guess_number"] < $_POST["actual_number2"]) { 
   $_SESSION["count2"]++; 
    echo  "НЕ ПОЗНА!";
    echo "<p><a href='domashno_task6.php'> Играй пак от 1-во ниво</a></p>";
    
} else {
    $_SESSION["count2"]++;
    echo "БРАВО!!!ПОЗНА сбора с  ".$_SESSION["count2"]." опита!"; 
    $bonus=1;
    if ($_SESSION["count2"] == $bonus){
    	$_SESSION["count2"]++;
        
    	echo " Получаваш +10 точки бонус!";
        echo "<p>Плюс твойте 10 от 1 -во ниво това прави = 20 точки общо! </p>";
    
        echo "<p><i>Искаш ли по-голямо предизвикателство ? (НИВО 3)</p></i> ";
        echo "<p><a href='domashno_task6_lvl3.php'> ДА </a></p>";
    }else{
        $_SESSION["count"]++;
        echo " Получаваш + 0 точки бонус! И НЕ можеш да продължиш напред !";
        echo "<p><a href='domashno_task6.php'> Играй пак от 1-во ниво </a></p>";
        unset($_SESSION["count"]);
    }
}

$_SESSION['points']=20;
































?>