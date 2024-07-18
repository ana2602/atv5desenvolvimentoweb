<?php

echo "Digite uma palavra: ";
$palavra = trim(fgets(STDIN)); 

for ($i = 0; $i < strlen($palavra); $i++) {
    echo $palavra[$i] . PHP_EOL;
}

?>