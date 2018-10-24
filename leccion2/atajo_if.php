<?php
$edad = 18;
//ISSET DEVUELVE TRUE O FALSE Y SIRVE PARA VER SI UNA VARIABLE TIENE VALOR O NO
//$variable = (isset(condicion))  ? $variable : 'mensaje' ;
$edad = (isset($edad)) ? $edad : 'El usuario no establecio edad' ;
echo 'Edad:  ' . $edad;
?>