<?php



$conn=mysqli_connect('localhost','root','','flowers');


echo "<p>Свържете php файла си с БД
</p>";

if (!$conn) {
	die("Connection failed:".mysqli_connect_error());
}else{
	echo "Connection successfully";
}

?>