<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Cargo</title>
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
                            <h3 class="center-align yellow-text text-darken-2">Registrar Cargo</h3>
                        </div>
                        <div class="row">
                            <div class="col s12 input-field">
                                <i class="icon-art_track prefix grey-text"></i>
                                <input id="nameCargo" type="text" name="nameCargo" class="validate">
                                <label for="nameCargo">Nombre del Cargo</label>
                            </div>
                            <div class="col s12 center-align buttons section">
                                <a href="CargoView.php"><button type="submit" class="btn indigo-45deg-gradient-1 waves-effect" onclick=""><i class="icon-add_box right"></i>Registrar</button></a>
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