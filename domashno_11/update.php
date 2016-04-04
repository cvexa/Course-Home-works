<?php

$conn = mysqli_connect('localhost', 'root', '', 'task1');
 if (!$conn) {
 	die("Connection failed: " .mysqli_connect_error());
 	} else {
 	echo "Connected successfully !";
 	}
if(empty($_POST['submit'])){

	$id = $_GET['id'];

	$q = "SELECT * FROM clothes WHERE id = $id";
	$res = mysqli_query($conn, $q);

	$row = mysqli_fetch_assoc($res);

	echo "<p>Edit </p>";
	echo "<form action='update.php' method='post'>";
	
	echo "<input type='hidden' name='id' 
	value=".$row['id'].">";
echo "Edit/Update - Type : ";
	echo "<input type='text' name='types' value='".$row['type']."'>";
echo "<p>Edit/Update - Manifactory : ";
	echo "<input type='text' name='man' value='".$row['manifactory']."'></p>";	
echo "<p>Edit/Update - Price : ";
	echo "<input type='text' name='price' value='".$row['price']."'>$</p>";	
echo "<p>Edit/Update - In Stock : ";
	echo "<input type='number' name='in_stock' value='".$row['in_stock']."'></p>";			
	echo "<input type='submit' name='submit' value='update'>";
	echo "</form>";
	echo "<a href='read.php'>PREVIEW DB</a>";
}else {
	//UPDATE QUERY CODE AS FOLLOWS
//var_dump($_POST);
	$id_c = $_POST['id'];
	$types = $_POST['types'];
	$man=$_POST['man'];
	$price=$_POST['price'];
	$stock=$_POST['in_stock'];
	$update_query = "UPDATE clothes 
					SET type ='$types', manifactory = '$man', price = '$price', in_stock = '$stock'
					WHERE id=$id_c AND date_deleted IS null";
					
	$update_result= mysqli_query($conn, $update_query);
	if ($update_result) {
 			
		echo "Успешно направихте промени по базата данни!";
		echo "<p><a href='read.php'>Read DB</a></p>";
	}else{
		echo "Неуспешна промяна на запис в базата данни! Моля опитайте по-късно!";
		echo "<p><a href='read.php'>PREVIEW DB</a></p>";
	}
}