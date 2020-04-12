<?php 
    session_start();
    if($_POST['idu'] == 1){
        header("Content-type: application/json");
        include '../controller/conexion.php';
        //$mbd2 = $mbd;
        $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE publicaciones SET bien= bien + 1 WHERE id='".$_POST["id"]."'";
        // Prepare statement
        $stmt = $mbd->prepare($sql);
        // execute the query
        $stmt->execute();

        // ejecutamos este select para verificar si ya existe el registro
        $ide = $_POST["id"];
        $gsent = $mbd->prepare("SELECT status FROM likes WHERE registrado_id='".$_SESSION['idRegistrado']."' AND publicaciones_id='".$ide."'" );
        $gsent->execute();
        $s = $gsent->fetch(PDO::FETCH_ASSOC);
        
        if($s){
            $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE likes SET status= 'bien' WHERE  registrado_id='".$_SESSION['idRegistrado']."' AND publicaciones_id='".$_POST["id"]."' ";
            $stmt = $mbd->prepare($sql);
            $stmt->execute();
        }
        else{
             $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $sql = "INSERT INTO likes (registrado_id,publicaciones_id,status) VALUES ('".$_SESSION['idRegistrado']."','".$_POST["id"]."','bien' )" ;
             $stmt = $mbd->prepare($sql);
             $stmt->execute();
        }

        $cadena="SELECT bien FROM publicaciones WHERE id='".$_POST["id"]."'"; 
        try {
            $cont=0;
            $result = $mbd->query($cadena);
            foreach($result->fetchAll(PDO::FETCH_ASSOC) as $i => $v){
                $r[$cont] = $v;
                $cont++;
            }
            if ($cont<1){
                $r=false;
            }
        } catch (Exception $e) {
            $r=false;
        }
        //echo $cont;

        echo json_encode($r);
    }
    else{
        if($_POST['idu'] == 2){
            header("Content-type: application/json");
            include '../controller/conexion.php';
    
            $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE publicaciones SET regular= regular + 1 WHERE id='".$_POST["id"]."'";
            // Prepare statement
            $stmt = $mbd->prepare($sql);
            // execute the query
            $stmt->execute();
    
            // ejecutamos este select para verificar si ya existe el registro
            $ide = $_POST["id"];
            $gsent = $mbd->prepare("SELECT status FROM likes WHERE registrado_id='".$_SESSION['idRegistrado']."' AND publicaciones_id='".$ide."'" );
            $gsent->execute();
            $s = $gsent->fetch(PDO::FETCH_ASSOC);
            
            if($s){
                $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "UPDATE likes SET status= 'regular' WHERE  registrado_id='".$_SESSION['idRegistrado']."' AND publicaciones_id='".$_POST["id"]."' ";
                $stmt = $mbd->prepare($sql);
                $stmt->execute();
            }
            else{
                $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO likes (registrado_id,publicaciones_id,status) VALUES ('".$_SESSION['idRegistrado']."','".$_POST["id"]."','regular' )" ;
                $stmt = $mbd->prepare($sql);
                $stmt->execute();
            }

            $cadena="SELECT regular FROM publicaciones WHERE id='".$_POST["id"]."'"; 
            try {
                $cont=0;
                $result = $mbd->query($cadena);
                foreach($result->fetchAll(PDO::FETCH_ASSOC) as $i => $v){
                    $r[$cont] = $v;
                    $cont++;
                }
                if ($cont<1){
                    $r=false;
                }
            } catch (Exception $e) {
                $r=false;
            }
            //echo $cont;
    
            echo json_encode($r);
        }
        else{
            if($_POST['idu'] == 3){
                header("Content-type: application/json");
                include '../controller/conexion.php';
        
                $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "UPDATE publicaciones SET mal= mal + 1 WHERE id='".$_POST["id"]."'";
                // Prepare statement
                $stmt = $mbd->prepare($sql);
                // execute the query
                $stmt->execute();
        
                 // ejecutamos este select para verificar si ya existe el registro
                $ide = $_POST["id"];
                $gsent = $mbd->prepare("SELECT status FROM likes WHERE registrado_id='".$_SESSION['idRegistrado']."' AND publicaciones_id='".$ide."'" );
                $gsent->execute();
                $s = $gsent->fetch(PDO::FETCH_ASSOC);
                
                if($s){
                    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "UPDATE likes SET status= 'mal' WHERE  registrado_id='".$_SESSION['idRegistrado']."' AND publicaciones_id='".$_POST["id"]."' ";
                    $stmt = $mbd->prepare($sql);
                    $stmt->execute();
                }
                else{
                    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "INSERT INTO likes (registrado_id,publicaciones_id,status) VALUES ('".$_SESSION['idRegistrado']."','".$_POST["id"]."','mal' )" ;
                    $stmt = $mbd->prepare($sql);
                    $stmt->execute();
                }

                $cadena="SELECT mal FROM publicaciones WHERE id='".$_POST["id"]."'"; 
                try {
                    $cont=0;
                    $result = $mbd->query($cadena);
                    foreach($result->fetchAll(PDO::FETCH_ASSOC) as $i => $v){
                        $r[$cont] = $v;
                        $cont++;
                    }
                    if ($cont<1){
                        $r=false;
                    }
                } catch (Exception $e) {
                    $r=false;
                }
                //echo $cont;
        
                echo json_encode($r);
            }
            else{
                if($_POST['idu'] == 4){
                    header("Content-type: application/json");
                    include '../controller/conexion.php';
            
                    $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "UPDATE publicaciones SET bien= bien - 1 WHERE id='".$_POST["id"]."'";
                    // Prepare statement
                    $stmt = $mbd->prepare($sql);
                    // execute the query
                    $stmt->execute();
            
                     // ejecutamos este select para verificar si ya existe el registro
                    $ide = $_POST["id"];
                    $gsent = $mbd->prepare("SELECT status FROM likes WHERE registrado_id='".$_SESSION['idRegistrado']."' AND publicaciones_id='".$ide."'" );
                    $gsent->execute();
                    $s = $gsent->fetch(PDO::FETCH_ASSOC);
                    
                    if($s){
                        $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "DELETE FROM likes WHERE registrado_id='".$_SESSION['idRegistrado']."' AND publicaciones_id='".$_POST["id"]."'";
                        $mbd->exec($sql);
                    }

                    $cadena="SELECT bien FROM publicaciones WHERE id='".$_POST["id"]."'"; 
                    try {
                        $cont=0;
                        $result = $mbd->query($cadena);
                        foreach($result->fetchAll(PDO::FETCH_ASSOC) as $i => $v){
                            $r[$cont] = $v;
                            $cont++;
                        }
                        if ($cont<1){
                            $r=false;
                        }
                    } catch (Exception $e) {
                        $r=false;
                    }
                    //echo $cont;
            
                    echo json_encode($r);
                }
                else{
                    if($_POST['idu'] == 5){
                        header("Content-type: application/json");
                        include '../controller/conexion.php';
                
                        $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "UPDATE publicaciones SET regular = regular - 1 WHERE id='".$_POST["id"]."'";
                        // Prepare statement
                        $stmt = $mbd->prepare($sql);
                        // execute the query
                        $stmt->execute();
                
                        // ejecutamos este select para verificar si ya existe el registro
                        $ide = $_POST["id"];
                        $gsent = $mbd->prepare("SELECT status FROM likes WHERE registrado_id='".$_SESSION['idRegistrado']."' AND publicaciones_id='".$ide."'" );
                        $gsent->execute();
                        $s = $gsent->fetch(PDO::FETCH_ASSOC);
                        
                        if($s){
                            $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = "DELETE FROM likes WHERE registrado_id='".$_SESSION['idRegistrado']."' AND publicaciones_id='".$_POST["id"]."'";
                            $mbd->exec($sql);
                        }

                        $cadena="SELECT regular FROM publicaciones WHERE id='".$_POST["id"]."'"; 
                        try {
                            $cont=0;
                            $result = $mbd->query($cadena);
                            foreach($result->fetchAll(PDO::FETCH_ASSOC) as $i => $v){
                                $r[$cont] = $v;
                                $cont++;
                            }
                            if ($cont<1){
                                $r=false;
                            }
                        } catch (Exception $e) {
                            $r=false;
                        }
                        //echo $cont;
                
                        echo json_encode($r);
                    }
                    else{
                        if($_POST['idu'] == 6){
                            header("Content-type: application/json");
                            include '../controller/conexion.php';
                    
                            $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = "UPDATE publicaciones SET mal= mal - 1 WHERE id='".$_POST["id"]."'";
                            // Prepare statement
                            $stmt = $mbd->prepare($sql);
                            // execute the query
                            $stmt->execute();

                            // ejecutamos este select para verificar si ya existe el registro
                            $ide = $_POST["id"];
                            $gsent = $mbd->prepare("SELECT status FROM likes WHERE registrado_id='".$_SESSION['idRegistrado']."' AND publicaciones_id='".$ide."'" );
                            $gsent->execute();
                            $s = $gsent->fetch(PDO::FETCH_ASSOC);
                            
                            if($s){
                                $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                $sql = "DELETE FROM likes WHERE registrado_id='".$_SESSION['idRegistrado']."' AND publicaciones_id='".$_POST["id"]."'";
                                $mbd->exec($sql);
                            }
                    
                            $cadena="SELECT mal FROM publicaciones WHERE id='".$_POST["id"]."'"; 
                            try {
                                $cont=0;
                                $result = $mbd->query($cadena);
                                foreach($result->fetchAll(PDO::FETCH_ASSOC) as $i => $v){
                                    $r[$cont] = $v;
                                    $cont++;
                                }
                                if ($cont<1){
                                    $r=false;
                                }
                            } catch (Exception $e) {
                                $r=false;
                            }
                            //echo $cont;
                    
                            echo json_encode($r);
                        }
                    }
                }
            }
        }
    }
?>