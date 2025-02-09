<?php

echo "Bem-vindo(a) ao\t screen match!\n";

$nomeFilme = "Top Gun - Maverick\n";

$anoLancamento =  2022;

$qntdDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$somaDeNotas = 0;
//foreach($notas as $nota){
//    $somaDeNotas += $nota;
//}
var_dump($notas);
$notaFilme =  array_sum($notas) / $qntdDeNotas;

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

$filmes = [
    "nome" => "Thor: ragnarok",
    "ano" => 2021,
    "nota"=> 7.8,
    "genero" =>"super-herói",
];

