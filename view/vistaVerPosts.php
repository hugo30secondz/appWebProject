<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">
  <h2> Bienvenido</h2>
  <?php 
include '../controller/conexion.php'; 
foreach ($mbd->query("SELECT *, categoria.tipo, registrado.usuario_id, usuario.nombre FROM (((publicaciones INNER JOIN categoria ON publicaciones.categoria_id = categoria.id) INNER JOIN registrado ON registrado.id = publicaciones.registrado_id) INNER JOIN usuario ON usuario.id = registrado.usuario_id ) WHERE aprobado =0 ") as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 



<div class="card text-center">
  <div class="card-header" style="background-color:#FDDDCA">
  <?php echo $row['nombre']   ?>
  </div>
  <div class="card-body" style="background-color:#82CACD">
    <h5 class="card-title"><?php echo $row['tipo']   ?></h5>
    <p class="card-text"><?php echo $row['texto']   ?></p>
    <?php echo '<img class="img-fluid" style="width:200px; height:150px;" id="fotoProducto" src="data:image/jpeg;base64,'.base64_encode($row['img']).'"/>'?>
    <br>
    <a href="bien.php"><button style="margin: 5px" type="button" class="btn btn-success">Bien</button></a>
    <a href="regular.php"><button style="margin: 5px" type="button" class="btn btn-warning">Regular</button></a>
    <a href="mal.php"><button style="margin: 5px" type="button" class="btn btn-danger">Mal</button></a>
  </div>
  <div class="card-footer text-muted">
  <?php echo $row['fecha']   ?>
  </div>
</div>
<br>
<?php
	}
    ?>
</div>


</body>
</html>
