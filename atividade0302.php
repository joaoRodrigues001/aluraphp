<?php

$altura = 1.78;
$peso = 70;

$imc = $peso / ($altura ** 2);
echo "seu imc é de $imc\n";

if ($imc < 18.5){
    echo"classificação = magreza";
}elseif($imc >= 18.5 && $imc <24.9){
    echo"classificação = normal";
}elseif ($imc >25.0 && $imc <=29.9) {
    echo"classificação = sobrepeso";
}elseif ($imc >= 30.0 && $imc <39.9) {
    echo"classificação = obesidade";
}elseif ($imc >=40) {
    echo "classificação = obesidade grave";
}else {
    echo "tu é muito gordo/magro man";
}