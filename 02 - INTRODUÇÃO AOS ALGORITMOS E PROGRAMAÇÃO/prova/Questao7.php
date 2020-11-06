<?php

// Questão 7
// Dadas duas strings, encontre o
// número de caracteres comuns entre elas.

//Exemplo

//Para $s1 = "aabcc"e $s2 = "adcaa", o retorno deve ser 3.
//As strings têm 3 caracteres comuns 2 "a" e 1"c".

function commonCharacterCount($s1, $s2)
{
    // CÓDIGO
}

echo "oi<br>";
$s1 = "aabcc";
$s2 = "adcaa";
$similar = similar_text($s1,$s2);
echo $similar;