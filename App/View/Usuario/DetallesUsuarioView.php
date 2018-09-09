<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario | <?php echo $register->nombreUsuario; ?></title>
    <link rel="stylesheet" type="text/css" href="Assets/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/media.css">
    <link rel="stylesheet" type="text/css" href="Assets/icons/style.css">
</head>
<body>
    <?php require_once("View/Public/header.php"); ?>
    <main>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="Assets/img/matthew.png" alt="">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <span class="card-title center-align yellow-text text-darken-2"><?php echo $register->usuario; ?></span>
                                    <div class="row">
                                        <div class="col s12">
                                            <ul>
                                                <li><b>Nombre:</b> <?php echo $register->nombreUsuario; ?></li>
                                                <li><b>Apellido:</b> <?php echo $register->apellidoUsuario; ?></li>
                                                <li><b>Cedula:</b> <?php echo $register->cedulaUsuario; ?></li>
                                                <li><b>Usuario:</b> <?php echo $register->usuario; ?></li>
                                                <li><b>E-mail:</b> <?php echo $register->emailUsuario; ?></li>
                                                <li><b>Teléfono:</b> <?php echo $register->telefonoUsuario; ?></li>
                                                <li><b>Rol:</b> <?php echo $register->rolUsuario; ?></li>
                                                <li><b></b></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-action">
                                        <div class="btn col s12 m6">Hola</div>
                                        <div class="btn col s12 m6">Hola</div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require_once("View/Public/footer.php"); ?>
    <script type="text/javascript" src="Assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="Assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="Assets/js/exec.js"></script>
    <script type="text/javascript" src="Assets/js/AJAXController/Usuario.js"></script>
</body>
</html>