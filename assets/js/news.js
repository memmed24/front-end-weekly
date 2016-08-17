$(document).scroll(function(){
    var my_scroll = $(this).scrollTop();
    
    if(my_scroll > 800){
        $('.news-sec-left').addClass('imgTranslate');
        $('.news-sec-right').addClass('imgTranslate2');
    }
});

$(function(){
    $('.news-frst-btns').on('click', function(){
        $('.news-frst-btns').removeClass('active-news-bar');
        $(this).addClass('active-news-bar');
    })
})


$(document).scroll(function(){
    var myScroll = $(document).scrollTop();
    if(myScroll > 1550 ){
        $('.news-third-left').css({
            transition : '250ms linear',
            transform : 'translateX(0)'
        });
        $('.news-third-right img').css({
            transition: '250ms linear',
            transform : 'translateX(0)'
        });
    }
});


$(document).scroll(function(){
    var my_scroll = $(document).scrollTop();
    if(my_scroll > 1945){
        $('.news-fourth-left img').css({
            transition : '300ms ease',
            transform : 'translateX(0)'
 ,
        });
        $('.news-fourth-right').css({
            transition : '300ms ease',
            transform : 'translateX(-20px)',
            
        }).css({
            transition : '300ms ease',
            transform : 'translateX(0px)'
            
        });
    }
})