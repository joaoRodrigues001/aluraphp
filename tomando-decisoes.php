<?php

echo "Bem-vindo(a) ao\t screen match!\n";

$nomeFilme = "Top Gun - Maverick\n";
$nomeFilme = "Thor: Ragnarok\n";
$nomeFilme = "Se beber não case\n";




$anoLancamento =  2022;

$qntdDeNotas = $argc - 1;
$somaDeNotas = 0;


for ($contador = 1; $contador < $argc; $contador++) {
    $somaDeNotas += $argv[$contador];
}
//$contador = 1;
//while($argv[$contador] != 0){
//    $somaDeNotas += $argv[$contador++];

//}


$notaFilme =  $somaDeNotas / $qntdDeNotas;

$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;


echo "nome do filme: " . $nomeFilme. "\n";
echo "nota do filme: $notaFilme\n";
echo "ano de lançamento : $anoLancamento\n";


if ($anoLancamento > 2022){
    echo "esse filme é um lançamento\n";
}elseif ($anoLancamento >2020 && $anoLancamento <= 2022 ){
    echo "esse filme ainda é novo\n";
}else{
    echo"esse filme não é um lançamento\n";
}

$genero = match ($nomeFilme){
    "Top Gun - Maverick\n" => "ação",
    "Thor: Ragnarok\n" => "super-herói",
    "Se beber não case\n" => "comédia",
    default => "gênero desconhecido",
};


echo " o genero do filme é $genero\n";

