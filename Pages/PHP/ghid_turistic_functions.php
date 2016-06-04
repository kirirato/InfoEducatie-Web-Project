<html><body>
	<script type="text/javascript" src="../JavaScript/jquery.min.js"></script>
	<script type="text/javascript" src="../JavaScript/Comentarii.js"></script>
	<!--<script type="text/javascript">
		/*$(window).load(function() {
			$(".replies").click(function(){
				alert("It should work");
			});
		});*/
		function callPHP(){
			alert("It Works");
		}
	</script>-->
<?php
	function get_comments($file_id) {
		include 'database.php';
		$result = mysqli_query($connect, 
			"SELECT * FROM `comments` 
				WHERE `file_id`='$file_id' 
				AND `is_child`=FALSE 
					ORDER BY `date` DESC"
		);
		$row_cnt = mysqli_num_rows($result);
		
		echo '<h1>Comentarii ('.$row_cnt.')</h1>';
		echo '<div class="comment">';
			new_comment($file_id);
		echo '</div>';
		
		foreach($result as $item) {
			$date = new dateTime($item['date']);
			$date = date_format($date, 'M j - Y | H:i:s');
			$auth = $item['author'];
			$par_code = $item['com_code'];
			$chi_result = mysqli_query($connect, 
				"SELECT * FROM `comments` 
					WHERE `par_code`='$par_code' 
					AND `is_child`=TRUE"
			);
			$chi_cnt = mysqli_num_rows($chi_result);
			
			echo '<div class="comment" name="'.$item['com_code'].'">'
				.'<span class="author">'.$auth.'</span><br />'
				.$item['comment'].'<br />'
				.'<span class="date">Postat: '.$date.'</span><br />';
				if($chi_cnt == 0)
				{
					$reply_author = $item['author'];
					$reply_com_code = $item['com_code'];
					echo '<span class="no_reply">Nici un r&#259;spuns</span>'
						.'<span onclick="callPHP()" class="replies">&emsp;R&#259;spunde</span>';
				}
				else {
					echo '<span class="replies"> [ - ] '.$chi_cnt.' r&#259;spunsuri</span>'
						.'<span class="replies">&emsp;R&#259;spunde</span>';
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
				//add_comment($item['author'], $item['com_code'], $file_id);
				if(isset($_POST['action']) === 'works') {
					echo "It works";
				}
			echo '</div>';
		}
		mysqli_close($connect);
	}
	
	function add_comment($reply, $code, $file_id) {
		echo '<form action="ghid_turistic_reply.php" method="post" enctpye="" name="new_comment">'
			.'<input type="hidden" name="par_code" value="'.$code.'" />'
			.'<input type="hidden" name="file_id" value="'.$file_id.'" />'
			.'<textarea class="text_cmt" name="username" placeholder="Nume"></textarea><br />'
			.'<textarea class="text_cmt" name="text_cmt" placeholder="R&#259;spunde la '.$reply.'"></textarea><br />'
			.'<input type="submit" value="R&#259;spunde" />'
		.'</form>';
	}
	
	function new_comment($file_id) {
		echo '<form action="ghid_turistic_new.php" method="post" enctpye="" name="new_comment">'
			.'<input type="hidden" name="file_id" value="'.$file_id.'" />'
			.'<textarea class="text_cmt" name="username" placeholder="Nume"></textarea><br />'
			.'<textarea class="text_cmt" name="text_cmt" placeholder="Posteaz&#259; un comentariu nou"></textarea><br />'
			.'<input type="submit" value="Posteaz&#259;" />'
		.'</form>';
	}
	
	function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$characterLength = strlen($characters);
		$randomString = '';
		for($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $characterLength - 1)];
		}
		return $randomString;
	}
	
	function checkString($com_code) {
		include 'database.php';
		$rand = generateRandomString();
		$result = mysqli_query($connect, 
			"SELECT * FROM `comments` 
				WHERE `com_code`='$com_code'"
		);
		$row_cnt = mysqli_num_rows($result);
		
		if($row_cnt != 0)
			return $rand;
		else
			checkString($rand);
	}
?>
</body></html>