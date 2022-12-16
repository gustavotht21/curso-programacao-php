<?php

/*Expressões regulares
 * ^ -> Início da expressão
 * $ -> Final da expressão
 * [] -> conjunto de caracteres
 * {} -> ocorrências -> ?{0,1}    *{0,}    +{1,}
 *                      0 || 1 // 0 ||  // n 1 || n
 * /i -> desativa o case sensitive
 *
 * Email:
 * /^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i
 *
 *
 * */


$string = '21/11/2006';
$padrao = '/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/i';

if (preg_match($padrao, $string)) {
    print 'válido';
    print '<br>';
    print $string;
} else {
    print 'inválido';
    print '<br>';
}