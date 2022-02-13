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


<section class="ej02 ex">
<?php
echo "<h3>EXERCICI 2</h3>
<p>Amagatall </p>";
echo "<p>Per jugar a el 'amagatall' se'ns ha demanat un programa que compti fins a 10. Però la persona que comptarà és una mica tramposa i ho farà comptant de dos en dos. Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla.</p>";

  function amagatall(){
    for($i=0; $i<=10; $i+=2){
      echo "$i <br/>";
    }
  }
  amagatall()

?>
</section>




<section class="ej03 ex">
<?php
echo "<h3>EXERCICI 3</h3>
<p>Contar con parametros </p>";
echo "<p>Imagina't que volem que compti fins a un nombre diferent de 10. Programa la funció perquè el final del compte estigui parametritzat.</p>";

  function amagatall2($num){
    for($i=0; $i<=$num; $i+=2){
      echo "$i <br/>";
    }
  }
  amagatall2(29);
  amagatall2(16);

?>
</section>


<section class="ej04 ex">
<?php
echo "<h3>EXERCICI 4</h3>
<p>Parámetro por defecto </p>";
echo "<p>Per prevenir oblits a l'utilitzar la nostra meravellosa opció 'amagatall' establirem un paràmetre per defecte igual a 10 a la funció que s'encarrega de fer aquest compte. </p>";

  function amagatall3($num){
    for($i=0; $i<=$num; $i+=2){
      echo "$i <br/>";
    }
  }
  amagatall3(10);
?>
</section>


<section class="ej05 ex">
<?php
echo "<h3>EXERCICI 5</h3>
<p> Grau de un estudiant</p>";
echo "<p>Escriure una funciò per verificar el grau de un estudiant en d'acord a la nota.</p>
<p> Condicions</p>
<p> Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió. Si la nota és menor a 33%, l'estudiant reprovarà.</p>";

  function promedio($num){
    if (!(is_numeric($num)) === true){
    echo "Debe introducir un valor numérico como nota del alumno <br/>";
   } else if (($num < 0) || ($num > 100)){
    echo "Debe introducir una nota entre 0 a 100 <br/>";
   } else if (($num >= 0) && ($num < 33)) {
    echo "El estudiante ha suspendido <br/>";
   } else if (($num >= 33) && ($num <= 44)){
    echo "El estudiante se encuentra en TERCERA división <br/>";
   } else if (($num >= 45) && ($num <= 59)){
    echo "El estudiante se encuentra en SEGUNDA división <br/>";
   }else {
    echo "El estudiante se encuentra en PRIMERA división <br/>";
   }
    
  }
  promedio(true);
  promedio(101);
  promedio(-1);
  promedio(0);
  promedio(33);
  promedio(45);
  promedio(60);
?>
</section>

</body>
</html>