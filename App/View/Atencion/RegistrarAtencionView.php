<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Atención</title>
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
                        <h3 class="center-align yellow-text text-darken-3">Registrar Atención</h3>
                    </div>
                    <div class="row">
                        <ul id="tabs-swipe-demo" class="tabs center-align">
                            <li class="tab col m6"><a class="active" href="#one">Registrar Atención</a></li>
                            <li class="tab col m6"><a href="#two">Registrar Beneficiario</a></li>
                        </ul>
                    </div>
                    <!-- Tab 1 -->
                    <div class="row" id="one">
                        <div class="col s12">
                            <form action="" method="post" class="row">
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-date_range prefix grey-text"></i>
                                    <label for="date">Fecha Atención</label>
                                    <input type="text" name="date" class="datepicker validate">
                                </div>
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-streetview prefix grey-text"></i>
                                    <select name="tipoAtencion">
                                        <option disabled selected>Seleccione Atención</option>
                                        <option>Casa a casa</option>
                                        <option>Feria del Campo</option>
                                        <option>Otro</option>
                                    </select>
                                    <label>Tipo de atención</label>
                                </div>
                                <div class="col s12 m6 xl4 input-field">
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
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-streetview prefix grey-text"></i>
                                    <select name="clap">
                                        <option disabled selected>Seleccione CLAP</option>
                                        <option>Clap Nueva Esperanza</option>
                                        <option>Clap Viva Bolivar</option>
                                        <option>Clap Zamora</option>
                                    </select>
                                    <label>CLAP</label>
                                </div>
                                <div class="col s12 input-field">
                                    <i class="icon-insert_comment prefix grey-text"></i>
                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Descripción</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Tab 2 -->
                    <div id="two" class="row">
                        <div class="col s12">
                            <form action="" method="post" class="row">
                                <div class="col s12 m6 input-field tooltipped" data-position="top" data-tooltip="Ingrese la cedula de un miembro de la familia para ser beneficiado.">
                                    <i class="icon-chrome_reader_mode prefix grey-text grey-text"></i>
                                    <input type="text" id="ciIntegrante" name="ciIntegrante" class="validate">
                                    <label for="ciIntegrante">Cedula</label>
                                </div>
                                <div class="col s12 m6 input-field center-align">
                                    <a href="DetallesSolicitudView.php" class="btn indigo-45deg-gradient-1 waves-effect col s12"><i class="icon-search right"></i>Buscar</a>    
                                </div>
                                <div class="col s12 card">
                                    <div class="card-content row">
                                        <span class="card-title center-align">Registros</span>
                                        <div class="col s12">
                                            <span>Pedro picapiedra</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 btns">
                                    <button type="submit" class="btn waves-effect waves-light indigo-45deg-gradient-1 col s12"><i class="icon-add right"></i>Registrar</button>
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