<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Домашно зад. 4*Да се напише програма, която по зададен
текст оцветява думите последователно в зелено и червено.
Например: Поражението на византийците и покоряването от
страна на прабългарите на завареното население завършва
със сключването на мирен договор през лятото на 681г., чрез
който Аспарухова България е призната от Византия.
Използвайте функцията explode(), която превръща текста в
масив.
a. *Да се редуват 3 цвята: бяло / зелено / червено на сив
фон.


*/

$text="Поражението на византийците и покоряването от
страна на прабългарите на завареното население завършва
със сключването на мирен договор през лятото на 681г., чрез
който Аспарухова България е призната от Византия.";

echo "<p>Оригинален текст: <p>$text</p></p>";
echo "<p>Текста след обработка според задачата :</p>";

$white=array(0,3,6,9,12,15,18,21,24);
foreach ($white as $key_white) {
	# code...
}
$green=array(1,4,7,10,13,16,19,22,25);
foreach ($green as $key_green) {
	# code...
}
$red=array(2,5,8,11,14,17,20,23,26);
foreach ($red as $key_red) {
	# code...
}

echo "<div id='txt'>";
$text2=(explode(" ",$text));

foreach ($text2 as $key2 => $text_color)
$arr = array(      0 => 'Поражението',
                   1 => 'на',
                   2 => 'византийците',
                   3 => 'и',
                   4 => 'покоряването',
                   5 => 'от страна' ,
                   6 => 'на',
                   7 => 'прабългарите',
                   8 => 'на',
                   9 =>  'завареното',
                   10 => 'население' ,
                   11 => 'завършва със',
                   12 => 'сключването' ,
                   13 => ' на',
                   14 => 'мирен',
                   15 => 'договор',
                   16 => 'през', 
                   17 => 'лятото',
                   18 => 'на',
                   19 => '681г',
                   20 => 'чрез който', 
                   21 => 'Аспарухова',
                   22 => 'България',
                   23 => 'е',
                   24 => 'призната',
                   25 => 'от',
                   26 => 'Византия.',) ;
foreach ($arr as $key => $text_text) {
	
		switch ($key) {
			case '$key_white':
				echo "<font color='white'>$arr[0]  </font>";
				
			case '$key_green':
				echo "<font color='green'>$arr[1]  </font>";
				

			case '$key_red':
				echo "<font color='red'>$arr[2]  </font>";

			case '$key_white':
				echo "<font color='white'>$arr[3]  </font>";
				
			case '$key_green':
				echo "<font color='green'>$arr[4]  </font>";
				

			case '$key_red':
				echo "<font color='red'>$arr[5]  </font>";

			case '$key_white':
				echo "<font color='white'>$arr[6]  </font>";
				
			case '$key_green':
				echo "<font color='green'>$arr[7]  </font>";
				

			case '$key_red':
				echo "<font color='red'>$arr[8]  </font>";

			case '$key_white':
				echo "<p><font color='white'>$arr[9]  </font>";
				
			case '$key_green':
				echo "<font color='green'>$arr[10]  </font>";
				

			case '$key_red':
				echo "<font color='red'>$arr[11]  </font>";

			case '$key_white':
				echo "<font color='white'>$arr[12]  </font>";
				
			case '$key_green':
				echo "<font color='green'>$arr[13]  </font>";
				

			case '$key_red':
				echo "<font color='red'>$arr[14]  </font>";	

			case '$key_white':
				echo "<font color='white'>$arr[15]  </font>";
				
			case '$key_green':
				echo "<font color='green'>$arr[16]  </font>";
				

			case '$key_red':
				echo "<font color='red'>$arr[17]  </font></p>";				
            

            case '$key_white':
				echo "<font color='white'>$arr[18]  </font>";
				
			case '$key_green':
				echo "<font color='green'>$arr[19]  </font>";
				

			case '$key_red':
				echo "<font color='red'>$arr[20]  </font>";

			case '$key_white':
				echo "<font color='white'>$arr[21]  </font>";
				
			case '$key_green':
				echo "<font color='green'>$arr[22]  </font>";
				

			case '$key_red':
				echo "<font color='red'>$arr[23]  </font>";	

			case '$key_white':
				echo "<font color='white'>$arr[24]  </font>";
				
			case '$key_green':
				echo "<font color='green'>$arr[25]  </font>";
				

			case '$key_red':
				echo "<font color='red'>$arr[26]  </font>";	
            break;

			default:
				# code...
				break;
		}
	}


		
	

echo "</div>";

	
?>
<!html>
<head>
<title>Task4</title>
<style type="text/css">
#txt{
	background-color: grey;
	width: 600px;
	font-weight: bold;
}
</style>
</head>
<body>
</body>
</html>