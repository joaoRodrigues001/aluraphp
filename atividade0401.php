<?php

$numerosfornecidos = [];
$numeroscorrigidos = [];

for ($i = 1; $i < $argc; $i++){
    $numerosfornecidos[] = (float) $argv[$i];
}

for ($i = 0; $i < count($numerosfornecidos); $i++){
   if ($numerosfornecidos[$i] != $numerosfornecidos){
        $numeroscorrigidos[] += $numerosfornecidos; 
    }
    
}


var_dump($numerosfornecidos);
echo "quebrei o codigo aq";

var_dump($numerosfornecidos);