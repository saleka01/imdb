<!--
Itt hivom meg a php fajlokat

-->
<?php include "db.php";?>
<?php include "fugvenyek.php"; ?>
<?php




?>

<!DOCTYPE html>
<html lang="en"/>
<head>
    <title>IMDB</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;

        }
    </style>
<head/>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
    <h1>IMDB </h1>
    <p>Bajnóczi Bence</p>

</div>
	<div class="container">
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="/salek/pages/kezdolap.php">Kezdolap</a>
			<div class="collapse navbar-collapse " id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="/salek/pages/filmek.php">Filmek</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/salek/pages/filmek_CRUD.php">Uj Filmek</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/salek/pages/eloadasok.php">Eloadasok</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/salek/pages/filmstudiok.php">Studiok</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/salek/pages/szineszek.php">Szineszek</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-sm-4">
            <h3>Lekerdezesek</h3>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link "  href="/salek/pages/film_le.php">Szineszek-Studiok</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/salek/pages/film_le_ketto.php">TOP 10 film</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/salek/pages/film_harom.php">Legoregebb film</a>
                </li>

            </ul>
            <hr class="d-sm-none">
        </div>
        <div class="col-sm-8">
            <h2>Welcome</h2>
            <h5></h5>
            <div class="fakeimg" >
                    <img src="/salek/images/imdb3.jpg" height="205" width="750">


            </div>

            <p><strong>Röviden..</strong></p>
            <p>
                IMDb is the world's most popular and authoritative source for movie, TV and celebrity content, designed to help fans explore the world of movies and shows and decide what to watch.

                Our searchable database includes millions of movies, TV and entertainment programs and cast and crew members. We help you jog your memory about a movie, show, or person on the tip of your tongue, find the best movie or show to watch next, and empower you to share your entertainment knowledge and opinions with the world’s largest community of fans.
            </p>

        </div>
    </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
    &copy;  &nbsp; Design By Salek <a href="/salek/pages/kezdolap.php">SALEK</a>
</div>

</body>