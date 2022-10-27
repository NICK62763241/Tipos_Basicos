<?php

$valor1 = true;
$valor2 = false;

$resultado1 = $valor1 && $valor2;
echo $resultado1, "<br>";

$valor3 = true;
$valor4 = false;

$resultado2 = $valor3 || $valor4;
echo $resultado2, "<br>";

$valor5 = true;
$valor6 = false;

$resultado3 = !$valor5;
echo $resultado3;