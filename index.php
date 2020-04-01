<?php 
session_start();
include 'view/vistaComponentes.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <title>PROYECTO</title>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="#">NUESTRA MARCA O SITIO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link"><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="registrarUsuario.php"></a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
        </li>
        <li class="nav-item dropdown">
            <?php 
                if(isset($_SESSION['idUsuario'])){
                ?>
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['nombre']; ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="controller/logOut.php">Cerrar Sesión</a>
                    </div>
                <?php
                }
            ?>
        </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
        <!--input class="form-control" type="text" placeholder="Search"-->
        </form>
        </div>
    </nav>

    <?php 
        if(isset($_SESSION['idUsuario'])){// si está logueado muestra pantallas para cada usuario dependiendo el tipo
            if($_SESSION['tipo'] == "registrado"){
            ?>
                <h1> USUARIO REGISTRADO </h1>
            <?php 
            }
            else{
                if($_SESSION['tipo'] == "moderador"){
            ?>
                <h1> USUARIO MODERADOR </h1>
            <?php
                }
                else{
                ?>
                    <h1> USUARIO ADMINISTRADOR </h1>
                <?php
                } 
            }
        ?>
             
        <?php 
        }
        else{//sino el formulario de incio de sesión
            echo formInicioSesion();
        ?>
        <?php

        }
    ?>


</body>
</html>