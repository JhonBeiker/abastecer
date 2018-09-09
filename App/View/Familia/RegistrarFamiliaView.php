<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Familia</title>
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
                        <h3 class="center-align yellow-text text-darken-3">Registrar Familias</h3>
                    </div>
                </div>
                <div class="row">
                    <ul id="tabs-swipe-demo" class="tabs center-align">
                        <li class="tab col m6"><a class="active" href="#test-swipe-1">Datos de Familia</a></li>
                        <li class="tab col m6"><a href="#test-swipe-2">Registro por Lotes</a></li>
                    </ul>
                </div>
                <!-- Tab 1 -->
                <div class="row" id="test-swipe-1">
                    <div class="col s12">
                        <form action="" method="post" class="row">
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-map prefix grey-text"></i>
                                <select name="parroquia">
                                    <option disabled selected>Seleccione</option>
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
                                <i class="icon-streetview prefix grey-text"></i>
                                <select name="clap">
                                    <option disabled selected>Seleccione CLAP</option>
                                    <option>Clap Nueva Esperanza</option>
                                    <option>Clap Viva Bolivar</option>
                                    <option>Clap Zamora</option>
                                </select>
                                <label>CLAP</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-satellite prefix grey-text"></i>
                                <input type="number" name="nManzana" id="nManzana" min="1" class="validate" required>
                                <label for="nManzana">N° Manzana</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-home prefix grey-text"></i>
                                <input type="number" id="nVivienda" name="nVivienda" min="1" class="validate" required>
                                <label for="nVivienda">N° Vivienda</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-supervisor_account prefix grey-text"></i>
                                <input type="number" id="gFamiliar" name="gFamiliar" min="1" class="validate" required>
                                <label for="gFamiliar">Grupo Familiar</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-group_add prefix grey-text"></i>
                                <input type="number" id="cantFamilia" name="cantFamilia" class="validate" required>
                                <label for="cantFamilia">Integrantes</label>
                            </div>
                            <div class="col s12 m6 xl4 input-field">
                                <i class="icon-shopping_cart prefix grey-text"></i>
                                <input type="number" id="cantMercados" name="cantMercados" class="validate" required>
                                <label for="cantMercados">N° Mercados</label>
                            </div>
                            <div class="col s12 m6 xl8 center-align input-field">
                                <a href=""><button type="submit" class="btn waves-effect waves-light indigo-45deg-gradient-1"><i class="icon-add_box right"></i>Registrar</button></a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row" id="test-swipe-2">
                    <div class="col s12">
                        <form action="" method="post" class="row">
                            <div class="col s12 m6 input-field">
                                <i class="icon-map prefix grey-text"></i>
                                <select name="parroquia">
                                    <option disabled selected>Seleccione</option>
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
                            <div class="col s12 m6 input-field">
                                <i class="icon-streetview prefix grey-text"></i>
                                <select name="clap">
                                    <option disabled selected>Seleccione CLAP</option>
                                    <option>Clap Nueva Esperanza</option>
                                    <option>Clap Viva Bolivar</option>
                                    <option>Clap Zamora</option>
                                </select>
                                <label>CLAP</label>
                            </div>
                            <div class="section"></div>
                            <div class="col s12 file-field input-field">
                                <div class="btn pink-45deg-gradient-1 waves-effect waves-light">
                                    <span>Importar</span>
                                    <input type="file">
                                    <i class="icon-file_upload right"></i>
                                </div>
                                <div class="file-path-wrapper">
                                    <input type="text" class="file-path validate">
                                </div>
                            </div>
                            <div class="col s12 center-align">
                                <a href="http://"><button type="submit" class="btn waves-effect waves-light btn-large indigo-45deg-gradient-1"><i class="icon-add_box right"></i>Registrar</button></a>
                            </div>
                        </form>
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