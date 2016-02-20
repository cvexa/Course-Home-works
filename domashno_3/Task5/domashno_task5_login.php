<?php
/* Домашно зад. 5*.Да се направи демо-версия на онлайн магазин „е-
Мания”. Потребител влиза в системата като попълва потребителско име
и парола. След това вижда списък с продукти(поне 5) като всеки продукт
си има цена. Потребителя си избира продукт(и), въвежда номер на
дебитна/кредитна карта и налична сума пари. След това му се показва
какви продукти си е купил и колко пари са му останали налични.б) Да се
направи страница за потвържение преди покупката, която показва на
потребителя какви продукти е избрал и колко пари ще му останат и той
може да избере Потвърди или Отхвърли

Cooments*/ 
session_start();

$user= $_POST['username'];
$pass= $_POST['password'];
$_SESSION['username']=$user;

if ($pass == NULL && $user == NULL) {

	echo "Попълнете потребител и парола!";
    }elseif($pass == NULL) {
		echo "Попълнетe Парола!";
	}elseif ($user == NULL) {
		echo "Попълнете Потребител!";
	}else{
	echo "<h1> Здравейте $user , предлагаме ти : </h1>";

    $flash=35.00;
    $mouse=15.99;
    $head=25.00;
    $dvdp=5.00;
    $pad=48.00;


	echo "<table border='1'>";
	echo  "<tr>";
	echo  "<td id='product'>Продукт </td>";
	echo  "<td id='price'>Цена </td>";
	echo  "</tr>";
	
	echo  "<tr>";
	echo  "<td id='item'>Флашка 50GB </td>";
	echo  "<td id='pr'>$flash Лева </td>";
	echo  "</tr>";

	echo  "<tr>";
	echo  "<td id='item'>Мишка USB </td>";
	echo  "<td id='pr'>$mouse Лева </td>";
	echo  "</tr>";

	echo  "<tr>";
	echo  "<td id='item'>Слушалки </td>";
	echo  "<td id='pr'>$head Лева </td>";
	echo  "</tr>";

	echo  "<tr>";
	echo  "<td id='item'>100 ДВД диска </td>";
	echo  "<td id='pr'>$dvdp Лева </td>";
	echo  "</tr>";

	echo  "<tr>";
	echo  "<td id='item'>Клавиатура </td>";
	echo  "<td id='pr'>$pad Лева </td>";
	echo  "</tr>";

	echo  "</table>";   //край на продуктите

	echo  "<h2>Ако желаете да закупите някой от продуктите изберете : </h2>";

	echo "<form name='items_select' action='domashno_task5_payment.php' method='post'>";
	echo "<select name='items'>";
	echo "<option value='Флашка50GB'>Флашка</option>";
	echo "<option value='МишкаUSB'>Мишка</option>";
	echo "<option value='Слушалки'>Слушалки</option>";
	echo "<option value='ДВДдиска'>100 ДВД диска</option>";
	echo "<option value='Клавиатура'>Клавиатура</option>";
	echo "</select>";
	
	echo "<form>";
	echo "<p>Моля попълнете номера на креднита си карта, и с какви пари разполагате : </p>";
	echo "<p><input type ='text' name='creditcard' placeholder='Номер на кредитна карта...'>*</p>";
	echo "<p><input type ='text' name='moneybalance' placeholder='Нaлични средства ...'>лв.*
	/Без валутните знаци само цифри (например 22.10) вместо запетая използвайте точка./</p>";

	echo "<input type ='submit' name='submit' value='Купи'>";   //закупуване
    echo "</form>";
	echo "</form>";

	echo "<p>Полетата с * са задължителни!!!</p>";



	
}















?>
<!HTML>
<head>
	<title>Login code operations</title>


	<style type="text/css">
    #pr{
    	text-align: center;
    	background-color: #3CF6EF;
    }
    #item{
    	text-align: center;
    	background-color: #07B649;
    }
    a{
    	text-decoration: none;
    	display: inline-block;
    	color:blue;
    	font-weight: bold;
    	padding:5px;
    	
    }
    #end{
    	display:inline-block;
    	background-color: #07B649;
        padding: 5px;


    }
    #product, #price{
    	background-color: #F36E6E;
    	text-align: center;
    }
    body{
    	background-color: #EEF1CC;
    }


	</style>
</head>
<body>
	<div id="end">
<a href='domashno_task5_end.php'>ИЗХОД</a>
    </div>	
</body>
</html>