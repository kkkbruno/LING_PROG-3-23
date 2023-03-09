<?php
    $nome = "ninguem";
    
    if($nome == "Eliana") {
        echo "A Eliana está estudando sozinha";
    } elseif ($nome == "Eliana e Bruno") {
        echo "A Eliana e o Bruno estão estudando juntos";
    } elseif ($nome == "Fulano") {
        echo "Fulano está estudando";
    } else {
        echo "Ninguém está estudando!";
    }
?>