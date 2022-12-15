<?php

// Constantes com define (Em desuso)
define('NAME', 'Gustavo Borges');
print NAME;

print '<hr>';
// Constantes com const
const AGE = 16;
print AGE;

print '<hr>';

// 06-Arrays constantes

const CONTRIES = [
  'Brasil',
  'Estados Unidos',
  'Inglaterra',
];

print '<pre>';
var_dump(CONTRIES);

// Nota: Constantes são por padrão globais
function printConst () {
    return 'Constante: '.NAME;
}
print printConst();
