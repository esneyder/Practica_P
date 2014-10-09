<?php 
require_once 'clases/Persona.php';
$per=new Persona();
$per->setNom($_GET['nombre']);
$per->setCc($_GET['cedula']);
$per->setApell($_GET['apellido']);
$per->setEmail($_GET['correo']);
sleep(5);
echo $per->insertar($per);




 ?>