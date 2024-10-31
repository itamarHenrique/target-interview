<?php

function verificarString($texto)
{
    $textoLower = strtolower($texto);
    $ocorrencia = substr_count($textoLower, 'a');

    if($ocorrencia > 0){
        echo "A letra 'a' (maiuscula ou minuscula) ocorre $ocorrencia vezes.\n";
    }else{
        echo "A letra 'a' não está presente.\n";
    }
}


echo "Insira um texto: ";
$texto = trim(fgets(STDIN));

verificarString($texto);