<!DOCTYPE html>
<html>

	<head>
		<title>Politica</title>
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
			<div id = "comment_page"> <iframe src="PHP/politica.php"> </iframe> </div>
	
	<div id = "center" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
		<h1 align = "center">Politica jude&#355;ului Bra&#351;ov</h1>
		<p>
            Conducerea jude&#355;ean&#259; a PNL Bra&#351;ov a anun&#355;at c&#259; a validat candida&#355;ii la prim&#259;rie pentru 38 de localit&#259;&#355;i din jude&#355;. Al&#355;i zece candida&#355;i vor fi stabili&#355;i p&#226;n&#259; la &#238;nceputul lunii aprilie. Obiectivul declarat al partidului, pentru alegerile locale din iunie este acela de a ob&#355;ine 50% din sufragii. &#206;n prezent, PNL are &#238;n Bra&#351;ov 38 de primari &#238;n func&#355;ie. Liderii partidului &#238;&#351;i propun ca dup&#259; alegeri s&#259; aib&#259; peste 40 de primari &#238;n func&#355;ie.
		</p>
		<ul>Candida&#355;ii pentru cele mai importante localit&#259;&#355;i din jude&#355; sunt:
			<li>Bra&#351;ov - Adrian Gabor</li>
			<li>Codlea - C&#259;t&#259;lin George Muntean</li>
			<li>F&#259;g&#259;ra&#351; - Sorin Constantin M&#259;nduc</li>
			<li>Ghimbav - Ionel Fliundra</li>
			<li>Predeal - Liviu Coco&#351;</li>
			<li>R&#226;&#351;nov - Adrian Ve&#351;tea</li>
			<li>Rupea - Dorin Baba</li>
			<li>Victoria - Cristian Gheorghe</li>
			<li>S&#259;cele - George Paraipan</li>
        </ul>
		<q>
			<p>Ca de fiecare dat&#259;, la final de lun&#259;, miercuri a avut loc &#351;edin&#355;a Consiliului Local al Municipiului Bra&#351;ov, la care am participat cu mult interes &#351;i implicare. &#206;n cadrul acesteia, am f&#259;cut o interpelare actualului primar George Scripcaru, prezent &#351;i el la &#351;edin&#355;&#259;, cer&#226;ndu-i s&#259;-mi raspund&#259; &#238;n scris la c&#226;teva puncte legate de dou&#259; subiecte importante pentru ora&#351;ul nostru, despre care v&#259; voi relata mai jos.</p>
			<p>Primul lucru pe care l-am solicitat este legat de Serviciul de Administrare Pie&#355;e al ora&#351;ului Bra&#351;ov. I-am cerut &#238;nt&#226;i primarului s&#259;-mi comunice, &#238;n calitate de consilier local &#351;i cet&#259;&#355;ean al acestui ora&#351;, dou&#259; &#238;nscrisuri: (1) despre anun&#355;ul privind organizarea licita&#355;iei publice pentru ocuparea locurilor publice pe care s-au construit spa&#355;iile comerciale, &#351;i (2) actele prin care s-au adjudecat terenurile &#238;n cauz&#259;. Totodat&#259;, &#238;n cazul &#238;n care aceast&#259; procedur&#259; legal&#259; de ocupare a locurilor publice nu s-a desf&#259;&#351;urat, am solicitat &#351;i actele &#238;n baza c&#259;rora s-au atribuit terenurile respective investitorilor &#351;i care au fost criteriile de selec&#355;ie.</p>
			<p>De ce am f&#259;cut aceste solicit&#259;ri? Pentru c&#259; ast&#259;zi majoritatea societ&#259;&#355;ilor comerciale care ocup&#259; mesele din pie&#355;ele Bra&#351;ovului nu elibereaz&#259; bon fiscal, practic&#226;nd, astfel, o evaziune fiscal&#259; considerabil&#259;. Este inadmisibil ca economia ora&#351;ului, &#351;i automat noi, to&#355;i bra&#351;ovenii, s&#259; avem de pierdut din cauza unor &#238;n&#355;elegeri ne&#351;tiute ori a unei neaten&#355;ii pe care Prim&#259;ria o arat&#259; fa&#355;&#259; de aceste ac&#355;iuni ilegale. Astfel, am mai solicitat primarului s&#259; informeze Consiliul Local care sunt acele societ&#259;&#355;i comerciale care ocup&#259; mesele din pie&#355;e &#238;n dauna produc&#259;torilor, care este procentul din totalul meselor ocupate doar de societ&#259;&#355;i, care este num&#259;rul de mese ocupate de fiecare societate &#238;n parte &#351;i, &#238;n plus, care este dispozi&#355;ia de primar prin care &#238;n anul 2004 acesta a stabilit atribu&#355;iile viceprimarilor. Cea din urm&#259; solicitare am f&#259;cut-o pentru c&#259; &#238;n perioada 2004-2005, pia&#355;a “Dacia" din Bra&#351;ov a fost modernizat&#259;, prilej cu care acolo au fost construite, de c&#259;tre diferi&#355;i investitori, &#351;i spa&#355;ile comerciale aferente desf&#259;&#351;ur&#259;rii lor comerciale, iar cel care a condus nemijlocit aceast&#259; ac&#355;iune a fost domnul viceprimar Gabor Adrian, care avea atunci atribu&#355;ii delegate de Scripcaru - la acea vreme abia &#238;nsc&#259;unat la Prim&#259;rie.</p>
			<p>Trebuie s&#259; v&#259; m&#259;rturisesc c&#259; am r&#259;mas extrem de uimit de un lucru: Scripcaru a reu&#351;it din nou s&#259; m&#259; surprind&#259; (&#351;i nu &#238;ntr-un mod pozitiv) cu ceva la care, sincer, nu m&#259; a&#351;teptam. &#206;n cadrul discu&#355;iilor avute, acesta nu mai &#351;tia c&#226;nd a numit viceprimarii, fiind extrem de confuz cu privire la domnul Adrian Gabor, &#238;n mandatul 2004 - 2008. Desigur, nu &#238;ntr-un mod direct, pentru c&#259; nu poate direct, dar cu o majoritate politic&#259; &#238;n Consiliul Local este destul de clar cine ia deciziile &#238;n spate &#351;i &#238;n ce direc&#355;ie pot merge ac&#355;iunile pe care le face un primar ca d&#226;nsul. S&#259; aib&#259; el oare mintea at&#226;t de scurt&#259;, sau &#351;i-a resetat-o ca s&#259; nu spun&#259; prea multe la DNA? &#206;nc&#259; nu putem &#351;ti, din p&#259;cate...</p>
		</q>
		<p style = "text-align: center">Cu repspect pentru Bra&#351;ov &#351;i bra&#351;oveni,</p>
		<p style = "text-align: center">Cristian Macedonschi</p>
		<p style = "text-align: center">Candidat la func&#355;ia de Primar al Municipiului Bra&#351;ov din partea FDG</p>
		<h1> </h1>
	
		<div class = "row">
			<img src = "./pics/politica/politica02.jpg" class = "img-responsive img-thumbnail pull-left gap-right col-lg-4"/>
			<p>Conducerea ALDE Bra&#351;ov &#351;i-a lansat o parte dintre candida&#355;ii pentru alegerile locale. A&#351;a cum sus&#355;in reprezentan&#355;ii ALDE, alian&#355;&#259; care a ap&#259;rut prin fuziunea Partidului Conservator cu Partidul Liberal Reformator, candida&#355;ii au fost ale&#351;i dup&#259; a analiz&#259; complex&#259;. Astfel,Elena Anu&#355;oiu va candida din partea ALDE la Prim&#259;ria Cristian, Ioan &#350;chiopu la Dumbr&#259;vi&#355;a, Viorel Hosu la H&#259;rman &#351;i Rare&#351; R&#259;d&#259;cin&#259; la Bran. Acesta din urm&#259; este fostul viceprimar din Bran &#351;i actualul primar interimar. Dac&#259; &#238;n privin&#355;a a patru comune, cei de la ALDE par a se fi decis, nu la fel stau lucrurile &#238;n celelalte 53 de localit&#259;&#355;i &#351;i a municipiului Bra&#351;ov. Din cele spuse de conducerea forma&#355;iunii, &#238;n lupta intern&#259; pentru desemnarea candidatului ALDE pentru postul de primar al Bra&#351;ovului se afl&#259; patru persoane: vicepre&#351;edin&#355;ii organiza&#355;iei municipale, Adrian Atomei &#351;i Mircea Boricean, dar &#351;i Gheorghe Popa, medicul echipei FC Bra&#351;ov &#351;i fosta consilier&#259; local&#259; Carmen Ionescu. Forma&#355;iunea politic&#259; bra&#351;ovean&#259; a dat asigur&#259;ri &#238;ns&#259; asupra faptului c&#259; va candida pe liste proprii la alegerile locale. "Ca rezultat electoral, ne propunem s&#259; ob&#355;inem scoruri c&#226;t mai bune. Ne g&#226;ndim la un rezultat de cel pu&#355;in 17% pe jude&#355; &#351;i avem ca obiectiv atingerea unui procent de 14% la nivelul municipiului Bra&#351;ov. C&#226;t despre candida&#355;ii pentru Consiliul Jude&#355;ean, &#238;nc&#259; nu am luat nicio decizie, lista r&#259;m&#226;ne deschis&#259;", ne-au declarat reprezentan&#355;ii liberal-democra&#355;i.</p>
		</div>
		<h1> </h1>
	
		<p>Lista Primarilor BRASOVULUI Din 1996-ASTAZI:</p>
		<ul>
			<div class = "row"><img src = "./pics/politica/politica03.png" class = "img-responsive img-thumbnail pull-left col-lg-2"/> </div>
			<li>1996-2000: Ioan Ghi&#351;e - PNL</li>
			<li>2000-2004: Ioan Ghi&#351;e - PNL</li>
			<div class = "row"><img src = "./pics/politica/politica04.jpg" class = "img-responsive img-thumbnail pull-left col-lg-2"/> </div>
			<li>2004-2008: George Scripcaru - PDL</li>
			<li>2008-2012: George Scripcaru - PDL</li>
			<li>2012-prezent: George Scripcaru - PDL</li>
		</ul>
		<h1> </h1>
		<h2>Ioan Ghi&#351;e:</h2>
		<div class = "row">
			<div class = "col-lg-5">
				<img src = "./pics/politica/politica05.jpg" class = "img-responsive img-thumbnail center-block"/>
			</div>
			<div class = "col-lg-7"
				<p>Ioan Ghi&#351;e (n. 8 mai 1956, Media&#351;, pe atunci &#238;n regiunea Stalin) este un senator rom&#226n;, membru al Partidul Na&#355;ional Liberal. A fost primar al municipiului Bra&#351;ov din 1996 p&#226;n&#259; &#238;n 2004.</p>
			</div>
		</div>
		<h1> </h1>
		<h3>Cariera Politica</h3>
		<div class = "row">
			<div class = "col-lg-7">
				<ul>
					<li>1991-1992 Consilier jude&#355;ean</li>
					<li>1992-1996 Deputat &#238;n Camera Deputa&#355;ilor din Parlamentul Rom&#226;niei</li>
					<li>1992-1995 Membru al Comisiei Parlamentare de buget finan&#355;e &#351;i b&#259;nci</li>
					<li>1994-1995 Comisia mixt&#259; Senat + Camera Deputa&#355;ilor, pentru ancheta &#351;i cercetarea fenomenului de corup&#355;ie</li>
					<li>1995-1996 Comisia de administra&#355;ie public&#259; local&#259; &#351;i mediu</li>
					<li>1996-2004 Primar al Bra&#351;ovului (2 mandate)</li>
					<li>2004-2008 Deputat &#238;n Camera Deputa&#355;ilor din Parlamentul Rom&#226;niei</li>
					<li>2008-2012 Senator &#238;n Senatul Rom&#226;niei</li>
				</ul>
			</div>
			<div class = "col-lg-5">
				<img src = "./pics/politica/politica06.png" class = "img-responsive img-thumbnail center-block"/> 
			</div>
		</div>
		<h1> </h1>
		<h2>George Scripcaru:</h2>
		<h1> </h1>
		<div class = "row">
			<div class = "col-lg-7">
				<p>George Scripcaru (n. 3 septembrie 1966, Buruiene&#351;ti, comuna Dolje&#351;ti, jude&#355;ul Neam&#355;) este un politician rom&#226;n, primar al municipiului Bra&#351;ov din anul 2004 p&#226;n&#259; &#238;n prezent, &#238;n anul 2016 fiind trimis &#238;n judecata pentru corup&#355;ie de c&#259;tre DNA.</p>
				<p>Este absolvent al Facult&#259;&#355;ii de Educa&#355;ie Fizic&#259; &#351;i Sport, Universitatea de Vest Timisoara.</p>
			</div>
			<div class = "col-lg-5">
				<img src = "./pics/politica/politica07.jpg" class = "img-responsive img-thumbnail center-block"/> 
			</div>
		</div>
		<h1> </h1>
		<h3>Cariera Politica</h3>
		<p>Din anul 2001 p&#226;n&#259; &#238;n 2014, Scripcaru a fost pre&#351;edinte al organiza&#355;iei jude&#355;ene Bra&#351;ov a PDL &#351;i vicepre&#351;edinte al PDL la nivel na&#355;ional, ales la Congresul din luna mai.</p>
		<ul>
			<li>1998 - Pre&#351;edinte APR Bra&#351;ov</li>
			<li>2000-2004 - Viceprimar al municipiului Bra&#351;ov</li>
			<li>din 2004 - Primar al municipiului Bra&#351;ov</li>
		</ul>
		<img src = "./pics/politica/politica08.jpg" align = "bottom" class = "img-responsive img-thumbnail center-block"/>
		</div>
	</body>
</html>
