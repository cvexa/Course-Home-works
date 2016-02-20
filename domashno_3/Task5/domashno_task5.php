<?php
header('content-type:text/html; charset=utf-8');
session_unset();
session_start();








if (!empty($_POST['username'])) {
	$_POST['username'] = $_SESSION['username'];
}


?>
<!HTML>
<head>
    <title>Login operations</title>


    <style type="text/css">
    #hello{
    	text-align: center;
    	font-weight: bold;
    	display: inline-block;
    	border:5px solid blue;
    	margin-left:40%;
    	margin-right: 40%;
    	padding:5px;

    }
    body{
        background-color: #EEF1CC;
    }


    </style>
</head>
<body>

<div id='hello'><form action="domashno_task5_login.php" method="post">
 <p>Здравейте, добре дошли в нашия магазин Е-МАНИЯ!</p>
 <p>Въведете потребител и парола, за да продължите :</p>
<input type='text' name='username' placeholder='Потребителско име ...'>
<input type='password' name='password' placeholder='Парола ...'>
<input type='submit' name='submit' value='Влез'>
 </form></div>
   
    
</body>
</html>






















