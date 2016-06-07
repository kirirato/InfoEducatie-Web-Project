<?php
	// Functia care se ocupa de afisarea comentariilor pe pagina si apelarea tuturor functiilor de postari noi de comentarii.
	// Aceasta functie are ca parametru o variabila care inregistreaza pagina pe care se afla, pentru a introduce comentarii noi pe pagina respectiva si pentru a afisa comentariile de pe pagina respectiva
	function get_comments($file_id) {
		
		// Includem 'database.php' pentru a ne conecta la serverul MySQL
		include 'database.php';
		// Inregistram datele relevante din tabelul 'comments', pentru a le putea afisa.
		$result = mysqli_query($connect, 
			"SELECT * FROM `comments` 
				WHERE `file_id`='$file_id' 
				AND `is_child`=FALSE 
					ORDER BY `date` DESC"
		);
		// Folosim o variabila pentru a inregistra cate comentarii se afla pe pagina.
		$row_cnt = mysqli_num_rows($result);
		
		echo '<h1>Comentarii ('.$row_cnt.')</h1>';
		echo '<div class="comment">';
		// Apelam functia asta pentru ca utilizatorul sa poata sa adauge comentarii noi
			new_comment($file_id);
		echo '</div>';
		
		// Folosim un foreach pentru a parcurge toate itemele din tabel, pentru a afisa comentariile respective
		foreach($result as $item) {
			$date = new dateTime($item['date']);
			$date = date_format($date, 'M j - Y | H:i:s');
			$auth = $item['author'];
			$par_code = $item['com_code'];
			// Inregistram intr-o variabila toate datele copiilor care il au ca parinte pe comentariul afisat curent.
			$chi_result = mysqli_query($connect, 
				"SELECT * FROM `comments` 
					WHERE `par_code`='$par_code' 
					AND `is_child`=TRUE"
			);
			// Variabila pentru a tine cont cate raspunsuri are un comentariu curent.
			$chi_cnt = mysqli_num_rows($chi_result);
			
			// Afisam pe ecran comentariile
			echo '<div class="comment" name="'.$item['com_code'].'">'
				.'<span class="author">'.$auth.'</span><br />'
				.$item['comment'].'<br />'
				.'<span class="date">Postat: '.$date.'</span><br />';
				// Daca comentariul curent nu are nici un raspuns, atunci afisam ca nu are nici un raspuns si apelam functia care ii permite utilizatorului sa adauge un raspuns nou acestui comentariu.
				if($chi_cnt == 0)
				{
					echo '<span class="no_reply">Nici un r&#259;spuns</span>';
					add_comment($item['author'], $item['com_code'], $file_id);
				}
				// Altfel, afisam toate raspunsurile comentariilor si apelam functia care ii permite utilizatorului sa scrie un raspuns nou
				else {
					echo '<span class="replies">'.$chi_cnt.' r&#259;spunsuri</span>';
					add_comment($item['author'], $item['com_code'], $file_id);
					echo '<div name="children" id="children">';
					foreach($chi_result as $com) {
						$chi_date = new dateTime($com['date']);
						$chi_date = date_format($chi_date, 'M j, Y | H:i:s');
						echo '<div class="child" name="'.$com['com_code'].'">'
								.'<span class="author">'.$com['author'].'</span><br />'
								.$com['comment'].'<br />'
								.'<span class="date">Postat: '.$chi_date.'</span><br />'
							.'</div>';
					}
					echo '</div>';
				}
			echo '</div>';
		}
		mysqli_close($connect);
	}
	
	// Functia care genereaza formularul de a raspunde unui anumit utilizator.
	// Aceasta functie apeleaza fisierul reply.php, care se ocupa cu inregistrarea in tabel a datelor introduse de utilizator.
	function add_comment($reply, $code, $file_id) {
		echo '<form action="educatie_reply.php" method="post" enctpye="" name="new_comment">'
			.'<input type="hidden" name="par_code" value="'.$code.'" />'
			.'<input type="hidden" name="file_id" value="'.$file_id.'" />'
			.'<textarea class="text_cmt" name="text_cmt" placeholder="R&#259;spunde la '.$reply.'"></textarea><br />'
			.'<input type="submit" value="R&#259;spunde" />'
		.'</form>';
	}
	
	// Functia care genereaza formularul de postare a unui nou comentariu
	// Acesta apeleaza fisierul new.php, care se ocupa cu inregistrarea in tabel a datelor introduse de utilizator.
	function new_comment($file_id) {
		echo '<form action="educatie_new.php" method="post" enctpye="" name="new_comment">'
			.'<input type="hidden" name="file_id" value="'.$file_id.'" />'
			.'<textarea class="text_cmt" name="text_cmt" placeholder="Posteaz&#259; un comentariu nou"></textarea><br />'
			.'<input type="submit" value="Posteaz&#259;" />'
		.'</form>';
	}
	
	// O functie care genereaza un cod special la intamplare pentru a fi folosit ca si codul comentariilor
	function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$characterLength = strlen($characters);
		$randomString = '';
		for($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $characterLength - 1)];
		}
		return $randomString;
	}
?>