<?php
//SE ACCEDE AL METODO DE ENVIO, UN FORMULARIO EN PANTALLA
//if($_SERVER['REQUEST_METHOD'] == 'GET')
//{
//    echo 'se enviaron por get';
//}
//else
//{
// echo 'se enviaron por post';   
//}


//DOS FORMULARIOS EN PANTALLA
if(isset($_POST['submit-formulario2']))
{
    echo 'se han enviado los datos correctamente';
    print_r($_POST['submit']);
}
?>