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


<section class="ej02 ex">
<?php
echo "<h3>EXERCICI 2</h3>
      <p>Total a pagar </p>";
echo "<p>Escriu una funció que determini la quantitat total a pagar per una trucada telefònica d'acord a les següents premisses:</p>
  <p>Tota crida que duri menys de 3 minuts té un cost de 10 cèntims.</p>
  <p>Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.</p>";

  function trucada($num){
    if($num > 3){
      $result = ($num - 3)* 5 + 10;
      echo "El coste de la llamada es de $result céntimos <br/>";
    }else {
      echo "El coste de la llamada es de 10 céntimos <br/>";
    }
  }
  trucada(3.2);
 
?>
</section>


</body>
</html>