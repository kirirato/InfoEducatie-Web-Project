<!Doctype html>
<html>
	<head>
		<title> Socio-cultura </title>
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
			<div id = "comment_page"> <iframe src="PHP/socio-culturale.php"> </iframe> </div>
	
	<div id = "center" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
    <h1 align = "center"> Socio-cultura Bra&#351;ovului </h1>
    <div class = "row">
		<div class = "col-lg-7"><p>Casa Sfatului din Bra&#351;ov, un important monument de arhitectur&#259; din municipiul Bra&#351;ov, a fost ini&#355;ial doar un turn de supraveghere, ale c&#259;rui baze se aflau pe cele ale actualului turn.</p>
			<p>&#206;n 23 decembrie 1420 se &#238;ncheie un acord &#238;ntre Adunarea Districtului &#354;&#259;rii B&#226;rsei &#351;i Breasla Bl&#259;narilor privind construirea Casei Sfatului. &#206;n acest document se men&#355;ioneaz&#259; c&#259; reprezentan&#355;ii Breslei Bl&#259;narilor bra&#351;oveni au &#238;ng&#259;duit celor nou&#259; comune ale "Provinciei &#354;ara B&#226;rsei" s&#259;-&#351;i construiasc&#259; deasupra bol&#355;ii de v&#226;nzare a breslei o camer&#259; pentru "acordarea drept&#259;&#355;ii" &#351;i pentru &#351;edin&#355;ele magistratului. Totu&#351;i, din cauza invaziei turce&#351;ti din 1421, a distrugerii &#238;n mare parte a ora&#351;ului, precum &#351;i a arest&#259;rii magistratului ora&#351;ului, acest proiect va fi am&#226;nat.</p>
			<p>Cl&#259;direa s-a transformat &#238;n Prim&#259;rie pe m&#259;sur&#259; ce ora&#351;ul s-a dezvoltat. Astfel, urm&#259;toarea men&#355;iune despre Casa Sfatului din Bra&#351;ov apare &#238;n 1503, ea fiind men&#355;ionat&#259; sub numele de "Praetorium".</p>
		</div>
		<div class = "col-lg-5">
			<img src = "./pics/socio-culturale/socio-culturale01.jpg"/ class = "pull-right img-responsive img-thumbnail"> 
		</div>
	</div>
	
	<h1> </h1>
		
	<p>Construc&#355;ia a cunoscut de-a lungul anilor multe modific&#259;ri, multe dintre ele fiind datorate distrugerilor provocate de evenimente naturale.</p>
    <img src = "./pics/socio-culturale/socio-culturale02.jpg"/ class = "img-responsive img-thumbnail pull-left gap-right"> 
    <p>Situat &#238;n col&#355;ul de sud-vest al cet&#259;&#355;ii Bra&#351;ov, Bastionul &#354;es&#259;torilor, ocup&#259; o suprafa&#355;&#259; de 1.616 mp. Zidurile sale au o grosime cuprins&#259; &#238;ntre 4 m la baz&#259; &#351;i 1 m la cel de-al patrulea nivel al construc&#355;iei. Construit de c&#259;tre breasla &#355;es&#259;torilor, pe patru nivele, cu goluri de tragere, guri de p&#259;cur&#259; &#351;i cu dou&#259; turnuri de straj&#259;, bastionul are o arhitectur&#259; unic&#259; &#238;n sud-estul Europei. Fiind cru&#355;at de marele incendiu de la 1689, se p&#259;streaz&#259; &#238;n forma sa original&#259;. Cele dint&#226;i lucr&#259;ri de construc&#355;ie au avut loc &#238;ntre 1421 &#351;i 1436, fiind ridicate primele dou&#259; nivele. &#206;n anul1522 a fost atestat documentar. &#206;ntre 1570 &#351;i 1573 a fost ridicat cel de-al treilea etaj, iar &#238;ntre 1750 &#351;i 1910 au fost executate importante lucr&#259;ri de restaurare, dup&#259; ce bastionul se pr&#259;bu&#351;ise par&#355;ial &#238;n 1701. &#206;n 1908, dup&#259; ce a slujit mult timp numai ca depozit, bastionul a c&#259;p&#259;tat cl&#259;direa adiacent&#259; (sediul breslei), &#351;i, din ce &#238;n ce mai mult, este folosit pentru petreceri &#351;i mai ales concerte de oper&#259;, datorit&#259; extraordinarelor calit&#259;&#355;i acustice de care d&#259; dovad&#259;. &#206;n 1950, &#238;n interiorul bastionului s-a amenajat Muzeul &#354;&#259;rii B&#226;rsei, &#238;n care este expus&#259; macheta vechii cet&#259;&#355;i a Bra&#351;ovului &#351;i a &#350;cheiului a&#351;a cum ar&#259;ta la sf&#226;r&#351;itul secolului al XVII-lea, precum &#351;i arme &#351;i produse ale breslei &#355;es&#259;torilor.</p>
    
	<h1> </h1>
		
	<div class = "row">
		<img src = "./pics/socio-culturale/socio-culturale03.jpg"/ class = "img-responsive img-thumbnail pull-left gap-right"> 
		<p>Prima &#351;coal&#259; rom&#226;easc&#259; din Bra&#351;ov (1760)</p>
	</div>
	
	<h1> </h1>
	
	<div class = "row">
    <img src = "./pics/socio-culturale/socio-culturale04.jpg"/ class = "img-responsive img-thumbnail pull-left gap-right"> 
    <p>Muzeul "Prima &#350;coal&#259; Rom&#226;neasc&#259;" din Bra&#351;ov</p>
	</div>
    <p>Prima &#351;coal&#259; rom&#226;neasc&#259; din Bra&#351;ov se afl&#259; &#238;n interiorul cur&#355;ii Bisericii Sf&#226;ntul Nicolae din cartierul istoric &#350;cheii Bra&#351;ovului. Primele cursuri &#238;n limba rom&#226;n&#259; au avut loc aici &#238;n 1583. Actuala cl&#259;dire dateaz&#259; din anul 1760, fiind declarat&#259; monument istoric .&#206;n prezent edificiul ad&#259;poste&#351;te "Muzeul Prima &#350;coal&#259; Rom&#226;neasc&#259;", sub conducerea filologului Vasile Oltean.</p>
    
    
    <h2 align = "center"> Populatia Bra&#351;ovului </h2> 
    <p>Bra&#351;ov (&#238;n german&#259; Kronstadt, &#238;n maghiar&#259; Brasso, &#238;n latin&#259; Corona; de asemenea pe h&#259;r&#355;ile vechi trecut Cronstadt, Brastovia sau Brasov, &#238;n dialectul s&#259;sesc Kruhnen, Krunen, Kr&#238;nen) este re&#351;edin&#355;a &#351;i cel mai mare municipiu al jude&#355;ului Bra&#351;ov, Rom&#226;nia. Potrivit recens&#259;m&#226;ntului din 2011, are o popula&#355;ie de 253.200 locuitori,[2]fiind unul dintre cele mai mari ora&#351;e din &#355;ar&#259; (totu&#351;i &#238;n sc&#259;dere &#238;n ultimele dou&#259; decenii din cauza exodului sa&#351;ilor&#351;i a reducerii activit&#259;&#355;ii industriale). Sta&#355;iunea de iarn&#259; Poiana Bra&#351;ov se afl&#259; la 12 km distan&#355;&#259; de centrul municipiului, dispun&#226;nd de o infrastructur&#259; dezvoltat&#259; pentru practicarea sporturilor de iarn&#259;. Patron al ora&#351;ului este considerat&#259; a fi Fecioara Maria. Statuia acesteia se afl&#259; pe unul dintre contraforturile Bisericii Negre, &#238;ndreptat spre Casa Sfatului, av&#226;nd stema Bra&#351;ovului sculptat&#259; dedesubt &#238;n relief.</p>
    
    <p>Bra&#351;ovul este cunoscut &#351;i datorit&#259; Festivalului Interna&#355;ional "Cerbul de Aur", ce se &#355;inea aproape &#238;n fiecare an &#238;n centrul ora&#351;ului. Acesta a avut pe scena sa nume celebre precum Thomas Anders, Toto Cutugno, Tom Jones,Coolio, Ray Charles, Pink, Kylie Minogue sau Christina Aguilera.</p>
    
    <p>Municipiul Bra&#351;ov a reprezentat, de secole, unul dintre cele mai importante, puternice &#351;i &#238;nfloritoare ora&#351;e din zon&#259;. Datorit&#259; pozi&#355;iei geografice privilegiate &#351;i a infrastructurii sale de ast&#259;zi, el permite dezvoltarea multor activit&#259;&#355;i economice, culturale &#351;i sportive.</p>
    
    <h2 align = "center"> Arhitectura Bra&#351;ovului </h2>
	
	<h1> </h1>
		
	<div class = "row">
		<div class = "col-lg-6">
			<img style = "vertical-align: middle" src = "./pics/socio-culturale/socio-culturale05.jpg" class = "img-responsive img-thumbnail pull-left gap-right"/> 
			<span style = "">Casa Sfatului</span>
		</div>
		<div class = "col-lg-6">
			<img style = "vertical-align: middle" src = "./pics/socio-culturale/socio-culturale06.jpg" class = "img-responsive img-thumbnail pull-left gap-right"/> 
			<span>Vila Schuller</span>
		</div>
	</div>
	
	<h1> </h1>
		
	<div class = "row">
		<div class = "col-lg-6">
			<img src = "./pics/socio-culturale/socio-culturale07.jpg"/ class = "img-responsive img-thumbnail pull-left gap-right"> 
			<span>Biserica Neagr&#259;</span>
		</div>
		<div class = "col-lg-6">
			<img style = "vertical-align: middle" src = "./pics/socio-culturale/socio-culturale08.jpg"/ class = "img-responsive img-thumbnail pull-left gap-right"> 
			<span>Strada Republicii</span> 
		</div>
	</div>
	
	<h1> </h1>
		
	<div class = "row">
		<div class = "col-lg-6">
			<img style = "vertical-align: middle" src = "./pics/socio-culturale/socio-culturale09.jpg"/ class = "img-responsive img-thumbnail pull-left gap-right"> 
			<span>Biblioteca "G. Bari&#355;"</span> 
		</div>
		<div class = "col-lg-6">
			<img style = "vertical-align: middle" src = "./pics/socio-culturale/socio-culturale10.jpg"/ class = "img-responsive img-thumbnail pull-left gap-right"> 
			<span>Poarta Ecaterinei</span> 
		</div>
	</div>
	
	<h1> </h1>
	
    <div class = "row col-lg-6">
		<img style = "vertical-align: middle" src = "./pics/socio-culturale/socio-culturale11.jpg"/ class = "img-responsive img-thumbnail pull-left gap-right"> 
		<span>Complexul Olimpia</span> 
	</div>
    
	<h1> </h1>
	
    <p>Arhitectura bra&#351;ovean&#259;, este specific&#259;, fiecare cas&#259; av&#226;ndu-&#351;i pitorescul ei. Ridicarea construc&#355;iilor s-a f&#259;cut, de-a lungul timpului, conform unor principii urbanistice bine stabilite, impuse de condi&#355;iile geografice ale Bra&#351;ovului. Astfel, casele din Cetate se sprijin&#259; una pe alta, pe c&#226;nd cele din cartierele exterioare sunt mai r&#259;sfirate.</p>
    
    <p>Cu greu se mai pot &#238;nt&#226l;ni ast&#259;zi cl&#259;diri vechi, dat&#226;nd de secole. Acestea au de regul&#259; un singur etaj, pere&#355;ii exteriori sunt lipsi&#355;i de ornamente, iar ferestrele sunt mici, comparativ cu standardele actuale. Except&#226;nd Biserica Sf. Bartolomeu (secolul XIII), Biserica Neagr&#259;(secolul XIV cu excep&#355;ia boltei &#351;i a acoperi&#351;ului) &#351;i fortifica&#355;iile (secolul XV), se pot aminti Casa Jekelius, Biblioteca Honterus &#351;i Gr&#226;narul ora&#351;ului, toate dat&#226;nd din secolul XVI.</p>
    
    <p>&#206;n Cetate, construc&#355;iile au fost ridicate conform unui plan urbanistic bine stabilit, impus de condi&#355;iile geografice &#238;n care se afla ora&#351;ul. Aici, ca &#351;i &#238;n celelalte cartiere s&#259;se&#351;ti, casele "se sprijin&#259; una pe alta", fiind lipite &#238;ntre ele. Cele mai vechi case p&#259;strate p&#226;n&#259; ast&#259;zi prezint&#259; bolte cu arcuri fr&#226;nte, specifice stilului gotic, ori curbate, caracteristice perioadei de trecere c&#259;tre Rena&#351;tere. Cea mai mare parte a construc&#355;iilor din Cetate au fost afectate de marele incendiu din 21 aprilie 1689, provocat de c&#259;tre armatele austriece aflate &#238;n retragere. Dup&#259; incendiu, ornamentele fa&#355;adelor sunt realizate potrivit barocului t&#226;rziu, rococoului vienez &#351;i clasicismului. Cu toate acestea, multe dintre vechile elemente renascentiste au fost scoase din locurile lor ini&#355;iale &#351;i mutate, ori depozitate, &#238;n interiorul cl&#259;dirii. Multe astfel de ornamente, cu inscrip&#355;ii, pot fi &#238;nt&#226;lnite la Muzeul &#354;&#259;rii B&#226;rsei, aflat &#238;n Bastionul &#354;es&#259;torilor, sau &#238;n lapidariul din Biserica Neagr&#259;. De asemenea, secolul XIX a adus o serie de prefaceri ale fa&#355;adelor, precum &#351;i apari&#355;ia a noi cl&#259;diri &#238;n locul celor vechi, care erau d&#259;r&#226;mate. Predomin&#259; acum Art Nouveau-ul, neorena&#351;terea, neobarocul &#351;i plastica eclectic&#259;.</p>
    <ul>Iat&#259; c&#226;teva monumente reprezentative:
      <li>Casa Sfatului (1420 - secolul XVIII, cu schimbarea acoperi&#351;ului baroc &#238;n 1910): gotic, renascentist, baroc</li>
      <li>Biserica Neagr&#259; (1377 - 1477; secolul XVIII): gotic flamboyant, baroc</li>
      <li>Casa Negustorilor (1539 - 1545): ridicat&#259; ini&#355;ial &#238;n stil renascentist, din care se mai p&#259;streaz&#259; doar stema ora&#351;ului &#351;i blazonul familiei Hirscher. A suferit transform&#259;ri esen&#355;iale &#238;n anii 1840-1842, 1857. Aspectul ini&#355;ial se datoreaz&#259; restaur&#259;rilor din anii '60.</li>
      <li>Biserica Romano-Catolic&#259; Sfin&#355;ii Petru &#351;i Paul (1776-1782), pe locul unei biserici gotice din secolul al XIV-lea (probabil a m&#259;n&#259;stirii dominicane), reconstruit&#259; &#238;n sec. al XVIII-lea &#238;n stil baroc.</li>
      <li>Biserica Sf&#226;ntul Ioan, a c&#259l;ug&#259;rilor franciscani (secolul al XV-lea; cu transform&#259;ri la &#238;nceputul sec. al XVIII-lea): gotic, baroc</li>
      <li>Poarta Ecaterinei (1559) Poarta &#350;chei (1827): clasic &#351;i neoclasic</li>
      <li>Reduta (1893): neobaroc</li>
      <li>Sinagoga (1901): stilul spaniol, cu elemente gotice &#351;i romanice</li>
      <li>Sinagoga Ortodox&#259;</li>
      <li>Vila Kertsch</li>
      <li>Casa Baiulescu</li>
      <li>Muzeul de art&#259;</li>
    </ul>
	</div>
  </body>
</html>
