<?php
header('content-type:text/html; charset=utf-8');

/* Comment
Домашно зад. 1 Създайте двумерен масив с информация за три имена на ученик /5 ученика/, 4
оценки по предмета.
a. Отпечатайте информацията, съдържаща се в масива, в таблица.
b. Изчислете средния успех на всеки ученик по предмета и го добавете в масива.
c. Изчислете средния успех на учениците по съответния предмет.

*/




$students=array(array('Иван Петров Каменов' ,'Математика','География','История','Български език',),
            array('Стоян Мирчев Аврамов' ,'Математика','География','История','Български език',),
            array('Валери Богомилов Тодорски' ,'Математика','География','История','Български език',),
            array('Персияна Радомирска Сиянова' ,'Математика','География','История','Български език',),
            array('Никол Патрисиева Герганова' ,'Математика','География','История','Български език',),);
$count=count($students);


	
	
$a=2;
$b=3;
$c=4;
$d=5;
$e=6;



echo '<table border="1" id="table">';
echo "<tr>";
echo "<td>Ученик</td>";
echo "<td>".$students['0']['1']."</td>";
echo "<td>".$students['1']['2']."</td>";
echo "<td>".$students['2']['3']."</td>";
echo "<td>".$students['3']['4']."</td>";

echo "<td>Средна Оценка</td>";

echo "</tr>";
//реда за Иван
echo "<tr>";
echo "<td>".$students['0']['0']."</td>";
echo "<td> ($b),($c),($b),($d)</td>";
echo "<td> ($d),($a),($e),($b)</td>";
echo "<td> ($a),($c),($c),($d)</td>";
echo "<td> ($d),($b),($c),($d)</td>";
$ivan=($b+$c+$b+$d+$d+$a+$e+$b+$a+$c+$c+$d+$d+$b+$c+$d)/16;
$students['0']['grade']=$ivan;//създаваме в масива нов елемент = средна оценка
echo "<td>".number_format($students['0']['grade'],2)."</td>";//средна оценка на Иван за предметите
echo "</tr>";
//реда за Стоян
echo "<tr>";
echo "<td>".$students['1']['0']."</td>";
echo "<td> ($a),($b),($b),($c)</td>";
echo "<td> ($e),($e),($d),($c)</td>";
echo "<td> ($b),($b),($e),($d)</td>";
echo "<td> ($a),($c),($e),($b)</td>";
$stoqn=($a+$b+$b+$c+$e+$e+$d+$c+$b+$b+$e+$d+$a+$c+$e+$b)/16;
$students['1']['grade']=$stoqn;//създаваме в масива нов елемент = средна оценка
echo "<td>".number_format($students['1']['grade'],2)."</td>";//средна оценка на Стоян за предметите
echo "</tr>";
//реда за Валери
echo "<tr>";
echo "<td>".$students['2']['0']."</td>";
echo "<td> ($c),($d),($e),($d)</td>";
echo "<td> ($a),($a),($d),($c)</td>";
echo "<td> ($d),($c),($e),($e)</td>";
echo "<td> ($b),($b),($e),($d)</td>";
$valeri=($c+$d+$e+$d+$a+$a+$d+$c+$d+$c+$e+$e+$b+$b+$e+$d)/16;
$students['2']['grade']=$valeri;//създаваме в масива нов елемент = средна оценка
echo "<td>".number_format($students['2']['grade'],2)."</td>";//средна оценка на Валери за предметите
echo "</tr>";
//реда за Персияна
echo "<tr>";
echo "<td>".$students['3']['0']."</td>";
echo "<td> ($e),($e),($e),($d)</td>";
echo "<td> ($d),($d),($c),($c)</td>";
echo "<td> ($e),($c),($e),($e)</td>";
echo "<td> ($e),($b),($c),($d)</td>";
$persi=($e+$e+$e+$d+$d+$d+$c+$c+$e+$c+$e+$e+$e+$b+$c+$d)/16;
$students['3']['grade']=$persi;//създаваме в масива нов елемент = средна оценка
echo "<td>".number_format($students['3']['grade'],2)."</td>";//средна оценка на Персияна за предметите
echo "</tr>";
//реда за Никол
echo "<tr>";
echo "<td>".$students['4']['0']."</td>";
echo "<td> ($c),($c),($c),($d)</td>";
echo "<td> ($d),($d),($c),($e)</td>";
echo "<td> ($b),($e),($c),($e)</td>";
echo "<td> ($b),($c),($e),($b)</td>";
$nikol=($c+$c+$c+$d+$d+$d+$c+$e+$b+$e+$c+$e+$b+$c+$e+$b)/16;
$students['4']['grade']=$nikol;//създаваме в масива нов елемент = средна оценка
echo "<td>".number_format($students['4']['grade'],2)."</td>";//средна оценка на Никол за предметите
echo "</tr>";
//Средна оценка по предметите 
$math=($b+$c+$b+$d+
          $a+$b+$b+$c+
          $c+$d+$e+$d+
          $e+$e+$e+$d+
          $c+$c+$c+$d)/20;//Математика
$geog=($d+$a+$e+$b+
          $e+$e+$d+$c+
          $a+$a+$d+$c+
          $d+$d+$c+$c+
          $d+$d+$c+$e)/20;//География
$history=($b+$e+$c+$e+
         $e+$c+$e+$e+
         $d+$c+$e+$e+
         $b+$b+$e+$d+
         $a+$c+$c+$d)/20;//История 
$bg=($b+$c+$e+$b+
         $e+$b+$c+$d+
         $b+$b+$e+$d+
         $a+$c+$e+$b+
         $d+$b+$c+$d)/20;//Български език    


echo "<tr>";
echo "<td>Средна Оценка на предметите:</td>";
echo "<td>".number_format($math,2)."</td>";//по 2 знака след запетята
echo "<td>".number_format($geog,2)."</td>";//по 2 знака след запетята
echo "<td>".number_format($history,2)."</td>";//по 2 знака след запетята
echo "<td>".number_format($bg,2)."</td>";//по 2 знака след запетята
echo "<td> - </td>";
echo "</tr>";



echo '</table>';

?>
<!HTML>
 <head>
 	<meta charset="UTF-8">
 	<title>task01</title>
 	<meta charset="UTF-8">
<style type="text/css">
#table{
	text-align: center; 
}
</style>
 </head>
 <body>
 	</body>
 	</html>