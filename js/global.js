jQuery(document).ready(function() {
	
	// Contact Us Popup
	jQuery('#trigger_contactUs').click(function() {
		jQuery('#popup_contactUs').toggle();
	});

	// Generic Button MouseOver
	jQuery('.button:not(.submit, .previous)').mouseenter(function() {
		jQuery(this).css('background','#dedede');
	}).mouseleave(function() {
		jQuery(this).css('background','#ececec');
	});
	
	// Submit Button MouseOver
	jQuery('.button.previous').mouseenter(function() {
		jQuery(this).css('background','#dedede url(/sites/all/themes/jobapp/img/arrow.previous.png) no-repeat 8px center');
	}).mouseleave(function() {
		jQuery(this).css('background','#ececec url(/sites/all/themes/jobapp/img/arrow.previous.png) no-repeat 8px center');
	});
	
	// Submit Button MouseOver
	jQuery('.button.submit').mouseenter(function() {
		jQuery(this).css('background','#b0bd22 url(/sites/all/themes/jobapp/img/corner.submit.white.png) no-repeat right bottom');
	}).mouseleave(function() {
		jQuery(this).css('background','#a2ae1f url(/sites/all/themes/jobapp/img/corner.submit.white.png) no-repeat right bottom');
	});
	
	
	// IE 7 fix for Top Navigation
	var oW = 0;
	jQuery('#topNav ul li').each(function(){
		oW += jQuery(this).outerWidth();
	});
	jQuery('#topNav').width(oW);
	jQuery('#topNav ul li:last-child').css('background','none');
	
	
	// User/Pass swap
	jQuery('#username').focus(function() {
		jQuery(this).attr('value','');
	}).blur(function() {
		if(jQuery(this).attr('value')=='') { jQuery(this).attr('value','User Name (email address)'); }
	});
	jQuery('#password').focus(function() {
		jQuery(this).attr('value','');
	}).blur(function() {
		if(jQuery(this).attr('value')=='') { jQuery(this).attr('value','Password'); }
	});
	
});