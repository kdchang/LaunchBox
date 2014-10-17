// Shorthand for $( document ).ready()
$(function() {
	var url = window.location.pathname.substr(1);
	// Will only work if string in href matches with location
	if(url !== 'index.php') {
		$('.active').removeClass('active');
	}
	$('.header-nav a[href="'+ url +'"]').parent().addClass('active');
});