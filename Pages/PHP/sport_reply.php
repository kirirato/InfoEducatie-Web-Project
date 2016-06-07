<?php
	require_once 'database.php';
	require_once 'sport_functions.php';
	
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
		if (!$result || mysqli_num_rows($result) < 1);
		else {
			// Daca a gasit date valide, asta inseamna ca userul este logat si ii pastram username-ul ca sa il introducem in tabelul 'comments'
			$name = $username;
		}
	}
	
	// Obtine variablilele pe care sa le introduca in tabelul 'comments' de la formularul care l-a apelat
	$com_code = $_REQUEST['par_code'];
	$reply = $_REQUEST['text_cmt'];
	$file_id = $_REQUEST['file_id'];
	$date = date('Y-m-d H:i:s');
	// Genereaza un sir ca sa il foloseasca ca si codul comentariului
	$rand = generateRandomString();
	
	// Daca exista numele user-ului, atunci postam comentariul folosind numele lui
	if($name){
		mysqli_query($connect, 
			"INSERT INTO `comments` 
				(`file_id`,`comment`, `com_code`, `is_child`, `par_code`, `author`, `date`) 
				VALUES ('$file_id', '$reply', '$rand', '1', '$com_code', '$name', '$date')");
		header("Location: /Brasov/PHP/sport.php");
	}
	// Daca userul nu este conectat, atunci postam comentariul sub numele de 'Vizitator'
	else{
		mysqli_query($connect, 
			"INSERT INTO `comments` 
				(`file_id`,`comment`, `com_code`, `is_child`, `par_code`, `author`, `date`) 
				VALUES ('$file_id', '$reply', '$rand', '1', '$com_code', 'Vizitator', '$date')");
		header("Location: /Brasov/PHP/sport.php");
	}
?>