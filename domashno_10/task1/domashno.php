<?php



$conn=mysqli_connect('localhost','root','','tagency');


echo "<p>Свържете php файла си с БД 
</p>";

if (!$conn) {
	die("Connection failed:".mysqli_connect_error());
}else{
	echo "Connection successfully";
}



$q = "SELECT * FROM hotel";
$result = mysqli_query($conn, $q);
if (mysqli_num_rows($result) > 0) {
	$counter=count(mysqli_num_rows($result));
	echo "<p><table border='1'>";
	echo "<tr><td>Име на хотел</td><td>Държава</td><td>Град</td><td>цена</td></tr>";
	for ($i=0; $i < $counter; $i++) { 
	
	
$row = mysqli_fetch_assoc($result);

echo "<tr><td>".$row['Name']."</td>";
echo "<td>".$row['Country']."</td>";
echo "<td>".$row['City']."</td>";
echo "<td>".$row['Price euro']."</td></tr>";
	}
}

echo "</table></p>";


?>