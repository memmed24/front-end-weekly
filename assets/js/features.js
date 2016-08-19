$(document).scroll(function(){
	var my_scroll = $(document).scrollTop();
//3120
	if (my_scroll > 3000) {
		$('.features-top').css({
			animationPlayState : 'running'
		});
		$('.features-bottom').css({
			animationPlayState : 'running'
		});
	}


	console.log(my_scroll);
})