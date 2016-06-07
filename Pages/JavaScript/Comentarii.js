$(window).load(function() {
	$('#comment_button').click(function() {
		$('#background_comment_page').fadeIn('slow');
		$('#comment_page').fadeIn('slow');
	});
	$('#background_comment_page').click(function() {
		$('#background_comment_page').fadeOut('slow');
		$('#comment_page').fadeOut('slow');
	});
});