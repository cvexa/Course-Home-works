<!html>
<head>
<title>Task3</title>
</head>
<body>

<p>Избери Град и аз ще ти кажа къде се намира : </p>

<p><form name='country_selector' action='domashno_task3.php' method='post'>
<select name='country'>
	<option value='Избери'>Избери!</option>
<option value='Виена'>Виена</option>
<option value='Москва'>Москва</option>
<option value='Брюксел'>Брюксел</option>
<option value='София'>София</option>
<option value='Рим'>Рим</option>
<option value='Белград'>Белград</option>
<option value='Берн'>Берн</option>
<option value='Будапеща'>Будапеща</option>
<option value='Льо Ман'>Льо Ман</option>
<option value='Сарагоса'>Сарагоса</option>
<option value='Дюселдорф'>Дюселдорф</option>
<option value='Краков'>Краков</option>

</select>
<input type="submit" name="submit" value="Избери!"></p>
</body>
</html>


<?php
header('content-type:text/html; charset=utf-8');

/* Comment
=Домашно зад. 3 Направете форма, в която потребителя може
да избере град. Натискайки бутона “Избери” се отпечатва ­
/град/ се намира в /държава/. /hint ­ Създайте масив, чиито
елементи се състоят от ­ държава=>град/
*/



if (!empty($_POST['submit'])) {
	$country_select=$_POST['country']; //образуваме избора от формата в променлива

	$arr = array('Aвстрия' => 'Виена',
                 'Русия' => 'Москва', 
	             'Белгия' => 'Брюксел',
	             'България' => 'София',
	             'Италия' => 'Рим',
	             'Сърбия' => 'Белград',
	             'Швейцария' => 'Берн',
	             'Унгария' => 'Будапеща',
	             'Франция' => 'Льо Ман',
	             'Испания' => 'Сарагоса',
	             'Германия' => 'Дюселдорф',
	             'Полша' => 'Краков');

	foreach ($arr as $country => $city) { 
		
		if ($country_select == $city) {   //ако избора от формата съвпадне с държава от цикъла
			echo "<b>Градът ". $city . " се намира в : ". $country ."</b>";  //съобщение на избора от цикъла със съответната столица
		}
	}
}

















?>
