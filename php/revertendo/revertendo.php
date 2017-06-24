<?php

/*
  Problema: Você possui uma coleção de items
  Esses itens estão ordenadas do primeiro para o último:
  Item 1: B
  Item 2: A
  Item 3: N
  Item 4: A
  Item 5: N
  Item 6: A

  Como reverter esta coleção de forma que os últimos sejam os primeiros?
*/

//Forma 1: Recursão
  require_once(funcao.php);
  
  $texto = "Ananias";
  $esperado = "sainanA";

  if (strcmp($esperado,trocarCaractere($texto,0, strlen($texto))) == TRUE)
    echo "<h1>$texto ao contrário é $esperado</h1>";

  echo "<br> Porquê $texto foi revertido pelo trocarCaractere()" 

?>
