<?php

//if(condicion)
//{
   //instrucciones 
    
//}

/* 
operadores de comparacion
== igualdad
> mayor que
< menor que
<= menor o igual
>= mayor o igual
!= diferente
! negacion
*/

/*
operadores logicos
&& evalua que se cumpla una de las dos condiciones
|| evalua que se cumpla al menos una condicion
xor evalua que se cumpla una y sola una condicion

*/

$nombre = 'carlos';
$edad = 17;
if($edad >= 18 and $nombre =='carlos')
{
  echo '<h1> Bienvenido </h1>';  
    
}
if($edad<18 or $nombre != 'carlos')
{
    echo '<h1>Menor de edad</h1>';
}

?>