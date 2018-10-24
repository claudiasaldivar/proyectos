<?php
$meses = array('enero','febrero','marzo','abril',
    'mayo','junio','julio','agosto',
    'septiembre','octubre','noviembre','diciembre');

$alejandro = array ('telefono'=>5454545454,'edad'=>20,'pais'=> 'mexico');
//MOSTRAR EN UN DOCUMENTO HTLM
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <body>
    <h1>Meses</h1>
        <ul>
        <?php
            //foreach($meses as $mes)   
            //{
            //echo '<li>'. $mes . '</li>' ;   
            //}
            foreach($alejandro as $ale => $valor)
            {
              echo '<li>' .$ale . ':'.$valor . '</li>';  
            }
        ?>    
        </ul>
    </body>
</html>



