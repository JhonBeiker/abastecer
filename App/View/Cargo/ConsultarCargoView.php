<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar Cargo</title>
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
                        <h3 class="center-align yellow-text text-darken-3">Listado de Cargos</h3>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <table class="centered highlight">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>UBCH</td>
                                        <td>Cualquier cosa de otro campo </td>
                                    </tr>
                                    <tr>
                                        <td>FFM</td>
                                        <td>Cualquier cosa de otro campo </td>
                                    </tr>
                                    <tr>
                                        <td>UNAMUJER</td>
                                        <td>Cualquier cosa de otro campo </td>
                                    </tr>
                                    <tr>
                                        <td>Milicia</td>
                                        <td>Cualquier cosa de otro campo </td>
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