<?php 
        include ('../controller/conexion.php');
        $correo = $_POST['email'];
        $password = $_POST['password'];
        //echo $correo."</br>".$password;
        $gsent = $mbd->prepare("SELECT * FROM usuario WHERE correo='".$correo."' AND password='".$password."' ");
        $gsent->execute();
        $result = $gsent->fetch(PDO::FETCH_ASSOC);

        if($result){
            //echo "si esta el puto";
            $gsent = $mbd->prepare("SELECT * FROM registrado  WHERE usuario_id='".$result[id]."' AND bloqueo = 0 "); //acceso es 0, denegado es 1
            $gsent->execute();
            $result1 = $gsent->fetch(PDO::FETCH_ASSOC);
            if($result1){
                session_start();
                $_SESSION['idUsuario']=$result['id'];
                $_SESSION['nombre']=$result["nombre"];
                $_SESSION['apellidos']=$result["apellidos"];
                $_SESSION['password']=$result["password"];
                $_SESSION['correo']=$result["email"];
                $_SESSION['tipo']="registrado";
                //$_SESSION['modo']=$result->modo;
                
                session_write_close();//cerramos creación de variables de sesión
                header('Location: ../index.php');
            }
            else{
                $gsent = $mbd->prepare("SELECT * FROM moderador  WHERE usuario_id='".$result[id]."' AND aprobado = 1 "); // en proceso es 0
                $gsent->execute();
                $result2 = $gsent->fetch(PDO::FETCH_ASSOC);
                if($result2){
                    session_start();
                    $_SESSION['idUsuario']=$result['id'];
                    $_SESSION['nombre']=$result["nombre"];
                    $_SESSION['apellidos']=$result["apellidos"];
                    $_SESSION['password']=$result["password"];
                    $_SESSION['correo']=$result["email"];
                    $_SESSION['tipo']="moderador";
                    //$_SESSION['modo']=$result->modo;
                    
                    session_write_close();//cerramos creación de variables de sesión
                    header('Location: ../index.php');
                }
                else{
                    if($correo == "hugo@gmail.com"){
                        session_start();
                        $_SESSION['idUsuario']=$result['id'];
                        $_SESSION['nombre']=$result["nombre"];
                        $_SESSION['apellidos']=$result["apellidos"];
                        $_SESSION['password']=$result["password"];
                        $_SESSION['correo']=$result["email"];
                        $_SESSION['tipo']="administrador";
                        //$_SESSION['modo']=$result->modo;
                        
                        session_write_close();//cerramos creación de variables de sesión
                        header('Location: ../index.php');
                    }
                    else{
                        //echo "nosta :(";
                        header('Location: ../index.php');
                    }
                }
            }
        }
        else{
            //echo "nosta :(";
            header('Location: ../index.php');
        }
?>