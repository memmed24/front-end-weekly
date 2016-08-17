

$(document).scroll(function(){

	var wScroll = $(this).scrollTop();
	if(wScroll > $('#clients').offset().top - $(window).height()/2){
		// $('.odd').addClass('oddY')
		// $('.even').addClass('evenY')
		$('.cclients2 .odd , .cclients2 .even').each(function(a){
			setTimeout(function(){
				$('.cclients2 .odd , .cclients2 .even').eq(a).addClass('oddY')
			},200*(a+1));
		})
	}

})