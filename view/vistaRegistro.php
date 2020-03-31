<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <style>
    .divider-text {
        position: relative;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 15px;
    }
    .divider-text span {
        padding: 7px;
        font-size: 12px;
        position: relative;   
        z-index: 2;
    }
    .divider-text:after {
        content: "";
        position: absolute;
        width: 100%;
        border-bottom: 1px solid #ddd;
        top: 55%;
        left: 0;
        z-index: 1;
    }
    </style>

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

            </div>
        </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
        <!--input class="form-control" type="text" placeholder="Search"-->
        </form>
        </div>
    </nav>

    <div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Registro</h4>
        <p class="text-center">Haz una cuenta para ser parte de nosotros</p>

        <form action="">
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input  class="form-control" placeholder="Nombre" name="nombre" id="nombre" type="text" required>
        </div> <!-- form-group// -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input  class="form-control" placeholder="Apellidos" name="apellidos" id="apellidos" type="text" required>
        </div> <!-- form-group// -->
        <div  class="col">
            <label ><h6>Elige tu tipo de usuario</h6></label>
        </div>
        <div  class="col">
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="redondo" checked>
                <label class="custom-control-label" for="customRadio1"><h6>Moderador</h6></label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="sencillo">
                <label class="custom-control-label" for="customRadio2"><h6>Registrado</h6></label>
            </div></br>
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input  class="form-control" placeholder="Nombre Usuario" name="nombreUsuario" id="apellidos" type="text" required>
        </div> <!-- form-group// -->
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
        <p class="text-center">Tienes una cuenta <a href="">Inicio de Sesion</a> </p>                                                                 
    </form>
    </article>
    </div> <!-- card.// -->

    </div> 
    <!--container end.//-->

</body>
</html>