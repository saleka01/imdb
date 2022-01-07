<?php include "db.php" ;?>
<?php

// Filmek listazasa
function filmekListazasa(){
    global $connection;

    $query = "SELECT * FROM filmek ";

    $result =  mysqli_query($connection, $query);

    if(!$result){
        die('Query FAILED' . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $film_id = $row['film_id'];

        echo "<option value='$film_id'>$film_id</option>";

    }

}


// filmek modositasa
function updateFilm(){
    if (isset($_POST['submit'])) {
        global $connection;
        $film_nev = $_POST['film_nev'];
        $ev = $_POST['ev'];
        $film_ido = $_POST['film_ido'];
        $rendezo = $_POST['rendezo'];
        $film_id = $_POST['film_id'];

        $query = "UPDATE filmek SET ";
        $query .= "film_nev = '$film_nev', ";
        $query .= "ev = '$ev', ";
        $query .= "film_ido = '$film_ido', ";
        $query .= "rendezo = '$rendezo' ";
        $query .= "WHERE film_id = $film_id ";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        } else {

            echo "Record Updated";

        }
    }
}

//filmek torlese
function deleteFilm(){
    if (isset($_POST['submit'])) {

        global $connection;
        $film_id = $_POST['film_id'];

        $query = "DELETE FROM filmek ";
        $query .= "WHERE film_id = $film_id ";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die("QUERY FAILED" . mysqli_error($connection));
        } else {

            echo "Record Deleted";

        }
    }
}


//uj film letrehozasa
function createFilm(){
    if (isset($_POST['submit'])) {
        global $connection;
        $film_id = $_POST['film_id'];
        $film_nev = $_POST['film_nev'];
        $ev = $_POST['ev'];
        $film_ido = $_POST['film_ido'];
        $rang = $_POST['rang'];
        $rendezo = $_POST['rendezo'];

        $query = "INSERT INTO filmek(film_id,film_nev,ev,film_ido,rang,rendezo)";
        $query .= "VALUES ('$film_id','$film_nev','$ev','$film_ido','$rang','$rendezo')";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query FAILED' . mysqli_error());
        }else{
            echo "Record Create";
        }
    }

}




