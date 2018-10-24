
<?php
/*SIRVE PARA DAR MAS OPCIONES Y PARA LAS CONDICIONALES*/
$mes = 'Diciembre';
//RECIBE UNA VARIABLE QUE SE PONE EN LOS PARENTESIS
switch ($mes)
{
        case 'Diciembre';
        echo 'Feliz navidad';
        break;
        case 'Enero';
        echo 'Feliz año nuevo';
        break;
        //EN CASO DE QUE NO EXISTA OPCION
    default:
        echo 'EN ESTE MES NO SE CELEBRA NADA';
        break;
}
?>