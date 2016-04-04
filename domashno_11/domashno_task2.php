<?php


$conn=mysqli_connect('localhost','root','','task1');

if (!$conn) {
	die("connection faill:".mysqli_connect_error());

}else{
	if (empty($_POST['submit'])) {
		echo "<p>Insert into DB</p>";
		echo "<form action='domashno_task2.php' method='post'>";
		echo "<p>Type Cloth</p>";
		echo "<input type='text' name='type'>";
		echo "<p>Manifcatory</p>";
		echo "<input type='text' name='manifactory'>";
		echo "<p>Price</p>";
		echo "<input type='text' name='price'>$";
		echo "<p>IN Stock</p>";
		echo "<input type='number' name='in_stock'>";
		echo "<input type='submit' name='submit' value='insert'>";
		echo "<p><a href='read.php'>PREVIEW DB</a></p>";
	    }
	     else{
		$type=$_POST['type'];
		$manifactory=$_POST['manifactory'];
		$price=$_POST['price'];
		$in_stock=$_POST['in_stock'];

		$insert_query = "INSERT INTO clothes(type, manifactory, price, in_stock) VALUES ('$type','$manifactory','$price','$in_stock')";
		$insert_result= mysqli_query($conn,$insert_query);
		if ($insert_result) {
			
				echo "Успешно добавихте в базата данни!";
				echo "<p><a href='read.php'>Read DB</a></p>";
			}else{
				echo "Неуспешно добавяне на запис в базата данни! Моля опитайте по-късно!";
			}
	}
}
















?>

