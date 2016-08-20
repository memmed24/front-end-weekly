$(document).scroll(function(){
	var my_scroll = $(document).scrollTop();
	//4632
	if(my_scroll > 4420){
		$(".award-contents").css({
			animationPlayState : 'running'
		})
	}
})