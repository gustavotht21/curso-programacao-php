<?php

$name = $_POST['name'];
$email = $_POST['email'];

print $name . '<br>';
print $email . '<br>';

print '<pre>';
var_dump($_POST);