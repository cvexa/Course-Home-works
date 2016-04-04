<?php
// . Домашно зад. 2 Да се направи функция за кодиране на даден текст на английски
// по следния начин: на първата половина от текст всички букви ‘a’ се сменят от ‘u’
// и всички букви ‘t’ се заменят от ‘v’. Във втората половина от текста – всички
// букви ‘e’ се заменят от ‘o’ и всички ‘s’ се заменят от ‘p’. Да се извика функцията
// за 2 различни текста.

function code($a){
	


echo "a = u, t = v ";
$ha=print str_replace(
    array("a","t"),
    array("u", "v"),
    "<p>".$a."</p>");
 

echo "e = o, s = p ";    
print str_replace(
    array("e","s"),
    array("o", "p"),
    "<p>".$a."</p>");

}


	



$a="attttttteeeeeeesssssss sdfsd fsd fasd faas daaaf";
$b="Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
code($a);
code($b);















?>