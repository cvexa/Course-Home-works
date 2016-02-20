<?php
header('content-type:text/html; charset=utf-8');

/* Comment

Да се напише програма, която намира N­тото число на
Фибоначи.
a. Да се напише програма, която намира всички числа на Фибоначи от
1 до N.

*/
function fibonacci($n,$first = 0,$second = 1)
{
    $fib = [$first,$second];
    for($i=1;$i<$n;$i++)
    {
        $fib[] = $fib[$i]+$fib[$i-1];
    }
    return $fib;
}
echo "<pre>";
print_r(fibonacci(50));
echo "</pre>";
?>