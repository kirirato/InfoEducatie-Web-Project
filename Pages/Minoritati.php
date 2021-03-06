<!Doctype html>
<html>
	<head>
		<title> Minorit&#259;&#355;i din Bra&#351;ov &#351;i &#238;mprejurimi </title>
		<link type="text/css" rel="stylesheet" href="CSS/Minoritati.css"/>
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
			<div id = "comment_page"> <iframe src="PHP/minoritati.php"> </iframe> </div>
	
		<div id="center" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<h1 align="center"> Minorit&#259;&#355;i din Bra&#351;ov &#351;i &#238;mprejurimi </h1>
			<div id="content">
				<h2> Introdecere </h2>
					<p> &#206;n jude&#355;ul Bra&#351;ov exist&#259; o multitudine de minorit&#259;&#355;i, precum maghiari, italieni, germani, rromi, evrei,  etc.  despre care vom vorbi &#238;n acest articol. </p>
				<h2> Maghiarii </h2>
					<p> Maghiarii din Rom&#226;nia reprezint&#259; cea mai numeroas&#259; minoritate etnic&#259; din Rom&#226;nia. La recens&#259;m&#226;ntul popula&#355;iei din 2002 au fost &#238;nregistra&#355;i &#238;n Rom&#226;nia 1.431.807 etnici maghiari, reprezent&#226;nd 6,60% din popula&#355;ia &#355;&#259;rii. </p>
					<p> Ponderile cele mai mari de popula&#355;ie maghiar&#259; se &#238;nregistreaz&#259; &#238;n Ardeal, &#238;n special &#238;n jude&#355;ele Harghita (84,61%), Covasna (73,81%) &#351;i &#238;n Bra&#351;ov in num&#259;r de 23.176 adic&#259; 8.75% din popula&#355;ia Bra&#351;ovului. Conform recens&#259;m&#226;ntului din 2002, ora&#351;ul din Rom&#226;nia cu cel mai mare num&#259;r de etnici maghiari era municipiul T&#226;rgu Mure&#351;, cu 70.108 locuitori de etnie maghiar&#259; (&#238;n zona metropolitan&#259; T&#226;rgu Mure&#351; peste 100.000 de maghiari). La recens&#259;m&#226;ntul anterior, cel din 1992, au fost &#238;nregistra&#355;i la T&#226;rgu Mure&#351; 84.492 de maghiari &#351;i 76.742 de rom&#226;ni.  </p>
					<img src="pics/minoritati/Romania_maghiari_2011.PNG" id="maghiari_2011_img" class="fotografie"/>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" id="maghiari_txt">
						<p> Ziua Maghiarilor s&#259;rb&#259;torita la Bra&#351;ov. </p>
						<img src="pics/minoritati/Ziua Maghiarilor.jpg" id="zi_maghiari_img" class="fotografie img-responsive"/>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" id="aprily_txt">
						<p> Liceul Aprily Lajos din Bra&#351;ov. </p>
						<img src="pics/minoritati/53_big.jpg" id="liceu_maghiar_img" class="fotografie img-responsive"/>
					</div>
					<div class="txt">
						<h2> Rromii </h2>
							<p> Rromii constituie una dintre cele mai vechi entit&#259;&#355;i etnice din Rom&#226;nia &#351;i una dintre cele mai numeroase. Spre deosebire de toate celelalte grupuri etnice, contururile popula&#355;iei de rromi sunt extrem de fluctuante, neput&#226;ndu&#45;se stabili o cifr&#259; suficient de exact&#259;. </p>
							<p> Dificultatea stabilirii contururilor popula&#355;iei rrome provine din dou&#259; cauze. &#206;n primul r&#226;nd o larg&#259; varietate a modelelor de via&#355;&#259;: apartenen&#355;&#259; religioas&#259;, utilizarea sau nu a limbii rom&#226;ne, identificarea ridicat&#259; cu popula&#355;iile &#238;nvecinate. &#206;n al doilea r&#226;nd, o accentuat&#259; fluctua&#355;ie a identific&#259;rii cu o etnie sau alta, &#238;n func&#355;ie de contextul acestei autoidentific&#259;ri. </p>
							<ul class="important"> <li> Origini </li> </ul>
							<p> Rromii (popular &#355;iganii) au migrat &#238;n Iran &#351;i &#238;n Asia mediteranean&#259;, &#238;ncep&#226;nd din secolul V, apoi &#238;n Imperiul bizantin &#238;n secolul IX, de unde au p&#259;truns &#238;n sud&#45;estul &#351;i centrul Europei (secolul X &#45; secolul XIV), ca &#351;i &#238;n nordul Africii. &#238;n secolul XV au p&#259;truns &#238;n Europa apusean&#259; (&#238;n special &#238;n Peninsula Iberic&#259;), iar din secolul XIX &#238;n cele doua Americi. Sunt semnala&#355;i &#238;n &#355;&#259;rile rom&#226;ne &#238;n secolul XIV, fie ca me&#351;te&#351;ugari liberi organiza&#355;i &#238;n &#351;atre, fie ca robi boiere&#351;ti, domne&#351;ti sau m&#226;n&#259;stire&#351;ti. Primele atest&#259;ri ale prezen&#355;ei rromilor &#238;n principatele rom&#226;ne&#351;ti Moldova (1428) &#351;i Muntenia (1385) sunt documente &#238;n care ei sunt lista&#355;i ca bunuri ale unor m&#259;n&#259;stiri. Rromii erau privi&#355;i ca me&#351;te&#351;ugari pricepu&#355;i &#238;n prelucrarea lemnului &#351;i aveau o mare valoare economic&#259;. Dup&#259; &#238;nfr&#226;ngerile suferite &#238;n fa&#355;a Imperiului Otoman, via&#355;a social&#259; &#351;i economic&#259; s&#45;a schimbat, societatea or&#259;&#351;eneasc&#259; s&#45;a divizat &#238;n bresle me&#351;te&#351;ug&#259;re&#351;ti iar num&#259;rul sclavilor de etnie rrom&#259; a crescut prin transformarea &#355;&#259;ranilor &#238;n iobagi. </p>
							<p> &#206;n anul 2002 au fost &#238;nregistra&#355;i 535.140 de rromi, reprezent&#226;nd 6,6% din popula&#355;ia &#355;&#259;rii. &#206;n jude&#355;ul Bra&#351;ov, au fost &#238;nregistra&#355;i 18.313, reprezent&#226;nd 3,1% din popula&#355;ia Bra&#351;ovului. </p>
							<p id="center_txt"><b> Serbare a zilei interna&#355;ionale a rromilor &#238;n cartierul G&#226;rnici al municipiului S&#259;cele. </b></p>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<img src="pics/minoritati/Ziua internationala a romilor.jpg" id="zi_rromi_img" class="fotografie img-responsive"/>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" id="rromi_img"><img src="pics/minoritati/img_3762.jpg" class="fotografie img-responsive"/></div>
				<div class="txt">
					<h2> Germanii </h2>
						<p> Acum mai bine de 850 de ani, s&#45;au stabilit primii germani pe teritoriul Rom&#226;niei. Germanii din Rom&#226;nia nu sunt un grup compact si unitar, deoarece, de&#45;a lungul timpului, ei au venit din mai multe zone ale Europei, unii de bun&#259;voie, chema&#355;i de conduc&#259;torii &#355;&#259;rii &#351;i atra&#351;i de un trai mai bun dec&#226;t &#238;n patria lor, al&#355;ii au fost adu&#351;i for&#355;at &#238;n perioade &#351;i condi&#355;ii istorice diverse &#351;i teritorii diferite ale &#355;&#259;rii, f&#259;r&#259; a avea leg&#259;turi foarte str&#226;nse unii cu al&#355;ii &#351;i vorbind dialecte diferite ale limbii germane. Din acest motiv, ast&#259;zi nu putem vorbi de o singur&#259; minoritate german&#259; omogen&#259;, ci de mai multe comunit&#259;&#355;i germane &#238;n Rom&#226;nia. A&#351;a au ap&#259;rut,de&#45;a lungul istoriei, &#238;n &#355;ara noastr&#259;, sa&#351;ii &#238;n Transilvania, &#351;vabii s&#259;tm&#259;reni &#238;n nord&#45;vestul Rom&#226;niei, &#351;vabii b&#259;n&#259;&#355;eni &#238;n C&#226;mpia Banatului, germanii din Banatul Montan &#238;n zona actualului jude&#355; Cara&#351;&#45;Severin, landlerii &#238;n c&#226;teva localit&#259;&#355;i din zona Sibiului, &#355;ipserii &#238;n nordul Transilvaniei, germanii bucovineni &#238;n nordul Moldovei &#351;i germanii dobrogeni &#238;n Dobrogea. Pe l&#226;ng&#259; aceste grupuri mari, au mai existat comunit&#259;&#355;i m&#259;runte, ce s&#45;au stabilit de&#45;a lungul timpului &#238;n marile ora&#351;e din Rom&#226;nia, ca: Bucure&#351;ti, Ia&#351;i, Craiova &#351;i altele. </p>
						<p> &#206;n prezent tr&#259;iesc &#238;n Rom&#226;nia &#238;n total 59,764 de germani, iar &#238;n municipiul Bra&#351;ov 1,717 de germani. </p>
						<ul class="important"> <li> Sa&#351;ii </li> </ul>
						<p> Sa&#351;ii sunt o popula&#355;ie de origine german&#259;, colonizat&#259; de c&#259;tre regii unguri &#238;n Transilvania. Se crede c&#259; locul de origine al sa&#351;ilor ar fi fost Flandra sau un &#355;inut din apropierea M&#259;rii Nordului, &#238;n timp ce al&#355;ii au venit din regiunea Rinului de mijloc sau din Luxemburg. </p>
						<p> Nu se &#351;tie data exact&#259; la care au fost coloniza&#355;i &#238;n Ardeal pentru c&#259; actele lor cele mai vechi s&#45;au pierdut &#238;n timpul marii invazii t&#259;tare din anul 1241. Se &#351;tie sigur c&#259; au &#238;nceput s&#259; vin&#259; &#238;n p&#259;r&#355;ile noastre &#238;n vremea regelui ungur Geza al II&#45;lea (1141&#45;1162), care le&#45;a acordat privilegii semnificative, av&#226;nd astfel asigurate posibilit&#259;&#355;ile unei vie&#355;i economice &#238;nfloritoare &#238;nc&#259; de la &#238;nceputul coloniz&#259;rii lor &#238;n Ardeal. Unii dintre ei s&#45;au a&#351;ezat &#238;n regiunea Sighi&#351;oara&#45;Media&#351;, al&#355;ii &#238;n zona Sibiu, unii &#238;n &#355;ara B&#226;rsei, &#238;n timp ce al&#355;ii s&#45;au a&#351;ezat &#238;n zona minier&#259; a Rodnei &#351;i a Bistri&#355;ei. </p>
						<p> Pentru a fi stimula&#355;i s&#259; r&#259;m&#226;n&#259; pe loc &#351;i s&#259; dezvolte economic sudul Transilvaniei, sa&#351;ii au primit privilegiul de a st&#259;p&#226;ni p&#259;m&#226;nt regal. &#206;n baza acestor privilegii, coloni&#351;tii sa&#351;i puteau folosi p&#259;m&#226;ntul f&#259;r&#259; restric&#355;ii, fiind vorba at&#226;t de bog&#259;&#355;iile solului c&#226;t &#351;i ale subsolului. De asemenea, erau scuti&#355;i de taxe vamale pe &#238;ntreg teritoriul regatului, puteau &#355;ine t&#226;rguri f&#259;r&#259; s&#259; pl&#259;teasc&#259; vam&#259;, aveau acces la exploat&#259;rile de sare. Mai t&#226;rziu, vor beneficia &#351;i de dreptul de bate moned&#259; proprie, drept de depozit pentru comer&#355;ul cu &#355;ara Rom&#226;neasc&#259;, iar de la 1376 au primit dreptul de a organiza me&#351;te&#351;ugurile &#238;n bresle. Comunit&#259;&#355;ile s&#259;se&#351;ti beneficiau &#351;i de privilegii administrative, judec&#259;tore&#351;ti &#351;i religioase, &#238;n schimbul obliga&#355;iilor militare &#351;i fiscale fa&#355;&#259; de coroana maghiar&#259;. </p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<p id="center_txt"><b> &#206;nt&#226;lnirea sa&#351;ilor la Bra&#351;ov </b></p>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<img src="pics/minoritati/Intalnirea Sasilor.jpg" class="fotografie img-responsive"/>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" id="sasi_img">
						<img src="pics/minoritati/sasi-4.jpg" class="fotografie img-responsive"/>
					</div>
				</div>
				<div class="txt">
					<h2> Alte etnii </h2>
						<ul>
							<li class="important"> Italienii </li>
								<p> Italienii sunt o minoritate etnic&#259; din Rom&#226;nia, num&#259;r&#226;nd 3,203 de persoane, conform recens&#259;m&#226;ntului din 2011. Italienii se afl&#259; dispersa&#355;i &#238;ntr&#45;un mod relativ uniform pe teritoriul &#355;&#259;rii, comunit&#259;&#355;i afl&#226;ndu&#45;se &#238;n Bucure&#351;ti, Bra&#351;ov, Tulcea, Ia&#351;i, Pite&#351;ti, etc. </p>
								<p> Ca minoritate etnic&#259; recunoscut&#259; oficial prin Asocia&#355;ia Italienilor din Rom&#226;nia (RO.AS.IT.), italienii din Rom&#226;nia au un loc asigurat &#238;n Camera Debuta&#355;ilor. </p>
							<li class="important"> Evreii </li>
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<p> Prezen&#355;a evreilor pe teritoriul rom&#226;nesc dateaz&#259; din secolul al II&#45;lea. &#206;n perioada dintre c&#259;derea Imperiului Roman &#351;i secolul al XI&#45;lea nu exist&#259; izvoare importante privind prezen&#355;a evreilor pe teritoriul &#355;&#259;rii noastre. Dintr&#45;o surs&#259; din anul 1165 afl&#259;m &#238;ns&#259; de evrei bizantini care au leg&#259;turi bune cu vlahii sud&#45;dun&#259;reni. La jum&#259;tatea secolului al XVI&#45;lea este atestat&#259; prima comunitate evreiasc&#259; &#238;n Bucure&#351;ti. &#206;n Transilvania evreii erau prezen&#355;i &#238;nc&#259; din secolele XI&#45;XII. &#206;n Transilvania, evreii s&#45;au asimilat cu prec&#259;dere popula&#355;iei maghiare. Pe teritoriul Moldovei &#351;i &#355;&#259;rii Rom&#226;ne&#351;ti evreii au devenit vorbitori de limb&#259; rom&#226;n&#259;.  </p>
									<p> Primii evrei s&#45;au stabilit &#238;n ora&#351;ul Bra&#351;ov &#238;n anul 1807, cu aprobarea consiliului local. Comunitatea evreilor a fost &#238;nfiin&#355;at&#259; oficial &#238;n 1826. Existau restric&#355;ii &#238;n ceea ce prive&#351;te meseriile pe care le puteau practica, ei put&#226;ndu&#45;se angaja doar dac&#259; respectivul loc de munc&#259; era refuzat de sa&#351;i.  </p>
									<p> Num&#259;rul evreilor din Bra&#351;ov a crescut constant. Astfel, dac&#259; &#238;n 1890 tr&#259;iau &#238;n ora&#351; 769 evrei, &#238;n anul 1940 num&#259;rul lor crescuse la 6.000 de persoane. </p>
									<p> Perioada celui de&#45;al Doilea R&#259;zboi Mondial a reprezentat o perioad&#259; grea pentru membrii comunit&#259;&#355;ii evreie&#351;ti din Bra&#351;ov. Chiar dac&#259; nu au fost deporta&#355;i &#238;n lag&#259;re, li s&#45;a interzis s&#259; fie proprietari de societ&#259;&#355;i comerciale, evreii fiind frecvent b&#259;tu&#355;i, iar copii lor da&#355;i afar&#259; din &#351;coal&#259;. &#206;n anul 1941, sinagoga ortodox&#259; a fost devastat&#259; de legionari. </p>
									<p> Dup&#259; r&#259;zboi, o parte important&#259; a evreilor din Bra&#351;ov a emigrat spre Palestina. La data recens&#259;m&#226;ntului popula&#355;iei din 1956 &#238;n ora&#351; mai locuiau doar 1.759 evrei. Num&#259;rul lor a sc&#259;zut constant de atunci, ast&#259;zi afl&#226;ndu&#45;se ~72 de evrei in municipiul Bra&#351;ov. </p>
								</div>
							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" id="sinagoga_img">
								<p><b> Sinagoga Neolog&#259; din Bra&#351;ov este un l&#259;ca&#351; cult evreiesc din municipiul Bra&#351;ov. </b></p>
								<img src="pics/minoritati/sinagoga_brasov.jpg" class="fotografie img-responsive"/>
							</div>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>