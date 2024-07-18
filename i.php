<?php

function ehPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Números primos entre 1 e 100:" . PHP_EOL;
for ($num = 1; $num <= 100; $num++) {
    if (ehPrimo($num)) {
        echo $num . PHP_EOL;
    }
}

?>
