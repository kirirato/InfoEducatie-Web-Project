<!DOCTYPE html>
<html>
	<head>
		<title> Bra&#351;ovul de ieri &#351;i de azi </title>
		<link rel="stylesheet" href= "CSS/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="CSS/navbar.css"/>
		<link type="text/css" rel="stylesheet" href="CSS/Acasa.css"/>
		<script type="text/javascript" src="JavaScript/Acasa.js"></script>
	</head>
	<body>
	<!-- Navbar-san -->
		<script src="JavaScript/jquery.min.js"></script>
		<script src="JavaScript/bootstrap.min.js"></script>
		<div class="navbar navbar-default navbar-static-top" id ="navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="Acasa.php">Acas&#259;</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Articole <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="Arhitectura.php">Arhitectur&#259;</a></li>
								<li><a href="Educatie.php">Educa&#355;ie</a></li>
								<li><a href="Geografia Brasovului.php">Geografie</a></li>
								<li><a href="Ghid Turistic.php">Turism</a></li>
								<li><a href="Industrie.php">Industrie</a></li>
								<li><a href="Infrastructura.php">Infrastructur&#259;</a></li>
								<li><a href="Istorie.php">Istorie</a></li>
								<li><a href="Minoritati.php">Minorit&#259;&#355;i</a></li>
								<li><a href="Politica.php">Politic&#259;</a></li>
								<li><a href="Socio-culturale.php">Socio-cultur&#259;</a></li>
								<li><a href="Sportul Brasov.php">Sport</a></li>
								<li><a href="Traditii.php">Tradi&#355;ii</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav pull-right">
					<?php
						require_once 'PHP/database.php';

						session_start();
						require_once("PHP/dbconnect.php");
						//  verifica daca exista date in sesiune
						if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
					 
							// preia datele din sesiune
							$username = $_SESSION['username'];
							$password = $_SESSION['password'];
						 
							// formeaza si executa query-ul de select din baza de date
							$query = "SELECT * FROM `users` WHERE `Username` = '".$username."' AND `Password` = '".$password."'";
							$result = mysqli_query($connect, $query) or die ( "Error : ". mysqli_error($connect) );
							
							// verifica daca interogarea MySQL a gasit date valide
							if ((!$result || mysqli_num_rows($result) < 1))
							{
								echo "<li><a href='PHP/login.php'>Login</a></li><li><a href='PHP/register.php'>Register</a></li>";
							}
							else {
								echo "<li><a href='PHP/logout.php'>Logout</a></li>";
							}
						}
						else{
							echo "<li><a href='PHP/login.php'>Login</a></li><li><a href='PHP/register.php'>Register</a></li>";
						}
					?>
					</ul>
				</div>
			</div>
		</div>
	
	
		<div id="slider" class="jumbotron">
			<img src="pics/acasa/img1.jpg" id="image" class="img-responsive">
			<div class="left_hold">
				<img onclick="photo(-1)" class="left" src="pics/acasa/arrow_left.png"/>
			</div>
			<div class="right_hold">
				<img onclick="photo(1)" class="right" src="pics/acasa/arrow_right.png"/>
			</div>
		</div>
		
		
		<h1 id="descriere"> Descoper&#259; minun&#259;&#355;ia acestui ora&#351; str&#259;vechi plin de o istorie bogat&#259;, de tradi&#355;ii care s-au p&#259;strat p&#226;n&#259; &#238;n zilele noastre &#351;i de multe alte lucruri fascinante. </h1>
		
		<h1 id="important"> Articole </h1>
		
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left_art">
			<a href="Arhitectura.html">
				<h2> Arhitectura Bra&#351;ovului </h2>
					<p>	</p>
			</a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  right_art">
			<a href="Educatie.html">
				<h2> Educa&#355;ia &#238;n Bra&#351;ov </h2>
					<p>	</p>
			</a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left_art">
			<a href="Geografia Brasovului.html">
				<h2> Geografia Bra&#351;ovului </h2>
					<p>	</p>
			</a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  right_art">
			<a href="Ghid Turistic.html">
				<h2> Obiective Turistice </h2>
					<p>	</p>
			</a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left_art">
			<a href="Industrie.html">
				<h2> Industria Bra&#351;ovului </h2>
					<p>	</p>
			</a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  right_art">
			<a href="Infrastructura.html">
				<h2> Infrastructura din Bra&#351;ov </h2>
					<p>	</p>
			</a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left_art">
			<a href="Istorie.html">
				<h2> Istoria ora&#351;ului Bra&#351;ov </h2>
					<p>	</p>
			</a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  right_art">
			<a href="Minoritati.html">
				<h2> Minorit&#259;&#355;ile din jude&#355;ul Bra&#351;ov &#351;i din &#238;mprejurimi </h2>
					<p>	</p>
			</a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left_art">
			<a href="Politica.html">
				<h2> Politica din Bra&#351;ov </h2>
					<p>	</p>
			</a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  right_art">
			<a href="Socio-culturale.html">
				<h2> Socio-culturale </h2>
					<p>	</p>
			</a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left_art">
			<a href="Sportul Brasov.html">
				<h2> Sportul din Bra&#351;ov </h2>
					<p>	</p>
			</a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 right_art">
			<a href="Traditii.html">
				<h2> Tradi&#355;iile Bra&#351;ovului </h2>
					<p>	</p>
			</a>
		</div>
	</body>
</html>
