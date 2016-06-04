<?php
	require_once 'database.php';
	require_once 'sport_functions.php';
	
	$com_code = $_REQUEST['par_code'];
	$reply = $_REQUEST['text_cmt'];
	$name = $_REQUEST['username'];
	$file_id = $_REQUEST['file_id'];
	$date = date('Y-m-d H:i:s');
	$rand = generateRandomString();
	if($name){
		mysqli_query($connect, 
			"INSERT INTO `comments` 
				(`file_id`,`comment`, `com_code`, `is_child`, `par_code`, `author`, `date`) 
				VALUES ('$file_id', '$reply', '$rand', '1', '$com_code', '$name', '$date')");
		header("Location: /Brasov/PHP/sport.php");
	}
	else{
		mysqli_query($connect, 
			"INSERT INTO `comments` 
				(`file_id`,`comment`, `com_code`, `is_child`, `par_code`, `author`, `date`) 
				VALUES ('$file_id', '$reply', '$rand', '1', '$com_code', 'Vizitator', '$date')");
		header("Location: /Brasov/PHP/sport.php");
	}
?>