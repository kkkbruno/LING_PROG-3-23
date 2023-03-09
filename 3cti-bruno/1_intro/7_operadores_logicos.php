<?php

    /* 
    && e and VV
    || ou or VF
    */

    $idade = 23;
    $cnh = true;
    $infra = 1;
    $quitacao = true;

    if($idade >= 18 && $cnh == true){
        echo 'Pode dirigir!';
    } else {
        echo '<hr>Não pode dirigir!';
    }

    if($idade >= 23 && $infra == false || $idade >= 23 && $quitacao == true) {
        echo '<hr>Pode fazer a CNH D!';
    } else {
        echo "<hr>Você não pode fazer a CNH D";
    }

    /*EXERCÍCIO: O MOTORISTA PODE TER INFRAÇÕES PORÉM CASO ESTEJA QUITADO, ELE PODERÁ RELAIZAR A CNH D */

?>