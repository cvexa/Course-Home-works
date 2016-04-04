<?php
// Домашно зад. 1 Декларирайте функция, която отпечатва всички малки букви,
// всички големи букви или всички цифри от текст. Текстът да се въвежда с форма
// и чрез радиобутон да се избира кои знаци от текста да се отпечатват. 
	function big($param){

		$code=preg_match_all('/[A-Z]+/', $param, $matches);
		$counter=count($matches,1);
		
		echo "<pre>Original text :";
		echo "$param";
		echo "</pre>";
        echo "<p>I Printed only the Uppercase Letters: </p>";
		for ($i=0; $i < 1; $i++) { 
			for ($k=0; $k < ($counter-1); $k++) { 
				echo $matches[$i][$k].' - ';
			}
		}
	}
    function small($param){

		$code=preg_match_all('/[a-z]+/', $param, $matches);
		$counter=count($matches,1);
		
		echo "<p>Original text :</p>";
		echo "<pre>";
		echo "$param";
		echo "</pre>";
        echo "<p>I Printed only the Lowercase Letters: </p>";
		for ($i=0; $i < 1; $i++) { 
			for ($k=0; $k < ($counter-1); $k++) { 
				echo $matches[$i][$k].' - ';
			}
		}
	}	
	 function numbers($param){

		$code=preg_match_all('/[0-9]+/', $param, $matches);
		$counter=count($matches,1);
		
		echo "<p>Original text :</p>";
		echo "<pre>";
		echo "$param";
		echo "</pre>";
        echo "<p>I Printed only the Numbers in that text: </p>";
		for ($i=0; $i < 1; $i++) { 
			for ($k=0; $k < ($counter-1); $k++) { 
				echo $matches[$i][$k].' - ';
			}
		}
	}	

if (empty($_GET['submit'])) {
	

echo "<form action='domashno_task1.php' method='get'>";
//echo "<input type='text' name='text' placeholder='enter some text...'>";
echo "<textarea style='resize:none' rows='20' cols='50' name='text' placeholder='enter some text...'></textarea> ";
echo "<p><input id='low' type='radio' name='symbols' value='small'>
<label for='low'>Print only lowercase</label>";
echo "<input id='big'type='radio' name='symbols' value='big'>
<label for='big'>Print only upercase</label>";
echo "<input id='num'type='radio' name='symbols' value='numbers'>
<label for='num'>Print only numbers</label></p>";
echo "<p><input type='submit' name='submit' value='go'></p>";

}else{
$a=$_GET['text'];
$get=$_GET['symbols'];
$b="big";
$c="small";
$e="numbers";
if ($get == $b) {
	big($a);
}elseif ($get == $c) {
	small($a);
}elseif ($get == $e) {
	numbers($a);
}

 	
	    
	   
			
			
		
		
		
	

}

?>