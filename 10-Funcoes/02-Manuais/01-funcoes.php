<?php

function printName($name) {
    print "Meu nome é {$name} <br>";
}

printName('Gustavo Casagrande Borges');

function calcAverague($student, $note1, $note2, $note3, $note4) {
    $averague = ($note1 + $note2 + $note3 + $note4) / 4;
    $msg = "A média do aluno {$student} é: " . "{$averague}";
    return $averague >= 7 ? $msg . ', e ele está aprovado <br>' : $msg . ', e ele está reprovado <br>';
}

print calcAverague('Fernandinho', 8, 6, 4, 9);