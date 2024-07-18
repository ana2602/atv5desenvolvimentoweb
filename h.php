<?php

echo "Digite um número inteiro positivo: ";
$numero = intval(trim(fgets(STDIN)));

if ($numero > 0) {
    echo "Os divisores de $numero são:" . PHP_EOL;

    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            echo $i . PHP_EOL;
        }
    }
} else {
    echo "Por favor, digite um número inteiro positivo." . PHP_EOL;
}

?>
