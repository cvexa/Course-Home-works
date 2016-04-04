<?php



$conn=mysqli_connect('localhost','root','','abook');


echo "<p>Свържете php файла си с БД
</p>";

if (!$conn) {
	die("Connection failed:".mysqli_connect_error());
}else{
	echo "Connection successfully";
}



$q = "SELECT * FROM clients";
$result = mysqli_query($conn, $q);
if (mysqli_num_rows($result) > 0) {
	echo "<p><table border='1'>";
	echo "<tr><td>Име на клиент</td><td>адрес</td><td>дата на раждане</td><td>телефон</td><td>месторабота</td></tr>";
	for ($i=0; $i < 2; $i++) { 
	
	
$row = mysqli_fetch_assoc($result);

echo "<tr><td>".$row['Clients_name']."</td>";
echo "<td>".$row['Clients_adress']."</td>";
echo "<td>".$row['Birth_date']."</td>";
echo "<td>".$row['phones']."</td>";
echo "<td><a href='page2.php'>".$row['works']."</a></td></tr>";
	}
}

echo "</table></p>";


