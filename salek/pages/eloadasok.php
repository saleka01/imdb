<?php include "fugvenyek.php"; ?>
<?php include "db.php"; ?>
<?php

$query = "SELECT filmek.film_nev AS filmNeve, filmek.ev ,filmek.rendezo ,filmek.film_ido ,filmstudiok.studio_nev AS studioNeve , szineszek.szin_neve AS szineszNeve, szereples.datum\n"

    . "FROM filmek,filmstudiok,szineszek,szereples\n"

    . "WHERE filmek.film_id = szereples.film_id AND szineszek.szin_id = szereples.szin_id AND filmstudiok.stud_id = szereples.stud_id ORDER BY szereples.datum";

$result =  mysqli_query($connection, $query);

if(!$result){
    die('Query FAILED' . mysqli_error($connection));
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

    <div class="col-sm-6">
        <div align="right">
        <p><a href="/salek/pages/kezdolap.php">Vissza a kezdolapra</a></p>
        </div>
        <h2>Osszes eloadas</h2>
        <br>

        <?php

        // html táblázatként íratjuk ki;
        echo '<table border=1>';
        echo '<tr>';            // táblázat fejléce
        echo '<th>FilmNeve</th>';
        echo '<th>Evjarat</th>';
        echo '<th>rendezo</th>';
        echo '<th>FilmIdeje</th>';
        echo '<th>StudioNeve</th>';
        echo '<th>SzineszNeve</th>';
        echo '<th>datum</th>';

        echo '</tr>';

        // a táblázat sorai
        while ( ($current_row = mysqli_fetch_assoc($result))!= null) {    // most asszociatív tömbként kezeljük a sorokat
            echo '<tr>';
            echo '<td>' . $current_row["filmNeve"] . '</td>';
            echo '<td>' . $current_row["ev"] . '</td>';
            echo '<td>' . $current_row["rendezo"] . '</td>';
            echo '<td>' . $current_row["film_ido"] . '</td>';
            echo '<td>' . $current_row["studioNeve"] . '</td>';
            echo '<td>' . $current_row["szineszNeve"] . '</td>';
            echo '<td>' . $current_row["datum"] . '</td>';
            echo '</tr>';
        }
        echo '</table>';


        ?>


    </div>



</div>




</body>
</html>



