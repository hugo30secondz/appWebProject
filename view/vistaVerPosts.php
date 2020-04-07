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

  <script>
  function controlLike(v,n) {

    if(v === "bien"){
      if(document.getElementById('bien'+n).className === "btn btn-success"){
        document.getElementById('bien'+n).className = "btn btn-light";
      }
      else{
        document.getElementById('bien'+n).className = "btn btn-success";
        document.getElementById('regular'+n).className = "btn btn-light";
        document.getElementById('mal'+n).className = "btn btn-light";
      }
    }
    else{
      if(v === "regular"){
        if(document.getElementById('regular'+n).className === "btn btn-warning"){
          document.getElementById('regular'+n).className = "btn btn-light";
        }
        else{
          document.getElementById('regular'+n).className = "btn btn-warning";
          document.getElementById('bien'+n).className = "btn btn-light";
          document.getElementById('mal'+n).className = "btn btn-light";
        }
      }
      else{
        if(v === "mal"){
          if(document.getElementById('mal'+n).className === "btn btn-danger"){
            document.getElementById('mal'+n).className = "btn btn-light";
          }
          else{
            document.getElementById('mal'+n).className = "btn btn-danger";
            document.getElementById('bien'+n).className = "btn btn-light";
          document.getElementById('regular'+n).className = "btn btn-light";
          }
        }
      }
    }
    //document.getElementById('bien').className = "btn btn-success";
    //console.log('Gracias por pinchar');
  }
</script>
</head>
<body>
 
<div class="container">
  <h2> Bienvenido</h2>
  <?php 
include '../controller/conexion.php'; 
foreach ($mbd->query("SELECT *, publicaciones.id, categoria.tipo, registrado.usuario_id, usuario.nombre FROM (((publicaciones INNER JOIN categoria ON publicaciones.categoria_id = categoria.id) INNER JOIN registrado ON registrado.id = publicaciones.registrado_id) INNER JOIN usuario ON usuario.id = registrado.usuario_id ) WHERE aprobado =0 ") as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
<div class="card text-center">
  <div class="card-header" style="background-color:#FDDDCA">
  <?php echo $row['nombre'];   ?>
  </div>
  <div class="card-body" style="background-color:#82CACD">
    <h5 class="card-title"><?php echo $row['tipo'] ;  ?></h5>
    <p class="card-text"><?php echo $row['texto'];   ?></p>
    <?php echo '<img class="img-fluid" style="width:600px; height:350px;" id="fotoProducto" src="data:image/jpeg;base64,'.base64_encode($row['img']).'"/>'?>
    <br>
    <a><button style="margin: 5px" type="button" class="btn btn-light" id="bien<?php echo $row['id']; ?>" onclick="controlLike('bien',<?php echo $row['id']; ?>)">Bien</button></a>
    <a><button style="margin: 5px" type="button" class="btn btn-light" id="regular<?php echo $row['id']; ?>" onclick="controlLike('regular',<?php echo $row['id']; ?>)">Regular</button></a>
    <a><button style="margin: 5px" type="button" class="btn btn-light" id="mal<?php echo $row['id']; ?>" onclick="controlLike('mal',<?php echo $row['id']; ?>)">Mal</button></a>
  </div>
  <div class="card-footer text-muted">
  <?php echo $row['fecha'] ;  ?>
  </div>
</div>
<br>
<?php
	}
    ?>
</div>


</body>
</html>
