<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles - CLAP</title>
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
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title center-align yellow-text text-darken-3">CLAP - Obelisco</span>
                                <div class="row">
                                    <div class="col s12 m6">
                                        <ul>
                                            <li><b>Nombre del CLAP: </b>Bolivar</li>
                                            <li><b>Código CLAP: </b>ASDFG-12345</li>
                                            <li><b>Código Sala: </b>JR-45</li>
                                            <li><b>RIF del CLAP: </b>J-0028286638SN</li>
                                            <li><b>Parroquia: </b>Juan de Villegas</li>
                                            <li><b>Comunidad: </b> Cerritos Blancos</li>
                                            <li><b>RIF Comunidad: </b>J-0027212503GO</li>
                                            <li><b>E-mail: </b>clapcerritoblanco@hotmail.com</li>
                                            <li><b>Teléfono: </b>04266544506</li>
                                            <li><b>Limita al norte con: </b>La Lucha</li>
                                            <li><b>Limita al sur con: </b>Ruiz Pineda</li>
                                            <li><b>Limita al este con: </b> Jose Gregorio Hernandez</li>
                                            <li><b>Limita al oeste con: </b> Rafael Linarez</li>
                                        </ul>
                                    </div>
                                    <div class="col s12 m6">
                                        <div class="divider hide-on-med-and-up"></div>
                                        <ul>
                                            <li><b>Zona en Silencio: </b>No</li>
                                            <li><b>Empresa Distribuidora: </b>MERCAL</li>
                                            <li><b>Eje: </b>4</li>
                                            <li><b>Cantidad de Viviendas: </b>300</li>
                                            <li><b>Cantidad de Familias: </b>260</li>
                                            <li><b>Cantidad de Manzaneros: </b>100</li>
                                            <li><b>Enlace Político: </b>Juan Perez</li>
                                            <li><b>Lider Comunidad: </b>Alguien</li>
                                            <li><b>Líder CLP: </b>Alguien</li>
                                            <li><b>Líder UNAUJER: </b>Alguien</li>
                                            <li><b>Líder MILICIA: </b>Alguien</li>
                                            <li><b>Líder UBCH: </b>Alguien</li>
                                            <li><b>Líder FFM: </b>Alguien</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12 m6 center-align">
                                        <!-- Update Modal -->
                                        <a href="#modal2" class="btn light-blue-45deg-gradient-1 waves-effect modal-trigger col s12"><i class="icon-settings_backup_restore left"></i>Actualizar</a>
                                        <div class="modal-update modal modal-fixed-footer" id="modal2">
                                            <div class="modal-content">
                                                <h4>Actualizar CLAP - Obelisco</h4>
                                                <div class="divider"></div>
                                                <!-- Formulario para actualizar -->
                                            </div>
                                            <div class="modal-footer">
                                                <a href="CLAPView.php" class="modal-action modal-close waves-effect btn blue-45deg-gradient-1"><i class="icon-check right"></i>Actualizar</a>
                                                <a href="" class="modal-action modal-close waves-effect btn red-45deg-gradient-1"><i class="icon-close right"></i>Cancelar</a>
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="col s12 m6 center-align">
                                        <!-- Delete Modal -->
                                        <a href="#modal1" class="btn red-45deg-gradient-1  waves-effect modal-trigger col s12"><i class="icon-delete_forever left"></i>Eliminar</a>
                                        <!-- Modal Body -->
                                        <div id="modal1" class="modal-delete modal modal-fixed-footer">
                                            <div class="modal-content">
                                                <h4>Eliminar CLAP - Obelisco</h4>
                                                <div class="divider"></div>
                                                <p class="left-align"><span class="new badge red-top-gradient-1  left" data-badge-caption="Confirmación"></span>¿Desea eliminar el CLAP de la base de datos?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="CLAPView.php" class="modal-action modal-close waves-effect btn green-45deg-gradient-1"><i class="icon-check right"></i>SI</a>
                                                <a href="" class="modal-action modal-close waves-effect btn red-45deg-gradient-1 "><i class="icon-close right"></i>NO</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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