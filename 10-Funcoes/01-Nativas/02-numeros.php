<?php

print '<h2>number_format</h2>';
$number = 10.55;
print 'O valor do produto é: R$ ' . number_format($number, 2, ",", ".");
print '<hr>';

print '<h2>round -> Arredonda valores para cima e para baixo</h2>';
print round($number);
print '<hr>';

print '<h2>ceil -> Arredonda apenas para cima</h2>';
print ceil($number);
print '<hr>';

print '<h2>floor -> Arredonda apenas para baixo</h2>';
print floor($number);
print '<hr>';

print '<h2>rand -> Sorteia números aleatórios</h2>';
print rand(1, 20);
print '<hr>';


