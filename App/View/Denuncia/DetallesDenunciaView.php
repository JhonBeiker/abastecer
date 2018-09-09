<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles - Denuncia</title>
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
                            <h3 class="center-align yellow-text text-darken-3">Denuncia N° 1</h3>
                        </div>
                        <div class="row">
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-person_pin prefix grey-text"></i>
                                <input type="text" name="nameDenunciante" id="" value="Lissette" disabled>
                                <label for="nameDenunciante">Nombre del Denunciante</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-person_pin prefix grey-text"></i>
                                <input type="text" name="ciDenunciante" id="" value="Torrealba" disabled>
                                <label for="lastnameDenunciante">Apellido del Denunciante</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-contact_mail prefix grey-text"></i>
                                <input type="text" name="ciDenunciante" id="" value="12345678" disabled>
                                <label for="ciDenunciante">Cedula del Denunciante</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-markunread prefix grey-text"></i>
                                <input type="email" name="emailDenunciante" id="" value="torrealbalissette@gmail.com" disabled>
                                <label for="emailDenunciante">E-mail del Denunciante</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-phone_iphone prefix grey-text"></i>
                                <input type="text" name="telfDenunciante" id="" value="0416-6655464" disabled>
                                <label for="telfDenunciante">Teléfono del Denunciante</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-dialpad prefix grey-text"></i>
                                <input type="text" name="numControl" id="" value="20" disabled>
                                <label for="numControl">Número de Control</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-date_range prefix grey-text"></i>
                                <input type="text" name="date" class="datepicker validate" value="27/09/2020" disabled>
                                <label for="date">Fecha</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-map prefix grey-text"></i>
                                <select name="parroquia" disabled>
                                    <option>Elige una opición</option>
                                    <option value="">Buena Vista</option>
                                    <option value="">Catedral</option>
                                    <option value="">Concepción</option>
                                    <option value="">Felipe Alvarado</option>
                                    <option value="" selected>Juan de Villegas</option>
                                    <option value="">Juarez</option>
                                    <option value="">Santa Rosa</option>
                                    <option value="">Tamaca</option>
                                    <option value="">Unión</option>
                                </select>
                                <label>Parroquia</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-streetview prefix grey-text"></i>
                                <select name="clap" disabled>
                                    <option>Seleccione CLAP</option>
                                    <option value="">Clap Nueva Esperanza</option>
                                    <option value="" selected>Clap Viva Bolivar</option>
                                    <option value="">Clap Zamora</option>
                                </select>
                                <label>CLAP</label>
                            </div>
                            <div class="col s12 m6 xl12 input-field">
                                <i class="icon-import_export prefix grey-text"></i>
                                <select name="status" disabled>
                                    <option value="null" disabled class="grey-text">Elige una opción</option>
                                    <option value="1" selected>Aprobado</option>
                                    <option value="2">En proceso</option>
                                    <option value="3">Denegado</option>
                                </select>
                                <label>Status</label>
                            </div>
                            <div class="col s12 input-field">
                                <i class="icon-insert_comment prefix grey-text"></i>
                                <textarea id="descDenuncia" class="materialize-textarea" disabled></textarea>
                                <label for="textarea1">Descripción</label>
                            </div>
                            <div class="col s12 center-align buttons section">
                            <div class="row">
                                <!-- Botón para actualizar -->
                                <div class="col s12 m4 xl4">
                                    <a href="" class="btn blue-45deg-gradient-1 waves-effect col s12"><i class="icon-settings_backup_restore left"></i>Actualizar</a>
                                </div>
                                <!-- Boton para eliminar -->
                                <div class="col s12 m4 xl4">
                                    <!-- Boton que activa la ventana modal -->
                                    <a href="#modal1" class="btn red-45deg-gradient-1 waves-effect modal-trigger col s12"><i class="icon-delete_forever left" ></i>Eliminar</a>
                                    <!-- Estructura del Modal -->
                                    <div id="modal1" class="modal-delete modal modal-fixed-footer modal-delete">
                                        <div class="modal-content">
                                            <h4 class="yellow-text text-darken-3">Eliminar Denuncia n° 12</h4>
                                            <div class="divider"></div>
                                            <p><span class="new badge red-top-gradient-1 left" data-badge-caption="Confirmación"></span>¿Desea eliminar la solicitud de la base de datos?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="DenunciaView.php" class="modal-action modal-close waves-effect btn green-45deg-gradient-1"><i class="icon-check right"></i>SI</a>
                                            <a href="" class="modal-action modal-close waves-effect btn red-45deg-gradient-1"><i class="icon-close right"></i>NO</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Botón para generar un PDF -->
                                <div class="col s12 m4 xl4">
                                    <a href="" class="btn purple-45deg-gradient-1 darken-2 col s12"><i class="icon-description left"></i>PDF</a>
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