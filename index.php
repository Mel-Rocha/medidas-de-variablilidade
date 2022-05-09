<html>
  <head>
    <title>Medidas de Variabilidade</title>
  </head>
  <body>
    <?php

      echo '<h1>Medidas de Variabilidade</h1>'; 
      echo '<p>Calcular: </p;>'
    ?> 

    

    <form action="/calc.php" method="post">
    <input type=submit class=form_btn id=pop_btn name=pop value="População">
    </form>

    <form action="/calc.php" method="post">
    <input type=submit class=form_btn id=amo_btn name=amo value="Amostra">
    </form>
    
   
    
  </body>
</html>