<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestionar Usuario</title>
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
                        <h3 class="center-align yellow-text text-darken-3">Gestionar Usuarios</h3>
                    </div>
                    <div class="col s12">
                        <?php require_once "form_register.php"; ?>
                    </div>
                    <div class="row"></div>
                    <div class="col s12">
                        <table class="centered highlight" id="test">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Usuario</th>
                                    <th>Nombre y Apellido</th>
                                    <th>Rol</th>
                                    <th>Detalles</th>
                                    <th>Actualizar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <!-- Table body -->
                            <?php foreach($allUsers as $user): ?>
                            <?php require_once "form_update.php"; ?>
                            <!-- Modal 1 -->
                            <!-- modal2 -->
                            <div id="modal-2" class="modal">
                                <div class="modal-content">
                                    <h4 class="center-align yellow-text text-darken-2">Eliminar Usuario</h4>
                                <div class="divider"></div>
                                    <p><span class="new badge red-top-gradient-1 left" data-badge-caption="Confirmación"></span>¿Desea eliminar el Usuario de la base de datos?</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="<?php echo $helper->url('Usuario','deleteData'); ?>&idUsuario=<?php echo $user->idUsuario; ?>" class="modal-action modal-close waves-effect btn green-45deg-gradient-1"><i class="icon-check right"></i>SI</a>
                                    <a href="" class="modal-action modal-close waves-effect btn red-45deg-gradient-1"><i class="icon-close right"></i>NO</a>
                                </div>
                            </div>
                            <tbody>
                                <tr>
                                    <td><?php echo $user->idUsuario; ?></td>
                                    <td><?php echo $user->usuario; ?></td>
                                    <td><?php echo $user->nombreUsuario . " " . $user->apellidoUsuario; ?></td>
                                    <td><?php echo $user->rolUsuario; ?></td>
                                    <td><a href="<?php echo $helper->url('Usuario','details'); ?>&idUsuario=<?php echo $user->idUsuario; ?>" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
                                    <td><a href="#modal-1" class="btn-floating waves-effect waves-light blue-45deg-gradient-1 modal-trigger"><i class="icon-update"></i></a></td>
                                    <td><a href="#modal-2" class="btn-floating waves-effect waves-light red-45deg-gradient-1  modal-trigger"><i class="icon-delete"></i></a></td>
                                </tr>
                                <?php endforeach; ?>
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
    </main>
    <?php require_once("View/Public/footer.php"); ?>
    <script type="text/javascript" src="Assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="Assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="Assets/js/exec.js"></script>
</body>
</html>