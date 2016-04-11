var pathToTheme = Drupal.settings.pathToTheme;
jQuery(document).ready(function($) {
	/*$('.main_nav > ul > li').each(function() {
		var link = $(this).find('a').attr('href');
		var i = link.indexOf('#');
		if(i != -1){
			var href = link.substr(i,link.length - 1);
			$(this).find('a').attr('href',href);
		}
	});
	$('.mobileAreaMenu > ul > li').each(function() {
		var link = $(this).find('a').attr('href');
		var i = link.indexOf('#');
		if(i != -1){
			var href = link.substr(i,link.length - 1);
			$(this).find('a').attr('href',href);
		}
	});*/
	$('.home-1-team > .home-1-team-avt').each(function() {
		var bg_img = $(this).attr('data-background-image');
		$(this).css('background-image','url('+bg_img+')');
	});
	$('.comment-head > .post-info > .user-picture').addClass('post-avatar');
	$('.blog-hp556 > .blog-item > .img-container-blog').each(function() {
		var bbg = $(this).attr('data-background-image');
		$(this).css('background-image','url('+bbg+')');
	});
	var gr = $('.webform-client-form.webform-client-form-44 > div > .form-item');
	gr.slice(0, 3).wrapAll('<div class="span6"></div>');
	$('.webform-client-form.webform-client-form-44 > div > .webform-component-textarea').wrapAll('<div class="span6"></div>');
	$('.webform-client-form-44 .form-actions input[type=submit]').addClass('submit_buttom');
	$('#switch .color .button').click(function() {
		var color = $(this).attr('data-color');
		$('#towns-theme-config-link').attr('href',pathToTheme + '/css/skins/' + color +'.css');
	});
});