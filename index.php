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
      background-color: lightgoldenrodyellow;
    }
  </style>
</head>
<body>
  <h1>Funcions i Estructures de control</h1>
  <h2>NIVELL 1</h2>


<section class="ej01 ex">
<?php
  echo "<h3>EXERCICI 1</h3>
<p>Parell o imparell </p>";
echo "<p>Programa una funciò que, donat un número qualsevol(per exemple,la teva edat) ens digui si és parell o imparell mitjançant un missatge per pantalla.</p>";

  function edad($num){

    if(!(is_numeric($num)) == true){
      echo "$num debe contener información numérica <br/>";
    } else if (!(is_int($num)) == true){
      echo "$num debe ser un número entero <br/>";
    } else if(($num % 2) == 0){
      echo "tu edad es: $num y es un número PAR <br/>";
    }else {
      echo "tu edad es: $num y es un número IMPAR <br/>";
    }

  }
edad(true);
edad(3.14);
edad(4);
edad(325);
?>
</section>


</body>
</html>