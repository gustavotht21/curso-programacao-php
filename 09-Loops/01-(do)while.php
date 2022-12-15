<?php

// While -> Faz a comparação, depois executa
$index = 1;
while ($index <= 10) {
    print $index;
    print '<br>';
    $index++;
}
print '<hr>';

// Do While -> Executa e depois verifica
$index = 10;
do {
    print $index;
    print '<br>';
    $index++;
} while ($index <= 10);