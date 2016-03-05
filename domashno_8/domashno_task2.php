<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Домашно зад 2 Декларирайте функция, която преброява колко пъти дадено число се
появява в даден масив. Ако числото не е елемент на масива, функцията трябва да
връща съответния отговор.
*/

//създаване на функцията
function checker($check,$counter,$number){//масив,брояч на масива,число за проверка 
	    $exist=0;//брояч за съвпадения 0
		for ($i=0; $i < $counter ; $i++) { //цикъл за обхождане на елементите на масива 
		if ($check[$i] == $number) {//ако някой елемент е равен на избраното число
			$exist++;//започваме да бройм, като прибавяме 1
			

		}
	}
	if ($exist > 0) {//ако числото се среща отпечатваме колко пъти,
		echo "<p>Да $number, го има $exist пъти!</p>";
	}else{
			echo "<p>Не $number го няма в този масив!</p>";//ако не се среща отпечатваме НЕ
		}

}



	

$arr = array('9','1','3','4','3','6','1','8','9','1');//дадения масив
$counter=count($arr);//брояча на елементите в масива 




if (!isset($_GET['submit'])) {//ако не е натиснат бутона провери 
echo "<form action='domashno_task2.php' method='get'>";
echo "<p>Дали<input type='number' name='number_r' placeholder='въведи число'>го има в масива ? ";//форма за число за проверка
echo "<input type=submit name='submit' value='провери!'>";
echo "</form>";

echo "<p>Масив : </p>";
echo "<pre>";
print_r($arr);
echo "</pre>";
}else{//ако е натиснат 
echo "<form action='domashno_task2.php' method='get'>";
echo "<p>Дали<input type='number' name='number_r' placeholder='въведи число'>го има в масива ? ";
echo "<input type=submit name='submit' value='провери!'>";
echo "</form>";
$user_number=$_GET['number_r'];//числото за проверка, въведено от потребител
echo "<p>Масив : </p>";
echo "<pre>";
print_r($arr);
echo "</pre>";





checker($arr,$counter,$user_number);//използване на функцията
}







	
	
	
	

		

		
	


	





	









?>