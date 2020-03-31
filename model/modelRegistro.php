<?php

include '../controller/conexion.php';

if(isset($_POST['customRadio'])){   
    if( $_POST['customRadio'] == "registrado"){

        try {
            $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //insertamos en la tabla usuario
            $sql = "INSERT INTO usuario (nombre,apellidos,password,correo) VALUES ('".$_POST["nombre"]."', '".$_POST["apellidos"]."', '".$_POST["password"]."', '".$_POST["email"]."' )" ;
            // Prepare statement
            $stmt = $mbd->prepare($sql);
            // execute the query
            $stmt->execute();

            $gsent = $mbd->prepare("SELECT MAX(id) as id FROM usuario");
            $gsent->execute();
            $id = $gsent->fetch(PDO::FETCH_ASSOC);

            $sql = "INSERT INTO registrado (aprobadas,rechazadas,bloqueo,usuario_id) VALUES ('0', '0', '0', '".$id['id']."' )" ;
            // Prepare statement
            $stmt = $mbd->prepare($sql);
            // execute the query
            $stmt->execute();
            echo "<script> alert('Has sido registrado!');  window.location.assign('../index.php'); </script>";
            //header('Location: index.php');
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
    }
    else{
    
        try {
            $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //insertamos en la tabla usuario
            $sql = "INSERT INTO usuario (nombre,apellidos,password,correo) VALUES ('".$_POST["nombre"]."', '".$_POST["apellidos"]."', '".$_POST["password"]."', '".$_POST["email"]."' )" ;
            // Prepare statement
            $stmt = $mbd->prepare($sql);
            // execute the query
            $stmt->execute();

            $gsent = $mbd->prepare("SELECT MAX(id) as id FROM usuario");
            $gsent->execute();
            $id = $gsent->fetch(PDO::FETCH_ASSOC);

            $sql = "INSERT INTO moderador (aprobado,usuario_id) VALUES ('0', '".$id['id']."' )" ;
            // Prepare statement
            $stmt = $mbd->prepare($sql);
            // execute the query
            $stmt->execute();
            echo "<script> alert('Tu solicitud de registro fue mandada, espera tu confirmacion, gracias :)');  window.location.assign('../view/vistaRegistro.php'); </script>";
            //header('Location: index.php');
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }

    }
}


?>

