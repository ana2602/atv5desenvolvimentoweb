<?php

echo "Digite um número inteiro positivo: ";
$numero = intval(trim(fgets(STDIN)));

if ($numero > 0) {
    $soma = 0;

    for ($i = 1; $i <= $numero; $i++) {
        $soma += $i;
    }

    echo "A soma de todos os números entre 1 e $numero é: $soma" . PHP_EOL;
} else {
    echo "Por favor, digite um número inteiro positivo." . PHP_EOL;
}

?>
