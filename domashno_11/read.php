<?php


$conn=mysqli_connect('localhost','root','','task1');

if (!$conn) {
	die("connection faill:".mysqli_connect_error());

}
else{


				$read_query = 	"SELECT * FROM clothes 
				WHERE date_deleted IS NULL";
$read_result = mysqli_query($conn, $read_query);

echo "<ol>";
	if (mysqli_num_rows($read_result) > 0) {
		while($row = mysqli_fetch_assoc($read_result)){ 
		echo '<li>Type- '.$row['type']." / ".'Manifactory- '.$row['manifactory']." / ".'Price- '.$row['price']."$/ ".'In stock- '.$row['in_stock'];
		

		echo "<pre>";
		echo ' '.'<a href="update.php?id='.$row['id'].'">Edit Type</a>';
		echo ' '.'<a href="update.php?id='.$row['id'].'">Edit Manifactory</a>';
		echo ' '.'<a href="update.php?id='.$row['id'].'">Edit Price</a>';
		echo ' '.'<a href="update.php?id='.$row['id'].'">Edit In stock</a>';
		echo ' '.'<a href="delete.php?id='.$row['id'].'">Delete</a>';
		echo "</pre>";
		echo '</li>';
		}
	}
echo "</ul>";
echo "<a href='read.php'>PREVIEW DB</a>";
echo "<p><a href='domashno_task2.php'>INSERT INTO DB</a></p>";
			}
?>