<?php 
session_start();
include '../controller/conexion.php';

echo $_SESSION['idUsuario'];
echo "</br>";
echo $_POST['tema'];
echo "</br>";
echo $_POST['texto'];
echo "</br>";
echo $_POST['fecha'];
echo "</br>";
echo $foto = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
echo "</br>";

?>