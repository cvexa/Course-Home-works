<?php
header('content-type:text/html; charset=utf-8');
?>

<!html>
<head>
	<title>task01</title>
	<style type="text/css">
	body{
		background-color: ;
	}
	</style>
</head>
<body>


<?php


/* Comment 
Домашно зад. 1.Направете форма, в която потребителя въвежда
потребителско име и парола и с РНР код проверете потребителското
име и паролата. Нека рнр кодът и кодът на формата да са в един файл.
Използвайте if/else. В зависимост от резултата да се появява съобщение
- Добре дошъл, /потребителско име/!, Грешна парола!, Грешно
потребителско име!, Грешна парола и потребителско име!
 Comment */


echo "<p>Въведи потребителско име и парола : </p>";
echo "<form action='domashno_task1.php' method='post'>";
echo "<p><input type='text' name='user_name' placeholder='Потребителско име'></p>";
echo "<p><input type='password' name='password' placeholder='Парола'></p>";
echo "<input type='submit' name='submit' value='продължи'>";

$user="Admin"; //Вярното потребителско име в формата
$pass=123456;  //Вярната парола

if (!empty ($_POST['submit'])) {
	
	if($_POST['password'] == $pass && $_POST['user_name'] == $user){  //Проверката за потребител и парола 

		$name=$_POST['user_name'];

		echo "<p>Здравей, $name !</p>"; //Поздрав по потребител
	}elseif ($_POST['user_name'] == $user) {  //Проверка за потребител
		
		echo "<p>Грешна парола!</p>";
	}elseif ($_POST['password'] == $pass) {   //Проверка за парола
 		
 		echo "<p>Грешно потребителско име!</p>";
	}
	else{
		echo "<p>Грешно Потребителско име и парола! </p>";
	}
}


?>
</body>
</html>