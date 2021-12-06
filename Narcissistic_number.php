<?php

// Check whether a number is a narcissistic number or no

// contar algarismos
// elevar cada algarismo ao numero total de algarismos
// somar
// verificar se o resultado da soma e igual ao numero original

function checkNarci($number){
  
    
    $arr = str_split($number, 1); // str_spli - divide string em elementos de uma array($string, numero elementos por posicao)
    $total = count($arr); // count - conta o numero de elementos de um array(array)
    $sum = 0;
    for ($i=0; $i < $total ; $i++) { 
        $sum += ($arr[$i] ** $total);
           
    }
    return ($sum === $number) ? 'Numero Narcisistico' : 'Nao e um numero Narcisistico';
 
}

var_dump(checkNarci(153));


