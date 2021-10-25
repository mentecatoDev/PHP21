<?php

function esCapicua($n){
    $trab = $n;
    $inv = 0;
    while($trab){
        $cifra = $trab % 10;
        $trab = (int)($trab / 10);
        $inv = $inv * 10 + $cifra;
    }
    echo $n, $inv;
    return ($n == $inv);
}

if (esCapicua(1224551)){
    echo 'Es capicúa';
}else{
    echo 'No es capicúa';
}
