<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar CLAP</title>
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
                            <h3 class="center-align yellow-text text-darken-2">Registrar CLAP</h3>
                        </div>
                        <div class="row">
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-beenhere prefix grey-text"></i>
                                <input type="text" name="codCLAP" id="codCLAP" class="validate" value="1234-5678" maxlength="20">
                                <label for="codCLAP">Código CLAP</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-playlist_add_check prefix grey-text"></i>
                                <input type="text" name="codSalaP" id="codSalaP" class="validate" value="" maxlength="5">
                                <label for="codCSala">Código Sala</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-streetview prefix grey-text"></i>
                                <input type="text" name="nameCLAP" id="nameCLAP" class="validate">
                                <label for="nameCLAP">Nombre del CLAP</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-chrome_reader_mode prefix grey-text"></i>
                                <input type="text" name="rifCLAP" id="rifCLAP" class="validate" value="J-">
                                <label for="rifCLAP">RIF del CLAP</label>
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
                                <i class="icon-markunread prefix grey-text"></i>
                                <input type="email" name="emailCLAP" id="" class="validate">
                                <label for="emailCLAP">E-mail del CLAP</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-phone_iphone prefix grey-text"></i>
                                <input type="text" name="telfCLAP" id="" class="validate">
                                <label for="telfCLAP">Teléfono del CLAP</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-location_city prefix grey-text"></i>
                                <input type="text" name="comunity" id="" class="validate">
                                <label for="comunity">Comunidad</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-arrow_upward prefix grey-text"></i>
                                <input type="text" name="limNorte" id="limNorte" class="validate">
                                <label for="limNorte">Limite al Norte</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-arrow_downward prefix grey-text"></i>
                                <input type="text" name="limSur" id="limSur" class="validate">
                                <label for="limSur">Limite al Sur</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-arrow_forward prefix grey-text"></i>
                                <input type="text" name="limEste" id="limEste" class="validate">
                                <label for="limEste">Limite al Este</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-arrow_back prefix grey-text"></i>
                                <input type="text" name="limOeste" id="limOeste" class="validate">
                                <label for="limOeste">Limite al Oeste</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-chrome_reader_mode prefix grey-text"></i>
                                <input type="text" name="rifComunnity" id="rifComunnity" class="validate" value="J-">
                                <label for="rifComunnity">RIF de la Comunidad</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-directions prefix grey-text"></i>
                                <select name="zonaSilencio">
                                    <option disabled selected>Elige una opición</option>
                                    <option>Si</option>
                                    <option>No</option>
                                </select>
                                <label>Zona en Silencio</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-local_shipping prefix grey-text"></i>
                                <select name="empDist">
                                    <option disabled selected>Elige una opición</option>
                                    <option>Mercal</option>
                                    <option>PDVAL</option>
                                    <option>Abas</option>
                                </select>
                                <label>Empresa Distribuidora</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-nature prefix grey-text"></i>
                                <input type="number" name="eje" id="eje" min="1">
                                <label for="eje">Eje</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-local_convenience_store prefix grey-text"></i>
                                <input type="number" name="cantViviendas" id="cantViviendas" min="1">
                                <label for="cantViviendas">Cantidad de Viviendas</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-group_add prefix grey-text"></i>
                                <input type="number" name="cantFamilias" id="cantFamilias" min="1">
                                <label for="cantViviendas">Cantidad de Familias</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-people_outline prefix grey-text"></i>
                                <input type="number" name="cantManzaneros" id="cantManzaneros" min="1">
                                <label for="cantViviendas">Cantidad de Manzaneros</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-perm_contact_calendar prefix grey-text"></i>
                                <select name="enlacePolitico">
                                    <option disabled selected>Elige una opición</option>
                                    <option>Juan Perez</option>
                                    <option>Pedro Picapiedra</option>
                                    <option>Mauricio Mendoza</option>
                                </select>
                                <label>Enlace Politíco</label>
                            </div>
                            <div class="col s12 center-align buttons section">
                                <a href="DenunciaView.php">
                                    <button type="submit" class="btn indigo-45deg-gradient-1 waves-effect" onclick="alert('Denuncia Registrada.');">
                                    <i class="icon-add_box right"></i>Registrar</button>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <h3 class="center-align yellow-text text-darken-2">Estructura CLAP</h3>
                            </div>
                            <div class="col s12 center-align">
                                <span>Para conformar la estructura CLAP, los líderes deben pertenecer a un grupo familiar de la comunidad.</span>
                            </div>
                        </div>
                        <div class="row">
                            <a href="<?php echo $helper->url('CLAP','createClapStructure'); ?>" class="btn blue-45deg-gradient-1 col s12 center-align">
                            <i class="icon-add left"></i>
                            Conformar Estructura
                            <i class="icon-person_add right"></i>
                            </a>
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