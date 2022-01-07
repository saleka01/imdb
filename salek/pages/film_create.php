<?php include "db.php"; ?>
<?php include "fugvenyek.php";?>
<?php

createFilm();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>film CREATE</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

    <div class="col-sm-6">
        <h1 class="text-center">Uj Film</h1>
            <form action = "film_create.php" method="post">
                <div class="form-group">
                    <label for="film_id">filmID</label>
                    <input type="text" name="film_id" class="form-control">
                </div>
                <div class="form-group">
                    <label for="film_nev">filmneve</label>
                        <input type="text" name="film_nev" class="form-control">
                </div>

                <div class="form-group">
                    <label
                        for="ev">ev</label>
                    <input type="text" name="ev" class="form-control">
                </div>

                <div class="form-group">
                    <label
                            for="film_ido">Filmideje</label>
                    <input type="text" name="film_ido" class="form-control">
                </div>

                <div class="form-group">
                    <label
                            for="rang">Rang</label>
                    <input type="text" name="rang" class="form-control">
                </div>
                <div class="form-group">
                    <label
                            for="rendezo">Rendezo</label>
                    <input type="text" name="rendezo" class="form-control">
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="CREATE">

            </form>
    </div>



</div>

<br>

<div align="center">
    <p><a href="/salek/pages/filmek_CRUD.php">Vissza</a></p>
</div>
</body>
</html>

