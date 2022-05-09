<a href="/calc.php"><button class=form_btn id=pop_btn>População</button><a/>
<a href="/calc.php"><button class=form_btn id=pop_amo>Amostra</button><a/>

<a href="/index.php"><button id=btn_home>Home</button></a>


<?php

#<lerTxt>
$dados = array();
$arquivo = fopen('arquivo.txt', 'r');
foreach(file('arquivo.txt') as $line) {
   echo $line. "\n";
   
} 
fclose($arquivo);







#</lerTxt>


?>