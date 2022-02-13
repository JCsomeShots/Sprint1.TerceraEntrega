<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funcions i Estructures de control</title>
  <style>
    h1 , h2 {
      text-align: center;
    }
    .ex {
      padding: 20px;
      background-color: lightsteelblue;
    }
  </style>
</head>
<body>
  <h1>Funcions i Estructures de control</h1>
  <h2>NIVELL 2</h2>


<section class="ej01 ex">
<?php
echo "<h3>EXERCICI 1</h3>
      <p>Jocs Olímpics </p>";
echo "<p>Ens han demanat un llistat de tots els anys on es van produir jocs olímpics desde 1960 inclós fins al 2016. Programa un bucle que calculi i mostri per pantalla els anys olímpics dins de l'interval esmentat</p>";
  function jocs(){
    for($any = 1960; $any <= 2016; $any += 4){
      echo $any . "<br/>";
    }
  }
  jocs();
 
?>
</section>



</body>
</html>