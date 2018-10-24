<?php
$conexion = mysql_connect('localhost','root', '') or die('No se puede conectar');
mysql_select_db('prueba_datos', $conexion);
//puedes hacer cualquier tipo de accion insert, delete, update, select
$resultados = mysql_query('select * from usuarios');
//$fila = mysql_fetch_object($resultados);
//echo $fila =>nombre;
while($fila = mysql_fetch_object($resultados))
{
  echo $fila -> nombre; 
    echo '<br/>';
}
?>