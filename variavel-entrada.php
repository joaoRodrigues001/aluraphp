<?php

echo "Bem-vindo(a) ao screen match!\n\n\n";

$nomeFilme = "top gun - maverick\n";
$anoLancamento = $argv[1] ??  2022 ;
$incluidoNoPlano = false;
$somaDeNotas = 9 + 6 + 8 + 7.5 + 5;
$notaFilme = $somaDeNotas / 5;

if ($anoLancamento >= 2022){
    $incluidoNoPlano = true;
} 
echo "nome do filme: " . $nomeFilme. "\n";
echo "nota do filme: $notaFilme\n";
echo "ano de lançamento : $anoLancamento \n";
echo "filme incluso no plano: $incluidoNoPlano\n";