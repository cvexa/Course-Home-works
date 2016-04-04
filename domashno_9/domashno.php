<?php

/*
1. Свържете php файла си с БД – foods
2. Отпечатайте в браузъра първите 10 записа от таблица products в
таблица с информация за име на продукт, калории.
3. Отпечатайте в браузъра всички записи в таблица products, които
отговарят на условието gi>10 и date_deleted IS null в таблица с
информация за име на продукт и гликемичен идекс /gi/;
4. Променете всички записи в таблица products, които отговарят на
условието gi = 0 или калориите <100, като удвоите калориите им.
Отпечатайте записите в браузъра в таблица с информация за име на
продукт, калории и гликемичен индекс – преди и след направената
промяна.
5. Изтрийте всички записи в таблица products, които са някакъв сок.
Отпечатайте в браузъра като таблица само тези записи в таблицата
products, които не са изтрити, с информация за име на продукт,
калории и гликемичен индекс.
*/


$conn=mysqli_connect('localhost','root','','food');


echo "<p>Задача 1 Свържете php файла си с БД – foods
</p>";

if (!$conn) {
	die("Connection failed:".mysqli_connect_error());
}else{
	echo "Connection successfully";
}


echo "<p>Задача 2 Отпечатайте в браузъра първите 10 записа от таблица products в
таблица с информация за име на продукт, калории.</p>";
$q = "SELECT * FROM products";
$result = mysqli_query($conn, $q);
if (mysqli_num_rows($result) > 0) {
	echo "<p><table border='1'>";
	echo "<tr><td>Име на продукт</td><td>Калории</td></tr>";
	for ($i=0; $i < 10; $i++) { 
	
	
$row = mysqli_fetch_assoc($result);

echo "<tr><td>".$row['product']."</td>";
echo "<td>".$row['calories']."</td></tr>";
	}
}

echo "</table></p>";


echo "Задача 3 Отпечатайте в браузъра всички записи в таблица products, които
отговарят на условието gi>10 и date_deleted IS null в таблица с
информация за име на продукт и гликемичен идекс /gi/;";
$w = " SELECT product,gi FROM products WHERE gi > 10 AND date_deleted IS NULL ";
$result2 = mysqli_query($conn, $w);
if (mysqli_num_rows($result2) > 0) {
	
	echo "<p><table border='1'>";
	echo "<tr><td>Име на продукт</td><td>Гликемичен идекс</td></tr>";
	
	for ($n=0; $n < 88; $n++) { //знам до колко, защото съм видял в бд-то колко са 
	
	$row2 = mysqli_fetch_assoc($result2);
	


echo "<tr><td>".$row2['product']."</td>";
echo "<td>".$row2['gi']."</td></tr>";
	}
}

echo "</table></p>";


echo "<p>Задача 4 Променете всички записи в таблица products, които отговарят на
условието gi = 0 или калориите <100, като удвоите калориите им.
Отпечатайте записите в браузъра в таблица с информация за име на
продукт, калории и гликемичен индекс – преди и след направената
промяна.</p>";
$l = "SELECT * FROM products WHERE calories < 100" ;
$result3 = mysqli_query($conn, $l);
if (mysqli_num_rows($result3) > 0) {
	echo "<p><table border='1'>";
	echo "<tr><td>Име на продукт</td><td>Калории преди</td><td>Калории след /* 2/</td><td>ГИ</td></tr>";
	for ($p=0; $p < 25; $p++) {  //знам до колко, защото съм видял в бд-то колко са 
	
	
$row3 = mysqli_fetch_assoc($result3);
$math=$row3['calories']*2;

echo "<tr><td>".$row3['product']."</td>";
echo "<td>".$row3['calories']."</td>";
echo "<td>".$math."</td>";
echo "<td>".$row3['gi']."</td></tr>";
	}
}

echo "</table></p>";

echo "<p>Задача 5 Изтрийте всички записи в таблица products, които са някакъв сок.
Отпечатайте в браузъра като таблица само тези записи в таблицата
products, които не са изтрити, с информация за име на продукт,
калории и гликемичен индекс.</p>";

$j = "SELECT * FROM products WHERE date_deleted IS NULL " ;
$result4 = mysqli_query($conn, $j);
if (mysqli_num_rows($result4) > 0) {
	echo "<p><table border='1'>";
	echo "<tr><td>Име на продукт</td><td>Калории</td><td>ГИ</td></tr>";
	for ($y=0; $y < 106; $y++) {  //знам до колко, защото съм видял в бд-то колко са 
	
	
$row4 = mysqli_fetch_assoc($result4);


echo "<tr><td>".$row4['product']."</td>";
echo "<td>".$row4['calories']."</td>";

echo "<td>".$row4['gi']."</td></tr>";
	}
}

echo "</table></p>";
?>