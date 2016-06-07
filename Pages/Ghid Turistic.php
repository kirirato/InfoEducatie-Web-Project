<!DOCTYPE html>
<html>
	<head>
		<title> Ghid Turistic al Bra&#351;ovului </title>
		<link type="text/css" rel="stylesheet" href="CSS/Ghid Turistic.css"/>
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
			<div id = "comment_page"> <iframe src="PHP/ghid_turistic.php"> </iframe> </div>
	
		<div id="center" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
			<h1 align="center"> Ghid Turistic al Bra&#351;ovului </h1>
			<div id="content">
				<p> Bra&#351;ov este un ora&#351; din centrul Rom&#226;niei. Este foarte interesant at&#226;t din punct de vedere istoric, c&#226;t &#351;i al obiectivelor turistice diversificate. </p>
				<p> Orice vizit&#259; &#238;ncepe cu centrul istoric. Dup&#259; o plimbare pe Strada Republicii de&#45;a lungul c&#259;reia admiri arhitectura frumoaselor cl&#259;diri, vom ajunge &#238;n Pia&#355;a Sfatului, vestit&#259; &#351;i pentru g&#259;zduirea festivalului Cerbul de Aur. Toate cl&#259;dirile din Pia&#355;a sfatului dovedesc prin arhitectura lor originea germanic&#259; a acestui frumos ora&#351;. &#206;n Pia&#355;a Sfatului ne putem a&#351;eza vara la o teras&#259; &#351;i astfel s&#259; ne bucur&#259;m de toat&#259; frumuse&#355;ea ce ne &#238;nconjoar&#259;. </p>
				<p> Printre obicectivele turistice avem o list&#259; definitivat&#259;, dupa cum se poate observa: </p>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="piata_sfatului_txt">
					<p> <b>Pia&#355;a Sfatului</b> g&#259;zduie&#351;te &#238;n func&#355;ie de sezon diverse manifest&#259;ri, cum ar fi festivalul "Cerbul de aur",  "Zilele prietenei", &#351;i multe altele. </p>
					<p> &#206;n mijlocul pie&#355;ii se afl&#259; <b>Casa Sfatului</b> care g&#259;zduie&#351;te Muzeul Jude&#355;ean de Istorie. Tot &#238;n Pia&#355;a Sfatului se afl&#259; &#351;i Biserica Adormirea Maicii Domnului, Muzeul Mure&#351;enilor (Casa Mure&#351;enilor). </p>
				</div>
				<div id="piata_sfatului_img" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
					<p><b> Pia&#355;a Sfatului </b></p>
					<img src="pics/ghid/piata_sfatului.jpg" class="fotografie img-responsive"/>
					<img src = "./pics/turism/turism03.jpg" class = "fotografie img-responsive"/>
				</div>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="biserica_neagra_txt">
					<p> Principalul simbol al Bra&#351;ovului, <b>Biserica Neagr&#259;</b> este la c&#226;teva minute plimbare din Pia&#355;a Sfatului. Aceasta este biserica patriarhal&#259; a Bisericii Evanghelice din Rom&#226;nia &#351;i este unul din cele mai reprezentative monumente de arhitectur&#259; gotic&#259; din Rom&#226;nia. A fost par&#355;ial distrus&#259; &#238;n marele incendiu din 1689  &#351;i astfel &#351;i&#45;a dob&#226;ndit numele actual. </p>
				</div>
				<div id="biserica_neagra_img" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  align="center">
					<p><b> Biserica Neagr&#259; </b></p>
					<img src="pics/ghid/bis_neagra.jpg" class="fotografie img-responsive col-lg-6 col-md-12 col-sm-12 col-xs-12"/>
					<img src = "./pics/turism/turism05.jpg"/ class = "fotografie img-responsive col-lg-6 col-md-12 col-sm-12 col-xs-12">
				</div>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="strada_sforii_txt">
					<p> Ce zici de o strad&#259; pe care &#238;ncape doar un om sau doi deoadat&#259;? &#206;ntre str&#259;zile Cerbului &#351;i Poarta Scheii vei descoperi o strad&#259; de 83 de metri lungime &#351;i cu o l&#259;&#355;ime de doar 1-1,4 metri, numit&#259; <b>Strada Sforii</b>. Strada Sforii a fost de fapt un simplu coridor care &#238;i ajuta pe pompieri &#238;n trecut. </p>
				</div>
				<div id="strada_sforii_img" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  align="center">
					<p><b> Strada Sforii </b></p>
					<img src="./pics/turism/turism08.jpg" class="fotografie img-responsive"/>
				</div>
				
				<div class="col-lg-12 col-md-4" id="tatarilor_txt">
					<p> Dup&#259; ce trecem prin Strada Sforii, la 5 minute de plimbare putem vizita <b>Bastionul &#355;es&#259;torilor</b>. </p>
				</div>
				<div id="tesatorilor_img" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  align="center">
					<p><b> Bastionul &#355;es&#259;torilor </b></p>
					<img src="pics/ghid/1159995.jpg" class="fotografie img-responsive"/>
				</div>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="schei_txt">
					<p> De la Bastionul &#355;es&#259;torilor vom cobor&#226; pe Strada Co&#351;buc p&#226;n&#259; pe Strada Poarta &#351;chei. &#206;n cap&#259;tul acestei str&#259;zi se afl&#259; <b>Poarta &#350;chei</b> construit&#259; &#238;n 1827. </p>
				</div>
				<div id="schei_img" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  align="center">
					<p><b> Poarta &#350;chei </b></p>
					<img src="pics/ghid/poarta-schei_1052.jpg" class="fotografie img-responsive col-lg-6 col-md-12 col-sm-12 col-xs-12"/>
					<img src = "./pics/turism/turism09.jpg"/ class = "fotografie img-responsive col-lg-6 col-md-12 col-sm-12 col-xs-12"> 	
				</div>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="ecaterinei_txt">
					<p> Continu&#259;m plimbarea &#351;i descoperim frumoasa Poart&#259; de Sud sau <b>Poarta Ecaterinei</b> construit&#259; &#238;n secolul al XVI&#45;lea. Aceasta a fost construit&#259; pentru accesul &#238;n cetatea medieval&#259;. Din construc&#355;ia original&#259; se p&#259;streaz&#259; azi doar turnul exterior ridicat &#238;n 1559. Pe frontispiciul acestuia vom putea admira stema ora&#351;ului. </p>
				</div>
				<div id="ecaterinei_img" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  align="center">
					<p><b> Poarta Ecaterinei </b></p>
					<img src="pics/ghid/poarta_ecaterinei.jpg" class="fotografie img-responsive"/>
				</div>
				
				<p> <b>Turnul Negru</b> ne ofer&#259; oportunitatea unor poze superbe cu Bra&#351;ovul. Acest turn este unul din cele 4 turnuri de observa&#355;ie ale Cet&#259;&#355;ii Bra&#351;ovului construit ca o fortifica&#355;ie independent&#259;. Numele acestui mic turn se trage de la un tr&#259;snet care l&#45;a &#238;nnegrit. </p>
				<p> Urcarea p&#226;n&#259; la el este u&#351;oar&#259;, o facem in maxim 5 minute &#351;i ne ofer&#259; &#351;ansa s&#259; facem poze cu panorama Bra&#351;ovului. </p>
				<p> De la <b>Turnul Negru</b> putem urca &#238;n continuare la Belvedere &#351;i apoi la Turnul Alb. </p>
				<div id="turnul_negru_img" class="col-lg-6 col-md-12 col-sm-12 col-xs-12" align="center">
					<p><b> Turnul Negru </b></p>
					<img src="./pics/turism/turism06.jpg" class="fotografie img-responsive"/>
				</div>
				<div id="turnul_alb_img" class="col-lg-6 col-md-12 col-sm-12 col-xs-12" align="center">
					<p><b> Turnul Alb </b></p>
					<img src="pics/ghid/3635826949_90b8f69b6b_o.jpg" class="fotografie img-responsive"/>
				</div>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="dupa_ziduri_txt">
					<p> Dup&#259; ce cobor&#226;m de la Turnul Alb, putem  s&#259; facem o plimbare pe <b>Strada dup&#259; Ziduri</b> &#351;i astfel s&#259; ajungem pe Bulevardul Eroilor. Strada dup&#259; Ziduri este de&#45;a lungul unei laturi fortificate a Cet&#259;&#355;ii Bra&#351;ovului. </p>
				</div>
				<div id="dupa_ziduri_img" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
					<p><b> Strada dup&#259; Ziduri </b></p>
					<img src="pics/ghid/strada_dupa_ziduri.jpg" class="fotografie img-responsive"/>
				</div>
				
				<p> &#206;n concluzie, acestea sunt doar c&#226;teva dintre exemplele de obiective turistice care pot fi vizitate. </p>
				<p> P&#226;n&#259; la urm&#259; tot ora&#351;ul merit&#259; vizitat pentru c&#259; orice lucru din Bra&#351;ov este un lcuru frumos de care  s&#259; ne aducem aminte. </p>
			</div>
		</div>
	</body>
</html>