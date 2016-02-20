<?php

session_start();

$points=$_SESSION['points'];

header('content-type:text/html; charset=utf-8');
$num=rand(1,50);
$num2=rand(1,50);
$num3=rand(1,10);

$actual_number2=($num+$num2);
$actual_number3=$actual_number2*$num3;
$new_points=$points+10;





echo "<form action='domashno_task6_lvl3.php' method='post'>
	<h1>НИВО 3</h1><b>(ДО ТУК РАЗПОЛГАШ С $points точки!)</b> Сега аз ще си измисля две числа от 1 до 50 и трето от 1 до 10,
	<p> а ти опитай да събереш първите 2 и получетното число го умножи по 3-тото дадено число,</p> 
    <p>ще се опитам да запомня опитите които си направил да познаеш / ако познаеш от първия път печелиш [10] точки /</p>
    <p>едното е $num , а другото e $num2 и третото е $num3 :</p> 
	<input type='text' name='guess_number' placeholder='Резултат ?'>
	<input type='hidden' name='actual_number3'  value='$actual_number3'>
<input type='submit' name='submit3' value='Познай'>
</form>";
echo "<i><p>Ако познаеш от първия опит ще имаш възможност да отидеш на 4-то ниво!</i></p> ";


if (!isset($_POST["submit3"])) {
     $_SESSION["count3"] = 0; //Initialize count
     $message = "Здравейте!!!";
     
     
} else if ($_POST["guess_number"] > $_POST["actual_number3"]) { 
    $_SESSION["count3"]++;
    echo  "НЕ ПОЗНА!";
    echo "<p><a href='domashno_task6.php'> Играй пак от 1-во ниво</a></p>";
     

} else if ($_POST["guess_number"] < $_POST["actual_number3"]) { 
   $_SESSION["count3"]++; 
    echo  "НЕ ПОЗНА!";
    echo "<p><a href='domashno_task6.php'> Играй пак от 1-во ниво</a></p>";
    
} else {
    $_SESSION["count3"]++;
    echo "БРАВО!!!ПОЗНА сбора с  ".$_SESSION["count3"]." опита!"; 
    $bonus=1;
    if ($_SESSION["count3"] == $bonus){
    	$_SESSION["count3"]++;
        
    	echo " Получаваш +10 точки бонус!";
        echo "<p>Плюс твойте $points от предното ниво това прави = $new_points точки общо! </p>";
    
        echo "<p><i>Искаш ли по-голямо предизвикателство ? (НИВО 4)</p></i> ";
        echo "<p><a href='domashno_task6_lvl4.php'> ДА </a></p>";
    }else{
        $_SESSION["count"]++;
    	echo " Получаваш + 0 точки бонус! И НЕ можеш да продължиш напред !";
        echo "<p><a href='domashno_task6.php'> Играй пак от1-во ниво</a></p>";
    	unset($_SESSION["count"]);
    }
}


?>