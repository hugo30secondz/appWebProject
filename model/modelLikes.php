<?php 
    if($_POST['idu'] == 1){
        header("Content-type: application/json");
        include '../controller/conexion.php';

        $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE publicaciones SET bien= bien + 1 WHERE id='".$_POST["id"]."'";
        // Prepare statement
        $stmt = $mbd->prepare($sql);
        // execute the query
        $stmt->execute();

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