<?php
	require_once 'database.php';

	session_start();
	require_once("dbconnect.php");
	//  verifica daca exista date in sesiune
	if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
 
		// preia datele din sesiune
		$username = $_SESSION['username'];
		$password = $_SESSION['password'];
	 
		// formeaza si executa query-ul de select din baza de date
		$query = "SELECT * FROM `users` WHERE `Username` = '".$username."' AND `Password` = '".$password."'";
		$result = mysqli_query($connect, $query) or die ( "Error : ". mysqli_error($connect) );
		
		// verifica daca interogarea MySQL a gasit date valide
		if (!$result || mysqli_num_rows($result) < 1){
			$_SESSION['username'] = "";
			$_SESSION['password'] = "";
			}
		else {
			$_SESSION['username'] = "";
			$_SESSION['password'] = "";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Refresh" content="2; url=../Acasa.php">
		<link type="text/css" rel="stylesheet" href="../CSS/account.css"/>
	</head>
	<body>
		<h1 align="center" class="message">Delogarea a fost efectuata cu succes.</h1>
	</body>
</html>