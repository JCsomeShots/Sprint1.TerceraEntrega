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
      background-color: lightslategray;
    }
  </style>
</head>
<body>
  <h1>Funcions i Estructures de control</h1>
  <h2>NIVELL 3</h2>


<section class="ej01 ex">
<?php
echo "<h3>EXERCICI 1</h3>
      <p>Criba d'Eratóstenes </p>";
echo "<p>La criba d'Eratóstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. Basats en l'informació de l'enllaç adjunt, implementa la criba d'Eratóstenes dins d'una funció, de tal forma que poguem invocar la funció per a un número concret.</p>";

  function criba($num){

    $div = false;
  
  
    if(!(is_int($num)) == true){
      echo "Debe ingresar un número <br/>";
    } 
    else if (($num <=> 0) != 1){
      echo "Debe introducir un número positivo <br/>";
    } 
    else if ($num == 0){
      echo "Debe introducir un número diferente de cero <br/>";
    } else if ($num == 1){
      echo "Debe introducir un número diferente de uno <br/>";
    }else{
        //   for ($i=2; $i < $num; $i++) { 
        //     if(($num % i) === 0){
        //       $div = true;
        //       break;
        //     }
        //   }

        //   if ($div == true){ 
        //     echo "No es primo"; }
        //   else {
        //     echo "Si es primo"; }
        //   }
    }

   
    // }
   }
  // criba("hola");
  // criba(true);
  criba (400);
 
?>
</section>

</body>
</html>
