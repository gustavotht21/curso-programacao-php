<?php

session_start();

$_SESSION['cor'] = 'Preto';
$_SESSION['carro'] = 'Corolla';

print session_id();