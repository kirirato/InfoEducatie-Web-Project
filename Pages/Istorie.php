<!DOCTYPE html>
<html>
	<head>
		<title> Istoria Bra&#351;ovului </title>
		<link type="text/css" rel="stylesheet" href="CSS/Istorie.css"/>
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
			<div id = "comment_page"> <iframe src="PHP/istorie.php"> </iframe> </div>
	
		<div id="center" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<h1 align="center"> Istoria Bra&#351;ovului </h1>
			<div id="content">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 txt">
				<h2> Bra&#351;ovul &#238;n Evul Mediu </h2>
					<ul>
						<li> 1234 &#45; Corona: Cercet&#259;torul Norbert Backmund a editat a&#351;a&#45;numitul "Catalogus Ninivensis", care contine o list&#259; a tuturor m&#259;n&#259;stirilor premonstratense din Ungaria &#351;i Transilvania. 1234 corespunde cu anul &#238;n care abatele Fredericus cunoaste "Claustra Sororum &#45; in Hungaria assignata est paternitas &#45; Dyocesis Cumanie Corona". </li>
						<li> 1241 &#45; Invazie t&#259;tar&#259;, prilej cu care este cucerit&#259; cetatea Sprenghi , ale care &#238;nceputuri nu se cunosc (cel mai probabil pe locul unui vechi castru, un complex de cl&#259;diri sau teren &#238;mprejmuit utilizat ca o pozi&#355;ie militar&#259; defensiv&#259;). Dup&#259; retragerea t&#259;tarilor se construie&#351;te la poart&#259; un turn hexagonal pentru ap&#259;rare. Cetatea a fost distrus&#259; dou&#259; secole mai t&#226;rziu, de c&#259;tre invadatorii turci. </li>
						<li> 1252 &#45; Barassu: &#206;n acest an, regele Bela al IV&#45;lea doneaza "teraZek", proprietate asezat&#259; &#238;ntre p&#259;m&#226;nturile rom&#226;nilor  "de Car&#355;a", ale sa&#351;ilor "de Barasu" &#351;icele ale secuilor de Sebus. Fr. Killyen, referindu&#45;se la acest document, arat&#259; c&#259; numele "Barasu" indic&#259; de fapt denumirea unui &#355;inut &#238;ntreg. Dup&#259; afima&#355;ia sa, toate cele trei toponime la care face referin&#355;&#259; documentul se refer&#259; la teritorii care &#238;nconjoar&#259; p&#259;m&#226;ntul donat &#351;i nu la vreun ora&#351;. &#206;n acest caz "Bra&#351;ov" se refer&#259; la o zon&#259;, iar "Corona" ar denumi localitatea. </li>
						<li> 1271 &#45; Brasu: Acest toponim este atestat &#238;ntr&#45;un document latin, aflat in Arhivele Statului din Budapesta &#351;i o fotocopie la Institutul de Istorie Cluj, act prin care &#350;tefan, regele Ungariei, aprob&#259; contractul dintre "Chyel comes, filius Erwin de Calnuk" &#351;i "Teel, filius Ebl de Brasu cognatus eiusdem". &#206;ntr&#45;un alt document emis de regele Ungariei, Venceslau al III&#45;lea, la 10 decembrie 1301, se confirm&#259; c&#259; Detricus, fiul lui Theel sau Tyl de Prejmer, este &#238;n posesiunea localit&#259;&#355;ilor Mikofalva &#351;i Nyen (Teliu). Pe baza acestui document, precum &#351;i a altora, privind familia comi&#355;ilor din Prejmer, nu este sigur dac&#259; denumirea de "Barasu" se refera la localitatea Bra&#351;ov sau la &#355;ara B&#226;rsei. </li>
						<li> 1288 &#45; Braso: Este consemnat &#238;ntr&#45;un document latin, aflat in Biblioteca Batthyaneum din Alba Iulia, iar &#238;n copie la Institutul de Istorie din Cluj. Se dovede&#351;te a fi primul act p&#259;strat care a fost emis &#238;n Bra&#351;ov, purt&#226;nd men&#355;iunea expresia: "Datum in Braso", fiind emis de regele Ladislau al IV&#45;lea. </li>
						<li> 1323 &#45; Se &#238;ntemeiaz&#259; m&#259;n&#259;stirea dominican&#259; &#238;n Braso. </li>
						<li> 1364 &#45; Bra&#351;ovul prime&#351;te privilegiul pentru t&#226;rg anual, urmat de privilegiul de "etapa de depozit" &#238;n 1369. </li>
						<li> 1377 &#45; Se incepe construc&#355;ia bisericii Sf. Maria (sau "Biserica Neagra", cum va fi numit&#259; dup&#259; incendiu) pe locul unei basilici vechi. </li>
						<li> 1395 &#45; Mircea cel B&#259;tr&#226;n &#351;i Sigismund de Luxemburg semneaz&#259; un tratat de alian&#355;&#259; &#238;mpotriva puterii otomane. Doi ani mai t&#226;rziu, regele Ungariei elibereaz&#259; un act care d&#259; dreptul Bra&#351;ovului de a&#45;&#351;i construi fortifica&#355;ii de piatr&#259;, urm&#259;rind &#238;ndeaproape ridicarea acestora. </li>
						<li> 1399 &#45; O bul&#259; a papei Bonifaciu al IX&#45;lea (1389 &#45; 1404) vorbe&#351;te despre biserica Sf. Nicolae din Schei &#351;i las&#259; s&#259; se &#238;ntrevad&#259; existen&#355;a unui loca&#351; de &#238;nv&#259;&#355;&#259;tur&#259; &#238;n jurul ei. </li>
						<li> 1421 &#351;i 1438 &#45; Invazie a turcilor. &#206;n urma acestor ac&#355;iuni militare, prin tratat, dob&#226;ndesc cetatea de pe T&#226;mpa. </li>
						<li> 1424 &#45; Blanarii bra&#351;oveni i&#351;i alc&#259;tuiesc primul statut dintre bresle. &#206;n 1798 la Bra&#351;ov &#238;nfiin&#355;au 43 de bresle, deservite de 1.227 me&#351;teri. &#206;i  putem aminti aici pe fierari, blanari, postavari, funari, curelari, cizmari, cu&#355;itari, cojocari (t&#259;b&#259;cari), m&#259;celari, aurari, cositorari, ar&#259;mari, franzelari, olari, l&#259;c&#259;tu&#351;i, &#355;es&#259;tori, armurieri, arcari, p&#259;larieri, l&#226;nari, argintari. </li>
						<li> 1448 &#45; 1453 &#45; Iancu de Hunedoara r&#259;scumpar&#259; &#351;i d&#259; ordin de distrugere a ceta&#355;ii Bra&#351;ovia de pe &#350;aua T&#226;mpei, piatra &#351;i materialele de construc&#355;ie ale acesteia fiind folosite la &#238;nt&#259;rirea cet&#259;&#355;ii medievale a Bra&#351;ovului din vale, cu opt bastioane dispuse din 110 in 100 metri, 4 (sau 5, &#238;n lumina descoperirilor recente) por&#355;i fortificate &#351;i 32 turnuri de ap&#259;rare (numite &#351;i "de pulbere"). Cetatea avea dou&#259; sau chiar trei r&#226;nduri de ziduri &#351;i era inconjurat&#259; de un &#351;an&#355; de ap&#259;rare plin cu ap&#259;. </li>
						<li> 1477 &#45; Este terminat&#259; Biserica Neagr&#259;. Din cauza lipsei fondurilor, cel de&#45;al doilea turn al bisericii nu va mai fi construit niciodat&#259;. </li>
						<li> 1486 &#45; Bra&#351;ovul &#351;i toat&#259; &#355;ara B&#226;rsei intr&#259; &#238;n Universitatea S&#259;seasc&#259;, prin confirmarea privilegiului Andreanum pentru to&#355;i sa&#351;ii din Sibiu, Media&#351;, Bra&#351;ov &#351;i &#355;ara B&#226;rsei. </li>
						<li> 1521 &#45; Judetele Bra&#351;ovului, Johann (Hans) Benkner, primesc de la Neac&#351;u din C&#226;mpulung, &#238;ntr&#45;o epistol&#259; scrisa in limba rom&#226;n&#259;, ve&#351;ti despre mi&#351;c&#259;rile trupelor turce&#351;ti de dincolo de Dun&#259;re. </li>
						<li> 1524 &#45; Se construie&#351;te &#238;n lemn Cet&#259;&#355;uia, o puternic&#259; fort&#259;rea&#355;&#259; de pe Dealul Cet&#259;&#355;ii. Cur&#226;nd, va fi cucerit&#259; &#351;i distrus&#259; din la ordinul lui Petru Rare&#351;, acesta pun&#226;nd bazele actualei cladiri din piatr&#259;. Incendiat&#259; &#238;n 1618, avea s&#259; fie ref&#259;cuta &#238;n 1625, ad&#259;ug&#226;ndu&#45;i&#45;se o f&#226;nt&#226;n&#259; de 81 m ad&#226;ncime (1627) &#351;i patru bastioane la col&#355;uri (1630).  </li>
							<p> A servit ulterior drept garnizoan&#259; pentru armatele habsburgice &#351;i &#238;nchisoare &#238;n perioada anilor 1940&#45;1950. </p>
						<li> 1533 &#45; Umanistul Johannes Honterus &#238;nfiin&#355;eaz&#259; prima tipografie din Bra&#351;ov, urmat&#259; de primul gimnaziu din localitate, la 1544. </li>
						<li> 1546 &#45; La Bra&#351;ov se infiin&#355;eaz&#259; prima moar&#259; de h&#226;rtie din sud&#45;estul Europei. </li>
						<li> 1559 &#45; Diaconul Coresi tip&#259;re&#351;te la Bra&#351;ov prima sa carte &#238;n limba rom&#226;n&#259; numit&#259; "&#206;ntrebare cre&#351;tineasc&#259;". La 4 octombrie, Mihai Viteazul intr&#259; &#238;n Bra&#351;ov unde i&#351;i une&#351;te oastea cu trupele secuilor r&#259;scula&#355;i. &#206;n ziua urm&#259;toare, voievodul prime&#351;te cheia ora&#351;ului. Dup&#259; cucerirea Transilvaniei, va &#355;ine prima diet&#259; in Casa Sfatului. </li>
						<li> 1628 &#45; Protopopul Vasile din &#351;cheii Bra&#351;ovului scrie prima cronic&#259; local&#259; cu subiect rom&#226;nesc. </li>
						<li> 1688: Bra&#351;ovenii se rascoal&#259; &#238;mpotriva noilor autorit&#259;&#355;i habsburgice. Mi&#351;carea este &#238;n&#259;bu&#351;it&#259;, iar sefii r&#259;scoalei sunt executa&#355;i. </li>
						<li> 21 Aprilie 1689 &#45; Un mare incendiu pustie&#351;te cetatea. Pu&#355;ine cladiri ram&#226;n neatinse. Drept urmare acestei calamit&#259;&#355;i, autorit&#259;&#355;ile bra&#351;ovene decid interzicerea construc&#355;iei caselor din lemn. Refacerea ora&#351;ului a durat mai bine de un secol, timp &#238;n care &#351;i&#45;a schimbat aspectul arhitectonic al fa&#355;adelor. </li>
						<li> 1731 &#45; Dascalul &#351;cheian Petru &#351;oanu tip&#259;re&#351;te primul calendar&#45;almanah rom&#226;nesc. </li>
						<li> 1757 &#45; Dimitrie Eustatievici scrie prima gramatic&#259; rom&#226;neasc&#259;. Este perioada de v&#226;rf a activit&#259;&#355;ii dasc&#259;liilor &#351;cheieni. </li>
					</ul>
			</div>
					<div class="image">
						<div id="bis_neagra" class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
							<p> Biserica Neagra </p>
							<img src="pics/istorie/bis_neagra.jpg" class="photo img-responsive"/>
						</div>
						<div id="bis_nicolae" class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
							<p> Biserica Sf. Nicolae din Schei </p>
							<img src="pics/istorie/bis_nicolae.jpg" class="photo img-responsive"/>
						</div>
						<div id="cetatuia" class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
							<p> Cet&#259;&#355;uia </p>
							<img src="pics/istorie/cetatuia.jpg" class="photo img-responsive"/>
						</div>
						<div id="gravura" class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
							<p> Bra&#351;ovul asa cum apare intr&#45;o gravura in 1750 </p>
							<img src="pics/istorie/brasov_gravura.jpg" class="photo img-responsive"/>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 txt" >
						<h2> Epoca Modern&#259; </h2>
						<ul>
							<li> 1804 &#45; Se introduce iluminatul public &#238;n interiorul cet&#259;&#355;ii prin instalarea felinalelor cu ulei. </li>
							<li> 1835 &#45; Se &#238;nfiin&#355;eaz&#259; "Casa general&#259; de economii" din Bra&#351;ov, prima institu&#355;ie de credit din Transilvania. &#206;ntre 1837 &#351;i 1867, primul director al acesteia va fi Peter Lange von Burgenkron. </li>
							<li> 1838 &#45; Apare, sub obl&#226;duirea &#238;mparatului de la Viena cu ajutorul ziarului "Gazeta de Transilvania", &#238;n redac&#355;ia lui George Bari&#355;. Este primul ziar rom&#226;nesc din Marele Principat al Transilvaniei. Tot aici, tip&#259;re&#351;te &#351;i "Foaie pentru minte, inim&#259; &#351;i literatur&#259;". </li>
							<li> 1848 &#45; Revolu&#355;ia pa&#351;optist&#259; cuprinde &#351;i Bra&#351;ovul. Aici a fost redactat documentul programatic "Prin&#355;ipurile noastre pentru reformarea patriei", de c&#259;tre frunta&#351;i de seam&#259; ai culturii &#351;i politicii moldovene (Alexandru Ioan Cuza, Vasile Alecsandri, Alecu Russo, Costache Negri, Gheorghe Sion, Ion Ionescu de la Brad). Se cerea unirea tuturor rom&#226;nilor intr&#45;un singur stat. Rom&#226;nii din &#351;chei se manifest&#259; pe 11 aprilie pentru c&#226;&#351;tigarea de drepturi politice. </li>
							<li> 1850 &#45; Este &#238;ntemeiat Gimnaziul rom&#226;n sub obl&#226;nduirea mitropolitului de Sibiu Andrei &#350;aguna, c&#259;ruia &#238;i poart&#259; numele ast&#259;zi. </li>
							<li> 1854 &#45; &#206;ntre Bra&#351;ov &#351;i Sibiu s&#45;a instalat o linie telegrafic&#259;. </li>
							<li> 1873 &#45; Pe 30 martie &#238;n Bra&#351;ov p&#259;trunde primul tren. Ulterior, &#238;n 1879 avea s&#259; fie dat&#259; &#238;n folosin&#355;&#259; &#351;i linia Bra&#351;ov &#45; Bucure&#351;ti. </li>
							<li> 1889 &#45; Bra&#351;ovul dispunea de o central&#259; telefonic&#259; la care erau conectati 22 de abonati particulari. Exist&#259; o leg&#259;tur&#259; telefonic&#259; cu Z&#259;rnestiul. </li>
							<li> 1891 &#45; Se introduce primul tramvai cu aburi la Bra&#351;ov pe itinerariul Pia&#355;a Sfatului &#45; Gara Bartolomeu. Ulterior locomotiva va fi &#238;nlocuit&#259; cu una pe baz&#259; de motorin&#259;. </li>
							<li> 1911 &#45; La 1 octombrie, Aurel Vlaicu efectueaz&#259; un zbor cu noul s&#259;u aparat, decol&#226;nd din curtea Gimnaziului "Andrei &#350;aguna". </li>
							<li> 1916 &#45; Pe 16 august Armata Rom&#226;n&#259; intr&#259; &#238;n Bra&#351;ov. Dr. Gheorghe Baiulescu devine primul primar rom&#226;n al Bra&#351;ovului. Pe 8 octombrie, garnizoana romaneasc&#259; din ora&#351; este masacrat&#259; de c&#259;tre inamic &#238;n a&#351;a&#45;numita Tran&#351;ee a mor&#355;ii din Bartolomeu. </li>
						</ul>
					</div>
					<div class="image">
						<div id="antebelic" class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
							<p> Pia&#355;a Central&#259; &#238;n perioada antebelic&#259; </p>
							<img src="pics/istorie/antebelic.jpg" class="photo img-responsive"/>
						</div>
						<div id="brasov_1906" class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
							<p> O imagine panoramica a Bra&#351;ovului din 1906 </p>
							<img src="pics/istorie/brasov_1906.jpg" class="photo img-responsive"/>
						</div>
						<div id="gazeta" class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
							<p> Gazeta de Transilvania </p>
							<img src="pics/istorie/gazeta_transilvania.jpg" class="photo img-responsive"/>
						</div>
						<div id="gimnaziu" class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
							<p> Gimnaziul Rom&#226;n </p>
							<img src="pics/istorie/gimnaziu.jpg" class="photo img-responsive"/>
						</div>
					</div>
				<div  class="col-lg-6 col-md-12 col-sm-12 col-xs-12 txt">
					<h2> Bra&#351;ovul &#238;n perioada interbelic&#259; </h2>
						<ul>
							<li> 1930 &#45;  Este &#238;nfiin&#355;at&#259; Uzina electric&#259;, cu finan&#355;area principalelor fabrici bra&#351;ovene, nevoite p&#226;n&#259; atunci s&#259; utilizeze generatoare proprii. </li>
							<li> 1943 &#45; P&#226;na &#238;n 1944 Bra&#351;ovul sufer&#259; distrugeri &#238;nsemnate din cauza bombardamentelor avia&#355;iei americane. </li>
							<li> 1945 &#45; &#206;n ianuarie, sa&#351;ii din Bra&#351;ov sunt deporta&#355;i &#238;n U.R.S.S. </li>
						</ul>
				</div>
					<div id="uzina" class="col-lg-5 col-md-12 col-sm-12 col-xs-12 image">
						<p> Uzina electric&#259; </p>
						<img src="pics/istorie/uzina_electrica.jpg" class="photo img-responsive"/>
					</div>
				<ul class="col-lg-6 col-md-12 col-sm-12 col-xs-12 txt">	
					<h2> Perioada comunist&#259; </h2>
						<li> &#206;ntre 8 septembrie 1950 &#351;i 24 decembrie 1960 s&#45;a numit Ora&#351;ul Stalin, dup&#259; Iosif Vissarionovici Stalin, &#351;i a fost capitala regiunii cu acela&#351;i nume. A fost declarat municipiu la 17 februarie 1968. </li>
						<li> 1960 &#45; Se inaugureaz&#259; cl&#259;direa Teatrului Dramatic. </li>
						<li> 1968 &#45; Are loc prima edi&#355;ie a Festivalului Interna&#355;ional "Cerbul de Aur". </li>
						<li> 1971 &#45; Se &#238;nfiin&#355;eaz&#259; "Universitatea din Bra&#351;ov", prin unificarea Institutului Politehnic cu Institutul Pedagogic. </li>
						<li> 1977 &#45; Pe 4 martie se resimte un cutremur puternic (7,2 grade pe scara Richter). Ulterior au loc consolid&#259;ri la Casa Sfatului, Poarta &#351;chei, Liceul Sportiv &#351;i la alte cl&#259;diri afectate. </li>
						<li> 1986 &#45;  pe 31 august are loc Cutremurul de 7 grade pe scara Richter. </li>
						<li> 1987 &#45; 15 Noiembrie Muncitorii bra&#351;oveni se revolt&#259; &#238;mpotriva regimului comunist. Totul a pornit de la &#206;ntreprinderea de Autocamioane, unde lucr&#259;torii erau nemul&#355;umi&#355;i de neplata salariilor cuvenite &#351;i &#238;n&#259;sprirea condi&#355;iilor de trai. Revolta a fost &#238;n&#259;bu&#351;it&#259; de for&#355;ele comuniste, iar liderii ei &#238;ntemni&#355;a&#355;i &#351;i supu&#351;i la torturi &#351;i deport&#259;ri. </li>
						<li> 1989 &#45; &#206;n perioada 22 &#45; 25 decembrie la Bra&#351;ov au loc violen&#355;e soldate cu numeroase victime. P&#226;n&#259; la urm&#259;, bra&#351;ovul a primit din nou libertatea dorit&#259;. </li>
				</ul>
					<div id="teatru_dramatic" class="col-lg-5 col-md-12 col-sm-12 col-xs-12 image">
						<p> Teatrul Dramatic </p>
						<img src="pics/istorie/teatru_dramatic.jpg" class="photo img-responsive"/>
					</div>
			</div>
		</div>
	</body>
</html>