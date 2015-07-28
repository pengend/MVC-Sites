$(function() {
    $("#map").googleMap();
    /* pour les checkbox */
    $(".input-group .type_box").on('click', function() {
    	$(".input-group .type_box").css('background', 'white');
    	var bool = $(this).find('input[type=radio]').prop('checked');
    	if (bool == true) {
    		$(this).find('input[type=radio]').prop('checked', false);
    		$('#typeTag').hide();
    	}
    	else {
	    	$(this).css('background', '#e0e0e0');
    		$(this).find('input[type=radio]').prop('checked', true);
    		$('#typeTag').show();
    	}
    });
    /* submit */
    $('#go_search').on('click', function() {
    	var address = $('input[name=address]').val();
    	var price = $('input[name=price]').val();
    	var space = $('input[name=space]').val();
    	var type = $('input:checked').val();
    	$('#annonce').load('search.php', {'address':address, 'price':price, 'space':space, 'type':type});
    });
    /* chargement de la page */
    $('#annonce').load('search.php');
    /* apparition des tag */
    $('input[type=text]').on('input', function() {
    	var tagname = $(this).attr('name');
    	if (tagname == 'address') {
    		$('#localisationTag').show();
    	}
    	else if (tagname == 'price')
    		$('#priceTag').show();
    	else if (tagname == 'space')
    		$('#spaceTag').show();
    });
});
/*disparition des tags*/
function tag_delete(element) {
	$(element).hide();
	var id = $(element).attr('id');
	if (id == 'localisationTag') {
		$('input[name=address]').val('');
	}
	else if (id == 'priceTag') {
		$('input[name=price]').val('');
	}
	else if (id == 'typeTag') {
		$('input:checked').prop('checked', false);
	}
	else {
		$('input[name=space]').val('');
	}
}