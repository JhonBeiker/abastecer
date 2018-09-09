<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Integrante de Familia</title>
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
                            <h3 class="center-align yellow-text text-darken-2">Registrar Integrante de Familia</h3>
                        </div>
                        <div class="row">
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-person_pin prefix grey-text"></i>
                                <input type="text" id="namesIntegrante" name="namesIntegrante" class="validate" required>
                                <label for="namesIntegrante">Nombres</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-person_pin prefix grey-text"></i>
                                <input type="text" id="lastnamesIntegrante" name="lastnamesIntegrante" class="validate" required>
                                <label for="lastnamesIntegrante">Apellidos</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-chrome_reader_mode prefix grey-text grey-text"></i>
                                <input type="text" id="ciIntegrante" name="ciIntegrante" class="validate">
                                <label for="ciIntegrante">Cedula</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-date_range prefix grey-text"></i>
                                <input type="text" id="birthDate" name="birthDate" class="datepicker" required>
                                <label for="birthDate">Nacimiento</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-contact_mail prefix grey-text"></i>
                                <input type="email" id="emailIntegrante" class="emailIntegrante" class="validate">
                                <label for="emailIntegrante">E-mail</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-wc prefix grey-text"></i>
                                <select id="genderIntegrante" name="genderIntegrante">
                                    <option disabled selected>Seleccione</option>
                                    <option>Femenino</option>
                                    <option>Masculino</option>
                                </select>
                                <label for="genderIntegrante">Sexo</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-face prefix grey-text"></i>
                                <select id="rolIntegrante" name="rolIntegrante">
                                    <option disabled selected>Seleccione</option>
                                    <option>Jefe Hogar</option>
                                    <option>Integrante</option>
                                </select>
                                <label for="rolIntegrante">Rol</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-card_membership prefix grey-text"></i>
                                <input type="text" id="codcarnet" name="codCarnet" class="validate">
                                <label for="codcarnet">Código Carnet de la Patria</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-card_membership prefix grey-text"></i>
                                <input type="text" id="serialcarnet" name="serialcarnet" class="validate">
                                <label for="serialcarnet">Serial Carnet de la Patria</label>
                            </div>
                            <div class="col s12 center-align">
                                <button type="submit" class="btn waves-effect waves-light indigo" onclick="alert('Se ha registrado el integrante.')"><i class="icon-add_box right"></i>Registrar</button>
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