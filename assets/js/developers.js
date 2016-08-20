$(document).scroll(function(){
	var my_scroll = $(document).scrollTop();

	if(my_scroll > 5600){
		$('.boy1').css({
			animationPlayState : 'running'
		});
		$('.girl1').css({
			animationPlayState : 'running'
		});
		$('.boy2').css({
			animationPlayState : 'running'
		});
		$('.girl2').css({
			animationPlayState : 'running'
		});
	}
})