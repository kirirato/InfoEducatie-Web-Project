<?php
	require_once 'database.php';
	require_once 'traditii_functions.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../CSS/styles.css">
	</head>
	<body>
		<?php
			// Acesta este siteul care afisaza pagina de comentarii
			// Aceasta pagina apeleaza functia get_comments din fisierul functions.php, care se ocupa de aproape toata logica din spatele comentariilor
		
			get_comments("traditii");
		?>
	</body>
</html>