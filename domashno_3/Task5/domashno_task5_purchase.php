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


$item_selected=$_SESSION['items'];
$moneybalance= $_SESSION['moneybalance'];
$user= $_SESSION['username'];

$flash=35;
$mouse=15.99;
$head=25;
$dvd=5;
$mpad=48;

$sum1= ($moneybalance-$flash);
$sum2= ($moneybalance-$mouse);
$sum3= ($moneybalance-$head);
$sum4= ($moneybalance-$dvd);
$sum5= ($moneybalance-$mpad);

echo "<h1>$user</h1>";
echo "След като успешно закупихте $item_selected:";

switch ($item_selected) {
        		case 'Флашка50GB':
        			echo "<p>Останахте с $sum1 лв. баланс по сметката!</p>";
                   break;
                case 'МишкаUSB':
        			echo "<p>Останахте с  $sum2 лв. баланс по сметката!</p>";
        			break;
        			case 'Слушалки':
        			echo "<p> Останахте с  $sum3 лв. баланс по сметката!</p>";
        			break;
        			case 'ДВДдиска':
        			echo "<p> Останахте с  $sum4 лв. баланс по сметката!</p>";
        			break;
        			case 'Клавиатура':
        			echo "<p> Оставате с $sum5 лв. баланс по сметката!</p>";
        
        			break;

        		
        		default:
        			
        			break;
        	}


?>
<!HTML>
<head>
    <title>payment code operations</title>


    <style type="text/css">
    
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
<?php
session_destroy();
?>