<?php 
    if(isset($_GET['aprobar'])){
        include 'conexion.php';
        //echo "lo aprobaste";
        try {
            $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE moderador SET aprobado=1 WHERE id='".$_GET["aprobar"]."'";
            // Prepare statement
            $stmt = $mbd->prepare($sql);
            // execute the query
            $stmt->execute();
            header('Location: ../index.php');
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
    }
    else{
        if(isset($_GET['rechazar'])){
            include 'conexion.php';
            //echo "lo rechazaste";
            try {
                $mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "UPDATE moderador SET aprobado=2 WHERE id='".$_GET["rechazar"]."'";
                // Prepare statement
                $stmt = $mbd->prepare($sql);
                // execute the query
                $stmt->execute();
                header('Location: ../index.php');
                }
            catch(PDOException $e)
                {
                    echo $sql . "<br>" . $e->getMessage();
                }
        }
    }
?>