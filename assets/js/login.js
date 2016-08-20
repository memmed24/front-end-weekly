$(document).scroll(function(){
	var my_scroll = $(document).scrollTop();
	//console.log(my_scroll);
	if(my_scroll > 3377){
		$('.login-left').css({
			animationPlayState : 'running'
		});
		$('.login-right').css({
			animationPlayState : 'running'
		})
	}
	//3477
})