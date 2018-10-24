<?php
$paises = array(
'mexico','españa','colombia'
'peru','argentina','venezuela','guatemala');

//foreach($paises as $pais)
//{ 
//    if($pais == 'colombia')
//    {
//        break;
//    }
//    echo $pais .'<br/>'; 
//}
//SENTENCIA CONTINUE
?>

<DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
    <h1>Paises Latinoamericanos</h1>
        <?php
        foreach($paises as $pais)
             { 
                 if($pais == 'españa')
                 {
                     continue;
                 }
            echo $pais .'<br/>'; 
                 
             }
        ?>
    </body>
    </html>
      
    
    