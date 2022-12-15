<?php

// String
print '<h2>String</h2>';
$name = 'Gustavo Borges';
var_dump($name);
print '<br>';

if (is_string($name)) {
    print 'It\'s a string';
} else {
    print 'It\'s not a string';
}
print '<hr>';

// Int
print '<h2>Int</h2>';
$age = 16;
var_dump($age);
print '<br>';

if (is_int($age)) {
    print 'It\'s an int';
} else {
    print 'It\'s not an int';
}
print '<hr>';

// Float
print '<h2>Float</h2>';
$height = 1.85;
var_dump($height);
print '<br>';

if (is_float($height)) {
    print 'It\'s a float';
} else {
    print 'It\'s not a float';
}
print '<hr>';

// Boolean

print '<h2>Boolean</h2>';
$programmer = true;
var_dump($programmer);
print '<br>';

if (is_bool($programmer)) {
    print 'It\'s a bool';
} else {
    print 'It\'s not a bool';
}
print '<hr>';

// Array

print '<h2>Array</h2>';
$cars = [
    'Ford' => 'Ka',
    'Toyota' => 'Corolla',
    'numberCars' => 2,
    'numberFloat' => 1.5,
    'cars' => true,
];
print '<pre>';
var_dump($cars);
print '<br>';

if (is_array($cars)) {
    print 'It\'s an array';
} else {
    print 'It\'s not an array';
}
print '<hr>';

// Object

print '<h2>Object</h2>';
class Client {
    public $name;
    public function setName($name)
    {
        $this->$name = $name;
    }
}

$client = new Client();
$client->setName('Gustavo Borges');
var_dump($client);
print '<br>';

if (is_object($client)) {
    print 'It\'s an object';
} else {
    print 'It\'s not an object';
}
print '<hr>';

// Special
// NULL -> Vazio
// Resource -> Conexão com banco de dados etc.

