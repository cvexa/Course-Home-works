<?php
header('content-type:text/html; charset=utf-8');

/* Comment
. Домашно зад 5 Декларирайте функция, която генерира/отпечатва полета за
въвеждане на потребителска информация - input type = text, checkbox, submit.
a. Функция отпечатваща select.
b. Отпечатайте форма за регистрация в електронен магазин,
използвайки създадените функции.
*/


function input_form($type,$name,$placeholder,$value){//тип, име, какво да пише вътре
	
	echo "<input type ='$type' name ='$name' placeholder='$placeholder'  value='$value'>";
}

function select_form($value,$text){//стойност, име

	
	echo "<option value='$value'>$text</option>";
}



if (!isset($_GET['submit'])) {//ако не е натиснат бутона регистрация

$text="text";
$place="Enter a user name...";


echo "<form action='' method='get' id='eshop'>";
echo "<p>РЕГИСТРАЦИЯ : </p>";
echo "<p>Потребителско име: </p>";
input_form($text,$text,$place,'');//текст текст за потребиелско име,функция за поле 
echo "</p>";
echo "<p>ПАРОЛА: </p>";
input_form('password','password','Enter password','');//слагам пак първия, защотото паролата няма Placeholder text

echo "<p>ПОЛ: ";
echo "<select name='sex' form ='eshop'>";//пише се ръчно заради различното име на целия селект
select_form('male','Мъж');//функцията за опция
select_form('female','Жена');//функцията за опция
echo "</select></p>";
echo "<p>Готов ли си ? ";
echo "Да ";
input_form('checkbox','rdy',$place,'yess');//също няма Placeholder text,функция за check box
echo "Не ";
input_form('checkbox','rdy',$place,'not');//също няма Placeholder text,функция за check box
echo "</p>";
input_form('submit','submit','submit','Регистрация');//функция за изпрати/submit
echo "</form>"; 


}else{//иначе ако е :
	echo "<p>Hello"." ".$_GET['text']."cheers!!!</p>";
	echo "<p>with password:"." ".$_GET['password']."</p>";
	echo "<p>and sex:"." ".$_GET['sex']."</p>";
	echo "<p>and ready or not ?:"." ".$_GET['rdy']."</p>";
}




?>