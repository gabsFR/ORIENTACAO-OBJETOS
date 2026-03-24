<?php

$araia = array ();
for ($i=0; $i < 10; $i++) {
    $num = readline($i + 1 . "° Insira um número: ");
    array_push($araia,$num);
}

$media = ($araia[0] + $araia[1] + $araia[2] + $araia[3] + $araia[4] + $araia[5] + $araia[6] + $araia[7] + $araia[8] + $araia[9]) / 10;

echo "\nA média do vetor é: " . $media;