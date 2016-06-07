<!DOCTYPE html>
<html>
	<head>
		<title> Sportul &#238;n Bra&#351;ov </title>
		<link type="text/css" rel="stylesheet" href="CSS/Sportul Brasov.css"/>
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
		<div id = "comment_page"> <iframe src="PHP/sport.php"> </iframe> </div>
	
	<div id="center" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
		<h1 align="center"> Sportul &#238;n Bra&#351;ov </h1>
			<div id="content">
				<p> Bra&#351;ovul are o veche tradi&#355;ie &#238;n domeniul sportului, &#238;nc&#259; de la sf&#226;r&#351;itul secolului XIX &#238;nfiin&#355;&#226;ndu&#45;se aici primele organiza&#355;ii sportive (Asocia&#355;ia de Tir, &#351;coala de Gimnastic&#259; &#351;i C&#226;nt&#259;ri). Anterior, fuseser&#259; introduse sporturi precum &#351;ahul, jocul de c&#259;r&#355;i, biliardul (secolul XVIII). Muzeul Sportului Transilv&#259;nean este printre cele mai vechi de acest gen din &#355;ar&#259;, &#351;i prezint&#259; evolu&#355;ia unor sporturi consacrate &#238;n ora&#351;ul nostru. &#206;n perioada comunist&#259; se organizau universiade, daciade la care participau obligatoriu &#351;i sportivii bra&#351;oveni. Ast&#259;zi, infrastructura Bra&#351;ovului permite practicarea unor sporturi diverse precum: fotbal, tenis, ciclism, handbal, planorism, schi, patinaj, alpinism, bowling, &#238;not, tir, baschet, arte mar&#355;iale, echita&#355;ie, volei sau gimnastic&#259; de &#238;ntre&#355;inere. Nici sporturile de mas&#259; nu au fost uitate: rulet&#259;, c&#259;r&#355;i (mai ales &#238;n cazinouri), biliard sau tenis de mas&#259;. &#206;n fiecare an, &#238;n preajma zilei de 15 Noiembrie, la Bra&#351;ov se organizeaz&#259; un cross &#238;n memoria victimelor autorit&#259;&#355;ilor comuniste din 1987. Tot anual, la Baza Sportiv&#259; Olimpia, se desf&#259;&#351;oar&#259; competi&#355;ia de tenis Bra&#351;ov Challenge Cup. </p>
				<h3> Cluburile 	&#351;i asocia&#355;iile sportive din Bra&#351;ov </h3>
				<ul>
					<li> FC Bra&#351;ov &#45; fotbal, box; </li>
					<li> FC Forex Bra&#351;ov &#45; fotbal, Box, volei, scrim&#259;, patinaj, schi, tenis, baschet; </li>
					<li> Rulmentul Urban Bra&#351;ov &#45; handbal; </li>
					<li> CSU Cuadripol Municipal Bra&#351;ov &#45; baschet; </li>
					<li> Qwan Ki Do Bra&#351;ov &#45; tehnici de bra&#355;e, picioare, tehnici imitative de animale, arme tradi&#355;ionale, arte martiale vietnameze; </li>
					<li> Clubul Sportiv Tractorul &#45; fotbal; </li>
					<li> CSU Forex &#45; baschet, orientare turistic&#259;, gimnastic&#259; ritmic&#259;, tir, floreta alpinism, atletism, patinaj artistic,schi alpin; </li>
					<li> CSU CFR &#45; rugby; </li>
					<li> CSS Dinamo &#45; handbal masculin &#351;i feminin, lupte libere masculin &#351;i feminin, judo, tenis; </li>
					<li> CSS Bra&#351;ovia &#45; fotbal, baschet, gimnastic&#259; artistic&#259;, schi alpin, schi fond, schi biatlon, schi s&#259;rituri, atletism; </li>
					<li> CSM Bra&#351;ov &#45; atletism, schi, patinaj, lupte greco&#45;romane, scrima, fotbal&#45;tenis, haltere, tir, nata&#355ie; </li>
					<li> CSM Rulmentul &#45; handbal, popice, box; </li>
					<li> CS Dinamo &#45; handbal, tenis, lupte libere, judo, sah, schi alpin, schi fond, schi biatlon, schi s&#259;rituri, alpinism; </li>
					<li> Clubul Sportiv Edelweiss Bra&#351;ov &#45; schi alpin, snowboard, (alpin, s&#259;rituri, fond), biatlon, patinaj artistic, alpinism, tenis, &#238;not, gimnastic&#259; aerobica, automobilism, karting, ciclism; </li>
					<li> Red Paintball Club &#45; singurul teren amenajat din ora&#351;; </li>
					<li> ARTS PAINTBALL BRA&#350OV; </li>
					<li> Paint Ball Team Bra&#351;ov &#45; paintball, tir cu arcul, tir cu arma, parapanta, atv; </li>
					<li> Clubul Sportiv "Universitatea" din Bra&#351ov; </li>
					<li> SMART Bra&#351;ov &#45; motociclism; </li>
					<li> Astra Autocamioane &#45; motociclism, atletism, box, haltere, lupte; </li>
					<li> VIGRAEFF Bra&#351;ov &#45; motociclism; </li>
					<li> Asocia&#355;ia Baschet Club Tampa 2004 Bra&#351;ov &#45; baschet; </li>
					<li> Asocia&#355;ia Baschet Club Galactica Bra&#351;ov &#45; baschet; </li>
					<li> Asocia&#355;ia Baschet Club Magic Kids Bra&#351;ov &#45; baschet; </li>
					<li> Olimpia &#45; Clubul Sportiv "Societatea de Patinaj" &#45; patinaj, tenis, hochei pe gheat&#259;; </li>
					<li> Clubul Sportiv RED LINX &#45; taekwondo; </li>
					<li> KORYO TAEKWONDO CLUB &#45; taekwondo; </li>
					<li> Asociatia CLUB SPORTIV Loi Tran Bra&#351;ov &#45; Arte martiale, Qwan Ki Do; </li>
					<li> Clubul de Arte Mar&#355;iale Shingitai Karate Club Bra&#351;ov &#45; Ashihara karate, karate, arte martiale; </li>
					<li> Clubul de Dans Sportiv Fan Dance Club Bra&#351;ov &#45; Dans sportiv; </li>
					<li> Asocia&#355;ia Bridge Club Bra&#351;ov &#45; bridge; </li>
					<li> Asocia&#355;ia CLUB SPORTIV Happy Fighters Karate Club Bra&#351;ov &#45; Ashihara karate, shotokan karate, kickboxing, fighting karate, all style karate; </li>
					<li> Asocia&#355;ia CLUB SPORTIV Romradiatoare Bra&#351;ov &#45; Fotbal, box, karate; </li>
					<li> CLUB SPORTIV Cibo Bilal Bra&#351;ov &#45; ciclism; </li>
					<li> CLUB SPORTIV de Radioamatorism Carpatica Bra&#351;ov &#45; radioamatorism; </li>
					<li> CLUB SPORTIV de Radioamatorism Universitatea Bra&#351;ov &#45; radioamatorism; </li>
					<li> CLUB SPORTIV de sah Lia Bra&#351;ov &#45; sah; </li>
					<li> CLUB SPORTIV Gym Sfintes Body Building Bra&#351;ov &#45; Culturism, fitness, gimnastic&#259; aerobica; </li>
					<li> CLUB SPORTIV Mix 2000 Bra&#351;ov &#45; &#238;not, fotbal, baschet, volei, atletism, box, lupte, judo, scrima, tir, schi; </li>
					<li> CLUB SPORTIV Olympia Pro Gym Bra&#351;ov &#45; Culturism, fitness; </li>
					<li> CLUB SPORTIV Post&#259;varul Bodybuilding Bra&#351;ov &#45; Culturism, fitness; </li>
					<li> Clubul de Arte Mar&#355;iale Shin&#45;Dojo Bra&#351;ov &#45; karate; </li>
					<li> Qwan Ki Do Bra&#351;ov &#45; tehnici de brate, picioare, tehnici imitative de animale, arme tradi&#355;ionale; </li>
					<li> Athletic Gym Sport &#45; wushu, arte mar&#355;iale chinezesti, autoap&#259;rare, fitness &#45; exclusiv doamne si domnisoare, tae&#45;bo aerobic, jumps aerobic &#45; s&#259;rituri minitrambulin&#259;, gimnastica de intretinere; </li>
					<li> Alpin Club Bra&#351ov; &#45; alpinism, turism montan; </li>
				</ul>
				<div id="sala-sporturilor">
					<h3> Sala Sporturilor Bra&#351;ov </h3>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"><img src="pics/sport/01.jpg" class="fotografie img-responsive"/></div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"><img src="pics/sport/02.jpg" class="fotografie img-responsive"/></div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"><img src="pics/sport/03.jpg" class="fotografie img-responsive"/></div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"><img src="pics/sport/Sala-Sporturilor-receptie-lucrari-8.jpg" class="fotografie img-responsive"/></div>
				</div>
				<h1> Fotbalul &#238;n Bra&#351;ov </h1>
					<p> FC Bra&#351;ov este un club profesionist de fotbal din Bra&#351;ov, Rom&#226;nia. Acesta a fost fondat &#238;n toamna anului 1936, fiind urma&#351;ul clubului Bra&#351;ovia Bra&#351;ov &#238;n fotbalul rom&#226;nesc. </p>
					<p> Este cea mai cunoscut&#259; echip&#259; de fotbal a ora&#351;ului Bra&#351;ov, neav&#226;nd adversari istorici &#238;n jude&#355;. De asemenea, este prima echip&#259; rom&#226;neasc&#259; de fotbal ce a reu&#351;it s&#259; c&#226;&#351;tige un trofeu interna&#355;ional, Cupa Balcanic&#259; &#238;n anul 1961. </p>
					<p> Despre identitatea bra&#351;ovenilor jurnalistul sportiv Ion Cupen spunea: </p>
					<p> "Echipa Steagul Ro&#351;u are o condi&#355;ie aparte &#238;n fotbalul nostru, care o deta&#351;eaz&#259; de mas&#259;, &#238;n confer&#259; un statut special: ea este b&#259;iatul s&#259;rac care a ajuns rapid &#238;n elita societ&#259;&#355;ii prin merite personale." </p>
					<p> Cu peste 75 de ani de istorie FC Bra&#351;ov este unul dintre cele mai vechi cluburi de fotbal din Rom&#226;nia. &#206;n prezent echipa de seniori a clubului evolueaz&#259; pe prima scen&#259; a fotbalului rom&#226;nesc &#351;i &#238;&#351;i disput&#259; meciurile de acas&#259; pe Stadionul Tineretului. </p>
					<p> Stemele acestei echipe au fost: </p>
				<div id="img_scris" class="col-lg-12">
					<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
						<p> Stema &#238;n anii '50 </p>
						<img src="pics/sport/50.png" class="stema"/>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
						<p> Stema &#238;n anii '60 </p>
						<img src="pics/sport/60.png" class="stema"/>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
						<p> Stema &#238;ntre 1967 &#351;i 1979 </p>
						<img src="pics/sport/1967-1979.png" class="stema"/>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
						<p> Stema &#238;n 1979 </p>
						<img src="pics/sport/1979.png" class="stema"/>
					</div>
					<div  class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
						<p> Stema &#238;ntre 1980 &#351;i 1990 </p>
						<img src="pics/sport/1980-1990.png" class="stema"/>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
						<p> Stema &#238;ntre 2000 &#351;i 2003 </p>
						<img src="pics/sport/2000-2003.png" class="stema"/>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
						<p> Stema &#238;ntre 1990 &#351;i 2000 simultan </p>
						<img src="pics/sport/1990-2000.png" class="stema"/>
						<img src="pics/sport/1990-2000v2.png" class="stema"/>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
						<p> Stema &#238;ntre 2003 &#351;i 2004, 2007 &#351;i 2008 </p>
						<img src="pics/sport/2003-2004,2007-2008.png" class="stema"/>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
						<p> Stema &#238;ntre 2004 &#351;i 2005 </p>
						<img src="pics/sport/2004-2005.png" class="stema"/>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
						<p> Stema &#238;ntre 2005 &#351;i 2007 </p>
						<img src="pics/sport/2005-2007.png" class="stema"/>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
						<p> Stema 2008 p&#226;n&#259; &#238;n prezent </p>
						<img src="pics/sport/stema_prezent.png" class="stema"/>
					</div>
				</div>
				<div id="clear">
					<p> La &#238;nfiin&#355;are echipa bra&#351;ovean&#259; avea alb&#45;albastru ca &#351;i culori oficiale ale clubului. Acestea au r&#259;mas culorile bra&#351;ovenilor p&#226;n&#259; &#238;n decembrie 1966. Schimbarea a venit &#238;n urma unui turneu al Echipei Olimpice de Fotbal a Rom&#226;niei &#238;n Uruguay. </p>
					<p> Dup&#259; un meci cu Penarol Csaba Gyorffy, legitimat la bra&#351;oveni, a primit de la c&#259;pitanul Alberto Spencer tricoul cu care acesta jucase. Gyorffy a fost fascinat de combina&#355;ia dungilor galben&#45;negre &#351;i a decis ca la &#238;ntoarcerea &#238;n &#355;ar&#259; s&#259; poarte la antrenamente tricoul primit. </p>
					<p> Decizia de a schimba culorile clubului a plecat de la Silviu Ploe&#351;teanu, acesta consider&#226;nd c&#259; &#238;n noile culori bra&#351;ovenii se vor vedea mai bine pe teren. Din ianuarie 1967 echipa de sub T&#226;mpa are galben&#45;negru ca &#351;i culori oficiale, amintind de echipa uruguayan&#259; Penarol. </p>
				</div>
					<h2> Numele echipei </h2>
						<ol>
							<li> Uzinele Astra Bra&#351;ov (U.A.B.) (1936&#45;1948) </li>
							<li> Steagul Ro&#351;u Bra&#351;ov (1948&#45;1950, 1955&#45;1957, 1958&#45;1979) </li>
							<li> Metalul Bra&#351;ov (1951&#45;1954) </li>
							<li> Energia Bra&#351;ov (1957&#45;1958) </li>
							<li> Fotbal Club Muncitoresc (FCM) Bra&#351;ov (1979&#45;1990) </li>
							<li> Fotbal Club (FC) Bra&#351;ov (1990&#45;prezent) </li>
						</ol>
					<h2> Palmares </h2>
						<h3> Na&#355;ional </h3>
						<ol>
							<li><b> Liga I </b></li>
								<ul>
									<li> Vicecampioan&#259; (1): 1959&#45;1960 </li>
									<li> Locul 3 (2): 1973&#45;1974, 2000&#45;2001 </li>
								</ul>
							<li><b> Liga a II&#45;a </b></li>
								<ul>
									<li> Campioan&#259; (6): 1956&#45;5197, 1968&#45;1969, 1979&#45;1980, 1983&#45;1984, 1998&#45;1999, 2007&#45;2008 </li>
									<li> Vicecampioan&#259; (2): 1976&#45;1977, 1978&#45;1979 </li>
									<li> Locul 3 (3): 1975&#45;1976, 1997&#45;1998, 2005&#45;2006 </li>
								</ul>
							<li><b> Cupa Rom&#226;niei </b></li>
								<ul>
									<li> Semifinalist&#259; (7): 1957&#45;1958, 1961&#45;1962, 1969&#45;1970, 1978&#45;1979, 1986&#45;1987, 2009&#45;2010, 2010&#45;2011 </li>
								</ul>
						</ol>
						<h3> European </h3>
						<ol>
							<li><b> Cupa Ora&#351;elor T&#226;rguri (Actuala UEFA Europa League) </b></li>
								<ul>
									<li> Optimi de final&#259; (1): 1965&#45;1966 </li>
								</ul>
							<li> <b>Cupa Balcanic&#259; </b></li>
								<ul>
									<li> Campioan&#259; (1): 1960&#45;1961 </li>
								</ul>
						</ol>
				<h1> Handbal </h1>
					<img src="pics/sport/handball.png" class="stema" id="handball"/>
					<p> Asocia&#355;ia Sport Club Corona 2010 Bra&#351;ov este un club sportiv de drept privat, &#238;nfiin&#355;at &#238;n anul 2010, cu scopul de a sus&#355;ine sporturile &#351;i sportivii de performan&#355;&#259; ai Bra&#351;ovului, av&#226;nd ca actionar majoritar Municipiul Bra&#351;ov, prin prim&#259;rie &#351;i Consiliul Local. </p>
					<p> Echipa de handbal feminin este succesoarea &#351;i a prelucrat palmaresul echipei "Rulmentul", &#238;nfiin&#355;at&#259; pe 13 septembrie 1960, &#351;i reprezint&#259; unul dintre numele de referin&#355;&#259; ale handbalului rom&#226;nesc. </p>
					<p> De la partida de debut &#351;i p&#226;n&#259; la finalul sezonului 2013/2014, echipa bra&#351;ovean&#259; a sus&#355;inut, &#238;n cele 45 de edi&#355;ii de campionat disputate, 1047 de meciuri. </p>
					<p> Forma&#355;ia din Ora&#351;ul Coroanei(Kronstad) a realizat de dou&#259; ori eventul (Campion + Cupa Rom&#226;niei) &#238;n sezoanele 1980/1981 &#351;i 2005/2006. De alte &#351;a&#351;e ori a ocupat locul secund, cel mai recent &#238;n sezonul 2013/2014, si de dou&#259; ori s&#45;a clasat pe treapta a treia a podiumului. Pe plan interna&#355;ional, a sus&#355;inut 68 de meciuri &#238;n cupele europene, c&#226;&#351;tig&#226;nd, &#238;n sezonul 2005/2006, Challenge Cup. </p>
			</div>
		</div>
	</body>
</html>