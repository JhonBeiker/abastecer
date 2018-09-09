<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles - Familia</title>
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
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <h4 class="center-align yellow-text text-darken-3 title-size">Familia N° 1</h4>
                            </div>
                            <form action="" method="post" class="row">
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-map prefix grey-text"></i>
                                        <select name="parroquia" disabled>
                                            <option disabled>Seleccione</option>
                                            <option>Buena Vista</option>
                                            <option>Catedral</option>
                                            <option>Concepción</option>
                                            <option>Felipe Alvarado</option>
                                            <option selected>Juan de Villegas</option>
                                            <option>Juarez</option>
                                            <option>Santa Rosa</option>
                                            <option>Tamaca</option>
                                            <option>Unión</option>
                                        </select>
                                    <label>Parroquia</label>
                                </div>
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-streetview prefix grey-text"></i>
                                        <select name="clap" disabled>
                                            <option disabled>Seleccione CLAP</option>
                                            <option>Clap Nueva Esperanza</option>
                                            <option selected>Clap Viva Bolivar</option>
                                            <option>Clap Zamora</option>
                                        </select>
                                    <label>CLAP</label>
                                </div>
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-satellite prefix grey-text"></i>
                                    <input type="number" name="nManzana" id="nManzana" min="1" class="validate" required disabled value="3">
                                    <label for="nManzana">N° Manzana</label>
                                </div>
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-home prefix grey-text"></i>
                                    <input type="number" id="nVivienda" name="nVivienda" min="1" class="validate" required disabled value="2">
                                    <label for="nVivienda">N° Vivienda</label>
                                </div>
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-supervisor_account prefix grey-text"></i>
                                    <input type="number" id="gFamiliar" name="gFamiliar" min="1" class="validate" required disabled value="1">
                                    <label for="gFamiliar">Grupo Familiar</label>
                                </div>
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-group_add prefix grey-text"></i>
                                    <input type="number" id="cantFamilia" name="cantFamilia" class="validate" required disabled value="6">
                                    <label for="cantFamilia">Integrantes</label>
                                </div>
                                <div class="col s12 m6 xl4 input-field">
                                    <i class="icon-shopping_cart prefix grey-text"></i>
                                    <input type="number" id="cantMercados" name="cantMercados" class="validate" required disabled value="2">
                                    <label for="cantMercados">N° Mercados</label>
                                </div>
                                <!-- Update Button -->
                                <div class="input-field col s12 m6 xl4 center-align">        
                                    <a href="" class="btn blue-45deg-gradient-1 waves-effect modal-trigger"><i class="icon-settings_backup_restore left"></i>Actualizar</a>                                   
                                </div>
                                <!-- Delete Button -->
                                <div class="input-field col s12 m6 xl4 center-align">
                                    <!-- Boton que activa la ventana modal -->
                                    <a href="#modal1" class="btn red-45deg-gradient-1 waves-effect modal-trigger"><i class="icon-delete_forever left" ></i>Eliminar</a>
                                    <!-- Estructura del Modal -->
                                    <div id="modal1" class="modal-delete-att modal modal-fixed-footer delete-modal">
                                        <div class="modal-content">
                                            <h4 class="yellow-text text-darken-3">Eliminar Familia n° 1</h4>
                                            <div class="divider"></div>
                                            <p><span class="new badge red-top-gradient-1 left" data-badge-caption="Confirmación"></span>¿Desea eliminar la familia n° 1 de la base de datos?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="" class="modal-action modal-close waves-effect btn green-45deg-gradient-1"><i class="icon-check right"></i>SI</a>
                                            <a href="" class="modal-action modal-close waves-effect btn red-45deg-gradient-1"><i class="icon-close right"></i>NO</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12">
                                    <table class="centered highlight">
                                        <thead>
                                            <tr>
                                                <th>Grupo Familiar</th>
                                                <th>Nombre</th>
                                                <th>Teléfono</th>
                                                <th>Rol</th>
                                                <th>Detalles</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Eddy Jimenez</td>
                                                <td>04245199337</td>
                                                <td>Jefe Hogar</td>
                                                <td><a href="DetallesIntegranteFamiliaView.php" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Carlos Quintero</td>
                                                <td>04261501059</td>
                                                <td>Integrante</td>
                                                <td><a href="#" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Alejandro Quintero</td>
                                                <td>0416789787</td>
                                                <td>Integrante</td>
                                                <td><a href="#" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Veronica Quintero</td>
                                                <td>04125222903</td>
                                                <td>Integrante</td>
                                                <td><a href="#" class="btn-floating waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-pageview"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
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