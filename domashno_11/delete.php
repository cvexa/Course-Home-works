<?php 
$conn = mysqli_connect('localhost', 'root', '', 'task1');
if (!$conn) {
die("Connection failed: " .mysqli_connect_error());
} else {
echo "Connected successfully !";
}
$id = $_GET['id'];
$date = date('Y-m-d');


$delete_query = "UPDATE clothes SET date_deleted ='$date' WHERE id=$id";
$delete_result = mysqli_query($conn, $delete_query);

if ($delete_result) {
 				
		echo "Успешно изтрихте този запис от базата данни!";
		echo "<p><a href='read.php'>Read DB</a></p>";
	}else{
		echo "Неуспешно изтриване на запис в базата данни! Моля опитайте по-късно!";
		echo "<p><a href='read.php'>Read DB</a></p>";
	}