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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">NUESTRA MARCA O SITIO</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Regresar Index</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="controller/logOut.php">Cerrar Sesion</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" onclick="window.print()" href="#"><i class="fa fa-print" aria-hidden="true"></i> Imprimir</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <h3>Tus reportes son:</h3>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<div class="container">

<canvas id="bar-chart" width="800" height="450"></canvas>
<hr>
<canvas id="pie-chart" width="800" height="450"></canvas>
<hr>
<canvas id="posts" width="800" height="450"></canvas>
</div>
<script>
// Bar chart
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Bad Bunny", "Futbol", "Vacaciones"],
      datasets: [
        {
          label: "Likes",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cea9f"],
          data: [14,42,23]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Temas con mas likes'
      }
    }
});



new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Aprobadas", "Rechazadas"],
      datasets: [{
        label: "Posts",
        backgroundColor: ["#29651a", "#872223"],
        data: [21,12]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Posts aprobados'
      }
    }
});

new Chart(document.getElementById("posts"), {
    type: 'pie',
    data: {
      labels: ["Bien", "Regular","Mal"],
      datasets: [{
        label: "Posts",
        backgroundColor: ["#29651a", "#dadb2c","#872223"],
        data: [51,12,23]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Likes en los posts'
      }
    }
});

</script>


</body>
</html>
