<?php

$ano = "2010";
$penultimoNumero = $ano[2];
$ultimoNumero = $ano[3];
$numerosFinais = "$penultimoNumero$ultimoNumero";

if (($numerosFinais % 4 ==0  && $ano % 100 !=0) || $ano % 400 ==0){
    echo "o ano $ano é bissexto";
}else{
    echo "o ano $ano não é bissexto";
}

