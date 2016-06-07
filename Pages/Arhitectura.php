<!DOCTYPE html>
<html>
	<head>
		<title> Arhitectura Bra&#351;ovului </title>
		<link type="text/css" rel="stylesheet" href="CSS/Arhitectura.css"/>
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
			<div id = "comment_page"> <iframe src="PHP/arhitectura.php"> </iframe> </div>
	
		<div id="center" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<h1 align="center"> Arhitectura Bra&#351;ovului </h1>
			<div id="content">
				<p> <b>Casa Sfatului</b> din Bra&#351;ov, un important monument de arhitectur&#259; din municipiul Bra&#351;ov, a fost ini&#355;ial doar un turn de supraveghere, ale c&#259;rui baze se aflau pe cele ale actualului turn. </p>
				<img src="./pics/arhitectura/casa_sfatului.jpg" class="photo"/>
				<p> &#206;n 23 decembrie 1420 se &#238;ncheie un acord &#238;ntre Adunarea Districtului &#355;&#259;rii B&#226;rsei &#351;i Breasla Bl&#259;narilor privind construirea Casei Sfatului. &#206;n acest document se men&#355;ioneaz&#259; c&#259; reprezentan&#355;ii Breslei Bl&#259;narilor bra&#351;oveni au &#238;ng&#259;duit celor nou&#259; comune ale "Provinciei &#355;ara B&#226;rsei" s&#259;&#45;&#351;i construiasc&#259; deasupra bol&#355;ii de v&#226;nzare a breslei o camer&#259; pentru "acordarea drept&#259;&#355;ii" &#351;i pentru &#351;edin&#355;ele magistratului. Totu&#351;i, din cauza invaziei turce&#351;ti din 1421, a distrugerii &#238;n mare parte a ora&#351;ului, precum &#351;i a arest&#259;rii magistratului ora&#351;ului, acest proiect va fi am&#226;nat. </p>
				<p> Cl&#259;direa s&#45;a transformat &#238;n Prim&#259;rie pe m&#259;sur&#259; ce ora&#351;ul s&#45;a dezvoltat. Astfel, urm&#259;toarea men&#355;iune despre Casa Sfatului din Bra&#351;ov apare &#238;n 1503, ea fiind men&#355;ionat&#259; sub numele de "Praetorium". </p>
				<p> Construc&#355;ia a cunoscut de&#45;a lungul anilor multe modific&#259;ri, multe dintre ele fiind datorate distrugerilor provocate de evenimente naturale: </p>
					<ul>
						<li> 5 iulie 1608 &#45; un tr&#259;znet love&#351;te turnul Casei Sfatului; incendiul nu a putut fi stins dec&#226;t dup&#259; ce s&#45;a turnat &#238;n foc vin, o&#355;et &#351;i lapte; </li>
						<li> 17 iunie 1662 &#45; un cutremur afecteaz&#259; puternic Casa Sfatului; turnul avea s&#259; se pr&#259;bu&#351;easc&#259; &#238;n propor&#355;ie de dou&#259; treimi; </li>
						<li> 24 iulie 1682 &#45; o furtun&#259; puternic&#259; love&#351;te din nou "turnul trompeti&#351;tilor" (numit a&#351;a pentru c&#259; un trompetist anun&#355;a trecerea fiec&#259;rei ore); </li>
						<li> 21 aprilie 1689 &#45; marele incendiu (provocat de for&#355;ele habsburgice care asediau ora&#351;ul) distruge o mare parte din cl&#259;dire. Dup&#259; aproape un secol, &#238;n anul 1780, se &#238;ncheie lucr&#259;rile de reconstruc&#355;ie a Casei Sfatului, &#238;n stil baroc, aproximativ &#238;n forma pe care o cunoa&#351;tem ast&#259;zi. Tot atunci, pe loggia din fa&#355;&#259;, a fost ad&#259;ugat&#259; stema Bra&#351;ovului. </li>
					</ul>
				<p> Administra&#355;ia ora&#351;ului se mut&#259; din aceast&#259; cl&#259;dire &#238;n anul 1876, &#238;ntr&#45;o cl&#259;dire nou&#259; situat&#259; la intersec&#355;ia str&#259;zilor Republicii &#351;i Mihail Sadoveanu. </p>
				<p> La &#238;nceputul secolului XX, Casa Sfatului urma s&#259; fie demolat&#259; &#351;i &#238;nlocuit&#259; cu o cl&#259;dire administrativ&#259; modern&#259;. Acest lucru a fost evitat doar datorit&#259; unei puternice campanii de pres&#259; pentru men&#355;inerea vechiului monument istoric. Ultima modificare arhitectural&#259; a Casei Sfatului a avut loc &#238;n anii 1909&#45;1910, c&#226;nd acoperi&#351;ul baroc a fost &#238;nlocuit de actualul acoperi&#351; piramidal, cu &#355;igle colorate. Din 1950 cl&#259;direa g&#259;zduie&#351;te Muzeul Jude&#355;ean de Istorie. </p>
				<img src="./pics/arhitectura/biserica-neagra.jpg" class="photo"/>
				<p> <b>Biserica Neagr&#259;</b> de ast&#259;zi se &#238;nal&#355;&#259; pe locul unei biserici romanice mai vechi din secolul al XIII&#45;lea, distrus&#259; &#238;n marea invazie t&#259;tar&#259; din 1241. Construc&#355;ia actual&#259; a &#238;nceput &#238;n anul 1383, c&#226;nd Bra&#351;ovul se afla &#238;ntr&#45;o perioad&#259; de dezvoltare cultural&#259; &#351;i economic&#259; puternic&#259;, fiind cel mai &#238;nsemnat ora&#351; comercial &#351;i industrial la grani&#355;a Transilvaniei cu &#355;ara Rom&#226;neasc&#259;. Invazia turcilor din 1421 a &#238;ntrerupt lucr&#259;rile de construc&#355;ie a bisericii, ora&#351;ul fiind nevoit s&#259; se concentreze asupra fortifica&#355;iilor, dar au fost continuate mai t&#226;rziu dup&#259; un plan mult simplificat. Din cauza unui cutremur de propor&#355;ii &#238;n 1471, turnul sudic nu a fost construit p&#226;n&#259; la &#238;n&#259;l&#355;imea inten&#355;ionat&#259;. Anul 1477 poate fi considerat anul &#238;ncheierii lucr&#259;rilor de construc&#355;ie a bisericii, &#238;n 1499 se men&#355;ioneaz&#259; o org&#259; nou&#259;, iar mai t&#226;rziu s&#45;au mai efectuat lucr&#259;ri la turn prin care i s&#45;au ad&#259;ugat un ceas &#351;i clopote &#238;n 1514. Biserica, ini&#355;ial romano&#45;catolic&#259; a primit hramul Sf&#226;nta Maria, fapt dovedit &#351;i ast&#259;zi de fresca Mariei, aflat&#259; &#238;n hala por&#355;ii sudice. </p>
				<p> La jum&#259;tatea secolului al XVI&#45;lea, reforma protestant&#259; a p&#259;truns &#238;n Transilvania &#351;i s&#45;a r&#259;sp&#226;ndit &#238;n mare parte datorit&#259; umanistului &#351;i pedagogului Johannes Honterus (1498&#45;1549). &#206;n 1542 s&#45;a celebrat prima slujb&#259; evanghelic&#259;&#45;luteran&#259; &#238;n Biserica Neagr&#259;, iar &#238;n timpul aceleia&#351;i mi&#351;c&#259;ri s&#45;au &#238;ndep&#259;rtat &#351;i altarele secundare. </p>
				<p> De&#45;a lungul secolelor XVI&#45;XVII biserica a fost afectat&#259; de multe cutremure astfel &#238;nc&#226;t, la jum&#259;tatea secolului al XVII&#45;lea, a fost nevoie de lucr&#259;ri de restaurare. Marele incendiu din 21 aprilie 1689 a cuprins &#351;i biserica parohial&#259;, distrug&#226;nd acoperi&#351;ul &#351;i mobilierul din interior. De atunci, ruina &#238;nnegrit&#259; de fum s&#45;a numit Biserica Neagr&#259;. Apoi au &#238;nceput lucr&#259;ri de renovare extinse care au conferit interiorului un aspect baroc. Tot &#238;n aceast&#259; perioad&#259; s&#45;au construit &#351;i galeriile pentru ca biserica s&#259; poat&#259; face fa&#355;&#259; num&#259;rului tot mai mare de enoria&#351;i care luau parte la slujbe. Lucr&#259;rile au fost &#238;ncheiate &#238;n 1722, odat&#259; cu noua inaugurare Grav avariat&#259; dup&#259; incendiu, Biserica Neagr&#259; a fost ref&#259;cut&#259; cu ajutorul unor me&#351;teri veni&#355;i din ora&#351;ul hanseatic Danzig, pentru c&#259; me&#351;terii locali nu mai &#351;tiau s&#259; &#238;nchid&#259; bol&#355;i de dimensiuni at&#226;t de mari. Noile bol&#355;i, &#238;ns&#259;, sunt &#238;n stil baroc, nu gotic. Planul utilizat de c&#259;tre arhitec&#355;i a fost acela de bazilic&#259; cu trei nave, egale ca &#238;n&#259;l&#355;ime, &#238;nscriindu&#45;se &#238;n tipul de biserici&#45;hal&#259; preferate &#238;n secolele XV&#45;XVI &#238;n spa&#355;iul german, de unde proveneau de altfel unii dintre arhitec&#355;i &#351;i me&#351;teri. </p>
				<p> &#206;ntre anii 1836 &#351;i 1839, firma berlinez&#259; Buchholz &#238;nal&#355;&#259; pe galeria vestic&#259; o org&#259; nou&#259; de dimesiuni mari (aproximativ 4000 de tuburi, 4 manuale cu c&#226;te 56 de taste &#351;i un pedalier cu 27 de taste, 76 de registre &#351;i dispune de 63 de registre sonore). A fost inaugurat&#259; la 17 aprilie 1839, organist fiind chiar Carl August Buchholz care a prezentat improviza&#355;ii &#351;i cantate ale compozitorilor Friedrich Schneider &#351;i Johann Lucas Hedwig. Orga a fost restaurat&#259; de Carl Hesse &#351;i dispune de un manual &#351;i pedalier &#351;i 8 registre. Restaurarea a durat 4 ani: 1997 &#45; 2001.  </p>
				<p> Atunci toate cele 3993 de tuburi (cel mai mare av&#226;nd o &#238;n&#259;l&#355;ime de circa 13 metri) au fost demontate &#351;i restaurate. Orga se &#238;ncadreaz&#259; &#238;n categoria orgilor baroce &#351;i a supravie&#355;uit perioada de la construc&#355;ii p&#226;n&#259; &#238;n prezent aproape neschimbat&#259;. </p>
				<p> &#206;ntre 1865 &#351;i 1866, firma vienez&#259; Schonthaler ridic&#259; altarul neogotic dup&#259; planurile inginerului din localitate, Peter Bartesch, &#351;i realizeaz&#259; stranele din cor. &#206;n anul 1898, statuia lui Honterus se amplaseaz&#259; &#238;n fa&#355;a turnului sudic, &#238;n amintirea reformatorului transilv&#259;nean. </p>
				<img src="./pics/arhitectura/poarta_ecaterinei.jpg" class="photo"/>
				<p> Dup&#259; Primul R&#259;zboi Mondial, galeria pentru org&#259; a fost extins&#259; &#351;i s&#45;a consolidat bolta corului. Mai t&#226;rziu au fost ref&#259;cute &#351;i fialele contraforturilor din cor. </p>
				<p> <b>Poarta Ecaterinei</b> a fost construit&#259;, pentru a facilita accesul &#351;cheienilor &#238;n Bra&#351;ov, la mijlocul laturii dintre Bastionul &#355;es&#259;torilor &#351;i cel al Fierarilor, pe locul unei vechi por&#355;i din veacul al XIV&#45;lea sau al XV&#45;lea, distrus&#259; de inunda&#355;ia din 24 august1526, c&#226;t &#351;i &#238;n urma n&#259;v&#259;lirilor turce&#351;ti. Aceasta se &#238;ntindea de la actualul Corp S al Universit&#259;&#355;ii "Transilvania", unde era moara por&#355;ii, p&#226;n&#259; dincolo de actuala Poart&#259; &#350;chei. Fiind situat&#259; la cap&#259;tul str&#259;zii Caterinei &#45; care la r&#226;ndul ei a preluat numele de la m&#259;n&#259;stirea de c&#259;lug&#259;ri&#355;e ce fusese acolo &#45; poarta a primit denumirea de Ecaterina. &#206;n 1559 a fost ridicat &#351;i turnul por&#355;ii, care se vede &#351;i ast&#259;zi. De form&#259; p&#259;trat&#259;, pe trei nivele, construc&#355;ia are &#238;n partea superioar&#259; patru turnule&#355;e ce simbolizau "Jus Gladii", un privilegiu medieval care d&#259;dea conduc&#259;torilor bra&#351;oveni dreptul de a aplica pedeapsa suprem&#259;. Bolta turnului e pictat&#259; &#238;n stilul Rena&#351;terii, iar arhitectura acestuia este unic&#259; &#238;n lume, f&#259;c&#226;nd din el o pre&#355;ioas&#259; bijuterie artistic&#259;. Documentele men&#355;ioneaz&#259; c&#259; pentru fiecare din cele opt guri de tragere ale turnului fuseser&#259; aduse bombarde de la Praga. Turnul Por&#355;ii &#45; ast&#259;zi mare parte &#238;n p&#259;m&#226;nt &#45; a suferit stric&#259;ciuni importante din cauza cutremurelor &#351;i incendiilor din 1689 &#351;i 1738. Nemair&#259;spunz&#226;nd cerin&#355;elor negustorimii rom&#226;ne din &#351;chei, poarta (cu excep&#355;ia turnului) a fost d&#259;r&#226;mat&#259; &#238;n 1827, un an mai t&#226;rziu construindu&#45;se actuala Poart&#259; &#350;chei. </p>
				<p> Ast&#259;zi, turnul por&#355;ii renovat ad&#259;poste&#351;te expozi&#355;ii periodice de art&#259; &#351;i istorie. </p>
				<p> Arhitectura bra&#351;ovean&#259;, este specific&#259;, fiecare cas&#259; av&#226;ndu&#45;&#351;i pitorescul ei. Ridicarea construc&#355;iilor s&#45;a f&#259;cut, de&#45;a lungul timpului, conform unor principii urbanistice bine stabilite, impuse de condi&#355;iile geografice ale Bra&#351;ovului. Astfel, casele din Cetate se sprijin&#259; una pe alta, pe c&#226;nd cele din cartierele exterioare sunt mai r&#259;sfirate. </p>
				<p> Cu greu se mai pot &#238;nt&#226;lni ast&#259;zi cl&#259;diri vechi, dat&#226;nd de secole. Acestea au de regul&#259; un singur etaj, pere&#355;ii exteriori sunt lipsi&#355;i de ornamente, iar ferestrele sunt mici, comparativ cu standardele actuale. Except&#226;nd Biserica Sf. Bartolomeu (secolul XIII), Biserica Neagr&#259;(secolul XIV cu excep&#355;ia boltei &#351;i a acoperi&#351;ului) &#351;i fortifica&#355;iile (secolul XV), se pot aminti Casa Jekelius, Biblioteca Honterus &#351;i Gr&#226;narul ora&#351;ului, toate dat&#226;nd din secolul XVI. </p>
				<p> &#206;n Cetate, construc&#355;iile au fost ridicate conform unui plan urbanistic bine stabilit, impus de condi&#355;iile geografice &#238;n care se afla ora&#351;ul. Aici, ca &#351;i &#238;n celelalte cartiere s&#259;se&#351;ti, casele "se sprijin&#259; una pe alta", fiind lipite &#238;ntre ele. Cele mai vechi case p&#259;strate p&#226;n&#259; ast&#259;zi prezint&#259; bolte cu arcuri fr&#226;nte, specifice stilului gotic, ori curbate, caracteristice perioadei de trecere c&#259;tre Rena&#351;tere. Cea mai mare parte a construc&#355;iilor din Cetate au fost afectate de marele incendiu din 21 aprilie 1689, provocat de c&#259;tre armatele austriece aflate &#238;n retragere. Dup&#259; incendiu, ornamentele fa&#355;adelor sunt realizate potrivit barocului t&#226;rziu, rococoului vienez &#351;i clasicismului. Cu toate acestea, multe dintre vechile elemente renascentiste au fost scoase din locurile lor ini&#355;iale &#351;i mutate, ori depozitate, &#238;n interiorul cl&#259;dirii. Multe astfel de ornamente, cu inscrip&#355;ii, pot fi &#238;nt&#226;lnite la Muzeul &#355;&#259;rii B&#226;rsei, aflat &#238;n Bastionul &#355;es&#259;torilor, sau &#238;n lapidariul din Biserica Neagr&#259;. De asemenea, secolul XIX a adus o serie de prefaceri ale fa&#355;adelor, precum &#351;i apari&#355;ia a noi cl&#259;diri &#238;n locul celor vechi, care erau d&#259;r&#226;mate. Predomin&#259; acum Art Nouveau&#45;ul, neorena&#351;terea, neobarocul &#351;i plastica eclectic&#259;. Iat&#259; c&#226;teva monumente reprezentative: </p>
					<ul>
						<li> Casa Sfatului (1420 &#45; secolul XVIII, cu schimbarea acoperi&#351;ului baroc &#238;n 1910): gotic, renascentist, baroc; </li>
						<li> Biserica Neagr&#259; (1377 &#45; 1477; secolul XVIII): gotic flamboyant, baroc; </li>
						<li> Casa Negustorilor (1539 &#45; 1545): ridicat&#259; ini&#355;ial &#238;n stil renascentist, din care se mai p&#259;streaz&#259; doar stema ora&#351;ului &#351;i blazonul familiei Hirscher. A suferit transform&#259;ri esen&#355;iale &#238;n anii 1840&#45;1842, 1857. Aspectul ini&#355;ial se datoreaz&#259; restaur&#259;rilor din anii '60; </li>
						<li> Biserica Romano&#45;Catolic&#259; Sfin&#355;ii Petru &#351;i Paul (1776&#45;1782), pe locul unei biserici gotice din secolul al XIV&#45;lea (probabil a m&#259;n&#259;stirii dominicane), reconstruit&#259; &#238;n sec. al XVIII&#45;lea &#238;n stil baroc; </li>
						<li> Biserica Sf&#226;ntul Ioan, a c&#259;lug&#259;rilor franciscani (secolul al XV&#45;lea; cu transform&#259;ri la &#238;nceputul sec. al XVIII&#45;lea): gotic, baroc; </li>
						<li> Poarta Ecaterinei (1559) Poarta &#350;chei (1827): clasic &#351;i neoclasic; </li>
						<li> Reduta (1893): neobaroc; </li>
						<li> Sinagoga (1901): stilul spaniol, cu elemente gotice &#351;i romanice; </li>
						<li> Sinagoga Ortodox&#259;; </li>
						<li> Vila Kertsch; </li>
						<li> Casa Baiulescu; </li>
						<li> Muzeul de art&#259;; </li>
					</ul>
				<p> &#206;n &#351;chei, casele p&#259;streaz&#259;, pe l&#226;ng&#259; plastica &#238;n stucatur&#259;, de factur&#259; baroc&#259;, por&#355;ile tradi&#355;ionale din lemn, cu elemente de feronerie specific&#259;, produs&#259; de l&#259;c&#259;tu&#351;ii bra&#351;oveni (de remarcat ciocanele de b&#259;tut &#238;n poart&#259;, &#238;n form&#259; de &#351;arpe). Unele dintre ele, o dat&#259; cu achizi&#355;ionarea de c&#259;tre domnii din &#355;ara Rom&#226;neasc&#259; sufer&#259; o serie de transform&#259;ri, c&#259;p&#259;t&#226;nd stilul br&#226;ncovenesc sau baroc rom&#226;nesc. Monumente reprezentative ar fi: </p>
					<ul>
						<li> Biserica Sf. Nicolae, primul l&#259;ca&#351; de cult ortodox din Bra&#351;ov (din lemn &#45; secolul XIII; din piatr&#259; &#45; 1495): gotic, renascentist, baroc; </li>
						<li> Prima &#350;coal&#259; Rom&#226;neasc&#259; din Bra&#351;ov (din lemn &#45; secolul XIV; din piatr&#259; &#45; secolul XV; modific&#259;ri esen&#355;iale &#238;n perioada 1760 &#45; 1761): baroc &#351;i neobaroc; </li>
						<li> Colegiul Na&#355;ional "Andrei &#350;aguna" (1850): neoclasic; </li>
						<li> Biserica Cuvioasa Parascheva din Groaveri (1874 &#45; 1876): clasic; </li>
						<li> Casa de pe strada Comuna din Paris, nr. 15, &#238;n stil baroc provincial. Ini&#355;ial, era acoperit&#259;, pe toat&#259; suprafa&#355;a exterioar&#259;, cu scene biblice pictate. Ast&#259;zi se mai p&#259;streaz&#259; doar dou&#259; zone &#351;terse, una reprezent&#226;nd botezul lui Iisus Hristos; </li>
					</ul>
				<p> &#206;n Bra&#351;ovechi, casele sunt construite &#238;n acela&#351;i spirit de economie teritorial&#259; ca &#351;i cel din Cetate. Se remarc&#259; por&#355;ile arcuite &#351;i casele tradi&#355;ionale din secolul XIX. Doar c&#226;teva case au rezistat mai mult timpului, dat&#226;nd din secolele trecute. Predomin&#259; barocul, &#238;n stucatura celor din secolul XVIII, &#351;i Art Nouveaul, la cele din secolul urm&#259;tor. Se remarc&#259;, de asemenea, monumentele: </p>
					<ul>
						<li> Biserica Sf. Bartolomeu (prima jum&#259;tate a secolului XIII, construit&#259; sub &#238;nr&#226;urirea &#351;antierului de la C&#226;r&#355;a): romanic de tranzitie (cistercian), care &#238;mbin&#259; vechiul romanic cu goticul; </li>
						<li> Biserica Sf. Martin de pe Straj&#259; (spre 1522, probabil secolul XIII; transform&#259;ri la 1792) &#351;i casa parohial&#259; (care se presupune c&#259; ar fi fost vechea prim&#259;rie, cea anterioar&#259; secolului XV) (secolul XIII &#45; XIV): gotic; </li>
						<li> Biserica Adormirea Maicii Domnului (1783): baroc; </li>
					</ul>	
				<p> &#206;n Blum&#259;na, cl&#259;dirile vechi sunt pu&#355;ine. Majoritatea dateaz&#259; de la sf&#226;r&#351;itul secolului XIX, &#238;nceputul secolului XX. Predomin&#259;, cum era de a&#351;teptat, Art Nouveaul. Se remarc&#259;: </p>
					<ul>
						<li> Bisericile evanghelice de pe strada Iuliu Maniu, numerele 2 &#351;i 20 (1777, respectiv 1783), care seam&#259;n&#259; foarte mult &#238;ntre ele: baroc; </li>
					</ul>
				<p> &#206;n zona central&#259;, a institu&#355;iilor, cl&#259;dirile au fost construite la &#238;nceputul secolului XX, &#238;n stilul Art Nouveau &#351;i neobaroc, specific monumentelor ungure&#351;ti budapestane din aceea&#351;i perioad&#259;. Men&#355;ion&#259;m aici Palatul Justi&#355;iei (Prefectura), Palatul Po&#351;tei, Palatul Finan&#355;elor (Prim&#259;ria), Palatul Soarelui, Vila Czell, Rectoratul. </p>
				<h2> Cel mai mare arhitect al Brasovului. </h2>
					<img src="pics/arhitectura/nicolae_taric.jpg" class="photo"/>
					<p> Nicolae Taric, membru fondator al Ordinului Arhitectilor din Romania &#45; organizatia profesionala a arhitectilor &#45; &#351;i membru permanent in Consiliul National, locuieste &#351;i i&#351;i desfa&#351;oar&#259; activitatea &#238;n Bra&#351;ov, Romania. Este totodata membru activ al Registrului Urbani&#351;tilor Rom&#226;ni &#351;i al Uniunii Arhitec&#355;ilor din Rom&#226;nia. </p>
					<p> Promoveaz&#259; constant arhitectura de calitate, particip&#259; &#238;n dezbaterile de specialitate, la expozitii &#351;i &#238;n concursuri de proiectare. </p>
					<p> Dup&#259; ce a absolvit, &#238;n 1976, Universitatea "Ion Mincu" din Bucure&#351;ti, a lucrat ca arhitect&#45; &#351;ef la Institutul de Proiectare Bra&#351;ov, din 1982 pana &#238;n 1991. Dup&#259; schimbarea de regim politic, &#238;n 1990 a &#238;nfiintat <b>ADA(Agen&#355;ia de Arhitectur&#259; &#351;i Design)</b> care, &#238;n c&#226;&#355;iva ani, a devenit unul dintre cele mai mari birouri de proiectare din regiune, semn&#226;nd proiecte de la sedii de banc&#259;, cl&#259;diri de birouri, sedii de productie &#351;i cercetare, p&#226;n&#259; la hoteluri &#351;i cl&#259;diri de locuin&#355;e, multe dintre ele fiind premiate &#238;n concursuri locale &#351;i na&#355;ionale. &#206;ntre timp a urmat sesiuni de specializare &#238;n Fran&#355;a &#351;i Statele Unite ale Americii, dob&#226;ndind expertiza profesional&#259; &#238;n managementul investi&#355;iilor publice, &#238;n optimizare de costuri &#351;i timp in construc&#355;ii etc. </p>
					<p> &#206;ncepand cu 2006 este pre&#351;edintele filialei Bra&#351;ov&#45;Covasna&#45;Harghita a Ordinului Arhitec&#355;ilor din Rom&#226;nia. </p>
			</div>
		</div>
	</body>
</html>