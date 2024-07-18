<?php

echo "Digite um número inteiro: ";
$numero = intval(trim(fgets(STDIN)));

$primo = true;
if ($numero <= 1) {
    $primo = false;
} else {
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $primo = false;
            break;
        }
    }
}

if ($primo) {
    echo "$numero é primo." . PHP_EOL;
} else {
    echo "$numero não é primo." . PHP_EOL;
}

?>
