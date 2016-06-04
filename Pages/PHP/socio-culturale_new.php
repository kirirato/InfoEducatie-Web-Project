<?php
	require_once 'database.php';
	require_once 'socio-culturale_functions.php';
	
	$name = $_REQUEST['username'];
	$reply = $_REQUEST['text_cmt'];
	$file_id = $_REQUEST['file_id'];
	$date = date('Y-m-d H:i:s');
	$rand = generateRandomString();
	if($name){
		mysqli_query($connect, 
			"INSERT INTO `comments` 
				(`file_id`,`comment`, `com_code`, `is_child`, `par_code`, `author`, `date`) 
				VALUES ('$file_id', '$reply', '$rand', '', '', '$name', '$date')");
		header("Location: /Brasov/PHP/socio-culturale.php");
	}
	else{
		mysqli_query($connect, 
		"INSERT INTO `comments` 
			(`file_id`, `comment`, `com_code`, `is_child`, `par_code`, `author`,`date`) 
			VALUES ('$file_id', '$reply', '$rand', '', '', 'Vizitator', '$date')");
		header("Location: /Brasov/PHP/socio-culturale.php");
	}
?>