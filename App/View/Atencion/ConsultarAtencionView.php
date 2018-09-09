<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar Atención</title>
    <link rel="stylesheet" href="Assets/css/materialize.min.css">
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
                    <div class="row">
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
                            <ul class="collapsible popout" data-collapsible="accordion" id="test">
                                <li>
                                    <div class="collapsible-header">
                                        <i class="icon-archive"></i><span><b>CLAP: </b>Alí Primera</span>
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            <ul>
                                                <li><b>Parroquia:</b> Unión</li>
                                                <li><b>Fecha de Atención</b> :4 June,2018</li>
                                                <li><b>Fecha Limite:</b> 4 July,2018</li>
                                            </ul>
                                        </span>
                                        <div class="row section">
                                            <div class="col s12 center-align">
                                                <a href="DetallesAtencionView.php" class="btn indigo-45deg-gradient-1 waves-effect waves-light"><i class="icon-pageview left"></i>Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header red-top-gradient-1 darken-4">
                                        <i class="icon-archive"></i><span><b>CLAP: </b>Obelisco</span>
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            <ul>
                                                <li><b>Parroquia:</b> Iribarren</li>
                                                <li><b>Fecha de Atención</b> :22 May,2018</li>
                                                <li><b>Fecha Limite:</b> 22 June,2018</li>
                                            </ul>
                                        </span>
                                        <div class="row section">
                                            <div class="col s12 center-align">
                                                <a href="DetallesAtencionView.php" class="btn indigo-45deg-gradient-1 waves-effect waves-light"><i class="icon-pageview left"></i>Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header">
                                        <i class="icon-archive"></i><span><b>CLAP: </b>Ruíz Pineda</span>
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            <ul>
                                                <li><b>Parroquia:</b> Iribarren</li>
                                                <li><b>Fecha de Atención</b> :14 June,2018</li>
                                                <li><b>Fecha Limite:</b> 14 July,2018</li>
                                            </ul>
                                        </span>
                                        <div class="row section">
                                            <div class="col s12 center-align">
                                                <a href="DetallesAtencionView.php" class="btn indigo-45deg-gradient-1 waves-effect waves-light"><i class="icon-pageview left"></i>Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header red-top-gradient-1 darken-4">
                                        <i class="icon-archive"></i><span><b>CLAP: </b>Viva Bolivar</span>
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            <ul>
                                                <li><b>Parroquia:</b> Iribarren</li>
                                                <li><b>Fecha de Atención</b> :22 May,2018</li>
                                                <li><b>Fecha Limite:</b> 22 June,2018</li>
                                            </ul>
                                        </span>
                                        <div class="row section">
                                            <div class="col s12 center-align">
                                                <a href="DetallesView.php" class="btn indigo-45deg-gradient-1 waves-effect waves-light"><i class="icon-pageview left"></i>Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header">
                                        <i class="icon-archive"></i><span><b>CLAP: </b>San Jacinto</span>
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            <ul>
                                                <li><b>Parroquia:</b> Iribarren</li>
                                                <li><b>Fecha de Atención</b> :14 June,2018</li>
                                                <li><b>Fecha Limite:</b> 14 July,2018</li>
                                            </ul>
                                        </span>
                                        <div class="row section">
                                            <div class="col s12 center-align">
                                                <a href="DetallesAtencionView.php" class="btn indigo-45deg-gradient-1 waves-effect waves-light"><i class="icon-pageview left"></i>Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="collapsible-header red-top-gradient-1 darken-4">
                                        <i class="icon-archive"></i><span><b>CLAP: </b>Obelisco</span>
                                    </div>
                                    <div class="collapsible-body">
                                        <span>
                                            <ul>
                                                <li><b>Parroquia:</b> Iribarren</li>
                                                <li><b>Fecha de Atención</b> :22 May,2018</li>
                                                <li><b>Fecha Limite:</b> 22 June,2018</li>
                                            </ul>
                                        </span>
                                        <div class="row section">
                                            <div class="col s12 center-align">
                                                <a href="DetallesAtencionView.php" class="btn indigo-45deg-gradient-1 waves-effect waves-light"><i class="icon-pageview left"></i>Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
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