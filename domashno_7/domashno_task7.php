<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Да се направи уеб сайт с информация за филми и актьори. Да има асоциативен масив
с поне 5 филма и за всеки филм да се съхранява: заглавие, година, бюджет, жанр, главен актьор. Да
има и асоциативен масив с поне 5 актьора и за всеки актьор да се съхранява: име, националност,
възраст, брой оскари. Да се отпечата информацията за всички филми и актьори.
a. Да се направи форма, в която потребителя избира актьор и му се показва информация за
актьора и всички филми, в които е бил главен актьор.

*/


$arr= array(array('Властелинът на пръстените','2001 година.','$93 000 000','Приключение','Elijah Wood'),
	        array('Междузвездни войни: Силата се пробужда ','2015 година.','$200 000 000','Фантастика','Harrison Ford'),
	        array('Марсианецът','2015 година.','$108 000 000','Фантастика','Matt Damon'),
	        array('Хобит: Неочаквано пътешествие','2012 година.',' $180 000 000 ','Приключение','Martin Freeman'),
	        array('Човек от стомaна','2013 година.','$225 000 000','Екшън,фантастика','Henry Cavill'),
	        );
$arr2=array(array('Elijah Wood','USA','35г.','24'),
	        array('Harrison Ford','USA','73г.','31',),
	        array('Matt Damon','USA','45г.','33',),
	        array('Martin Freeman','England, UK',' 44г. ','6',),
	        array('Henry Cavill','Jersey, Channel Islands','32г.','1',),
	        );
$counter=count($arr);


$e=$arr2[0][0];//Elijah Wood
$Harrison=$arr2[1][0];//Harrison Ford
$mat=$arr2[2][0];//Matt Damon
$marin=$arr2[3][0];//Martin Freeman
$henry=$arr2[4][0];//Henry Cavill



if (!isset($_GET['submit'])) {//ако не е натиснат бутона submit се показват филмите 
	echo "<p><table border='1'>";
echo "<tr>
<td>Заглавие</td>
<td>Година</td>
<td>Бюджет</td>
<td>Жанр</td>
<td>Главен актьор</td>
</tr>";
for ($i=0; $i < 5; $i++) { 
	echo "<tr>";
	for ($j=0; $j <5 ; $j++) { 
		echo "<td>".$arr[$i][$j]."</td>";
		
	}
	echo "<tr>";
}
echo "</table></p>";//край на таблицата с филмите 

echo "<p>Избери един актьор и ще ти кажа повече за него ... </p>";
echo "<p><form action='domashno_task7.php' method='ger'>";//забочва формата за избор на актьор
echo "<select name='actors'>";
echo "<option value='Elijah Wood'>Elijah Wood</option>";
echo "<option value='Harrison Ford'>Harrison Ford</option>";
echo "<option value='Matt Damon'>Matt Damon</option>";
echo "<option value='Martin Freeman'>Martin Freeman</option>";
echo "<option value='Henry Cavill'>Henry Cavill</option>";
echo "</select>";
echo "<input type='submit' name='submit' value='избери'>";
echo "</form></p>";
}else{//след избора
	echo "<table border='1'>";//започваме таблица 
		echo "<tr>";
		echo "<td>Име</td>";
		echo "<td>Националност</td>";
		echo "<td>Възраст</td>";
		echo "<td>Брой награди</td>";
		echo "<td>Филм в който е главен актьор</td>";
		echo "</tr>";
	if ($_GET['actors'] == $e) {//ако избора съвпадне с актьора 
		echo "<iframe width='420' height='345' 
src='http://www.youtube.com/embed/drcUrQCDj7U'> 
</iframe>";//клипче добавено от мен, няма го като условие в задачата
		for ($t=0; $t < 1; $t++) { 
	echo "<tr>";
	for ($h=0; $h <5 ; $h++) { 
		$arr2[$t][4]=$arr[$t][$t];//добавяме нова стойност в 2-я масив
		echo "<td>".$arr2[$t][$h]."</td>";
		
		
	}
	echo "</tr>";
}
echo "<p><a href='domashno_task7.php'>НАЗАД</a></p>";//бутон назад
		
	}elseif($_GET['actors'] == $Harrison) {//ако избора съвпадне с актьора 
		echo "<iframe width='420' height='345'
src='http://www.youtube.com/embed/F5PqNYGxzyc'>
</iframe>";//клипче добавено от мен, няма го като условие в задачата
		for ($u=1; $u < 2; $u++) { 
			echo "<tr>";
			for ($l=0; $l < 5 ; $l++) { 
				$arr2[$u][4]=$arr[1][0];//добавяме нова стойност в 2-я масив
				echo "<td>".$arr2[$u][$l]."</td>";
			}
		}
		echo "</tr>";
		echo "<p><a href='domashno_task7.php'>НАЗАД</a></p>";
	}elseif($_GET['actors'] == $mat) {//ако избора съвпадне с актьора 
		echo "<iframe width='420' height='345'
src='http://www.youtube.com/embed/UE7BFzSLrmw'>
</iframe>";//клипче добавено от мен, няма го като условие в задачата
		for ($q=2; $q < 3; $q++) { 
			echo "<tr>";
			for ($w=0; $w < 5 ; $w++) { 
				$arr2[$q][4]=$arr[2][0];//добавяме нова стойност в 2-я масив
				echo "<td>".$arr2[$q][$w]."</td>";
			}
		}
		echo "</tr>";
		echo "<p><a href='domashno_task7.php'>НАЗАД</a></p>";//бутон назад
}elseif($_GET['actors'] == $marin) {//ако избора съвпадне с актьора 
	    echo "<iframe width='420' height='345'
src='http://www.youtube.com/embed/Zb5cSrKfBG0'>
</iframe>";//клипче добавено от мен, няма го като условие в задачата
		for ($o=3; $o < 4; $o++) { 
			echo "<tr>";
			for ($p=0; $p < 5 ; $p++) { 
				$arr2[$o][4]=$arr[3][0];//добавяме нова стойност в 2-я масив
				echo "<td>".$arr2[$o][$p]."</td>";
			}
		}
		echo "</tr>";
		echo "<p><a href='domashno_task7.php'>НАЗАД</a></p>";//бутон назад
}elseif($_GET['actors'] == $henry) {//ако избора съвпадне с актьора 
	echo "<iframe width='420' height='345'
src='http://www.youtube.com/embed/tM0Egax9hpg'>
</iframe>";//клипче добавено от мен, няма го като условие в задачата
		for ($a=4; $a < 5; $a++) { 
			echo "<tr>";
			for ($s=0; $s < 5 ; $s++) { 
				$arr2[$a][4]=$arr[4][0];//добавяме нова стойност в 2-я масив
				echo "<td>".$arr2[$a][$s]."</td>";
			}
		}
		echo "</tr>";
		echo "<p><a href='domashno_task7.php'>НАЗАД</a></p>";//бутон назад
}

	echo "</table>";
}
/*не съм отпечатил нарочно и всичките филми и всички актьори, защото според мен се губи смисъла
да видиш информацията за актьорите преди да си натиснал бутона :)
*/ 
?>