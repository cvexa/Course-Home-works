<?php
// Домашно зад. 5*Направете функция, с която да генерирате парола с различна
// дължина, която да съдържа малки, големи букви и цифри


function generate_pw(){
 $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $result = '';
    $lenght=rand(5,20);
    for ($i = 0; $i < $lenght; $i++)
        $result .= $characters[mt_rand(0, 61)];
    echo "<p>TAB F5/REFRESH TO GENERATE : </p>";
    echo $result;
}



generate_pw();









?>