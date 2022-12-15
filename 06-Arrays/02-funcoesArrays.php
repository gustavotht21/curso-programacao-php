<?php

$names = ['Gustavo', 'Felipe', 'José'];

print '<h2>is_arrays -> Verifica se uma variável é um array</h2>';
if (is_array($names)) {
    print 'É um array';
} else {
    print 'Não é um array';
}

print '<hr>';

print '<h2>in_array -> Verifica se um valor existe em um array</h2>';
if (in_array('Gustavo', $names)) {
    print '\'Gustavo\' existe no array de nomes';
} else {
    print '\'Gustavo\' não existe no array de nomes';
}

print '<hr>';

print '<h2>array_keys -> Retorna um novo array com as chaves de um array</h2>';
print_r(array_keys($names));

print '<hr>';

print '<h2>array_values -> Retorna um novo array com os valores de um array</h2>';
print_r(array_values($names));

print '<hr>';

print '<h2>array_merge -> Mescla dois arrays</h2>';
$namesTwo = ['Fernando'];
print_r(array_merge($names, $namesTwo));

print '<hr>';

print '<h2>array_combine -> Combina dois arrays</h2>';
$namesKeys = ['nameOne', 'nameTwo', 'NameThree'];
print_r(array_combine($namesKeys, $names));

print '<hr>';

print '<h2>array_sum -> Soma os elementos de um array</h2>';
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print array_sum($numbers);

print '<hr>';

/* Outras funções:
array_pop -> Remove a última posição de um array
array_shift -> Remove a primeira posição de um array

array_unshift -> Adiciona um ou mais valores no início de um array
array_push -> Adiciona um ou mais valores no final de um array

explore -> Transforma uma string em array
implode -> Transforma um array em string
*/