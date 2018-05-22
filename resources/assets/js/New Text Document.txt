jQuery(document).ready(function($){	
	$(".reqbut").click(function(e){
		e.preventDefault();
		$('.callpopup').show(200);
	});	
	$(".cpclose").click(function(e){
		e.preventDefault();
		$('.callpopup').hide(200);
	});	
	//$('.tabmenu li a').click(function(e){
//        e.preventDefault();		
//        $('.tabs').hide();
//        $('.tabmenu li a').removeClass('selected');
//        $(this.hash).fadeIn(500);
//        $(this).addClass('selected');
//    }).filter(':first').click();
	$(window).scroll(function() {			
	$(".header").toggleClass("sticky", $(document).scrollTop() >= 145);
});
$('.hbotright ul li a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});
$(".ppclose").click(function(){		
		$('.ttpopup').hide(200);		
	});
	$(".ttbotright a").click(function(e){
		e.preventDefault();		
		$('.ttpopup').show(200);		
	});
});