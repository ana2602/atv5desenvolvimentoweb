<?php

echo "Digite um número inteiro positivo: ";
$numero = intval(trim(fgets(STDIN)));

if ($numero > 0){
    for ($i = 0; $i <= $numero; $i +=2){
        echo $i . PHP_EOL;
    }
} else {
    echo "Por favor, digite um número inteiro positivo." . PHP_EOL;
}
?>