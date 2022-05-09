<?php

#<lerTxt>

$arquivo = fopen('arquivo.txt', 'r');
$dados = [];
$dados = array($arquivo);
foreach(file('arquivo.txt') as $c) {
  echo $c. "\n";
  #$dados = array($line);
  #echo "$dados[1]";
   
} 
fclose($arquivo)





#</lerTxt>





?>