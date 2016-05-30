<?php
	require_once 'database.php';
	require_once 'functions.php';
	
	$com_code = $_REQUEST['par_code'];
	$reply = $_REQUEST['text_cmt'];
	$name = $_REQUEST['username'];
	$file_id = $_REQUEST['file_id'];
	$date = date('Y-m-d H:i:s');
	$rand = generateRandomString();
		#checkString($rand);
	if($name){
		mysqli_query($connect, 
			"INSERT INTO `comments` 
				(`file_id`,`comment`, `com_code`, `is_child`, `par_code`, `author`, `date`) 
				VALUES ('$file_id', '$reply', '$rand', '1', '$com_code', '$name', '$date')");
		header("Location: /CommentSystem");
	}
	else{
		mysqli_query($connect, 
			"INSERT INTO `comments` 
				(`file_id`,`comment`, `com_code`, `is_child`, `par_code`, `author`, `date`) 
				VALUES ('$file_id', '$reply', '$rand', '1', '$com_code', 'Guest', '$date')");
		header("Location: /CommentSystem");
	}
?>