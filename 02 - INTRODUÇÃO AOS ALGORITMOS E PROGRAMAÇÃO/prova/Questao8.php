<?php

// Questão 8

// Os números dos ingressos geralmente consistem
// em um número par de dígitos.
// Considere para essa questão que um número
// de bilhete é considerado de sorte
// se a soma da primeira metade dos dígitos
// for igual à soma da segunda metade.

// Dado um número de bilhete n, determine se é sorte ou não.

// Exemplo

// Para $n = 1230, o retorno deve ser  true;
// Para $n = 239017, o retorno deve ser false;

function isLucky($n)
{
    $t = strlen($n); // Quantidade de caracteres da string
    $lista = str_split($n, $t/2); // Separa e cria um array com a string dividida

    $p = array();
    foreach ($lista as $key => $value) {
        $separa = str_split($value);
        $p[] = array_sum($separa); // soma os valores do array, nesse caso ta somando o valor dos arrays separado
    }

    //print_r($p);

    if ($p[0] == $p[1]) {
        echo "True";
    }else{
        echo "False";
    }
}

echo "😜<br>";

$n = (string)261534;
isLucky($n);