<?php
$meses = array (
    'enero','febrero','marzo','abril',
    'mayo','junio','julio','agosto',
    'septiembre','octubre','noviembre','diciembre'
);
//ASCENTENTE
//sort($meses);

//DESCENDENTE
rsort($meses);

?>

//ORDENAR LOS MESES EN FORMA ASCENDENTE
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UFT-8">
    <title>Meses del año</title>
    </head>
    <body>    
    <h1>Meses del año</h1>
        #LISTA POR CADA MES DEL AÑO
        <ul>
        <?php
          foreach ($meses as $mes )
          {
              
             echo '<li>' . $mes . '</li>'; 
          }
            
        ?>    
        
        </ul>
    </body>
</html>