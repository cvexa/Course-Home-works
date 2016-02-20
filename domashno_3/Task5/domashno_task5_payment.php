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


$creditcard= $_POST['creditcard'];
$moneybalance= $_POST['moneybalance'];



$flash=35.00;
$mouse=15.99;
$head=25.00;
$dvd=5.00;
$mpad=48.00;

$sum1= ($moneybalance - 35);
$sum2= ($moneybalance - $mouse);
$sum3= ($moneybalance - $head);
$sum4= ($moneybalance - $dvd);
$sum5= ($moneybalance - $mpad);

if ($creditcard == NULL && moneybalance == NULL) {

	echo "Попълнете номер на кредитна карта и баланса по сметката!";
    }elseif($creditcard == NULL) {
		echo "Попълнетe Номер на кредитната карта!";
	}elseif ($moneybalance == NULL) {
		echo "Попълнете Сумата с която разполагате!";
	}else{
         echo "<h1> " . $_SESSION['username'] .  " да продължим ли ?  </h1>";
	
	if (isset($_POST['items'])) {
       
        $item_selected = $_POST['items']; 
       
       
        	switch ($item_selected) {
        		case 'Флашка50GB':
                if($sum1>-1){
        			echo " Избрахте да закупите $item_selected , 
        разполагате с $moneybalance лв. като ви таксуваме с цената на стоката $flash лв, 
        оставате с $sum1 лв.баланс по сметката!
        <p>$moneybalance лв. - $flash лв. = $sum1 лв. 
         <div id='go'>
         <a href='domashno_task5_purchase.php'>КУПИ</a>
         </div></p>";
                }else{
                    echo "Нямате пари за Флашка 50GB!"; 
                }
                   break;
                case 'МишкаUSB':
                if($sum2>-1){
        			echo " Избрахте да закупите $item_selected , 
        разполагате с $moneybalance лв. като ви таксуваме с цената на стоката $mouse лв, 
        оставате с $sum2 лв.баланс по сметката!
        <p>$moneybalance лв. - $mouse лв. = $sum2 лв.
        <div id='go'>
        <a href='domashno_task5_purchase.php'>КУПИ</a>
        </div> </p>";
                }else{
                    echo "Нямате пари за Мишка!";
                }
        			break;
        			case 'Слушалки':
                if($sum3>-1){    
        			echo " Избрахте да закупите $item_selected , 
        разполагате с $moneybalance лв. като ви таксуваме с цената на стоката $head лв, 
        оставате с $sum3 лв.баланс по сметката!
        <p>$moneybalance лв. - $head лв. = $sum3 лв.
        <div id='go'>
        <a href='domashno_task5_purchase.php'>КУПИ</a>
        </div> </p>";
                }else{
                    echo "Нямате пари за Слушалки!";
                }
        			break;
        			case 'ДВДдиска':
                if($sum4>-1){    
        			echo " Избрахте да закупите $item_selected , 
        разполагате с $moneybalance лв. като ви таксуваме с цената на стоката $dvd лв, 
        оставате с $sum4 лв.баланс по сметката!
        <p>$moneybalance лв. - $dvd лв. = $sum4 лв.
        <div id='go'>
        <a href='domashno_task5_purchase.php'>КУПИ</a>
        </div> </p>";
                }else{
                    echo "Нямате пари за 10 ДВДдиска!";
                }
        			break;
        			case 'Клавиатура':
                if($sum5>-1){    
        			echo " Избрахте да закупите $item_selected , 
        разполагате с $moneybalance лв. като ви таксуваме с цената на стоката $mpad лв, 
        оставате с $sum5 лв.баланс по сметката!
        <p>$moneybalance лв. - $mpad лв. = $sum5 лв.
        <div id='go'>
        <a href='domashno_task5_purchase.php'>КУПИ</a>
        </div> </p>";
                }else{
                    echo "Нямате пари за Клавиатура!";
                }
        			break;

        		
        		default:
        			
        			break;
        	}
            $_SESSION['items']=$item_selected;
            $_SESSION['moneybalance']=$moneybalance;



        		
        	
       
        
        
    
    }
        
		
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
        

    }#go{
        display:inline-block;
        background-color: #07B649;
        padding: 7px;

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