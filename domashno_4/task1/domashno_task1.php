<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Домашно зад. 1.Отпечатайте таблица, в първата колона
на която са поставени държавите, във втората
съответните столици. Отпечатайте по азбучен ред ­
i. според имената на държавите
ii. според имената на столиците

*/
echo "<p>Отпечатайте таблица, в първата колона
на която са поставени държавите, във втората
съответните столици.</p>";
echo "<table border='1'>";
echo "<tr><td id='head'>Държави</td><td id='head2'>Столици</td></tr>";
$arr = array('Aвстрия' => 'Виена',
             'Русия' => 'Москва', 
	         'Белгия' => 'Брюксел',
	         'България' => 'София',
	         'Италия' => 'Рим',);

foreach ($arr as $country => $capitol) {

	
	echo "<tr><td id='head'>$country</td><td id='head2'> $capitol</td></tr>";

}
echo "</table>";

echo "<p>i. Азбучен ред според имената на държавите</p>";
echo "<table border='1'>";
echo "<tr><td id='head'>Държави</td><td id='head2'>Столици</td></tr>";
$arr = array('Aвстрия' => 'Виена', 
	         'Белгия' => 'Брюксел',
	         'България' => 'София',
	         'Италия' => 'Рим',
	         'Русия' => 'Москва');
ksort($arr);
foreach ($arr as $country => $capitol) {

	
	echo "<tr><td id='head'>$country</td><td id='head2'> $capitol</td></tr>";

}
echo "</table>";


echo "<p>ii. Азбучен редспоред имената на столиците</p>";
echo "<p><table border='1'>";
echo "<tr><td id='head'>Държави</td><td id='head2'>Столици</td></tr>";
$arr = array('Aвстрия' => 'Виена', 
	         'Белгия' => 'Брюксел',
	         'България' => 'София',
	         'Италия' => 'Рим',
	         'Русия' => 'Москва');
asort($arr);
foreach ($arr as $country => $capitol) {

	
	echo "<tr><td id='head'>$country</td><td id='head2'> $capitol</td></tr>";

}
echo "</table>";










?>
<!html>
<head>
	<title>task01</title>
	<style type="text/css">
	#head{
		text-align: center;
		background-color: #43F1F3;
	}
	#head2{
		background-color: #D9EC3C;
	}
	</style>
</head>
<body>
</body
</html>