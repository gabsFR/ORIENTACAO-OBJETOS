<?php

    $num = readline("DIGITE UM NUMERO: ");
    if ($num < 0) {
        echo "NEGATIVO, O TRIPLO DESSE NUMERO É: " . $num * 3 . "\n";
    }else{
        echo "POSITIVO, O DOBRO DESSE NUMERO É: " . $num * 2 . "\n";
    }
