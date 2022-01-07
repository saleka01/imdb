
<?php

$connection = mysqli_connect('localhost', 'root', '', "imdb");
if (!$connection) {
    die("Database connection failed!");
}
