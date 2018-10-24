<?php
$paises = array(
'mexico','españa','colombia',
'peru','argentina','venezuela','guatemala');

foreach($paises as $pais)
{
 echo $pais .'<br/>';  
    if($pais == 'colombia')
    {
        break;
    }
}
?>