<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar CLAP</title>
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
                        <h3 class="center-align yellow-text text-darken-3">Listado de CLAP</h3>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <form action="" method="post" class="row">
                                <div class="col s12 m8 l8 xl8 input-field">
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
                                <div class="input-field col s12 m4 l4 xl4 center-align">
                                    <button class="btn orange-45deg-gradient-1 waves-effect waves-light" type="submit" name="action">Filtrar
                                        <i class="icon-filter_list right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col s12">
                            <table class="centered highlight" id="test">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Comunidad</th>
                                        <th>Parroquia</th>
                                        <th>Emp. Distr.</th>
                                        <th>Detalles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Nueva Esperanza</td>
                                        <td>Barrio Union</td>
                                        <td>Juan de Villegas</td>
                                        <td>Mercal</td>
                                        <td><a href="DetallesCLAPView.php" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Viva Bolivar</td>
                                        <td>La Carucieña</td>
                                        <td>Union</td>
                                        <td>Abas</td>
                                        <td><a href="DetallesCLAPView.php" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Zamora</td>
                                        <td>La Paz</td>
                                        <td>Buena Vista</td>
                                        <td>PDVAL</td>
                                        <td><a href="DetallesCLAPView.php" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Obelisco</td>
                                        <td>Los Pocitos</td>
                                        <td>Juan de Villegas</td>
                                        <td>Abas</td>
                                        <td><a href="DetallesCLAPView.php" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
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