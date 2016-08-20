$(document).scroll(function(){
	var my_scrll = $(document).scrollTop();

	if(my_scrll > 4800){
		$('.quote-txt').css({
			animationPlayState : 'running'
		});
		$('.quote-txt2').css({
			animationPlayState : 'running'
		})
	}
	if(my_scrll > 5000){
		$('.users').css({
			animationPlayState : 'running'
		})
	}
})

$(function(){
	$('.amy').on('click',function(){
		$('.quotes').css({
			transition : '500ms ease',
			transform : 'translateX(0)'
		});
		$('.amy, .john, .peter').removeClass('active-user');
		$(this).addClass('active-user');
		$('.inside-line').css({
			transition : '500ms ease',
			transform : 'translateX(0)'
		})
	})
	$('.john').on('click',function(){
		$('.quotes').css({
			transition : '500ms ease',
			transform : 'translateX(-927px)'
		});
		$('.amy, .john, .peter').removeClass('active-user');
		$(this).addClass('active-user');
		$('.inside-line').css({
			transition : '500ms ease',
			transform : 'translateX(315px)'
		})
	});
	$('.peter').on('click',function(){
		$('.quotes').css({
			transition : '500ms ease',
			transform : 'translateX(-1854px)'
		});
		$('.amy, .john, .peter').removeClass('active-user');
		$(this).addClass('active-user');
		$('.inside-line').css({
			transition : '500ms ease',
			transform : 'translateX(630px)'
		})
	});
})