var Site = {
	init: function(){		
		$('div.banner').fadeIn();
					
		$('div.wrongcode').css('display','none');
		
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
