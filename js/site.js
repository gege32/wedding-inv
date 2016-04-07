var Site = {
	init: function(){		
		$('div.banner').fadeIn();
					
		$('div.wrongcode').css('display','none');
		$('div.oveflowbg').css('display','none');
		$('div.unsuccess').css('display','none');
		
		//Code stolen from css-tricks for smooth scrolling:
		$(function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
				scrollTop: target.offset().top
				}, 1000);
				return false;
			}
			}
		});
		});
		
		$('a.submitcode').click(function(){
			$login = $('form.codeCheck');
			if($login.length < 1) return;
			$login.append($(document.createElement('input')).val('Participant/check').attr('name', 'method').attr('type', 'hidden'));
			$.ajax({
				type: "POST",
				url: 'Participant',
				data: $login.serialize(),
				success: function(response) {
					//check response, and redirect
					if(response=="OK"){
						window.location = "Index";					
					}if(response=="USED"){
						window.location = "Index?warning=1";
					}else{
						$('div.wrongcode').css('display','inherit');
					}					
				}
			});
		});
		
		$('a.submitform').click(function(){
			$form = $(document.createElement('form'));
			if($form.length < 1) return;
			$form.append($(document.createElement('input')).val('Participant/submit').attr('name', 'method').attr('type', 'hidden'));
			$("select").each(function(index){
				$form.append($(document.createElement('input')).attr('name', $(this).attr('name')).val($(this).val()));
			});
			$form.append($('textarea.myinput'));
			$("input.myinput").each(function(){$form.append($(this))});
			$.ajax({
				type: "POST",
				url: 'Participant',
				data: $form.serialize(),
				success: function(response) {
					if(response=="SUCCESS"){
						$('div.oveflowbg').css('display','block');
						$('header.usedcode').css('display','none');				
					}else{
						$('header.usedcode').css('display','none');	
						$('div.unsuccess').css('display','block');
					}
				}
			});
		});

		$('section.successmessage').click(function(){
			$('div.oveflowbg').css('display','none');
		});
		$('a.close').click(function(){
			$('div.oveflowbg').css('display','none');
		});
		
		$('section.unsuccessmessage').click(function(){
			$('div.overflowbg_error').css('display','none');
		});
		$('a.close_error').click(function(){
			$('div.overflowbg_error').css('display','none');
		});
		
	}
	
};
document.ready = function(){
	Site.init();
};
