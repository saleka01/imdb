<?php include "fugvenyek.php"; ?>
<?php include "db.php"; ?>
<?php

$query = "SELECT filmstudiok.studio_nev AS StudioNeve ,filmstudiok.cim ,filmstudiok.email FROM `filmstudiok`";;

$result =  mysqli_query($connection, $query);

if(!$result){
    die('Query FAILED' . mysqli_error($connection));
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Studiok</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">

    <div class="col-sm-6">
        <div align="right">
        <p><a href="/salek/pages/kezdolap.php">Vissza a kezdolapra</a></p>
        </div>
        <h2>FILMSTUDIOK</h2>
        <br>

        <?php

        // html táblázatként íratjuk ki;
        echo '<table border=1>';
        echo '<tr>';            // táblázat fejléce
        echo '<th>StudioNeve</th>';
        echo '<th>Cime</th>';
        echo '<th>Email</th>';
        echo '</tr>';

        // a táblázat sorai
        while ( ($current_row = mysqli_fetch_assoc($result))!= null) {    // most asszociatív tömbként kezeljük a sorokat
            echo '<tr>';
            echo '<td>' . $current_row["StudioNeve"] . '</td>';
            echo '<td>' . $current_row["cim"] . '</td>';
            echo '<td>' . $current_row["email"] . '</td>';
            echo '</tr>';
        }
        echo '</table>';


        ?>


    </div>



</div>




</body>
</html>



