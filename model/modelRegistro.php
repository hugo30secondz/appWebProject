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

            //Inicio de variables de sesión
            $gsent = $mbd->prepare("SELECT id FROM registrado WHERE usuario_id= '".$id['id']."' ");
            $gsent->execute();
            $idR = $gsent->fetch(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['idUsuario']=$id['id'];
            $_SESSION['nombre']=$_POST["nombre"];
            $_SESSION['apellidos']=$_POST["apellidos"];
            $_SESSION['password']=$_POST["password"];
            $_SESSION['correo']=$_POST["email"];
            $_SESSION['tipo']="registrado";
            $_SESSION['idRegistrado']=$idR["id"];
            
            session_write_close();//cerramos creación de variables de sesión

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

