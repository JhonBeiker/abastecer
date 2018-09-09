<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestionar Reportes</title>
    <link rel="stylesheet" type="text/css" href="Assets/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/media.css">
    <link rel="stylesheet" type="text/css" href="Assets/icons/style.css">
    <link rel="stylesheet" type="text/css" href="Assets/css/dashboard.css">
</head>
<body>
    <?php require_once("View/Public/header.php"); ?>
    <main>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="section">
                        <h3 class="center-align yellow-text text-darken-3">Gestión de Reportes</h3>
                    </div>
                    <!-- CLAPS -->
                    <div class="col s12">
                        <div class="card card-dashboard hoverable">
                            <div class="card-header red-top-gradient-1">
                                <div class="row">
                                    <div class="col s12">
                                        <h4 class="title title-table">CLAP's.</h4>
                                    </div>
                                </div>
                                <form action="" method="post" class="row dashboard-form">
                                    <div class="col s12 m8 l8 xl8 input-field">
                                        <i class="icon-map prefix white-text"></i>
                                        <select name="parroquia" class="white-text">
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
                                        <button class="btn red-right-gradient-1 waves-effect waves-light" type="submit" name="action">Filtrar
                                            <i class="icon-filter_list right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-content">
                                <table class="table responsive-table highlight centered striped">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Comunidad</th>
                                            <th>Parroquia</th>
                                            <th>Emp. Distr.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nueva Esperanza</td>
                                            <td>Barrio Union</td>
                                            <td>Juan de Villegas</td>
                                            <td>Mercal</td>
                                        </tr>
                                        <tr>
                                            <td>Viva Bolivar</td>
                                            <td>La Carucieña</td>
                                            <td>Union</td>
                                            <td>ABAS C.A</td>
                                        </tr>
                                        <tr>
                                            <td>Zamora</td>
                                            <td>La Paz</td>
                                            <td>Buena Vista</td>
                                            <td>PDVAL</td>
                                        </tr>
                                        <tr>
                                            <td>Obelisco</td>
                                            <td>Los Pocitos</td>
                                            <td>Juan de Villegas</td>
                                            <td>ABAS C.A</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-action center-align">
                                <a href="" class="btn btn-large red-45deg-gradient-1"><i class="icon-insert_drive_file right"></i>PDF</a>
                            </div>
                        </div>
                    </div>
                    <!-- Solicitudes -->
                    <div class="col s12">
                        <div class="card card-dashboard hoverable">
                            <div class="card-header indigo-top-gradient-1">
                                <div class="row">
                                    <div class="col s12">
                                        <h4 class="title title-table">Solicitudes.</h4>
                                    </div>
                                </div>
                                <form action="" method="post" class="row dashboard-form">
                                    <div class="col s12 m8 l8 xl8 input-field">
                                        <i class="icon-map prefix white-text"></i>
                                        <select name="parroquia" class="white-text">
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
                                        <button class="btn indigo-right-gradient-1 waves-effect waves-light" type="submit" name="action">Filtrar
                                            <i class="icon-filter_list right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-content">
                                <table class="table responsive-table highlight centered striped">
                                    <thead>
                                        <tr>
                                            <th>N° Solicitud</th>
                                            <th>Solicitante</th>
                                            <th>Telefono</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1224</td>
                                            <td>Lissette Torrealba</td>
                                            <td>04161534567</td>
                                        </tr>
                                        <tr>
                                            <td>05148</td>
                                            <td>Yohnneiber Diaz</td>
                                            <td>04165539754</td>
                                        </tr>
                                        <tr>
                                            <td>12113</td>
                                            <td>Andres Melendez</td>
                                            <td>0416789787</td>
                                        </tr>
                                        <tr>
                                            <td>123123</td>
                                            <td>Veronica Quintero</td>
                                            <td>04161234572</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-action center-align">
                                <a href="" class="btn btn-large indigo-45deg-gradient-1"><i class="icon-insert_drive_file right"></i>PDF</a>
                            </div>
                        </div>
                    </div>
                    <!-- Denuncias -->
                    <div class="col s12">
                        <div class="card card-dashboard hoverable">
                            <div class="card-header purple-top-gradient-1">
                                <div class="row">
                                    <div class="col s12">
                                        <h4 class="title title-table">Denuncias.</h4>
                                    </div>
                                </div>
                                <form action="" method="post" class="row dashboard-form">
                                    <div class="col s12 m4 l4 xl4 input-field">
                                        <i class="icon-date_range prefix white-text"></i>
                                        <input type="text" id="date1" class="datepicker white-text">
                                        <label for="date1">Desde</label>
                                    </div>
                                    <div class="col s12 m4 l4 xl4 input-field">
                                        <i class="icon-date_range prefix white-text"></i>
                                        <input type="text" id="date2" class="datepicker white-text">
                                        <label for="date2">Hasta</label>
                                    </div>
                                    <div class="input-field col s12 m4 l4 xl4 center-align">
                                        <button class="btn purple-right-gradient-1 waves-effect waves-light" type="submit" name="action">Filtrar
                                            <i class="icon-filter_list right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-content">
                                <table class="table responsive-table highlight centered striped">
                                    <thead>
                                        <tr>
                                            <th>N° Denuncia</th>
                                            <th>Fecha</th>
                                            <th>CLAP</th>
                                            <th>Estatus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>144</td>
                                            <td>05 June,2018</td>
                                            <td>Ali Primera</td>
                                            <td>En Proceso</td>
                                        </tr>
                                        <tr>
                                            <td>124</td>
                                            <td>05 April,2018</td>
                                            <td>Viva Bolivar</td>
                                            <td>En Proceso</td>
                                        </tr>
                                        <tr>
                                            <td>186</td>
                                            <td>05 June,2018</td>
                                            <td>Ruiz Pineda</td>
                                            <td>En Proceso</td>
                                        </tr>
                                        <tr>
                                            <td>193</td>
                                            <td>05 June,2018</td>
                                            <td>Ruiz Pineda</td>
                                            <td>En Proceso</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-action center-align">
                                <a href="" class="btn btn-large purple-45deg-gradient-1"><i class="icon-insert_drive_file right"></i>PDF</a>
                            </div>
                        </div>
                    </div>
                    <!-- Atenciones -->
                    <div class="col s12">
                        <div class="card card-dashboard hoverable">
                            <div class="card-header teal-top-gradient-1">
                                <div class="row">
                                    <div class="col s12">
                                        <h4 class="title title-table">Atenciones.</h4>
                                    </div>
                                </div>
                                <form action="" method="post" class="row dashboard-form">
                                    <div class="col s12 m4 l4 xl4 input-field">
                                        <i class="icon-date_range prefix white-text"></i>
                                        <input type="text" id="date1" class="datepicker white-text">
                                        <label for="date1">Desde</label>
                                    </div>
                                    <div class="col s12 m4 l4 xl4 input-field">
                                        <i class="icon-date_range prefix white-text"></i>
                                        <input type="text" id="date2" class="datepicker white-text">
                                        <label for="date2">Hasta</label>
                                    </div>
                                    <div class="input-field col s12 m4 l4 xl4 center-align">
                                        <button class="btn teal-right-gradient-1 waves-effect waves-light" type="submit" name="action">Filtrar
                                            <i class="icon-filter_list right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-content">
                                <table class="table responsive-table highlight centered striped">
                                    <thead>
                                        <tr>
                                            <th>CLAP</th>
                                            <th>Parroquia</th>
                                            <th>Última Atención</th>
                                            <th>Próxima Atención</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nueva Esperanza</td>
                                            <td>Juan de Villegas</td>
                                            <td>19/08/2018</td>
                                            <td>19/09/2018</td>
                                        </tr>
                                        <tr>
                                            <td>Bolivar</td>
                                            <td>Unión</td>
                                            <td>16/08/2018</td>
                                            <td>16/09/2018</td>
                                        </tr>
                                        <tr>
                                            <td>Zamora</td>
                                            <td>Catedral</td>
                                            <td>08/08/2018</td>
                                            <td>08/09/2018</td>
                                        </tr>
                                        <tr>
                                            <td>Chavez Vive</td>
                                            <td>Santa Rosa</td>
                                            <td>02/08/2018</td>
                                            <td>02/09/2018</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-action center-align">
                                <a href="" class="btn btn-large teal-45deg-gradient-1"><i class="icon-insert_drive_file right"></i>PDF</a>
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