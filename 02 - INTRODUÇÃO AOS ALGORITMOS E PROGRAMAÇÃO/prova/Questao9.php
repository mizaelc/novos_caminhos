<?php

// Questão 9

// Algumas pessoas estão em uma fila no parque.
// As pessoas e as arvores no parque serão representadas
// por um vetor.

// O valor -1 representa uma árvore
// valor positivo representa a altura de uma pessoa

// Existem árvores entre as pessoas e as árvores 
// não não podem ser movidas.

// Sua tarefa é reorganizar as pessoas por suas alturas
// em uma ordem não decrescente, sem mover as árvores.

// Considere que as pessoas podem ser muito altas!

//Exemplo

//Se $a = [-1, 150, 190, 170, -1, -1, 160, 180], 
// o retorno deve ser [-1, 150, 160, 170, -1, -1, 180, 190].

function sortByHeight($a)
{
    // CÓDIGO
}

echo "oi <br>";
$a = [-1, 150, 190, 170, -1, -1, 160, 180];
print_r($a);

$chave = array();
$valor = array();
foreach ($a as $key => $value) {
    if ($value == -1) {
        $chave[$key] = $value;
    }else{
        $valor[$key] = $value;
    }
}

asort($valor);

echo "<br>";
print_r($chave);
echo "<br>";
//$result = array_merge($chave, $valor);
print_r($valor);