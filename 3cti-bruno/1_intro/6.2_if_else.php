<?php
    $idade = 17; //Exemplo 1

    if($idade < 18) {
        echo 'Voce não pode entrar';
    } else {
        echo 'Seja bem vindo';
    }
    

    $a = 2; //Exemplo 2
    $b = 1;

    if($b <= $a) {
        echo "<hr>B é menor que A";
    } else {
        echo "<hr>A é menor que B";
    }


    $nome = "Eliana"; //Exemplo 3

    if($nome == "Eliana") {
        echo "<hr>Bem vindo(a) $nome";
    } else {
        echo "<hr>Acesso recusado";
    }


    $a = 1; //Exemplo 4
    
    if($a == '1'){
        echo "<hr>A é igual a 1";
    } else {
        echo "<hr>A não é igual a 1";
    }
    
/* 
= atribuição
== comparação simples
=== comparação idêntica (tipo de valor)
*/

?>