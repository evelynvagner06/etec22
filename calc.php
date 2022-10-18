<?php
    $numero = $_POST['txtnumero'];
    Antecessor e Posterior
    Antecessor e Posterior
    $Cont = 0;
    while ($numero >= $Divisor) {
        $Cont++;
        $numero -= 5;
    }
    echo $Cont;
?>
