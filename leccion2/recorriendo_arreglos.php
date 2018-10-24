<?php
$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo','Junio','Julio','Agosto',
    'Septiembre','Octubre','Noviembre','Diciembre'
);
//RECORRER ARREGLO CON FOR
/*for($i = 0; $i < count($meses); $i++ )
{
   echo $meses [$i] . '<br/>';
}
*/

//RECORRER ARREGLO CON WHILE

$contador = 0;
while($contador < count($meses))
{
    echo $meses[$contador] . '<br/>';
 $contador++;
}
?>
