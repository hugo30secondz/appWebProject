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


            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "pro_appweb";
            
            // Creamos la conexión
            $conn = new mysqli($servername, $username, $password, $dbname);
            $tema=$_POST['tema'];
            $sql = "SELECT * FROM categoria WHERE tipo='$tema'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0)
            {
                echo "<script> alert('Tu tema esta repetido! ');  window.location.assign('../index.php'); </script>";
                //header('Location: ../index.php');
            }
           else{
                // Realizamos la consulta para saber si coincide con uno de esos criterios
            $sql = "select tema from categoria where tipo='$tema'";
            $result = mysqli_query($conn, $sql);

            //insertamos en la tabla usuario
            $sql = "INSERT INTO categoria (tipo) VALUES ('".$_POST["tema"]."' )" ;
            // Prepare statement
            $stmt = $mbd->prepare($sql);
            // execute the query
            $stmt->execute();

            echo "<script> alert('tu tema ha sido creado:) ');  window.location.assign('../index.php'); </script>";
            //header('Location: index.php');

           }
               
           
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