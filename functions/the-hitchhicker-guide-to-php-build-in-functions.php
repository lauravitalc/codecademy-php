<?php
$initial = '555';

// Conversão de decimal para octal
$a = octdec($initial);
echo $a;
echo "\n";

// Conversão de radians para degrees

$b = deg2rad($a);
echo $b;
echo "\n";

// Conversão para cosceno

$c = cos($b);
echo $c;
echo "\n";

// Conversão para 3 decimais

$d = round($c, 3);
echo $d;
echo "\n";

// Achar o natural log de $d e assimilar a $e

$e = log($d);
echo $e;
echo "\n";

// Valor absolute de $e e colocar em $f

$f = abs($e);
echo $f;
echo "\n";

// Inversão do cosceno de $f

$g = acos($f);
echo $g;
echo "\n";

// Conversão de radians para degrees

$h = rad2deg($g);
echo $h;
echo "\n";

// floor the number

$i = floor($h);
echo $i;
echo "\n";

// subtração

$j = $i - 47; // Resultado: 42. O número da vida e tudo mais! DON'T PANIC!
echo $j;
echo "\n"; 