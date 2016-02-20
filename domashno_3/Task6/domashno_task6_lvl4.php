<?php
session_start();

$points=$_SESSION['points']+10;

header('content-type:text/html; charset=utf-8');
$num=rand(1,25);
$num2=rand(1,25);
$num3=rand(1,25);
$num4=rand(1,10);
$num5=rand(1,10);
$num6=rand(1,10);

$actual_number2=($num+$num2+$num3);
$actual_number3=($num4+$num5+$num6);

$actual_number4=$actual_number2*$actual_number3;
$new_points=$points+10;







echo "<form action='domashno_task6_lvl4.php' method='post'>
	<h1>НИВО 4</h1><b>(ДО ТУК РАЗПОЛГАШ С $points точки!)</b> Сега аз ще си измисля три числа от 1 до 25 и три от 1 до 10,
	<p> а ти опитай да събереш първите 3 и получетното число го умножи по сбора от другите 3 дадени числа,</p> 
    <p>ще се опитам да запомня опитите които си направил да познаеш / ако познаеш от първия път печелиш [10] точки /</p>
    <p>едното е: $num , а другото e: $num2 , и третото е: $num3 , четвъртото е: $num4 , петото е: $num5 , и шестото е: $num6:</p> 
	<input type='text' name='guess_number' placeholder='Резултат ?'>
	<input type='hidden' name='actual_number4'  value='$actual_number4'>
<input type='submit' name='submit4' value='Познай'>
</form>";
echo "<i><p>Ако познаеш от първия опит стигаш края на играта с максимален брой точки 40!!!</i></p> ";


if (!isset($_POST["submit4"])) {
     $_SESSION["count4"] = 0; //Initialize count
     $message = "Здравейте!!!";
     
     
} else if ($_POST["guess_number"] > $_POST["actual_number4"]) { 
    $_SESSION["count4"]++;
    echo  "НЕ ПОЗНА!  И НЕ успя да победиш всичките нива !";
    echo "<p><a href='domashno_task6.php'> Играй пак от 1-во ниво</a></p>";
     

} else if ($_POST["guess_number"] < $_POST["actual_number4"]) { 
   $_SESSION["count4"]++; 
    echo  "НЕ ПОЗНА!  И НЕ успя да победиш всичките нива !";
    echo "<p><a href='domashno_task6.php'> Играй пак от 1-во ниво</a></p>";
    
} else {
    $_SESSION["count4"]++;
    echo "БРАВО!!!ПОЗНА сбора с  ".$_SESSION["count4"]." опита!"; 
    $bonus=1;
    if ($_SESSION["count4"] == $bonus){
    	$_SESSION["count4"]++;
        
    	echo " Получаваш +10 точки бонус!";
        echo "<p>Плюс твойте $points от предното ниво това прави = $new_points точки общо! </p>";
    
        echo "<p><i>Честито Мина през всичките нива на играта!!! (НИВА 1 - 4) :)</p></i> ";
        echo "<p><a href='domashno_task6.php'> Играй пак </a></p>";
        unset($_SESSION["count4"]);
        session_destroy();
    }else{
        $_SESSION["count"]++;
    	echo " Получаваш + 0 точки бонус! И НЕ успя да победиш всичките нива !";
    	echo "<p><a href='domashno_task6.php'> Играй пак от 1-во ниво </a></p>";
    	unset($_SESSION["count"]);
    }
}



?>