<?php
//ASIGNAS YA LOS VALORES Y EN EL ECHO SOLO PONER LA PALABRA ASOCIATIVA
$alex = array ('telefono'=>'844229002','edad'=>30,'apellido'=>'salas','pais'=>'Mexico');
echo $alex['telefono'] .'<br />';
echo $alex['edad'].'<br />';
echo $alex['apellido'].'<br />';
echo $alex['pais'].'<br />';

//CAMBIAR EL VALOR DE ALGUN DATO
$alex ['telefono']= '899999999';
echo 'El telefono de ales es: '. $alex['telefono'] . '<br   />';
?>