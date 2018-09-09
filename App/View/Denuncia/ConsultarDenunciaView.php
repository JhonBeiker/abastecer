<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar Denuncias</title>
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
                        <h3 class="center-align yellow-text text-darken-3">Listado de Denuncias</h3>
                    </div>
                    <div class="row">
                        <ul id="tabs-swipe-demo" class="tabs center-align">
                            <li class="tab col m6"><a class="active" href="#one">Denuncias Registradas</a></li>
                            <li class="tab col m6"><a href="#two">Buscar Denuncia</a></li>
                        </ul>
                    </div>
                    <!-- Tab 1 -->
                    <div class="row" id="one">
                        <div class="col s12">
                            <form action="" method="post" class="row">
                                <div class="col s12 m4 l4 xl4 input-field">
                                    <i class="icon-date_range prefix grey-text"></i>
                                    <input type="text" id="date1" class="datepicker">
                                    <label for="date1">Desde</label>
                                </div>
                                <div class="col s12 m4 l4 xl4 input-field">
                                    <i class="icon-date_range prefix grey-text"></i>
                                    <input type="text" id="date2" class="datepicker">
                                    <label for="date2">Hasta</label>
                                </div>
                                <div class="input-field col s12 m4 l4 xl4 center-align">
                                    <button class="btn orange-45deg-gradient-1 darken-1 waves-effect waves-light col s12" type="submit" name="action">Filtrar
                                        <i class="icon-filter_list right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col s12">
                            <table class="centered highlight" id="test">
                                <thead>
                                    <tr>
                                        <th>N° Denuncia</th>
                                        <th>Fecha</th>
                                        <th>Denunciante</th>
                                        <th>Estatus</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>05 June,2018</td>
                                        <td>Lissette Torrealba</td>
                                        <td>Aprobado</td>
                                        <td><a href="DetallesDenunciaView.php" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>89</td>
                                        <td>04 April,2018</td>
                                        <td>Yohnneiber Diaz</td>
                                        <td>Aprobado</td>
                                        <td><a href="DetallesDenunciaView.php" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>1045</td>
                                        <td>22 May,2018</td>
                                        <td>Andres Melendez</td>
                                        <td>Denegado</td>
                                        <td><a href="DetallesDenunciaView.php" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>1231</td>
                                        <td>19 September,2018</td>
                                        <td>Veronica Quintero</td>
                                        <td>En proceso</td>
                                        <td><a href="DetallesDenunciaView.php" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
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
                                        <i class="icon-dialpad prefix grey-text"></i>
                                        <input type="text" name="numSolicitud" id="numSolicitud">
                                        <label for="numSolicitud">N° de Denuncia</label>
                                    </div>
                                    <div class="col s12 m6 input-field center-align">
                                        <a href="DetallesDenunciaView.php" class="btn indigo-45deg-gradient-1 waves-effect col s12"><i class="icon-search right"></i>Consultar</a>
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