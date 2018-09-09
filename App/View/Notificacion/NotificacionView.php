<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notificaciones</title>
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
                    <div class="section">
                        <h3 class="center-align yellow-text text-darken-3">Listado de Atenciones</h3>
                    </div>
                    <!-- Cards -->
                    <div class="col s12 m6 l6 xl6">
                        <div class="card">
                            <div class="card-image">
                                <a class="pulse btn-floating halfway-fab waves-effect waves-light red"><i class="icon-notifications_active"></i></a>
                            </div>
                            <div class="card-content">
                                <p><b>Atención:</b> CLAP Ruiz Pineda debe ser atendido nuevamente.</p>
                                <p><b>Fecha de Atención:</b> 05 May,2018.</p>
                                <p><b>Fecha Limite:</b> 05 June,2018.</p>
                            </div>
                            <div class="card-action center-align">
                                <a href="../Atencion/RegistrarAtencionView.php">Atender</a>
                                <a href="../Atencion/ConsultarAtencionView.php">Detalles de Atencíon</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6 l6 xl6">
                        <div class="card">
                            <div class="card-image">
                                <a class="pulse btn-floating halfway-fab waves-effect waves-light red"><i class="icon-notifications_active"></i></a>
                            </div>
                            <div class="card-content">
                                <p><b>Atención:</b> Obelisco debe ser atendido nuevamente.</p>
                                <p><b>Fecha de Atención:</b> 22 May,2018.</p>
                                <p><b>Fecha Limite:</b> 22 June,2018.</p>
                            </div>
                            <div class="card-action center-align">
                                <a href="../Atencion/RegistrarAtencionView.php">Atender</a>
                                <a href="../Atencion/ConsultarAtencionView.php">Detalles de Atencíon</a>
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
</body>
</html>