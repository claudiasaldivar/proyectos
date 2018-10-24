<?php
$id = $_GET['id'];
try
{
  $conexion =  new PDO('mysql:host=localhost; dbname=prueba_datos','root', '');
    //echo "CONEXION OK" . '<br/>';
    
    //METODO QUERY
    //$resultados = $conexion->query("SELECT * FROM usuarios WHERE id=$id");
    
    //foreach($resultados as $fila)
    //{
    //    echo $fila['id'] . ' - ' . $fila['nombre'] . '<br/>';
    //}
    
    //PREPARED STATMENTS
    $statment = $conexion->prepare('INSERT INTO usuarios VALUES(null, "EUGENIA")');
    $statment->execute();
    
    //$resultados = $statment->fetchAll();
    //foreach($resultados as $usuario)
    //{
    //  echo $usuario['nombre'] . '<br/>';  
    //}
}
catch(PDOException $e)
{    
  echo "EL ERROR ES: " . $e->getMessage();  
}
?>