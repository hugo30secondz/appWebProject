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
<?php
include '../controller/conexion.php'; 

?>


<h2 style="color:#82CACD">Aprobar Publicaciones</h2>
<img class="img-responsive" src="img/aprobacion.png" style="width: 71px; border-radius: 43px;">

<br>
<table class="table table-striped">
  	
		<thead>
		<tr>
			<th>ID Publicacion</th>
      <th>ID del Usuario</th>
            <th>Texto</th>
            <th>Imagen</th>
            <th>Fecha</th>
            <th>Aprobación</th>
            



        
		</tr>
		</thead>
<?php 



 
 foreach ($mbd->query("SELECT * from publicaciones WHERE aprobado =0") as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
	<td><?php echo $row['id']   ?></td>
  <td><?php echo $row['registrado_id']   ?></td>
  <td><?php echo $row['texto']   ?></td>
  <td><?php //echo $row['img']   ?></td>
  <td><?php echo $row['fecha']   ?></td>
  <td><a title="" href="aprobacion.php"><button type="button" style="margin: 5px" class="btn btn-success">Aprobar</button></a><br><a title="" href="rechazar.php"><button type="button" style="margin: 5px" class="btn btn-danger">Rechazar</button></a></td>
  <td></td>
  
    <td>

    </td>


    
    
  
   
    
     </form>
    </tr>   

   
    


 
<?php
	}
?>
</table>
<br>





</div>
</body>
</html>
