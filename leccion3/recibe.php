<?php
//METODO POST 
//si no hay post manda a esa url si si hay mandar los datos a recibir.php, no manda ningun valor por la url a diferencia del get
//if(!$_POST)
//{
//header('Location:http://localhost/CURSO_PHP/leccion3/'); 
//}
//$nombre = $_POST['nombre'];
//$sexo = $_POST['sexo'];
//$year = $_POST['year'];
//$terminos = $_POST['terminos'];

//echo 'Hola,  ' .$nombre . ' eres' . ' ' .$sexo;

//METODO GET
//ES MAS INSEGURO PORQUE DENTRO DE LA URL PUEDE HACER CAMBIOS EL USUARIO
//print_r($_GET);

if(!$_GET)
{
   header('Location:http://localhost/CURSO_PHP/leccion3/');  
}
$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

if($nombre)
{
    echo $nombre . '<br/>';
}
else
{
    echo 'el usuario no existe ' .' <br/>';
}

echo $nombre . '<br/>';
echo $sexo . '<br/>';
echo $year . '<br/>';
echo $terminos . '<br/>';
//cambia a entidades html y evitas que inyecten codigo
//echo htmlspecialchars($nombre);

?>