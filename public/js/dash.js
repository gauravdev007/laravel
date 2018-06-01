$( document ).ready(function() {
function uploadFile(target) {
    document.getElementById("file-name").innerHTML = target.files[0].name;
}	
jQuery(document).ready(function($){	
	$('.tabmenu li a').click(function(e){
        e.preventDefault();		
        $('.tabs').hide();
        $('.tabmenu li a').removeClass('selected');
        $(this.hash).fadeIn(500);
        $(this).addClass('selected');
    }).filter(':first').click();
	
	$(".danchor").click(function(e){
		e.preventDefault();
		$(this).next('.docdd').slideToggle(100);
		$(this).toggleClass('danchoract');
	});
	$(".dboxmdate a").click(function(e){
		e.preventDefault();
		$(this.hash).slideToggle(100);		
	});
	$(".pltbut a").click(function(e){
		e.preventDefault();
		$('.plbotform').slideToggle(100);		
	});
});
});