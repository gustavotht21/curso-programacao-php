<?php

date_default_timezone_set('America/Porto_Velho');

print date('d');
print '<br>';
print date('D');
print '<br>';
print date('m');
print '<br>';
print date('M');
print '<br>';
print date('y');
print '<br>';
print date('Y');
print '<br>';
print date('d/m/Y');
print '<br>';
print date('l');
print '<br>';
print date('d/m/Y h');
print '<br>';
print date('d/m/Y H:i:s');

print '<hr>';

// Banco de dados: Data - date
$date = date('Y-m-d');
print $date;

// Banco de dados: Data e hora - datetime
print '<br>';
$datetime = date('Y-m-d H:i:s');
print $datetime;

// Time - Segundos que se passaram desde 1970
print '<hr>';
$time = time();
print date('d/m/Y', $time);

// MKTIME
print '<hr>';

$data_pagamento = mktime(15, 30, 00, 12, 15, 2022);
print date('d/m/y - h:i:s', $data_pagamento);

// STRTOMETIME
print '<hr>';
$date = '2022-12-15 15:30:00';
$date = strtotime($date);
print date('d/m/Y', $date);