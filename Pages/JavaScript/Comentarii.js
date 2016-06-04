function callPHP(){
	alert("Pass");
}

$(window).load(function() {
	$('#comment_button').click(function() {
		$('#background_comment_page').fadeIn('slow');
		$('#comment_page').fadeIn('slow');
	});
	$('#background_comment_page').click(function() {
		$('#background_comment_page').fadeOut('slow');
		$('#comment_page').fadeOut('slow');
	});
	$('.replies').click(function(){
		
		
		$.ajax({
			type: 'POST',
			url: 'reply_form.php',
			success: function(){
				
			}
		});
    });
});

/*function hideChidlren() {
	
}*/
