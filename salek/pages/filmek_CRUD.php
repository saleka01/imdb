
<?php include "db.php"; ?>
<?php include "fugvenyek.php";?>
<?php
createFilm();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FILMEKCRUD</title>
    <link rel="stylesheet" href="/beadando/CSS/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/salek/pages/film_create.php">Film CREATE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/salek/pages/filmek_READ.php">Film READ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/salek/pages/film_update.php">Film UPDATE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/salek/pages/filmek_delete.php">Film DELETE</a>
                </li>
            </ul>
        </div>
    </nav>

    <div align="right">
        <p><a href="/salek/pages/kezdolap.php">Vissza a kezdolapra</a></p>
    </div>




</div>




</body>
</html>
