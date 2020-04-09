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
            $gsent = $mbd->prepare("SELECT id FROM registrado WHERE usuario_id = '".$_SESSION['idUsuario']."' ");
            $gsent->execute();
            $id = $gsent->fetch(PDO::FETCH_ASSOC);

            //insertamos en la tabla usuario
            $sql = "INSERT INTO categoria (tipo) VALUES ('".$_POST["tema"]."' )" ;
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