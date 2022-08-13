<?php

// Valores padrão

function soma($num1, $num2, $num3=0) {
  $total = $num1 + $num2 + $num3;
  return $total;
}

$x = soma(3,6);
$y = soma(9,33, 66);
$z = soma($x, $y);

echo "Total da soma: ".$x."+".$y." é igual a: ".$z."<br/>";

// Types

function subtrai(int $n1, int $n2) {
  $vlrTotal = $n1 - $n2;
  return $vlrTotal;
}

$a = subtrai(5, 3);
$b = subtrai(10, 9);
$c = subtrai($a, $b);

echo "Total da subtração: ".$a."-".$b." é igual a: ".$c;