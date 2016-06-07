<!Doctype html>
<html>
	<head>
		<title> Infrastructura </title>
		<link type = "text/css" rel = "stylesheet" href = "CSS/Foca_Default.css"/>
		<link rel = "stylesheet" href = "CSS/bootstrap.min.css"/>

		<link type="text/css" rel="stylesheet" href="CSS/navbar.css"/>
		<link type="text/css" rel="stylesheet" href="CSS/comment.css"/>
		<script type="text/javascript" src="JavaScript/jquery.min.js"></script>
		<script type="text/javascript" src="JavaScript/Comentarii.js"></script>
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
		
		<!-- Comment System -->
			<button	id="comment_button" type="button">
				<div id = "button_text"> C o m e n t a r i i ! </div>
			</button>
			<div id = "background_comment_page"> </div>
			<div id = "comment_page"> <iframe src="PHP/infrastuctura.php"> </iframe> </div>
	
		<div id = "center" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<h1 align="center"> Infrastructura jude&#355;ului Bra&#351;ov</h1>
			<h2>Re&#355;eaua c&#259;ilor rutiere</h2>
			<p>Din jude&#355;ul Bra&#351;ov re&#355;eaua c&#259;ilor rutiere totalizeaz&#259; 1.449 km. Dintre ace&#351;tia, 398 km sunt drumuri na&#355;ionale.</p>
			<h2>&#350;osele interna&#355;ionale</h2>
			<ul>
				<li> E60 </li>
				<p>Brest - Nantes - Orleans - Basel (B&#226;le) - Viena - Budapesta - Oradea - Cluj-Napoca -T&#226;rgu Mure&#351;- Bra&#351;ov - Bucure&#351;ti - Constan&#355;a, cu prelungirea Poti - grani&#355;a cu China</p>
				<li> E68 </li>
				<p>Szeged (Seghedin) - N&#259;dlac - Arad - Deva - Sebe&#351; - Sibiu - F&#259;g&#259;ra&#351; - Bra&#351;ov</p>
			</ul>
			
			<h2>Drumuri na&#355;ionale</h2>
			<ul>
				<li>DN1</li>
				<p>Oradea - Cluj-Napoca - Turda - Alba Iulia - Sebe&#351; - Sibiu - F&#259;g&#259;ra&#351; - Bra&#351;ov - Bucure&#351;ti</p>
				<li>DN1A</li>
				<p>Bra&#351;ov - S&#259;cele - pasul Bratocea - V&#259;lenii de Munte - Ploie&#351;ti - Buftea - Bucure&#351;ti</p>
				<li>DN1S (fost Drumul jude&#355;ean 104)</li>
				<p>&#350;ercaia - Com&#259;na de Jos - Hoghiz</p>
				<li>DN10</li>
				<p>Bra&#351;ov - H&#259;rman - pasul Buz&#259;u - Buz&#259;u</p>
				<li>DN11</li>
				<p>Bra&#351;ov - H&#259;rman - pasul Oituz - One&#351;ti - Bac&#259;u</p>
				<li>DN73</li>
				<p>Bra&#351;ov - Bran - C&#226;mpulung - Pite&#351;ti</p>
				<li>DN73A</li>
				<p>Predeal - P&#226;r&#226;ul Rece - R&#226;&#351;nov - Z&#259;rne&#351;ti - &#350;inca - &#350;ercaia</p>
			</ul>
			
			<h2>Re&#355;eaua c&#259;ilor feroviare</h2>
			<p>Re&#355;eaua c&#259;ilor feroviare are o lungime de 335 km, municipiul Bra&#351;ov fiind unul dintre cele mai importante noduri de cale ferat&#259; din Rom&#226;nia. Din acesta pornesc &#351;ase ramifica&#355;ii:<p>
			<ul>
				<li>Tronsonul Bra&#351;ov - Predeal - Bucure&#351;ti</li>
				<li>Tronsonul Bra&#351;ov - Sf&#226;ntu Gheorghe - Gheorgheni</li>
				<li>Tronsonul Bra&#351;ov - Rupea - Sighi&#351;oara - Teiu&#351;</li>
				<li>Tronsonul Bra&#351;ov - F&#259;g&#259;ra&#351; - Sibiu - Vin&#355;u de Jos</li>
				<li>Tronsonul Bra&#351;ov - H&#259;rman - &#206;ntorsura Buz&#259;ului</li>
				<li>Tronsonul Bra&#351;ov - Z&#259;rne&#351;ti</li>
			</ul>
			
			<h2>Transporturi aeriene</h2>
			<p>&#206;n apropiere de ora&#351;ul Ghimbav se afl&#259; &#238;n construc&#355;ie Aeroportul Interna&#355;ional Bra&#351;ov, la distan&#355;a de 12 km de Bra&#351;ov.</p>
			<p>Pista aeroportului va avea o lungime de 2.820 de metri, o l&#259;&#355;ime de 45 m &#351;i acostamente betonate de c&#226;te 7,5 m. Pe viitoarea pist&#259; va putea ateriza &#351;i decola orice tip de avion, cu excep&#355;ia lui A380, pentru care trebuie un terminal special &#351;i o pistã mai lungã. </p>
			<h1> </h1>
	
			<img src = "./pics/infrastructura/infrastructura01.jpg" class = "img-responsive img-thumbnail center-block"/>
			<h1> </h1>
	
			<div class = "row">
				<div class = "col-lg-6">
					<img src = "./pics/infrastructura/infrastructura02.jpg" class = "img-responsive img-thumbnail center-block" align = "center"/>
				</div>
				<div class = "col-lg-6">
					<img src = "./pics/infrastructura/infrastructura03.jpg" class = "img-responsive img-thumbnail center-block" align = "center"/>
				</div>
			</div>
			<h1> </h1>
	
			<div class = "row">
				<div class = "col-lg-6">
					<img src = "./pics/infrastructura/infrastructura04.jpg" class = "img-responsive img-thumbnail center-block" align = "center"/>
				</div>
				<div class = "col-lg-6">
					<img src = "./pics/infrastructura/infrastructura05.jpg" class = "img-responsive img-thumbnail center-block" align = "center"/>
				</div>
			</div>
			<h1> </h1>
	
			<div class = "row">
				<div class = "col-lg-6">
					<img src = "./pics/infrastructura/infrastructura06.jpg" class = "img-responsive img-thumbnail center-block" align = "center"/>
				</div>
				<div class = "col-lg-6">
					<img src = "./pics/infrastructura/infrastructura07.jpg" class = "img-responsive img-thumbnail center-block" align = "center"/>
				</div>
			</div>
		</div>
	</body>
</html>
