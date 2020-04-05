<?php

    function formInicioSesion(){
        $var= '
        <div class="container">
        <div class="row"></div>
        <div class="row mt-4">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card bg-light">
                    <article class="card-body mx-auto" style="max-width: 400px;">
                    <h4 class="card-title mt-3 text-center">Inicie Sesión</h4>
                    <form action="controller/controllerSession.php" method="POST">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Email address" name="email" id="email" type="email"required>
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Create password" name="password" id="password" type="password" required>
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
                    </div> <!-- form-group// -->  
                    </form>
                    </article>
                </div> <!-- card.// -->
            </div>
            <div class="col-1"></div>
            </div>
            <div class="row"></div>
        </div>
        ';
        return $var;
    }

    function formPublicaciones(){
        include 'controller/conexion.php';
        $gsent = $mbd->prepare("SELECT * FROM categoria");;
        $gsent->execute();
        $modulo1 = '
            <div class="container">
            <h2>NEW POST</h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Crea una nueva publicacion
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Haz una Publicacion '.$_SESSION['nombre'].'</h5>
                    <img src="view/img/escribir.png" style="width:60px;height:60px;">
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form action="model/modelInsertarPost.php" method="POST"  enctype="multipart/form-data">
                    <div class="form-group">
                <label for="exampleFormControlSelect1">Selecciona el tema</label>
                <select class="form-control" name="tema" id="exampleFormControlSelect1">

        ';
        $modulo2 = '';
        while($result1 = $gsent->fetch(PDO::FETCH_ASSOC)){
            $modulo2 .= '<option value="'.$result1['id'].'" >'.$result1['tipo'].'</option>';
        }
        $modulo3 = '
            </select>
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Escribe tu Post</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="texto" placeholder="¿Que estas pensando?" rows="3"></textarea>
            </div>
            <div class="form-group">
            <script> 
                function readURL(input) {
                    if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    
                    reader.onload = function(e) {
                        $("#fotoProducto").attr("src", e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
            <label for="exampleFormControlFile1"> <img src="view/img/imagenUpload.png" style="width:60px;height:60px;">Sube una foto</label>
            <input type="file" onchange="readURL(this)" name="imagen" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <img class="col-10" id="fotoProducto"/>
            <br>
            <div class="form-group">
            Fecha:
            <input id="datepicker" width="276" value="'.$fcha = date("Y-m-d").'" name="fecha"/>
            <script>
                $("#datepicker").datepicker({
                    uiLibrary: "bootstrap4",
                    language: "es",
                    format: "yyyy-mm-dd"
                });
            </script>
            </div>
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
            </div>
        </div>
            
        </div>
        ';

        $var= $modulo1.$modulo2.$modulo3;

        return $var;
    }

?>