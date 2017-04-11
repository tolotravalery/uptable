$(document).ready(function() {
	// JS contact form
	$('#contacts .block-simple-subscription form > div').addClass('col-md-12 simple_block text-left');
	//JS font icon
	var font_style = $('#font-style').val();
	if (font_style != '') {
		var font_icon = '/fonts/'+font_style+'/flaticon.css';
		var font_url = $('#font-icon').attr('data-baseurl');
		font_url = font_url + font_icon;
		$('#font-icon').attr('href', font_url);
	}

	//JS Main menu
	$('.mega_menu .mega_sub').each(function(index, el) {
		$(this).find('>a').remove();
	});
	$('.sub_menu ul.mega_menu').each(function(index, el) {
		if ($(this).find('>li').hasClass('mega_sub')){
			
		} else {
			var html = $(this).html();
			html = '<li class="mega_sub"><ul>'+html+'</ul></li>';
			$(this).html(html);
		}
	});
	$('.sub_cont > ul').append('<li class="right_sub no_arrow sub_min_width"><a href="#" class="parents"><i class="ti-search"></i></a></li>');

	$('.sub_cont > ul li.right_sub').click(function(event) {
		/* Act on the event */
		if ($('.sub_menu .sub_min_width.mega_menu').hasClass('hide')) {
			$('.sub_menu .sub_min_width.mega_menu').removeClass('hide');
			$('.sub_menu .sub_min_width.mega_menu').show('fast');
		} else {
			$('.sub_menu .sub_min_width.mega_menu').hide('fast');
			$('.sub_menu .sub_min_width.mega_menu').addClass('hide');

		}
	});
	$('.sub_menu .sub_min_width.mega_menu input[type=submit]').val('');
	$('#views-exposed-form--barg-shop-catalog-page-search-products input[type=text]').attr('placeholder', 'Enter Your Keywords');
	$('.sub_menu ul li a[class^=ti]').each(function(index, el) {
		var a_class = $(this).attr('class');
		$(this).prepend('<i class="'+a_class+'"></i>');
	});

});