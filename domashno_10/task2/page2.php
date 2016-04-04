<?php




$conn=mysqli_connect('localhost','root','','abook');


echo "<p>Задача 1 Свържете php файла си с БД – foods
</p>";

if (!$conn) {
	die("Connection failed:".mysqli_connect_error());
}else{
	echo "Connection successfully";
}



$q = "SELECT * FROM work WHERE work_name LIKE '%Blizzard%' ";
$result = mysqli_query($conn, $q);
if (mysqli_num_rows($result) > 0) {
	$counter=count(mysqli_num_rows($result));
	echo "<p><table border='1'>";
	echo "<tr><td>Име на фирмата</td><td>адрес</td><td>телефон</td></tr>";
	for ($i=0; $i < $counter; $i++) { 
	
	
$row = mysqli_fetch_assoc($result);

echo "<tr><td>".$row['work_name']."</td>";
echo "<td>".$row['work_adress']."</td>";
echo "<td>".$row['work_phone']."</td></tr>";

	}
}

echo "</table></p>";
echo "<a href='domashno2.php'>НАЗАД</a>";


