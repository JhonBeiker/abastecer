<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles - Integrante Familia</title>
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
                        <h3 class="center-align yellow-text text-darken-3">Integrante - Familia n° 1</h3>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <form action="" method="post" class="row">
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-person_pin prefix grey-text"></i>
                                    <input type="text" id="namesIntegrante" name="namesIntegrante" class="validate" value="Eddy Luz" disabled>
                                    <label for="namesIntegrante">Nombres</label>
                                </div>
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-person_pin prefix grey-text"></i>
                                    <input type="text" id="lastnamesIntegrante" name="lastnamesIntegrante" class="validate" value="Jiménez Torres" disabled>
                                    <label for="lastnamesIntegrante">Apellidos</label>
                                </div>
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-chrome_reader_mode prefix grey-text grey-text"></i>
                                    <input type="text" id="ciIntegrante" name="ciIntegrante" class="validate" value=12708170 disabled required>
                                    <label for="ciIntegrante">Cedula</label>
                                </div>
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-date_range prefix grey-text"></i>
                                    <input type="text" id="birthDate" name="birthDate" class="datepicker" value="08/02/1975" disabled required>
                                    <label for="birthDate">Nacimiento</label>
                                </div>
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-contact_phone prefix grey-text"></i>
                                    <input type="tel" id="telfIntegrante" name="telfIntegrante" class="validate" value=04245199337 disabled required>
                                    <label for="telfIntegrante">Teléfono</label>
                                </div>
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-contact_mail prefix grey-text"></i>
                                    <input type="email" id="emailIntegrante" class="emailIntegrante" class="validate" value="eddyluzjimenez@gmail.com" disabled required>
                                    <label for="emailIntegrante">E-mail</label>
                                </div>
                                <div class="col s12 m6 input-field">
                                    <i class="icon-wc prefix grey-text"></i>
                                    <select id="genderIntegrante" name="genderIntegrante" required disabled>
                                        <option disabled >Seleccione</option>
                                        <option selected>Femenino</option>
                                        <option>Masculino</option>
                                    </select>
                                    <label for="genderIntegrante">Sexo</label>
                                </div>
                                <div class="col s12 m6 input-field">
                                    <i class="icon-face prefix grey-text"></i>
                                    <select id="rolIntegrante" name="rolIntegrante" required disabled>
                                        <option disabled>Seleccione</option>
                                        <option selected>Jefe</option>
                                        <option>Integrante</option>
                                    </select>
                                    <label for="rolIntegrante">Rol</label>
                                </div>
                                <div class="col s12 m6 input-field">
                                    <i class="icon-card_membership prefix grey-text"></i>
                                    <input type="text" id="codcarnet" name="codCarnet" class="validate" value=0000708165 disabled required>
                                    <label for="codcarnet">Código Carnet de la Patria</label>
                                </div>
                                <div class="col s12 m6 input-field">
                                    <i class="icon-card_membership prefix grey-text"></i>
                                    <input type="text" id="serialcarnet" name="serialcarnet" class="validate" value=0000234554 disabled required>
                                    <label for="serialcarnet">Serial Carnet de la Patria</label>
                                </div>
                                <div class="row">
                                    <div class="col s12 m6 input-field center-align">
                                        <?php require_once "formUpdateIntegrante.php"; ?>
                                        <a href="#modal-1" class="btn waves-effect waves-light blue-45deg-gradient-1 modal-trigger col s12"><i class="icon-update left"></i>Actualizar</a>
                                    </div>
                                    <div class="col s12 m6 input-field center-align">
                                        <!-- Delete Modal -->
                                        <a href="#modal1" class="btn red-45deg-gradient-1 waves-effect waves-light modal-trigger col s12"><i class="icon-delete_forever left"></i>Eliminar</a>
                                        <!-- Modal Body -->
                                        <div id="modal1" class="modal-delete modal modal-fixed-footer">
                                            <div class="modal-content">
                                                <h4>Eliminar Familia N° 001</h4>
                                                <div class="divider"></div>
                                                <p class="left-align"><span class="new badge red-top-gradient-1 left" data-badge-caption="Confirmación"></span>¿Desea eliminar al Integrante?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="DetallesFamiliaView.php" onclick="alert('Integrante Eliminado');" class="modal-action modal-close waves-effect btn green-45deg-gradient-1"><i class="icon-check right"></i>SI</a>
                                                <a href="#" class="modal-action modal-close waves-effect btn red-45deg-gradient-1"><i class="icon-close right"></i>NO</a>
                                            </div>
                                        </div>
                                    </div>
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