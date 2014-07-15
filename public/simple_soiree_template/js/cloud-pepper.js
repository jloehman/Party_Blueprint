$(document).ready(function() {

	// navigation: mobile dropdown menu - open link:
	$('#cp-nav-mobile').change(function() {
		var link = $(this).children(":selected").attr('value');
		window.open(link, '_self', false);
	});

	// camera slider:
	if ($('#camera_wrap_1').length > 0) {
		jQuery('#camera_wrap_1').camera({
			height : '56%',
			pagination : true,
			thumbnails : false,
			fx : 'simpleFade',
			time : 5000,
			transPeriod : 3000,
			imagePath : '../images/'
		});
	}

	// form validation:
	$("#cp-form-message").validate();

	// bootstrap tooltips:
	$('.cp-tooltip').tooltip();

	// colorbox modal:
	$(".cp-modal").colorbox({
		rel : 'cp-modal-group',
		transition : "fade"
	});

}); 