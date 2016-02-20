<?php
header('content-type:text/html; charset=utf-8');
?>
<!html>

<head>
	<title>task05</title>
	<style type="text/css">
	#not_valid{
	       color: red;
	       font-weight: bold;

	}
	#valid{
		color:#0355FB;
		font-weight: bold;

	}
   
	</style>
</head>
<body>
<?php
/* Comment
 Домашно зад. 5* Напишете програма, която проверява дали зададената
комбинация от ден /от 1-31/, месец, година е валидна дата.
 Comment */


$day=rand(1,62);
$month=rand(1,24);
$year=rand(1980,2016)."y.";

echo $day. ".".$month.".".$year;

if ($day <= 31 && $month <= 12 && $year <= 2016) {
	echo "<p>
	VALID <span id='valid'>DATE format!</span>
	     </p>";
}else{
	echo "<p>
	<span id='not_valid'>Not VALID date format!</span>
	     </p>";
}
// Използвайте REFRESH( копчето F5 ) заради случайните цифри.



?>
</body>
</html>