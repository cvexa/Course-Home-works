<?php
header('content-type:text/html; charset=utf-8');
/* Comment 
Домашно зад. 2.В тази задача , също както и в предишната, изискайте
от потребителя да въвежда данни в първата част от файла и поставете
кода за обработката им във втората част, като използвате if-else. В
първата част дайте възможност на потребителя да въведе ден от
седмицата - на англ. език. и в зависимост от това, да се появява ред от
поема, съдържащ ден от седмицата.
За втората част, ще ви трябва следната поема -
Laugh on Monday, laugh for danger.
Laugh on Tuesday, kiss a stranger.
Laugh on Wednesday, laugh for a letter.
Laugh on Thursday, something better.
Laugh on Friday, laugh for sorrow.
Laugh on Saturday, joy tomorrow.
 Comment */

$mon="Monday";
$tue="Tuesday";
$wed="Wednesday";
$thu="Thursday";
$fri="Friday";
$sat="Saturday";
$sun="Sunday";

 if ($_POST['day'] == $mon) {
 	echo "Laugh on Monday, laugh for danger.";
 }elseif ($_POST['day'] == $tue) {
 	echo "Laugh on Tuesday, kiss a stranger.";
 }elseif ($_POST['day'] == $wed) {
 	echo "Laugh on Wednesday, laugh for a letter.";
 }elseif ($_POST['day'] == $thu) {
 	echo "Laugh on Thursday, something better.";
 }elseif ($_POST['day'] == $fri) {
 	echo "Laugh on Friday, laugh for sorrow.";
 }elseif ($_POST['day'] == $sat){
 	echo "Laugh on Saturday, joy tomorrow.";
 }elseif ($_POST['day'] == $sun) {                      //Добавено от мен, в задачата липсваше НЕДЕЛЯ
 	echo "Laugh on Sunday, to prepare for new week.";   //Добавено от мен, в задачата липсваше НЕДЕЛЯ
 }
 else{
 	echo "Please enter valid day!!! (Please be adviced that first letter is in uppercase.) ";
 }



?>
