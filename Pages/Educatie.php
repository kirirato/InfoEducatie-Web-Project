<!DOCTYPE html>
<html>

	<head>
		<title> Educa&#355;ie </title>
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
			<div id = "comment_page"> <iframe src="PHP/educatie.php"> </iframe> </div>
	
	  <div id = "center" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
		<h1 align = "center">Educa&#355;ia</h1>
		<h2>Defini&#355;ia educa&#355;iei</h2>
		<p>Fenomen social fundamental de transmitere a experien&#355;ei de via&#355;&#259; a genera&#355;iilor adulte &#351;i a culturii c&#259;tre genera&#355;iile de copii &#351;i tineri, abilit&#259;rii pentru integrarea lor &#238;n societate.</p>
		<div class = "row">
		<h2 align = "center">Liceul Andrei &#350;aguna</h2>
		<img src = "./pics/educatie/educatie01.jpg"/ class = "img-responsive img-thumbnail pull-right col-lg-5">
				<p>&#206;n anul 1850, la ini&#355;iativa protopopului Ioan Popazu, &#351;i a omului politic &#351;i istoricului George Bari&#355;iu &#351;i a c&#259;rturarului Iosif Barac, c&#226;t &#351;i a locuitorilor rom&#226;ni din ora&#355;ul Bra&#355;ov, au &#238;nceput cursurile Gimnaziului Mic Rom&#226;n de Religie Ortodox&#259; Oriental&#259;, &#238;n Casa B&#259;canului. Ini&#355;iativa a mai fost sprijinit&#259; material de c&#259;tre Biserica Sf. Nicolae &#351;i Biserica Sf. Adormire din Cetate.</p>
				<p>De s&#259;rb&#259;toarea Sf. Sofii, la data de 17 septembrie din anul 1851, episcopul Andrei &#350;aguna a dezvoltat cl&#259;direa &#355;colii, &#238;mpreun&#259; cu alte persoane, urm&#226;nd ca, din anul 1922, gimnaziul s&#259; poarte numele ctitorului s&#259;u.</p>
				<p>&#206;n 1854, gimnaziul era, din punct de vedere cronologic, al treilea din Transilvania, respectiv al &#355;aselea din &#355;inuturile rom&#226;ne&#355;ti. Apoi, &#238;n 1996, liceul Andrei &#350;aguna a devenit Colegiu Na&#355;ional.</p>
			</div>
		<div class = "row">
		<h2 align = "center">Liceul Ioan Me&#351;ot&#259;</h2>
		<img src = "./pics/educatie/educatie03.jpg"/ class = "img-responsive img-thumbnail pull-right col-lg-3">
				<p>&#206;n toamna anului 1869, Eforia &#350;coalelor Centrale Romane Greco-Ortodoxe din Bra&#355;ov a hot&#259;r&#226;t deschiderea unei &#355;coli reale inferioare &#351;i a unei &#355;coli comerciale superioare.</p>
				<p>Ideea mai veche de deschidere a acestei &#355;coli i-a apar&#355;inut lui George Bari&#355;iu, iar &#238;n 1854 Ioan Popazu (viitor episcop de Caransebe&#355;) a f&#259;cut planul &#355;colii reale.</p>
				<p>&#206;n 1869, doctorul Ioan Me&#355;ot&#259; a devenit director la &#350;coalele Centrale Romane &#351;i a ocupat acest&#259; func&#355;ie p&#226;n&#259; &#238;n 1878, c&#226;nd a murit prematur. Lui i se datoreaz&#259; a&#355;ezarea definitiv&#259; a &#238;nv&#259;&#355;&#259;mantului rom&#226;nesc bra&#355;ovean, inclusiv a celui real, pe calea modernit&#259;&#355;ii. &#206;n 1919, a fost construit un liceul real de stat, care a primit denumirea de Liceul Dr. Ioan Me&#355;ot&#259;, &#238;n onoarea sa.</p>
		</div>
		<div class  = "row">
		<h2 align = "center">Liceul Grigore Moisil</h2>
		<p>Colegiul Na&#355;ional de Informatic&#259; "Grigore Moisil" este un liceu teoretic, cu profil real (matematic&#259;-informatic&#259;), din Bra&#355;ov, care poart&#259; numele academicianului Grigore Moisil, "fondatorul" informaticii &#238;n Rom&#226;nia.</p>
		<p>Acest&#259; institu&#355;ie de &#238;nv&#259;&#355;&#259;m&#226;nt are o vechime de 71 de ani. </p></div>
		<ul>
			<li><h4>1938-1960</h4></li>
			<p>Istoria &#238;ncepe &#238;n anul 1938, c&#226;nd s-a ridicat primul corp de cl&#259;dire, ce a g&#259;zduit, pe rand, scolile primare 3 si 11, apoi scolile medii 2, 6 si 4.</p>
			<li><h4>1960-1972</h4></li>
			<p>In 1960, se construieste al doilea corp de cladire, iar denumirea devine "Liceul de Cultur&#259; General&#259; nr. 4".</p>
			<li><h4>1972-2002</h4></li>
			<p>In 1972 se introduce un nou profil, de ultim&#259; or&#259; &#238;n acea perioad&#259;, iar denumirea s&#259; se schimbe &#238;n "Liceul pentru Prelucrarea Automat&#259; a Datelor". Din 1973, institu&#355;ia se va numi "Liceul de Informatic&#259;". De&#351;i s-a p&#259;strat profilul principal - informatica - &#351;i cel de electronic&#259; pentru tehnic&#259; de calcul, &#355;coala &#238;&#355;i va schimba denumirea, &#238;n 1977, &#238;n "Liceul de Matematic&#259; - Fizic&#259; nr. 1". Din 1990 p&#226;n&#259; &#238;n 2002, a adoptat &#351;i p&#259;strat titulatura "Liceul de Informatic&#259;".</p>
		</ul>
		<h2 align = "center">Universitatea Transilvania</h2>
		<p>Universitatea "Transilvania" (UTBv) este o institu&#355;ie de inv&#259;&#355;&#259;m&#226;nt superior de stat din Bra&#355;ov, Rom&#226;nia, care cuprinde optsprezece facult&#259;&#355;i, un num&#259;r de 18.528 de studen&#355;i &#351;i 764 de cadre didactice. Universitatea ofer&#259; 100 de domenii de licen&#355;&#259; la zi, la distan&#355;&#259; &#351;i f&#259;r&#259; frecven&#355;&#259;, precum &#351;i 69 de programe de masterat (aprofundare sau cercetare &#355;tiin&#355;ific&#259;) &#238;n acelea&#351;i tipuri de regim. Studiile de doctorat exist&#259; &#238;n prezent &#238;n doar 14 din aceste domenii.
		&#206;n anul 1940 se pun bazele &#238;nv&#259;&#355;&#259;m&#226;ntului superior &#238;n Bra&#355;ov, &#238;n cadrul Academiei de Comer&#355; &#351;i Studii Industriale. &#206;n 1948 a fost &#238;nfiin&#355;at Institutul de Silvicultur&#259;, iar &#238n; 1949, Institutul de Mecanic&#259;. &#206;n 1953 Institutul de Silvicultur&#259; a devenit Institutul Forestier, iar &#238;n urma fuzion&#259;rii dintre acesta &#351;i Institutul de Mecanic&#259;, a luat fiin&#355;&#259; Institutul Politehnic din Bra&#355;ov. &#206;n cadrul acestui institut &#238;n anul 1959 ia fiin&#355;&#259; sec&#355;ia de Industrializare a Lemnului, iar &#238;n 1964, sec&#355;ia de Tehnologii de Fabrica&#355;ie. &#206;n 1960 se &#238;nfiin&#355;eaz&#259; Institutul Pedagogic (Matematic&#259;, Fizic&#259; - Chimie, Biologie), iar ulterior &#238;n anul 1969 Catedra de Muzic&#259;.</p>
		</div>
	</body>
</html>
