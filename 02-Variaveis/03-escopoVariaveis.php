<?php

// Global
$name = 'Gustavo Borges';

print '<h2>Acessando variáveis locais em uma função</h2>';
function printName() {
    // print $name; -> Erro, pois a variável está fora do escopo da função
    // Para acessar, usamos global:
    global $name;
    print $name;
}

printName();

print '<hr>';

print '<h2>Acessando variáveis de uma função</h2>';
function createCity () {
    global $city;
    $city = 'Porto Velho';
}
createCity();
print $city;

print '<hr>';
// Globals

$numberOne = 1;
$numberTwo = 5;
$numberThree = 10;

print '<h2>Acessando várias variáveis em uma função</h2>';
function sum() {
    return $GLOBALS['numberOne'] + $GLOBALS['numberTwo'] + $GLOBALS['numberThree'];
}

print sum();