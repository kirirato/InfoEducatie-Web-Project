<!DOCTYPE html>
<html>
	<head>
		<title>Industrie</title>
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
			<div id = "comment_page"> <iframe src="PHP/industrie.php"> </iframe> </div>
	
		<div id = "center" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<h1 align = "center">Industrie &#351;i firme-Bra&#351;ov</h1>
			<h2 align = "center">Bra&#351;ovul din trecut</h2>
			
			<h3>Fabrica de ciment Kugler - "Temelia"</h3>
			<img src = "./pics/industrie/industrie01.jpg" class = "img-responsive img-thumbnail pull-right col-lg-5"/>
			<p>Fabrica de ciment Portland Kugler &#38; Co. a fost una dintre cele mai vechi &#238;ntreprinderi de profil din Rom&#226;nia. De-a lungul timpului, cu materiale de la fabrica Kugler (redenumit&#259; ulterior "Temelia") s-au construit cele mai mari proiecte de infrastructur&#259; ale &#355;&#259;rii noastre: barajele de la Por&#355;ile de Fier, Teliuc, Arge&#351; &#351;i Paltinu, Podul de peste Dun&#259;re de la Vadu Oii, ora&#351;ul Victoria, cartierele de blocuri din perioada comunist&#259; din Bra&#351;ov, Teatrul Dramatic &#351;i... Casa Poporului.</p>
			<p>Manopera costisitoare &#351;i calitatea inferioar&#259; a cimenturilor produse &#238;n cuptoarele verticale determina reprofilarea fabricii pe cuptoare rotative. &#206;n anul 1931 intr&#259; &#238;n func&#355;iune cuptorul rotativ ,,Lepol" nr. 1, iar &#238;n 1937 cuptorul ,,Lepol" nr.2. O dat&#259; cu cuptoarele rotative au fost instalate capacit&#259;&#355;i noi de concasare &#351;i m&#259;cinare, at&#226;t pentru materia prim&#259;, c&#226;t &#351;i pentru ciment.</p>
			<p>&#206;n 1941 se mecanizeaz&#259; opera&#355;iile de &#238;nc&#259;rcare &#351;i transport &#238;n carier&#259;, prin achizi&#355;ionarea a dou&#259; excavatoare &#351;i introducerea transportului cu locomotive Diesel. Produc&#355;ia fabricii &#238;n 1938 atinge 64.970 de tone de ciment.</p>
			
			<h3>Fabrica de Bere Friedrich Czell &#351;i Fiii - Aurora - Ciuca&#351; (Ursus Breweries)</h3>
			<img src = "./pics/industrie/industrie02.jpg" class = "img-responsive img-thumbnail pull-right col-lg-5"/>
			<p>&#206;n anul 1885 a fost fondat concernul FRIEDERICH CZELL &#351;i FIII, av&#226;nd ca obiect de activitate exportul de l&#226;n&#259; de oaie spre Anglia. Mai tarziu, s-a abandonat aceast&#259; activitate &#238;n favoarea fabric&#259;rii &#351;i comercializ&#259;rii spirtului, scop pentru care s-a construit o fabric&#259; de spirt la Cristian. &#206;n anul 1892,  concernul "FRIEDERICH CZELL &#351;i FIII" a cumparat distileria D&#226;rste &#351;i a construit o nou&#259; fabric&#259; de bere, cu o capacitate de 14.000 hl, av&#226;nd un personal de numai 40 de lucr&#259;tori. Primul r&#259;zboi mondial, dezastruos pentru zon&#259;, a lovit firma "Czell si Fii". Au fost distruse complet &#238;n incendii, fabrica de spirt din Cristian &#351;i fabrica de bere din D&#226;rste. Pivni&#355;ele cu vinuri au fost jefuite &#351;i golite. Fabrica de bere din D&#226;rste a fost reconstruit&#259; &#238;n anii 1917-1918. Dup&#259; r&#259;zboi, &#238;n anul 1923, ne&#238;n&#355;elegerile dintre ac&#355;ionari au condus la divizarea firmei. O parte a cuprins fabrica de bere D&#226;rste, mina de c&#259;rbuni.   Alexandru Petit consemna &#238;n Monografia Bra&#351;ovului din 1922 cre&#351;terea num&#259;rului de angaja&#355;i la 130, precum &#351;i cre&#351;terea productivit&#259;&#355;ii anuale de bere &#351;i mal&#355; la 40.000 de hl &#351;i respectiv 80-90 de vagoane anual.</p>
		
			<p>Odata cu na&#355;ionalizarea din 1948, fabrica de bere &#351;i bauturi alcoolice D&#226;rste &#351;i-a schimbat numele &#238;n "Aurora". &#206;n anul 1995, SC AURORA SA a devenit o companie cu capital privat integral 100% romanesc. &#206;n 2004, Aurora SA este preluat&#259; de concernul SABMiller, care mai de&#355;ine, printre altele &#351;i fabrica de bere de la Cluj &#351;i produce &#238;n Rom&#226;nia urm&#259;toarele tipuri de bere: URSUS, Timisoreana, Ciucas, Stejar, Azuga, Redd's, Peroni Nastro Azzurro, Grolsch, Pilsner Urquell. Urma&#351;ii familiei Czell au revendicat terenul pe care s-a aflat fabrica, dar ulterior s-a ajuns la o &#238;n&#355;elegere &#238;ntre ace&#351;tia &#351;i actualii proprietari.<p>
			<h2 align = "center">Bra&#351;ovul de astazi</h2>
				<p>Ina Schaeffler este o companie produc&#259;toare de rulmen&#355;i din Germania, parte din Schaeffler Group. Compania produce componente de tehnic&#259; liniar&#259; pentru industria de ma&#351;ini-unelte &#351;i pentru cutiile de viteze ale automobilelor. Cu un num&#259;r total de 54.000 de angaja&#355;i &#351;i peste 180 de fabrici &#238;n &#238;ntreaga lume, grupul INA Schaeffler este unul dintre cei mai importan&#355;i furnizori de subansambluri auto pe plan mondial. Concernul reune&#351;te trei grupuri: LuK, produc&#259;tor de cuplaje &#351;i componente pentru autovehicule, grupul INA, care dezvolt&#259; &#351;i livreaz&#259; elemente de precizie pentru industria constructoare de automobile, &#351;i grupul FAG, produc&#259;tor interna&#355;ional &#238;n industria rulmen&#355;ilor.</p>
				<div class = "clearfix"><img src = "./pics/industrie/industrie03.jpg" class = "img-responsive img-thumbnail center-block"/></div>
				<p>Stabilus este o companie produc&#259;toare de arcuri cu gaz din Germania. Este unul dintre cei mai importan&#355;i produc&#259;tori mondiali de arcuri cu gaz &#351;i amortizoare hidraulice pentru scaunele ergonomice folosite &#238;n industria auto Cu liniile sale de produc&#355;ie pentru arcuri cu gaz &#351;i amortizoare hidraulice de vibra&#355;ii, Stabilus are o produc&#355;ie anual&#259; de peste 100 de milioane de buc&#259;&#355;i.</p>
				<p>Stabilus este prezent&#259; &#351;i &#238;n Rom&#226;nia, unde de&#355;ine o fabric&#259; la S&#226;npetru, jude&#355;ul Bra&#351;ov ianugurat&#259; &#238;n noiembrie 2005, &#238;n urma unei investi&#355;ii de 10 milioane de euro. Fabrica are o suprafa&#355;&#259; de 10.000 de metri p&#259;tra&#355;i &#351;i o capacitate total&#259; de produc&#355;ie de 6,5 milioane de arcuri cu gaz.</p>
				<img src = "./pics/industrie/industrie04.jpg" class = "img-responsive img-thumbnail center-block"/>
		</div>
	</body>
</html>
