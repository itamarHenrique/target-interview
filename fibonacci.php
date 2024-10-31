<?php

function fibonacci($numero)
{
    if ($numero <= 0) {
        return 0;
    } else if ($numero === 1) {
        return 1;
    } else {
        return fibonacci($numero - 1) + fibonacci($numero - 2);
    }

    
}


function pertenceFibonacci($numero)
{
    $fibonacci = 0;
    $i = 0;

    while ($fibonacci < $numero){
        $fibonacci = fibonacci($i);
        $i++;
    }

    return $fibonacci === $numero;

}

echo "Insira um numero: ";
$numero = fgets(STDIN);

if(pertenceFibonacci($numero)){
    echo "O numero $numero pertence a sequencia.\n";
}else{
    echo "O numero $numero não pertence a sequencia\n";
}