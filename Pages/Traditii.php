<!DOCTYPE html>
<html>
	<head>
		<title> Tradi&#355;ii Culturale </title>
		<link type="text/css" rel="stylesheet" href="CSS/Traditii.css"/>
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
			<div id = "comment_page"> <iframe src="PHP/traditii.php"> </iframe> </div>
	
		<div id="center" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<h1 align="center"> TRADI&#354;II CULTURALE </h1>
				<h2 align="center"> &#45;JUDE&#354;UL  BRA&#350;OV&#45; </h2>
				<div id="content">
					<p> Bra&#351;ovul de ast&#259;zi p&#259;streaz&#259; vii tradi&#355;iile sale multiculturale. </p>
					<ol>
						<div class="new_paragraph">
							<li class="sub-title"> JUNII BRA&#350;OVULUI </li>
								<img src="pics/traditii/junii.jpg" class="fotografie img-responsive" id="junii_img">
								<p> Este un obicei str&#259;vechi care se pierde &#238;n negura vremurilor, este considerat pe bun&#259; dreptate ca av&#226;nd o valoare unicat &#238;n Rom&#226;nia, ce aminte&#351;te cu prisosin&#355;&#259; de valorile tr&#259;irii dacice pe aceste meleaguri. </p>
								<p> Prima men&#355;iune documentar&#259; dateaz&#259; din anul 1728 &#351;i se afl&#259; &#238;ntr&#45;un hrisov din arhiva Primei &#350;coli Rom&#226;ne&#351;ti din Schei. &#206;n acest hrisov, Junii sunt aminti&#355;i ca "o r&#226;nduial&#259; din b&#259;tr&#226;ni". Printre altele, se mai consemneaz&#259; &#238;n acest document despre Juni: "S&#259;&#45;i l&#259;sa&#355;i s&#259; treac&#259; f&#259;r&#259; oprial&#259;, frumos, pe r&#226;nd cum se cade, iar cine se va &#238;ng&#259;dui s&#259; treac&#259; cu sfintele cruci prin aceast&#259; gr&#259;din&#259;, unul ca acela s&#259; fie blestemat de Domnul &#351;i de cei 318 sfin&#355;i". Este vorba de trecerea Junilor c&#259;l&#259;ri spre Pietrele lui Solomon, unde au loc serb&#259;rile Junilor, &#238;n miercurea de dup&#259; Pa&#351;te. </p>
								<p> Bogata tradi&#355;ie folcloric&#259; a Junilor, la origine ritual de ini&#355;iere &#238;n r&#226;ndul feciorilor, se trage din "Schei", vatr&#259; a civiliza&#355;iei materiale &#351;i spirituale a rom&#226;nilor. &#206;n fiecare an, &#238;n duminica Tomii de dup&#259; Pa&#351;te, Junii coboar&#259; &#238;n "Cetate", reiter&#226;nd un spectacol cu elemente de mit, rit, ceremonial &#351;i magie, care deschide &#238;n fiecare prim&#259;var&#259;, "Zilele Bra&#351;ovului". </p>
								<p> An de an, &#238;n prima duminic&#259; de dupa Pa&#351;tile R&#259;s&#259;ritene, bra&#351;ovenii &#351;i turi&#351;tii veni&#355;i pentru a vizita Bra&#351;ovul se adun&#259; &#238;n Scheii Bra&#351;ovului pentru a fi martori la un spectacol care reune&#351;te cu succes mitul &#351;i magia. </p>
								<p> &#206;n diminea&#355;a s&#259;rb&#259;torii Junii coboar&#259; c&#259;lare &#238;n cetate, trec&#226;nd pe la V&#259;taf mai &#238;nt&#226;i, apoi pe la armas mare &#351;i, &#238;n cele din urm&#259; pe la armasul mic, iar dup&#259; aceea, pe la ora 10 se &#238;ndreapt&#259; spre Pia&#355;a Unirii, &#238;n fa&#355;a Bisericii Sf&#226;ntul Nicolae, acolo &#238;nconjur&#226;nd statuia eroului necunoscut, iar preotul paroh le sfin&#355;e&#351;te steagurile.  </p>
						</div>
						<div class="new_paragraph">
							<li class="sub-title"> S&#258;RB&#258;TOAREA MESTECENILOR (Balul mestecenilor) </li>
								<img src="pics/traditii/mesteacanilor.jpg" class="fotografie img-responsive" id="mestecenii_img">
								<p> Aceast&#259; s&#259;rb&#259;toare are la baz&#259; c&#226;teva principii simple, dar care au d&#259;inuit peste ani. Pe vremuri, feciorii satului se organizau &#238;n ceat&#259;/cete &#351;i se duceau &#238;n p&#259;dure dup&#259; mesteceni, pentru ai aduce acas&#259; &#351;i pentru ai "bate" la por&#355;ile fetelor de m&#259;ritat. Ceata de fl&#259;c&#259;i era condus&#259; de un V&#259;taf, care era ales de c&#259;tre ceilal&#355;i feciori, iar conform tradi&#355;iei V&#259;taful poate fi ales doar o dat&#259; &#238;n via&#355;&#259; &#351;i doar pentru un an de zile. Cu o zi &#238;nainte de rusalii, feciorii treceau cu carul tras de boi/cai sau chiar c&#259;lare unii dintre ei pe la fiecare fat&#259; de m&#259;ritat din sat, pun&#226;ndu&#45;i la poart&#259; un mesteac&#259;n, &#238;n acest fel ar&#259;t&#226;ndu&#45;se c&#259; acolo este o fat&#259; de m&#259;ritat. </p>
								<p> &#206;n urma "baterii" de mesteceni la por&#355;ile fetelor de m&#259;ritat, acestea erau invitate de c&#259;tre feciori la Balul Mestecenilor ce se organiza &#238;n urm&#259;toarea s&#226;mb&#259;t&#259; pentru a petrece &#238;mpreun&#259;. Balul era &#238;ntotdeauna foarte a&#351;teptat &#238;ntruc&#226;t se alegea Prin&#355;esa Balului cea mai frumoas&#259; fat&#259; din sat. </p>
								<p> La Balul Mestecenilor, feciorii comunei Cristian, m&#226;ndri de portul popular erau prezen&#355;i &#238;n straie na&#355;ionale &#351;i sus&#355;ineau spectacole populare specifice Cristianului dar &#351;i zonei ardelenesti. </p>
						</div>
						<div class="new_paragraph">
							<li class="sub-title"> BALUL ZORITORILOR (Comuna Cristian) </li>
								<p> Tinerii din comun&#259; p&#259;streaza cu sfin&#355;enie tradi&#355;ia , iar evenimentul este organizat anual, &#238;n a doua s&#226;mb&#259;t&#259; dup&#259; Anul nou. </p>
								<p> Participan&#355;ii primesc invita&#355;iile &#238;n Ajunul Cr&#259;ciunului, c&#226;nd zoritorii merg din c&#259;s&#259;&#45;n cas&#259; la colindat. </p>
								<p> Cu banii primi&#355;i de la gazde, se preg&#259;te&#351;te balul, unde, la miezul nop&#355;ii, se c&#226;nt&#259; colinde.  </p>
						</div>
						<div class="new_paragraph">
							<li class="sub-title"> Capra sau &#355;urca </li>
								<img src="pics/traditii/capra.jpg" class="fotografie img-responsive" id="capra_img">
								<p> Este unul dintre cele mai cunoscute obiceiuri bra&#351;ovene. Datina este perpetuat&#259; &#351;i de cetele de colind&#259;tori care umbl&#259; &#238;n aceste zile pe str&#259;zile Bra&#351;ovului.  S&#259;rb&#259;torile de iarn&#259; &#238;ncep &#238;n zona Bra&#351;ovului, de fapt, de Sf&#226;ntul Nicolae, atunci c&#226;nd se constituie cetele de feciori, care urmeaz&#259; s&#259; colinde.  "Capra" este unul dintre obieciurile &#238;nt&#226;lnite  aproape &#238;n tot jude&#355;ul. Tot &#238;n jurul Bra&#351;ovului se mai merge la colindat &#351;i cu "Ursul", animalul&#45;rege al mun&#355;ilor Carpa&#355;i. Se spune c&#259; prin aceste colinde se mai p&#259;streaz&#259; &#238;nc&#259;, nevoile spirituale de alt&#259;dat&#259; ale omului. Jocul "Caprei" (uciderea, bocirea, &#238;nmorm&#226;ntarea, &#238;nvierea) la origine a fost, desigur, un ceremonial grav, un element de cult. &#206;n cadrul s&#259;rb&#259;torilor agrare jocul a devenit un ritual menit s&#259; aduc&#259; rodnicie anului care urmeaz&#259;, spor de animale &#238;n turmele p&#259;storilor, precum &#351;i succesul recoltelor. </p>
						</div>
					</ol>
				</div>
		</div>
	</body>
</html>