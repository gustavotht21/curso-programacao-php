<?php

$name = 'Gustavo Borges';
// Converte para caixa alta
print strtoupper($name);
print '<br>';

// Converte para caixa baixa
print strtolower($name);
print '<br>';

// Exibe o conteúdo de uma  string a partir de um índice, com tamanho flexível
print substr($name, 8, 3);
print '<br>';

// Complementa uma string com espaços ou com algum caractere específico, seja na direita ou na esquerda, ou ambos
print str_pad($name, 20, "*", STR_PAD_BOTH);
print '<br>';

// Repete uma string
print str_repeat($name, 2);
print '<br>';

// Retorna o tamanho de uma string
print strlen($name);
print '<br>';

// Substitui um trecho de uma string
print str_replace('Borges', 'Casagrande Borges', $name);
print '<br>';

// Encontra o índice de um trecho
print strpos($name, 'Borges');
print '<br>';

