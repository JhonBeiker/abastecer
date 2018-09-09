<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar Solicitud</title>
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
                        <h3 class="center-align yellow-text text-darken-3">Listado de Solicitudes</h3>
                    </div>
                    <div class="row">
                        <ul id="tabs-swipe-demo" class="tabs center-align">
                            <li class="tab col m6"><a class="active" href="#one">Solicitudes Registradas</a></li>
                            <li class="tab col m6"><a href="#two">Buscar Solicitud</a></li>
                        </ul>
                    </div>
                    <!-- Tab 1 -->
                    <div class="row" id="one">
                        <div class="col s12">
                            <table class="centered highlight" id="test">
                                <thead>
                                    <tr>
                                        <th>N° Solicitud</th>
                                        <th>Solicitante</th>
                                        <th>Telefono</th>
                                        <th>Detalles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1224</td>
                                        <td>Lissette Torrealba</td>
                                        <td>04161534567</td>
                                        <td><a href="DetallesSolicitudView.php" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>05148</td>
                                        <td>Yohnneiber Diaz</td>
                                        <td>04165539754</td>
                                        <td><a href="DetallesSolicitudView.php" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>12113</td>
                                        <td>Andres Melendez</td>
                                        <td>0416789787</td>
                                        <td><a href="DetallesSolicitudView.php" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>123123</td>
                                        <td>Veronica Quintero</td>
                                        <td>04161234572</td>
                                        <td><a href="DetallesSolicitudView.php" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col s12 center-align">
                            <ul class="pagination">
                                <li class="disabled"><a href="#!"><i class="icon-navigate_before"></i></a></li>
                                <li class="active teal-45deg-gradient-1"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="icon-navigate_next"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Tab 2 -->
                    <div id="two" class="col s12">
                        <div class="row">
                            <form action="" method="post" class="col s12">
                                <div class="row">
                                    <div class="col s12 m6 input-field">
                                        <i class="icon-map prefix grey-text"></i>
                                        <select name="parroquia">
                                            <option disabled selected>Elige una opición</option>
                                            <option>Buena Vista</option>
                                            <option>Catedral</option>
                                            <option>Concepción</option>
                                            <option>Felipe Alvarado</option>
                                            <option>Juan de Villegas</option>
                                            <option>Juarez</option>
                                            <option>Santa Rosa</option>
                                            <option>Tamaca</option>
                                            <option>Unión</option>
                                        </select>
                                        <label>Parroquia</label>
                                    </div>
                                    <div class="col s12 m6 input-field">
                                        <i class="icon-dialpad prefix grey-text"></i>
                                        <input type="text" name="numSolicitud" id="numSolicitud">
                                        <label for="numSolicitud">N° de Solicitud</label>
                                    </div>
                                    <div class="col s12 input-field center-align">
                                        <a href="DetallesSolicitudView.php" class="btn indigo-45deg-gradient-1 waves-effect"><i class="icon-search right"></i>Consultar</a>
                                    </div>
                                </div>
                            </form>
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