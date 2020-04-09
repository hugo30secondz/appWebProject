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
        /*var idu=1;
      var id=n;
      $.ajax({
          url:"model/modelLikes.php",
          data: {idu:idu,id:id},
          type:"POST",
          success:function(data){
              if(data != false){
                  for (var i = 0; i < data.length; i++) {  
                      //var idNR = data[i]['id']; 
                      //$("#bien").append("<tr id='"+idNR+"' class='rowI'><td>"+data[i]['nombres']+"</td><td>"+data[i]['apellidos']+"</td><td>"+data[i]['cargo']+"</td></tr>");
                      var idlb = 'lb'+n;
                      $("#b"+id).append("<a class='alert-link' id='"+idlb+"'>"+data[i]['bien']+"</a>");
                  }
              } 
          }
      })*/ 
include '../controller/conexion.php';
include '../controller/controllerLikes.php'; 
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
