<?php
header('content-type:text/html; charset=utf-8');
?>

<!html>
<head>
	<title>task04</title>
	<style type="text/css">
	#gg{
		color: red;
	}
	</style>
</head>
<body>
<form action="domashno_task4.php" method="post">
	Да изиграем една игра, аз ще си измисля число от 1 до 10, а ти опитай да го познаеш.
	<input type="text" name="guess_number" placeholder="Число от 1 до 10">
	<input type="hidden" name="actual_number" value="<?php $actual_number ?>">
<input type="submit" name="submit" value="Познай">

	



</form>

<?php
/* Comments
Домашно зад. 4.Напишете програма, при която потребителя въвежда
число, опитвайки се да отгатне предварително зададеното от вас число
в интервал от 0-10. Получава отговор дали е отгатнал, дали числото е
по-голямо или по-малко от зададеното.

Cooments*/ 




if (!empty($_POST['submit'])) {

	$actual_number=4;                         //числото което търсим
    $guess=$_POST['guess_number'];            //въведенето число
    
    
	if ($guess < $actual_number) {          

		echo "По-голямо от $guess";

	}elseif ($guess == $actual_number) {
		echo "<span id='gg'>БРАВО!!! Позна числото е : $actual_number</span>";

        
	}else
	echo "По-малко от $guess";
}
























	?>
</body>
</html>