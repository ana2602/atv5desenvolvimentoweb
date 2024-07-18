<?php

echo "Quantos números você quer inserir? ";
$qtdNumeros = intval(trim(fgets(STDIN)));

if ($qtdNumeros > 0) {
    $maiorNumero = null;

    for ($i = 0; $i < $qtdNumeros; $i++) {
        echo "Digite o número " . ($i + 1) . ": ";
        $numero = intval(trim(fgets(STDIN)));

        if ($maiorNumero === null || $numero > $maiorNumero) {
            $maiorNumero = $numero;
        }
    }
    
    echo "O maior número inserido é: " . $maiorNumero . PHP_EOL;
} else {
    echo "Por favor, insira uma quantidade positiva de números." . PHP_EOL;
}

?>
