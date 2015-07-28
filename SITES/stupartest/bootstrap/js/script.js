$(function() {
	    $("#map").googleMap();
	$('#more_lien').on('click', function() {
		if ($('#hidden_fil').css('display') == 'none') {
			$('#hidden_fil').css('display', 'block');
			$('#more_lien').text('Moins de filtres');
		}
		else if ($('#hidden_fil').css('display') == 'block') {
			$('#hidden_fil').css('display', 'none');
			$('#more_lien').text('Plus de filtres');
		}
	});
});