<?php

$name = $_GET['name'];
$email = $_GET['email'];

print $name . '<br>';
print $email . '<br>';

print '<pre>';
var_dump($_GET);