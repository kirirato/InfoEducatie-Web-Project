<!DOCTYPE html>
<html>
	<head>
		<title> Logare </title>
		<link rel="stylesheet" href= "../CSS/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="../CSS/navbar.css"/>
		<link type="text/css" rel="stylesheet" href="../CSS/account.css"/>
	</head>
	<body>
		<!-- Navbar-san -->
		<script src="../JavaScript/jquery.min.js"></script>
		<script src="../JavaScript/bootstrap.min.js"></script>
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
						<li class="active"><a href="../Acasa.php">Acas&#259;</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Articole <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="../Arhitectura.php">Arhitectur&#259;</a></li>
								<li><a href="../Educatie.php">Educa&#355;ie</a></li>
								<li><a href="../Geografia Brasovului.php">Geografie</a></li>
								<li><a href="../Ghid Turistic.php">Turism</a></li>
								<li><a href="../Industrie.php">Industrie</a></li>
								<li><a href="../Infrastructura.php">Infrastructur&#259;</a></li>
								<li><a href="../Istorie.php">Istorie</a></li>
								<li><a href="../Minoritati.php">Minorit&#259;&#355;i</a></li>
								<li><a href="../Politica.php">Politic&#259;</a></li>
								<li><a href="../Socio-culturale.php">Socio-cultur&#259;</a></li>
								<li><a href="../Sportul Brasov.php">Sport</a></li>
								<li><a href="../Traditii.php">Tradi&#355;ii</a></li>
							</ul>
						</li>
					</ul>
					<ul class = "nav navbar-nav pull-right">
						<li><a href='register.php'>Register</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="form">
			<form name="login_form" action="login.php" method="post">
				<table width="100%" border="0" cellpadding="0" cellspacing="2">
					<tr>
						<td width="40%">Nume utilizator</td>
						<td><input type="text" name="login_username" id="login_username" /></td>
					</tr>
					<tr>
						<td>Parola</td>
						<td><input type="password" name="login_password" id="login_password" /></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" name="login_btn" value="Login" /></td>
					</tr>
				</table>
			</form>
		</div>
		<?php
			session_start();
			require_once("dbconnect.php");
			 
			//  verifica daca exista date transmise
			if (isset($_POST['login_username']) != "" && $_POST['login_password'] != '') {
			 
				// preia datele din formular
				$username = $_POST['login_username'];
				$password = md5($_POST['login_password']);
			 
				// formeaza si executa query-ul de select din baza de date
				$query = "SELECT * FROM `users` WHERE `Username` = '".$username."' AND `Password` = '".$password."'";
				$result = mysqli_query($connect, $query) or die ( "Error : ". mysqli_error($connect) );
			 
				// verifica daca interogarea MySQL a gasit date valide
				if (!$result || mysqli_num_rows($result) < 1) {
					// daca nu, afiseaza un mesaj de eroare
					echo "<div align='center' class='message'>Datele introduse sunt incorecte<br>
							Click <a href='../Acasa.php'>aici</a> pentru a reveni la pagina principala
						</div>";
				} else {
				
					// salveaza username-ul si parola in sesiune
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
			 
					// afiseaza un mesaj de succes        
					echo "<div align='center' class='message'>Autentificarea a fost efectuata cu succes.</div>";
					
				}
			}
		?>
	</body>
</html>