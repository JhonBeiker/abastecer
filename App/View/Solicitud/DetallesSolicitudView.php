<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles Solicitud</title>
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
                            <h3 class="center-align yellow-text text-darken-3">Solicitud N° 12234</h3>
                        </div>
                        <div class="row">    
                            <div class="section"></div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="material-icons icon-person_pin prefix grey-text"></i>
                                <input type="text" name="nameSolicitante" id="" value="Lissette" disabled>
                                <label for="nameSolicitante">Nombre del Solicitante</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="material-icons icon-person_pin prefix grey-text"></i>
                                <input type="text" name="ciSolicitante" id="" value="Torrealba" disabled>
                                <label for="lastnameSolicitante">Apellido del Solicitante</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="material-icons icon-contact_mail prefix grey-text"></i>
                                <input type="text" name="ciSolicitante" id="" value="12345678" disabled>
                                <label for="ciSolicitante">Cedula del Solicitante</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="material-icons icon-markunread prefix grey-text"></i>
                                <input type="email" name="emailSolicitante" id="" value="torrealbalissette@gmail.com" disabled>
                                <label for="emailSolicitante">E-mail del Solicitante</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-phone_iphone prefix grey-text"></i>
                                <input type="text" name="telfSolicitante" id="" value="0416-6655464" disabled>
                                <label for="telfSolicitante">Teléfono del Solicitante</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="material-icons icon-dialpad prefix grey-text"></i>
                                <input type="text" name="numOficio" id="" value="12234" disabled>
                                <label for="numOficio">Número de Oficio</label>
                            </div>
                            <div class="col s12 input-field">
                                <i class="icon-insert_comment prefix grey-text"></i>
                                <textarea id="descSolicitud" class="materialize-textarea" disabled></textarea>
                                <label for="textarea1">Descripción</label>
                            </div>
                            <div class="col s12 input-field">
                                <i class="icon-import_export prefix grey-text"></i>
                                <select disabled>
                                    <option value="">Elige un status</option>
                                    <option value="1" selected>Remitido</option>
                                    <option value="2">Observación</option>
                                    <option value="3">Denegado</option>
                                </select>
                                <label>Status</label>
                            </div>
                        </div>
                        <div class="col s12 center-align buttons section">
                            <div class="row">
                                <div class="col s12 m4 xl4">
                                    <a href="" class="btn blue waves-effect col s12"><i class="icon-settings_backup_restore left"></i>Actualizar</a>
                                </div>
                                <div class="col s12 m4 xl4">
                                    <!-- Boton que activa la ventana modal -->
                                    <a href="#modal1" class="btn red waves-effect modal-trigger col s12"><i class="icon-delete_forever left" ></i>Eliminar</a>
                                    <!-- Estructura del Modal -->
                                    <div id="modal1" class="modal-delete modal modal-fixed-footer modal-delete">
                                        <div class="modal-content">
                                            <h4 class="yellow-text text-darken-3">Eliminar Solicitud n° 12234</h4>
                                            <div class="divider"></div>
                                            <p><span class="new badge red left" data-badge-caption="Confirmación"></span>¿Desea eliminar la solicitud de la base de datos?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="SolicitudView.php" class="modal-action modal-close waves-effect btn green"><i class="icon-check right"></i>SI</a>
                                            <a href="" class="modal-action modal-close waves-effect btn red"><i class="icon-close right"></i>NO</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m4 xl4">
                                    <a href="" class="btn pink waves-effect col s12"><i class="icon-business_center left"></i>Atender</a>
                                </div>
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