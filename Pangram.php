<?php

// function detect_pangram($t){
//     $texto = strtolower($t);
//     $texto = preg_replace('/[).,?!;%+^#-0123456789:=_(]/','',$texto);
//     $texto = str_replace(' ','',$texto);
//     $arr = array_unique(str_split($texto));
//     sort($arr);
    
//     $result = range('a', 'z');
    

//     return $arr === $result;

// }

// var_dump(detect_pangram(":E k!j5A f g#Y p(v:N=b5o;Q m i7R,e-x7J,u s H z1a T d c D^w c B g%i)L"));



// resolucao mais inteligente
// passa para minusculo (strtolower) o texto($string) e nele procura (strpos) por cada (foreach) letra ($s) do alfabeto ($abc). Caso nao encontre alguma, retorna false.
function detect_pangram($string) { 
    $abc = range('a', 'z');
    foreach($abc as $s) {
      if(strpos(strtolower($string), $s) === false) { // strpos - Encontra a posição da primeira ocorrência de uma string

        return false;
      }
    }
    
    return true;
  }

//   A MAIS INTELIGENTE, LIMPANDO TODO O TEXTO e substituindo o que nao for de a-z por '' TEM QUE SOBRAR 26
  function detect_pangram1($string) { 
    return count(array_unique(str_split(preg_replace('/[^a-z]/', '', strtolower($string))))) === 26;









