<?php

function trocarCaractere($texto,$pos1, $pos2){

    //Caso base: Quando indice do primeiro caractere é maior ou igual que o do segundo, já revertemos todos os caracteres.
    if ($pos1 >= $pos2)
      return $texto;

    //Substitui o caractere na posição 1 pelo caractere na posição 2
    $temp = $texto[$pos1]; //Armazena temporariamente o caractere em pos1
    $texto[$pos1] = $texto[$pos2];
    $texto[$pos2] = $temp;

    //Chama a função recursivamente
    trocarCaractere($texto, $pos1+1, $pos2-1);
  };
?>
