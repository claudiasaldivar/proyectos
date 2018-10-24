<?php


$meses = array (
    'enero','febrero','marzo','abril',
    'mayo','junio','julio','agosto',
    'septiembre','octubre','noviembre','diciembre'
);
//CUANTOS VALORES TIENE EL ARREGLO
//echo count($meses);

//ULTIMO ELEMENTO DEL ARREGLO DINAMICAMENTE
$ultimo_mes = count($meses)-1;
echo $meses[$ultimo_mes] . '<br/>';
//O
echo $meses[11];

?>