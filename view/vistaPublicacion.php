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
        <h5 class="modal-title" id="exampleModalLabel">Haz una Publicacion "NameUser"</h5>
        <img src="img/escribir.png" style="width:60px;height:60px;">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="insertarPost.php">
      <div class="form-group">
    <label for="exampleFormControlSelect1">Selecciona el tema</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Tema 1</option>
      <option>Tema 2</option>
      <option>Tema 3</option>
      <option>Tema 4</option>
      <option>Tema 5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Escribe tu Post</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="¿Que estas pensando?" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1"> <img src="img/imagenUpload.png" style="width:60px;height:60px;">Sube una foto</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <br>
  <div class="form-group">
    <?php $fcha = date("Y-m-d");?>
    <input type="date" class="form-control"  value="<?php echo $fcha;?>" >
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

</body>
</html>







