<?php
header('content-type:text/html; charset=utf-8');
/* Comment 
Преработете кода на още 2 задачи по избор от
предишната тема, като позволите на потребителя чрез форма да
въвежда стойности, с които да се решават зададените задачи.

2-Напишете програма, която проверява възрастта Ви и в зависимост от възрастта ви
изпраща в пенсия, на работа или на училище.
 Comment */

 
 $age=$_POST['age']; //годините въведени в формата

 if ($age <= 7) {
 	echo "Утивайте на Детска Градина!!!"; //добавено от мен, просто за забавление
 }elseif ($age <= 18) {
 	echo "Утивайте на училище!!!";
 }elseif ($age > 18 && $age <= 60) {
 	echo "Утивайте на работа!!!";
 }elseif ($age > 60) {
 	echo "Почивайте си като пенсионер!!!";
 }else{
 	echo "Грешка";
 }
























 ?>
