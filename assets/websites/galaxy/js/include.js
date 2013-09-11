/*	Javascript for Galaxy '10
	Developed by Chirag Sangani
*/

jQuery(document).ready(function(){
	var toscrollto = $(window).scrollTop();
	$(window).load(function(){
		$('#content-wrapper').fadeTo('slow',1);
		$('#symbol').css("position","fixed").css("top",80).css("left",$(window).width()/2-520);
		$('#leftcover').css("left",$(window).width()/2-530).css("height",$('#wrapper').height());
		$('.bg').css("height",$(window).height());
		toscrollto=0;
		$(window).scrollTo(toscrollto,800).queue();
		if(!jQuery.support.boxModel) $('#notsupported').show();
	});
	
	$(window).resize(function(){
		$('#symbol').css("position","fixed").css("top",80).css("left",$(window).width()/2-520);
		$('#leftcover').css("left",$(window).width()/2-530).css("height",$('#wrapper').height());
		$('.bg').css("height",$(window).height());
	});
	
	$('#home').mouseenter(function(){
		$('#bg6').fadeOut('fast'); $('#bg5').fadeOut('fast'); $('#bg4').fadeOut('fast'); $('#bg3').fadeOut('fast'); $('#bg2').fadeOut('fast'); $('#bg1').fadeOut('fast'); 
		$('#eye').fadeOut('fast'); $('#bird').fadeIn('fast'); $('#arrow').fadeOut('fast'); $('#helmet').fadeOut('fast'); $('#swastika').fadeOut('fast'); $('#flag').fadeOut('fast'); $('#crown').fadeOut('fast');
	});
	$('#home').mouseleave(function(){
		$('#bg6').fadeIn('fast'); $('#bg5').fadeIn('fast'); $('#bg4').fadeIn('fast'); $('#bg3').fadeIn('fast'); $('#bg2').fadeIn('fast');  $('#bg1').fadeIn('fast');
		$('#eye').fadeOut('fast'); $('#bird').fadeOut('fast'); $('#arrow').fadeOut('fast'); $('#helmet').fadeOut('fast'); $('#swastika').fadeOut('fast'); $('#flag').fadeOut('fast'); $('#crown').fadeOut('fast');
	});

	$('#competitions').mouseenter(function(){
		$('#bg6').fadeOut('fast'); $('#bg5').fadeOut('fast'); $('#bg4').fadeOut('fast'); $('#bg3').fadeOut('fast'); $('#bg2').fadeOut('fast'); 
		$('#eye').fadeOut('fast'); $('#bird').fadeOut('fast'); $('#arrow').fadeIn('fast'); $('#helmet').fadeOut('fast'); $('#swastika').fadeOut('fast'); $('#flag').fadeOut('fast'); $('#crown').fadeOut('fast');
	});
	$('#competitions').mouseleave(function(){
		$('#bg6').fadeIn('fast'); $('#bg5').fadeIn('fast'); $('#bg4').fadeIn('fast'); $('#bg3').fadeIn('fast'); $('#bg2').fadeIn('fast');
		$('#eye').fadeOut('fast'); $('#bird').fadeOut('fast'); $('#arrow').fadeOut('fast'); $('#helmet').fadeOut('fast'); $('#swastika').fadeOut('fast'); $('#flag').fadeOut('fast'); $('#crown').fadeOut('fast');
	});
	
	$('#teams').mouseenter(function(){
		$('#bg6').fadeOut('fast'); $('#bg5').fadeOut('fast'); $('#bg4').fadeOut('fast'); $('#bg3').fadeOut('fast'); 
		$('#eye').fadeOut('fast'); $('#bird').fadeOut('fast'); $('#arrow').fadeOut('fast'); $('#helmet').fadeIn('fast'); $('#swastika').fadeOut('fast'); $('#flag').fadeOut('fast'); $('#crown').fadeOut('fast');
	});
	$('#teams').mouseleave(function(){
		$('#bg6').fadeIn('fast'); $('#bg5').fadeIn('fast'); $('#bg4').fadeIn('fast'); $('#bg3').fadeIn('fast');
		$('#eye').fadeOut('fast'); $('#bird').fadeOut('fast'); $('#arrow').fadeOut('fast'); $('#helmet').fadeOut('fast'); $('#swastika').fadeOut('fast'); $('#flag').fadeOut('fast'); $('#crown').fadeOut('fast');
	});
	
	$('#schedule').mouseenter(function(){
		$('#bg6').fadeOut('fast'); $('#bg5').fadeOut('fast'); $('#bg4').fadeOut('fast');
		$('#eye').fadeOut('fast'); $('#bird').fadeOut('fast'); $('#arrow').fadeOut('fast'); $('#helmet').fadeOut('fast'); $('#swastika').fadeIn('fast'); $('#flag').fadeOut('fast'); $('#crown').fadeOut('fast');
	});
	$('#schedule').mouseleave(function(){
		$('#bg6').fadeIn('fast'); $('#bg5').fadeIn('fast'); $('#bg4').fadeIn('fast');
		$('#eye').fadeOut('fast'); $('#bird').fadeOut('fast'); $('#arrow').fadeOut('fast'); $('#helmet').fadeOut('fast'); $('#swastika').fadeOut('fast'); $('#flag').fadeOut('fast'); $('#crown').fadeOut('fast');
	});

	$('#results').mouseenter(function(){
		$('#bg6').fadeOut('fast'); $('#bg5').fadeOut('fast');
		$('#eye').fadeOut('fast'); $('#bird').fadeOut('fast'); $('#arrow').fadeOut('fast'); $('#helmet').fadeOut('fast'); $('#swastika').fadeOut('fast'); $('#flag').fadeIn('fast'); $('#crown').fadeOut('fast');
	});
	$('#results').mouseleave(function(){
		$('#bg6').fadeIn('fast'); $('#bg5').fadeIn('fast'); 
		$('#eye').fadeOut('fast'); $('#bird').fadeOut('fast'); $('#arrow').fadeOut('fast'); $('#helmet').fadeOut('fast'); $('#swastika').fadeOut('fast'); $('#flag').fadeOut('fast'); $('#crown').fadeOut('fast');
	});

	$('#contacts').mouseenter(function(){
		$('#bg6').fadeOut('fast');
		$('#eye').fadeOut('fast'); $('#bird').fadeOut('fast'); $('#arrow').fadeOut('fast'); $('#helmet').fadeOut('fast'); $('#swastika').fadeOut('fast'); $('#flag').fadeOut('fast'); $('#crown').fadeIn('fast');
	});
	$('#contacts').mouseleave(function(){
		$('#bg6').fadeIn('fast');
		$('#eye').fadeOut('fast'); $('#bird').fadeOut('fast'); $('#arrow').fadeOut('fast'); $('#helmet').fadeOut('fast'); $('#swastika').fadeOut('fast'); $('#flag').fadeOut('fast'); $('#crown').fadeOut('fast');
	});
	
	$('#header').mouseleave(function(){
		$('#eye').fadeIn('fast'); $('#bird').fadeOut('fast'); $('#arrow').fadeOut('fast'); $('#helmet').fadeOut('fast'); $('#swastika').fadeOut('fast'); $('#flag').fadeOut('fast'); $('#crown').fadeOut('fast');
	});
	
	$('#logo').mouseenter(function(){
		$('#eye').fadeIn('fast'); $('#bird').fadeOut('fast'); $('#arrow').fadeOut('fast'); $('#helmet').fadeOut('fast'); $('#swastika').fadeOut('fast'); $('#flag').fadeOut('fast'); $('#crown').fadeOut('fast');
	});
	
	$('#header-left').mouseenter(function(){
		$('#eye').fadeIn('fast'); $('#bird').fadeOut('fast'); $('#arrow').fadeOut('fast'); $('#helmet').fadeOut('fast'); $('#swastika').fadeOut('fast'); $('#flag').fadeOut('fast'); $('#crown').fadeOut('fast');
	});
	
	$('#header-right').mouseenter(function(){
		$('#eye').fadeIn('fast'); $('#bird').fadeOut('fast'); $('#arrow').fadeOut('fast'); $('#helmet').fadeOut('fast'); $('#swastika').fadeOut('fast'); $('#flag').fadeOut('fast'); $('#crown').fadeOut('fast');
	});
	
	$(document).mousemove(function(e){
		if(-$(document).width()/2+e.pageX<500&-$(document).width()/2+e.pageX>-500)$('#symbol').css("left",$(window).width()/2-520+20/1000*(1000-e.pageX));
		if(-$(document).height()/2+e.pageY<400&-$(document).height()/2+e.pageY>-400)$('#symbol').css("top",70+20/800*(800-e.pageY));
	});

	$(document).mousewheel(function(e, delta) {
		e.stopPropagation();
		e.preventDefault();
		if(delta>0 && toscrollto!=0){ toscrollto-=300;   $(window).scrollTo(toscrollto,800).queue();}
		if(delta<0 && toscrollto+$(window).height() < $(document).height())  { toscrollto+=300;   $(window).scrollTo(toscrollto,800).queue();}
	});
});

$(function($) {
    $('#time').jclock();
});