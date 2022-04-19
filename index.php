<?php
$pg = "index"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/Fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/Fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/Bootstrap/css/bootstrap.min.css">
    <i class="fa-solid fa-bars"></i>
    <script src="css/Bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="inicio">
<?php include_once "header.php"; ?>
<main class="container">
        <div class="row">
            <div class="col-12 mt-4 text-center div-cohete">
                <a href="proyectos.php"><img src="images/cohete.svg" class="cohete"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center offset-sm-3 mb-3">
                <div class="input-home">
                    <p class="p-1">Bienvenido a mi sitio web</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="sobre-mi.php" class="btn shadow">Conoce más sobre mi</a>
            </div>
        </div>
    </main>
<?php include_once "footer.php"; ?>
</html>