<?php
$integer = 34;
$double = 3.14;
$line = 'string';
$$line = "в строке :)!";
$true_bool = True;
$false_bool = False;
$null = null;
const WATER = "H2O";
$ref =&$integer;
?>

<?php
$sum = $integer + $double;
$x = $double * 10;
if ($true_bool && $double>0 )
    $masage = 'Условия соблюдены :)';
else
    $masage = 'Не соблюдены :(';
$modulo = $integer % $double;