<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Solicitud</title>
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
                    <form action="" method="post" class="col s12">
                        <div class="row">
                            <h3 class="center-align yellow-text text-darken-2">Registrar Solicitud</h3>
                        </div>
                        <div class="row">
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-person_pin prefix grey-text"></i>
                                <input id="nameSolicitante" type="text" name="nameSolicitante"  class="validate">
                                <label for="nameSolicitante">Nombre del Solicitante</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-person_pin prefix grey-text"></i>
                                <input type="text" name="ciSolicitante" id="lastnameSolicitante" class="validate">
                                <label for="lastnameSolicitante">Apellido del Solicitante</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-contact_mail prefix grey-text"></i>
                                <input type="text" name="ciSolicitante" id="ciSolicitante" class="validate">
                                <label for="ciSolicitante">Cedula del Solicitante</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-markunread prefix grey-text"></i>
                                <input type="email" name="emailSolicitante" id="emailSolicitante" class="validate">
                                <label for="emailSolicitante">E-mail del Solicitante</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-phone_iphone prefix grey-text"></i>
                                <input type="text" name="telfSolicitante" id="telfSolicitante" class="validate">
                                <label for="telfSolicitante">Teléfono del Solicitante</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-dialpad prefix grey-text"></i>
                                <input type="text" name="numOficio" id="numOficio" class="validate">
                                <label for="numOficio">Número de Oficio</label>
                            </div>
                            <div class="col s12 input-field">
                                <i class="icon-insert_comment prefix grey-text"></i>
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Descripción</label>
                            </div>
                            <div class="col s12 m6 xl6 input-field">
                                <i class="icon-date_range prefix grey-text"></i>
                                <label for="date">Fecha Solicitud</label>
                                <input type="text" name="date" class="datepicker validate">
                            </div>
                            <div class="col s12 m6 xl6 input-field">
                                <i class="icon-import_export prefix grey-text"></i>
                                <select>
                                    <option value="null" disabled selected>Elige una opción</option>
                                    <option value="1">Remitido</option>
                                    <option value="2">En proceso</option>
                                    <option value="3">Denegado</option>
                                </select>
                                <label>Status</label>
                            </div>
                            <div class="col s12 center-align buttons section">
                                <a href="SolicitudesView.html"><button type="submit" class="btn indigo-45deg-gradient-1 waves-effect" onclick="alert('Solicitud Registrada.');"><i class="icon-add_box right"></i>Registrar</button></a>
                            </div>
                        </div>
                    </form>
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