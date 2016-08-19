$(document).scroll(function(){
   var my_scroll = $(document).scrollTop();
   
   if(my_scroll>2500){
       $('#rich .container .col-md-9 img').css({
           animationPlayState : 'running'
       })
   }
})


$(function(){
	$('.rich-list').on('click',function(){
		$('.rich-list').removeClass('active-rich');
		$(this).addClass('active-rich');
	});

	var my_img = ['assets/img/rich_features_1.png', 'assets/img/rich_features_2.png', 'assets/img/rich_features_3.png'];

	$('.rlfirst').on('click',function(){
		$('#richImg').attr('src', 'assets/img/rich_features_1.png');
	})
	$('.rlsec').on('click',function(){
		$('#richImg').attr('src', 'assets/img/rich_features_2.png')
	})
	$('.rlthird').on('click',function(){
		$('#richImg').attr('src', my_img[2]);
	})

});

//rich-list
//active-rich