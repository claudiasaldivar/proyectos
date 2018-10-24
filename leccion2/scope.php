<?php
//donde se pueden hacer las variables y donde no
//variable global, las funciones no pueden acceder a las variables globales, se tiene que pasar como parametro dentro de la funcion
//$numero = 7;
function mostrarNumero()
{
    $numero = 7;
    return $numero;
}
echo mostrarNumero($numero);
?>