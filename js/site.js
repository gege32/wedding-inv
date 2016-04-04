var Site = {
	init: function(){		
		$('div.banner').fadeIn();
					
		$('div.wrongcode').css('display','none');
		
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
					}else{
						$('div.wrongcode').css('display','inherit');
					}					
				}
			});
		});
	}
	
};
document.ready = function(){
	Site.init();
};
