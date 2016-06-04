<?php
	require_once 'database.php';
	require_once 'minoritati_functions.php';
?>

<!doctype html>
<html>
	<head>
		<title> Comment System </title>
		<link rel="stylesheet" href="../CSS/styles.css">
	</head>
	<body>
		<?php
			get_comments("minoritati");
		?>
	</body>
</html>