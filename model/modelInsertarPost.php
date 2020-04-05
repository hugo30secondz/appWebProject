<?php 
session_start();
include '../controller/conexion.php';

/*echo $_SESSION['idUsuario'];
echo "</br>";
echo $_POST['tema'];
echo "</br>";
echo $_POST['texto'];
echo "</br>";
echo $_POST['fecha'];
echo "</br>";
echo $foto = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
echo "</br>";
*/
if(isset($_POST['tema'])){   

        try {
            $foto = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
            $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //insertamos en la tabla usuario
            $sql = "INSERT INTO publicaciones (registrado_id,img,texto,categoria_id,bien,regular,mal,aprobado,fecha) VALUES ('".$_SESSION['idUsuario']."', '".$foto."', '".$_POST["texto"]."', '".$_POST["tema"]."',0 ,0 ,0 ,0, '".$_POST['fecha']."' )" ;
            // Prepare statement
            $stmt = $mbd->prepare($sql);
            // execute the query
            $stmt->execute();

            echo "<script> alert('tu publicacion ha sido mandada :) ');  window.location.assign('../index.php'); </script>";
            //header('Location: index.php');
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
}
else
{
    header('Location: ../index.php');
}

?>