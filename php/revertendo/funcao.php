<?php

function trocarCaractere($texto,$pos1, $pos2){

    //Caso base: Se o indice 1 for maior que o 2, retorna o resultado
    if ($pos1 > $pos2)
        return $texto;        
    
    //Substitui o caractere na posição 1 pelo caractere na posição 2
    $temp = $texto[$pos1]; //Armazena temporariamente o caractere em pos1
    $texto[$pos1] = $texto[$pos2];
    $texto[$pos2] = $temp;

    //Chama recursivamente a função
    return trocarCaractere($texto, $pos1+1, $pos2-1);    
  }
?>