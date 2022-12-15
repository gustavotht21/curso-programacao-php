<?php
// Forma em desuso: Usando função array();
// $cars = array('1', '2');

// Criando arrays
$cars = ['Corolla', 'Hilux'];
print '<pre>';
print_r($cars);

print '<hr>';

// Inserindo dados
$cars[] = 'Gol';
$cars[10] = 'Uno';
print '<pre>';
print_r($cars);

// Count -> Elementos
print count($cars);
print '<hr>';

// Exibindo dados
foreach ($cars as $car) {
    print "$car <br>";
}
print '<hr>';

// Arrays associativos
$names = [
    'firstName' => 'Gustavo',
    'secondName' => 'Casagrande',
    'lastName' => 'Borges',
];
$names['age'] = 16;

print_r($names);
print '<hr>';

// Arrays multidimensionais
$informations = [
    'Gustavo' => [
        'completeName' => 'Gustavo Casagrande Borges',
        'age' => 16,
    ],
    'Marcos' => [
        'completeName' => 'Marcos Reis Dutra',
        'age' => 17,
    ],
    'Ian' => [
        'completeName' => 'Ian Vinícius Vasconcelos',
        'age' => 16,
    ],
];

print_r($informations);
print '<hr>';

foreach ($informations as $information) {
    foreach ($information as $index => $value) {
        print "{$index} => {$value} <br>";
    }
};
