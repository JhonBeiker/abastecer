<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar Enlaces Políticos</title>
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
                        <h3 class="center-align yellow-text text-darken-3">Listado de Enlaces Políticos</h3>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <table class="centered highlight">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Parroquia</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <!-- Modal -->
                                <div id="modal1" class="modal">
                                    <div class="modal-content">
                                        <h4 class="center-align yellow-text text-darken-2">Eliminar Enlace Político: Donald Trump</h4>
                                    <div class="divider"></div>
                                        <p><span class="new badge red-top-gradient-1 left" data-badge-caption="Confirmación"></span>¿Desea eliminar al enlace político Donald Trump de la base de datos?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="EnlaceView.php" class="modal-action modal-close waves-effect btn green-45deg-gradient-1"><i class="icon-check right"></i>SI</a>
                                        <a href="" class="modal-action modal-close waves-effect btn red-45deg-gradient-1"><i class="icon-close right"></i>NO</a>
                                    </div>
                                </div>
                                <!-- Table Body -->
                                <tbody>
                                    <tr>
                                        <td>Donald</td>
                                        <td>Trump</td>
                                        <td>Juan de Villegas</td>
                                        <td><a href="#modal1" class="tooltipped btn-floating waves-effect waves-light red-45deg-gradient-1 modal-trigger" data-position="top" datadelay="5" data-tooltip="Eliminar"><i class="icon-delete_forever"></i><</a></td>
                                    </tr>
                                    <tr>
                                        <td>Barack</td>
                                        <td>Obama</td>
                                        <td>Concepcion</td>
                                        <td><a href="#modal1" class="tooltipped btn-floating waves-effect waves-light red-45deg-gradient-1 modal-trigger" data-position="top" datadelay="5" data-tooltip="Eliminar"><i class="icon-delete_forever"></i><</a></td>
                                    </tr>
                                    <tr>
                                        <td>George</td>
                                        <td>W. Bush</td>
                                        <td>Union</td>
                                        <td><a href="#modal1" class="tooltipped btn-floating waves-effect waves-light red-45deg-gradient-1 modal-trigger" data-position="top" datadelay="5" data-tooltip="Eliminar"><i class="icon-delete_forever"></i><</a></td>
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