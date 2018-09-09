<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estadisticas - Abastecer C.A.</title>
    <link rel="stylesheet" href="Assets/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/media.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="Assets/icons/style.css">
</head>
<body>
    <?php require_once("View/Public/header.php"); ?>
    <main>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col xl6 l6 m6 s12">
                        <div class="card-dashboard card-stats hoverable">
                            <div class="card-header light-green-45deg-gradient-2">
                                <i class="icon-streetview white-text"></i>
                            </div>
                            <div class="card-content">
                                <p class="category">CLAP Registrados:</p>
                                <h3 class="title yellow-text text-darken-3">830</h3>
                            </div>
                            <div class="card-footer center-align">
                                    <a class="waves-effect waves-light purple-45deg-gradient-2 btn" href="../CLAP/ConsultarCLAPView.php">Detalles <i class="icon-info right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col xl6 l6 m6 s12">
                        <div class="card-dashboard card-stats hoverable">
                            <div class="card-header pink-45deg-gradient-2">
                                <i class="icon-add_shopping_cart white-text"></i>
                            </div>
                            <div class="card-content">
                                <p class="category">Atenciones a las Comunidades:</p>
                                <h3 class="title yellow-text text-darken-3">10</h3>
                            </div>
                            <div class="card-footer center-align">
                                    <a class="waves-effect waves-light btn purple-45deg-gradient-2" href="../Atencion/ConsultarAtencionView.php">Detalles <i class="icon-info right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col xl6 l6 m6 s12">
                        <div class="card-dashboard card-stats hoverable">
                            <div class="card-header indigo-45deg-gradient-2">
                                <i class="icon-people_outline white-text"></i>
                            </div>
                            <div class="card-content">
                                <p class="category">Familias Beneficiadas:</p>
                                <h3 class="title yellow-text text-darken-3">27,230</h3>
                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                    <div class="col xl6 l6 m6 s12">
                        <div class="card-dashboard card-stats hoverable">
                            <div class="card-header teal-45deg-gradient-2">
                                <i class="icon-local_mall white-text"></i>
                            </div>
                            <div class="card-content">
                                <p class="category">Bolsas Entregadas:</p>
                                <h3 class="title yellow-text text-darken-3">1000</h3>
                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col xl12 l12 m12 s12">
                        <div class="card-dashboard hoverable">
                            <div class="card-header purple-top-gradient-1">
                                <h4 class="title title-table">Denuncias.</h4>
                                <p class="category">Úlimas del mes (Sin Resolver).</p>
                            </div>
                            <div class="card-content">
                                <table class="table responsive-table highlight centered">
                                    <thead>
                                        <tr>
                                            <th>N° Denuncia</th>
                                            <th>Fecha</th>
                                            <th>CLAP</th>
                                            <th>Estatus</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>144</td>
                                            <td>05 June,2018</td>
                                            <td>Ali Primera</td>
                                            <td>En Proceso</td>
                                            <td><a href="../Denuncia/DetallesDenunciaView.php" class="btn-floating waves-effect waves-light light-green-45deg-gradient-2"><i class="icon-pageview"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>124</td>
                                            <td>05 April,2018</td>
                                            <td>Viva Bolivar</td>
                                            <td>En Proceso</td>
                                            <td><a href="../Denuncia/DetallesDenunciaView.php" class="btn-floating waves-effect waves-light light-green-45deg-gradient-2"><i class="icon-pageview"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>186</td>
                                            <td>05 June,2018</td>
                                            <td>Ruiz Pineda</td>
                                            <td>En Proceso</td>
                                            <td><a href="../Denuncia/DetallesDenunciaView.php" class="btn-floating waves-effect waves-light light-green-45deg-gradient-2"><i class="icon-pageview"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>193</td>
                                            <td>05 June,2018</td>
                                            <td>Ruiz Pineda</td>
                                            <td>En Proceso</td>
                                            <td><a href="../Denuncia/DetallesDenunciaView.php" class="btn-floating waves-effect waves-light light-green-45deg-gradient-2"><i class="icon-pageview"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col xl12 l12 m12 s12">
                        <div class="card-dashboard hoverable">
                            <div class="card-header indigo-top-gradient-1">
                                <h4 class="title title-table">Solicitudes.</h4>
                                <p class="category">Últimas del mes (Sin Resolver).</p>
                            </div>
                            <div class="card-content">
                                <table class="table responsive-table highlight centered">
                                    <thead>
                                        <tr>
                                            <th>N° Solicitud</th>
                                            <th>Fecha</th>
                                            <th>Solicitante</th>
                                            <th>Estatus</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>144</td>
                                            <td>05 June,2018</td>
                                            <td>Lissette Torrealba</td>
                                            <td>En Proceso</td>
                                            <td><a href="../Solicitud/DetallesSolicitudView.php" class="btn-floating waves-effect waves-light light-green-45deg-gradient-2"><i class="icon-pageview"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>124</td>
                                            <td>05 April,2018</td>
                                            <td>Andres Melendez</td>
                                            <td>En Proceso</td>
                                            <td><a href="../Solicitud/DetallesSolicitudView.php" class="btn-floating waves-effect waves-light light-green-45deg-gradient-2"><i class="icon-pageview"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>186</td>
                                            <td>05 June,2018</td>
                                            <td>Jhon Moran</td>
                                            <td>En Proceso</td>
                                            <td><a href="../Solicitud/DetallesSolicitudView.php" class="btn-floating waves-effect waves-light light-green-45deg-gradient-2"><i class="icon-pageview"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>193</td>
                                            <td>05 June,2018</td>
                                            <td>Gabriel Oropeza</td>
                                            <td>En Proceso</td>
                                            <td><a href="../Solicitud/DetallesSolicitudView.php" class="btn-floating waves-effect waves-light light-green-45deg-gradient-2"><i class="icon-pageview"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
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