$(function(){
	$(".topBar-lists .activatable").on('click',function(){
		$(".topBar-lists .activatable").removeClass('active')
		$(this).addClass('active')
	})

	$(".slideDown-li").hover(function() {
		$('.hidden-ul').slideDown('400');
		$('.hidden-ul').css({
			paddingLeft : '20'
		});
		$('.hidden-ul li a').css({
			color: '#E8E8E8'
		});
		$(this).css({
			backgroundColor : '#272727'
		})
		//gizli olan ul'deki listlerin fontlarinin rengini deyishmek

		$('.hidden-ul .a').hover(function() {
			$('.hidden-ul .a').css({
				backgroundColor: 'black'
			});
			$('.a >a').css({
				color: '#1CBCF8'
			});
		}, function() {
			$('.hidden-ul .a').css({
				backgroundColor: '#272727'
			});
			$('.a a').css({
				color: '#E8E8E8'
			});
		});

		$('.hidden-ul .b').hover(function() {
			$('.hidden-ul .b').css({
				backgroundColor: 'black'
			});

			$('.b >a').css({
				color: '#1CBCF8'
			});
		}, function() {
			$('.hidden-ul .b').css({
				backgroundColor: '#272727'
			});
			$('.b a').css({
				color: '#E8E8E8'
			});
		});

		$('.hidden-ul .c').hover(function() {
			$('.hidden-ul .c').css({
				backgroundColor: 'black'
			});
			$('.c >a').css({
				color: '#1CBCF8'
			});
		}, function() {
			$('.hidden-ul .c').css({
				backgroundColor: '#272727'
			});
			$('.c a').css({
				color: '#E8E8E8'
			});
		});

		$('.hidden-ul .d').hover(function() {
			$('.hidden-ul .d').css({
				backgroundColor: 'black'
			});
			$('.d a').css({
				color: '#1CBCF8'
			});
		}, function() {
			$('.hidden-ul .d').css({
				backgroundColor: '#272727'
			});
			$('.d a').css({
				color: '#E8E8E8'
			});
		});


		$('.hidden-ul .e').hover(function() {
			$('.hidden-ul .e').css({
				backgroundColor: 'black'
			});
			$('.e a').css({
				color: '#1CBCF8'
			});
		}, function() {
			$('.hidden-ul .e').css({
				backgroundColor: '#272727'
			});
			$('.e a').css({
				color: '#E8E8E8'
			});
		});

		$('.hidden-ul .f').hover(function() {
			$('.hidden-ul .f').css({
				backgroundColor: 'black'
			});
			$('.f a').css({
				color: '#1CBCF8'
			});
		}, function() {
			$('.hidden-ul .f').css({
				backgroundColor: '#272727'
			});
			$('.f a').css({
				color: '#E8E8E8'
			});
		});


		//======================================================= 
	}, function() {
		$(this).css({
			backgroundColor : 'transparent'
		})
		$('.hidden-ul').slideUp('fast');
		$(".any").css({
			backgroundColor : 'transparent'
		});
	});

	$(".a").hover(function() {
		$(".secondhl").delay('200').fadeIn('fast');

		$(".secondhl a").hover(function() {
		$(this).css({
			color: '#1CBCF8'
		})
	}, function() {
		$(this).css({
			color: '#e8e8e8'
		})
	});

	}, function() {
		$(".secondhl").fadeOut('fast');
	});
	

	$(".b").hover(function() {
		$('.thirdhl').delay('200').fadeIn('fast');
		$('.thirdhl .jfc').hover(function() {
			$(".justforcolor").css({
				color : '#1CBCF8'
			})
		}, function() {
			$(".justforcolor").css({
				color : '#e8e8e8'
			})
		});

		$('.thirdhl .jfc2').hover(function() {
			$(".justforcolor2").css({
				color : '#1CBCF8'
			})
		}, function() {
			$(".justforcolor2").css({
				color : '#e8e8e8'
			})
		});

	}, function() {
		$('.thirdhl').fadeOut('fast')
	});

	$(".c").hover(function() {
		$(".fourthhl").delay('200').fadeIn('fast');
		$
	}, function() {
		$(".fourthhl").fadeOut('fast')
	});

	var a = true;

	 $('.bar').on('click',function(){
	 	if(a){
	 		$('body').animate({
	 			marginLeft : '-295'
	 		});
	 		$(".rightBarMenu").css({
	 			display: 'block'
	 		}).animate({
	 			marginLeft : '250'
	 		})
	 		a =false;
	 	}else{
	 		$('body').animate({
	 			marginLeft : '-0'
	 		});
	 		$(".rightBarMenu").css({
	 			display : 'none'
	 		})
	 		a=true;
	 	}
		
	 })
})