<?php
    include 'controller/conexion.php';

    $id = rand(1, 8);
    $gsent = $mbd->prepare("SELECT * FROM publicaciones WHERE id = ".$id." ");;
    $gsent->execute();
    $row = $gsent->fetch(PDO::FETCH_ASSOC);

    $modulo = '
    <div class="card-body" style="background-color:#82CACD">
        <h5 class="card-title">'.$row['id'].'</h5>
        <p class="card-text">'.$row['texto'].'</p>
        <img class="img-fluid" style="width:600px; height:350px;" id="fotoProducto" src="data:image/jpeg;base64,'.base64_encode($row['img']).'"/>
        <br>
        <div class="row">                    
            <div class="col"></div>
                <div class="row mt-2">
                    <div class="col">
                        <div class="alert alert-success" id="b'.$row['id'].'" role="alert">
                            <a class="alert-link" id="lb'.$row['id'].'">'.$row['bien'].'</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-warning" id="r'.$row['id'].'" role="alert">
                            <a class="alert-link" id="lr'.$row['id'].'">'.$row['regular'].'</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="alert alert-danger" id="m'.$row['id'].'" role="alert">
                            <a class="alert-link" id="lm'.$row['id'].'">'.$row['mal'].'</a>
                        </div>
                    </div>
                </div>
            <div class="col"></div>
        </div> 
    </div>
    ';
    echo $modulo;
?>

