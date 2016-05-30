<?php
	require_once 'database.php';
	require_once 'functions.php';
?>

<!doctype html>
<html>
	<head>
		<title> Comment System </title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
		<?php
			get_comments($_SERVER['REQUEST_URI']);
		?>
	</body>
</html>