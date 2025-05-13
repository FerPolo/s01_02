
<?php

$x=1;
$y=2;
$n=2.5;
$m=3.6;

echo "$x \n";
echo "$y \n";

echo "$x+$y\n";
echo"$x - $y \n";
echo "$x * $y \n";
echo "$x % $y  \n";

echo "$n \n";
echo "$m \n";

echo "$n+$m  \n";
echo "$n - $m  \n";
echo "$n * $m  \n";
echo "$n % $m  \n";

echo "$x * 2   \n";
echo "$y * 2   \n";
echo "$n *2   \n";
echo "$m * 2   \n";

echo "$x+$y+$n+$m \n";
echo "$x*$y*$n*$m \n";





function calculadora($a,$b){

    $z = $a+$b;
    return $z;

}

echo calculadora(3,2);

?>