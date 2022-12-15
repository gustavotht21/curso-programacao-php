<?php

// For -> Funciona através de um índice, e executa enquanto uma condição for verdadeira
for ($index=0; $index<=10; $index++) {
    print $index;
    print '<br>';
}

print '<hr>';

// Foreach -> Muito usado para arrays
$names = ['Gustavo', 'Casagrande', 'Borges'];
foreach ($names as $index => $name) {
    print "{$index} => {$name}";
    print '<br>';
}
