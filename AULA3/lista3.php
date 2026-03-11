<?php

function printdata($nome,$habitantes,$area,$altitude,$estado){
    printf("%s|%d|%dkm²|%dm|%s\n", $nome,$habitantes,$area,$altitude,$estado);
}

printdata("Foz do Iguaçu", 250000, 500, 145, "Parana-PR");
printdata("Cascavel", 300000, 420, 320, "Parana-PR");
printdata("Chapecó", 240000, 120, 620, "Santa-Catarina-SC");
printdata("Blumenau", 330000, 200, 85, "Santa-Catarina-SC");
printdata("Curitiba", 1500000, 300, 850, "Parana-PR");