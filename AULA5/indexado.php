<?php

$v = array(1,2,4,5);

echo "Segunda posição do array: " . $v[1];
echo "\n";

echo "Quarta posição do array: " . $v[3];
echo "\n";

array_push($v, 200);

$size = count($v);
for ($i=0; $i < $size; $i++) { 
    echo $v[$i] . ",";
}
    echo "\n";


foreach($v as $valro){
    echo $valro . ", ";
}

echo "\n";


