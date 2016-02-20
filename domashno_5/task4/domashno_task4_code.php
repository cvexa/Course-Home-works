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


$text=$_POST['text'];//текста от формата
echo "<p>Оригинален текст:  $text </p>";
$textar=explode(" ", $text);

foreach ($textar as $key => $value) {
	
}

$find=array('а','е',);
$replace=array('@','3');


$new=(str_replace($find, $replace, $textar));
echo "<b>Кодиран текст:  </b>";
	foreach ($new as $newkey => $newvalue) {
		echo "<b>".$newvalue."</b> ";
	}

	echo "<p>/Замених всички срещания на буквата ‘a’ с ‘@’ и ‘e’ с ‘3’./</p>";
	echo "<p><a href='domashno_task4.php'>НАЗАД</a></p>";




session_destroy();
?>