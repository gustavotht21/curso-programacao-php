<?php

session_start();

print $_SESSION['cor'];
print '<br>';
print $_SESSION['carro'];
print '<br>';

print session_id();