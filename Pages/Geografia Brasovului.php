<!DOCTYPE html>
<html>
	<head>
		<title> Geografia Bra&#351;ovului </title>
		<link type="text/css" rel="stylesheet" href="CSS/Geografia Brasovului.css"/>
		<link type="text/css" rel="stylesheet" href="CSS/Default.css"/>
		<link rel="stylesheet" href= "CSS/bootstrap.min.css"/>
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
			<div id = "comment_page"> <iframe src="PHP/geografie.php"> </iframe> </div>
		
		<div id="center" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<h1 align="center"> Geografia Bra&#351;ovului </h1>
			<div id="content">
				<h2> Pozi&#355;ionare </h2>
					<img src="pics/geografie/1.1.jpg" id="pozitionare_img" class="fotografie img-responsive"/>
					<div id="pozitionare_text">
						<p> Jude&#355;ul Bra&#351;ov este a&#351;ezat &#238;n centrul Rom&#226;niei, av&#226;nd o suprafa&#355;&#259; de 5363 kmp, respectiv 2,2% din suprafa&#355;a &#355;&#259;rii. </p>
						<p> Jude&#355;ul Bra&#351;ov se &#238;nvecineaz&#259; cu 8 jude&#355;e: </p>
						<ul>
							<li> Arge&#351; &#45; la sud&#45;est </li>
							<li> D&#226;mbovi&#355;a &#45; la sud </li>
							<li> Prahova &#45; la sud&#45;est </li>
							<li> Buz&#259;u &#45; &#238;n extremitatea sud&#45;estic&#259; </li>
							<li> Covasna &#45; la est </li>
							<li> Harghita &#45; la nord </li>
							<li> Mure&#351; &#45; la nord&#45;vest </li>
							<li> Sibiu &#45; la vest </li>
						</ul>
						<p> Jude&#355;ul Bra&#351;ov este intersectat de paralela 46 de grade latitudine nordic&#259; ce trece prin localit&#259;&#355;ile Jibert &#351;i Ormeni&#351;. Meridianul de 25 de grade longitudine estic&#259; str&#259;bate jude&#355;ul prin municipiul F&#259;g&#259;ra&#351;. </p>
					</div>
				<h2> Relief </h2>
					<p> Sub aspect fizico&#45;geografic, jude&#355;ul Bra&#351;ov se afl&#259; la jonc&#355;iunea a trei mari unit&#259;&#355;i naturale: Carpa&#355;ii Orientali, Carpa&#355;ii Meridionali &#351;i Podi&#351;ul Transilvaniei. </p>
					<p> Grani&#355;ele dinspre sud ale jude&#355;ului urmeaz&#259; curba celor mai &#238;nal&#355;i mun&#355;i din Carpa&#355;i: Bucegi, Ciuca&#351; &#351;i F&#259;g&#259;ra&#351;, unde sunt situate lacurile glaciale Urlea &#351;i Podragul. Relieful coboar&#259; gradual spre nord printr&#45;o arie de dealuri alpine p&#226;n&#259; la platoul B&#226;rsa, ca &#238;n cele din urm&#259;, dincolo de r&#226;ul Olt, s&#259; creasc&#259; din nou spre marginea de sud a platoului transilv&#259;nean. </p>
					<p> &#206;n total, relieful muntos ocup&#259; circa 40% din suprafa&#355;a jude&#355;ului, iar cel depresionar &#351;i deluros circa 60%. </p>
					<div id="munti_list" class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<h3> Mun&#355;i </h3>
							<ul>
								<li> Mun&#355;ii F&#259;g&#259;ra&#351;ului 2544 m </li>
								<li> Mun&#355;ii Piatra Craiului 2238 m (Acestia fiind cei mai grandio&#351;i mun&#355;i calcaro&#351;i din Rom&#226;nia) </li>
								<li> Masivul Leaota 2134 m </li>
								<li> Mun&#355;ii Bucegi 2505 m  </li>
								<li> Mun&#355;ii B&#226;rsei 1843 m </li>
								<li> Mun&#355;ii Per&#351;ani </li>
							</ul>
					</div>
						<div id="munti">				
							<div id="Mpersani" class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<p>Mun&#355;ii Per&#351;ani</p>
								<img src="pics/geografie/2.6 muntii Persani.jpg" class="fotografie img-responsive"/>
							</div>
							<div id="Mfagaras" class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<p>Mun&#355;ii F&#259;g&#259;ra&#351; (2544 m)<p>
								<img src="pics/geografie/2.1.Muntii Fagaras.jpg" class="fotografie img-responsive" id="Mfagaras_img"/>
							</div>
							<div id="MpiatraCraiului" class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<p>Mun&#355;ii Piatra Craiului (2238 m)</p>
								<img src="pics/geografie/2.2 Muntii Piatra Craiului.jpg" class="fotografie img-responsive"/>
							</div>	
							<div id="Mbucegi" class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<p>Mun&#355;ii Bucegi (2505 m)</p>
								<img src="pics/geografie/2.4 Muntii Bucegi.jpg" class="fotografie img-responsive"/>
							</div>
							<div id="Mleota" class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<p>Masivul Leaota (2134 m)</p>
								<img src="pics/geografie/2.3 Muntii Leaota.jpg" class="fotografie img-responsive"/>
							</div>
							<div id="Mbarsei" class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<p>Mun&#355;ii B&#226;rsei (1843 m)</p>
								<img src="pics/geografie/2.7 Muntii Barsei.jpg" class="fotografie img-responsive"/>
							</div>
							<div id="Mcodlei" class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<p>Mun&#355;ii Codlei</p>
								<img src="pics/geografie/2.5 Muntii Magura Codlei.jpg" class="fotografie img-responsive"/>
							</div>
						</div>
					<div id="rezervatii_art" class="col-lg-7 col-md-12 col-sm-12 col-xs-12 txt">
						<h3> Rezerva&#355;ii naturale </h3>
							<p> Jude&#355;ul Bra&#351;ov de&#355;ine 26 de arii protejate, un numar impresionant de monumente ale naturii, plante care apar&#355;in unui num&#259;r de 82 de specii &#351;i numeroase specii de animale ocrotite. </p>
							<p> Exist&#259; dou&#259; parcuri na&#355;ionale &#238;n mun&#355;ii Bucegi &#351;i mun&#355;ii Piatra Craiului. </p>
								<ul>
									<li> Rezerva&#355;ia din mun&#355;ii Bucegi cuprinde Abruptul Bucsoiului, Valea Gaura &#351;i Valea M&#259;l&#259;iesti unde sunt protejate capra neagr&#259;, r&#226;sul, coco&#351;ul de munte &#351;i specii floristice rare. Tot &#238;n Bucegi se g&#259;sesc monumentele naturale Babele &#351;i Sfinxul. </li>
									<li> Mun&#355;ii Piatra Craiului sunt proteja&#355;i &#238;n &#238;ntregime, ad&#259;postind circa 40% din speciile endemice (specie care tr&#259;ie&#351;te numai &#238;ntr&#45;un anumit teritoriu) din Rom&#226;nia. Aici se g&#259;sesc garofi&#355;a Pietrei Craiului &#45; specie unicat mondial, macul galben, floarea de col&#355;. </li>
								</ul>
							<p> Pe l&#226;ng&#259; aceste dou&#259; mari parcuri na&#355;ionale exist&#259; &#351;i alte rezerva&#355;ii: </p>
							<ul>
								<li> P&#259;durea cu narcise de la Dumbrava Vadului </li>
								<li> P&#259;durea Bog&#259;&#355;ii </li>
								<li> Muntele T&#226;mpa  </li>
								<li> Bazaltele de la Raco&#351; &#351;i multe altele </li>
							</ul>
					</div>
					<div id="rezervatii">
						<div id="sfinx" class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
							<p> Sfinxul </p>
							<img src="pics/geografie/3.4Sfinxul.jpg" class="fotografie img-responsive"/>
						</div>
						<div id="gaura" class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
							<p> Valea Gaura </p>
							<img src="pics/geografie/3.2Valea Gaura.jpg" class="fotografie img-responsive"/>
						</div>
						<div id="tampa" class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
							<p> Muntele T&#226;mpa </p>
							<img src="pics/geografie/3.8Muntele Tampa.jpg" class="fotografie img-responsive"/>
						</div>
						<div id="bucsoiul" class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
							<p> Abruptul Bucsoiul </p>
							<img src="pics/geografie/3.1Abruptul Bucsoiului.jpg" class="fotografie img-responsive" id="bucsoiul_img"/>
						</div>
						<div id="babele" class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
							<p> Babele </p>
							<img src="pics/geografie/3.3Babele.jpg" class="fotografie img-responsive"/>
						</div>
					</div>
				<div id="clima_art" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2> Clima </h2>
						<p> Jude&#355;ul Bra&#351;ov se &#238;ncadreaz&#259; (zonal) &#238;n climatul temperat, iar regional la tranzi&#355;ia dintre climatul continental vest&#45;european, de nuan&#355;&#259; oceanic&#259; &#351;i cel excesiv&#45;continental, din est. Astfel, putem spune c&#259; este un climat de tip continental&#45;moderat, dominat de circula&#355;ia atmosferic&#259; din nord&#45;vest. </p>
						<p> Temperatura medie multianual&#259; a aerului este de 7,6 grade Celsius, temperatura maxim&#259; absolut&#259; fiind de 37 grade Celsius &#238;n luna august. </p>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<img src="pics/geografie/4.1Brasovul Iarna.jpg" id="brasov_iarna_img" class="fotografie img-responsive"/>
						</div>
						<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
							<img src="pics/geografie/4.3Brasovul vara.jpg" id="brasov_vara_img" class="fotografie img-responsive"/>
						</div>
				</div>
				<div id="hidrografie_art" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2> Hidrografie </h2>
						<p> &#206;n alc&#259;tuirea resurselor de ap&#259; ale jude&#355;ului Bra&#351;ov intr&#259; pe de o parte apele subterane freatice &#351;i de ad&#226;ncime, pe de alt&#259; parte, apele de suprafa&#355;&#259;, reprezentate de re&#355;eaua de r&#226;uri care str&#259;bate teritoriul jude&#355;ului &#351;i de lacurile naturale &#351;i artificiale. </p>
						<p> &#206;ntreg teritoriul jude&#355;ului se &#238;ncadreaz&#259; &#238;n bazinul hidrografic de ordin superior al Oltului care str&#259;bate jude&#355;ul pe o distan&#355;&#259; de apromaximativ 210km de la confluen&#355;a cu R&#226;ul Negru p&#226;n&#259; la confluen&#355;a cu r&#226;ul Ucea. </p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="hidrografie">
					<img src="pics/geografie/5.1 Hidrografia Brasovului.jpg" id="hidrografie_img" class="fotografie"/>
				</div>
			</div>
		</div>
	</body>
</html>