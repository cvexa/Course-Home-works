<?php
header('content-type:text/html; charset=utf-8');
session_start();

/* Comment
домашно зад. 4 Да се направи програма, която кодира текст като
замени всички срещания на буквата ‘a’ с ‘@’ и ‘e’ с ‘3’. Да се отпечатва
оригиналния текст и кодирания. Текстът се подава от потребителя чрез
HTML форма.
a. Да се направи програма, която декодира текста.


*/
?>
<!html>
<head>
<title>Task4</title>
<meta charset="UTF-8">
<style type="text/css">
#advice{
	color: red;
}

</style>
</head>
<body>

	<form action="domashno_task4_code.php" method="post" id="text_form">
		<p>Програма, която кодира текст и заменя буквата ‘a’ с ‘@’ и ‘e’ с ‘3’ : </p>
    <textarea rows="4" cols="50" name="text" form="text_form" placeholder="Въведи Текст...">
</textarea>
    <input type="submit" name="submit" value="Кодирай">
	</form>
	<p><span id="advice">/Моля текста да бъде на Български език, иначе програмата не работи!/</span><p>
</body>
</html>


