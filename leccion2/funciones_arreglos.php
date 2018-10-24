<?php

//devuelve los elementos de un arreglo asocitivo como si fueran variables
/*$amigo = array (
    'telefono' => 65656565656, 
    'edad' => 20 ,
    'pais'=> 'mexico'
);
extract($amigo);
echo $telefono;
*/

//da el ultimo elemento del arreglo
$semana = array (
'lunes','martes','miercoles',
'jueves','viernes','sabado','domingo');

//$ultimo_dia = array_pop($semana);
    //echo $ultimo_dia;

/*foreach($semana as $dia)
{
    echo $dia .'<br/>';
}*/

//join separa y da cada uno de los elementos
//echo join(' - ',$semana);

//cuantos elementos tiene el arreglo
//echo count($semana);

//sort muestra orden ascendente
//sort($semana);
//echo join('<br/>',$semana);

//rsort ordena de forma descentente
//rsort($semana);
//echo join('<br/>',$semana);

//arreglo en reversa
$semana_reversa = array_reverse($semana);
echo join(' - ', $semana_reversa);
?>