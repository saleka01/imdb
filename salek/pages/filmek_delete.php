<?php include "db.php"; ?>
<?php include "fugvenyek.php";?>
<?php

deleteFilm();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>film torlese</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

    <div class="col-sm-6">
        <h1 class="text-center">Film torlese</h1>
        <form action = "filmek_delete.php" method="post">


            <div class="form-group">
                <select name="film_id" id="">
                    <?php
                    filmekListazasa();
                    ?>

                </select>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">

        </form>
    </div>





</div>

<br>

<div align="center">
    <p><a href="/salek/pages/filmek_CRUD.php">Vissza</a></p>
</div>
</body>
</html>