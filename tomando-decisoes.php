<?php

echo "Bem-vindo(a) ao\t screen match!\n";

$nomeFilme = "top gun - maverick\n";


$anoLancamento = $argv[1] ?? 2022;


$somaDeNotas = 9 + 6 + 8 + 7.5 + 5;
$notaFilme =  $somaDeNotas / 5;

$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "nome do filme: " . $nomeFilme. "\n";
echo "nota do filme: $notaFilme\n";
echo "ano de lançamento : $anoLancamento\n";

if ($anoLancamento > 2022){
    echo "esse filme é um lançamento";
}elseif ($anoLancamento >2020 && $anoLancamento <= 2022 ){
    echo "esse filme ainda é novo";
}else{
    echo"esse filme não é um lançamento";
}