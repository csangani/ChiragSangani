/*	jQuery effects and Google CSE hack
	Developed by Chirag Sangani
*/

$(document).ready(function(){
	$('#database-tag').hide();
	$('#projects-tag').hide();
	$('#gallery-tag').hide();
	$('#links-tag').hide();
	$('#contact-tag').hide();
	$('#search-input').val("").attr("autocomplete","off");
	
	$('#database').mouseover(function(){
		$('#motto').clearQueue().fadeOut();
		$('#database-tag').clearQueue().fadeIn();
		$('#projects-tag').clearQueue().fadeOut();
		$('#gallery-tag').clearQueue().fadeOut();
		$('#links-tag').clearQueue().fadeOut();
		$('#contact-tag').clearQueue().fadeOut();
	});
	$('#database').mouseout(function(){
		$('#motto').clearQueue().fadeIn();
		$('#database-tag').clearQueue().fadeOut();
		$('#projects-tag').clearQueue().fadeOut();
		$('#gallery-tag').clearQueue().fadeOut();
		$('#links-tag').clearQueue().fadeOut();
		$('#contact-tag').clearQueue().fadeOut();
	});

	$('#projects').mouseover(function(){
		$('#motto').clearQueue().fadeOut();
		$('#database-tag').clearQueue().fadeOut();
		$('#projects-tag').clearQueue().fadeIn();
		$('#gallery-tag').clearQueue().fadeOut();
		$('#links-tag').clearQueue().fadeOut();
		$('#contact-tag').clearQueue().fadeOut();
	});
	$('#projects').mouseout(function(){
		$('#motto').clearQueue().fadeIn();
		$('#database-tag').clearQueue().fadeOut();
		$('#projects-tag').clearQueue().fadeOut();
		$('#gallery-tag').clearQueue().fadeOut();
		$('#links-tag').clearQueue().fadeOut();
		$('#contact-tag').clearQueue().fadeOut();
	});
	
	$('#gallery').mouseover(function(){
		$('#motto').clearQueue().fadeOut();
		$('#database-tag').clearQueue().fadeOut();
		$('#projects-tag').clearQueue().fadeOut();
		$('#gallery-tag').clearQueue().fadeIn();
		$('#links-tag').clearQueue().fadeOut();
		$('#contact-tag').clearQueue().fadeOut();
	});
	$('#gallery').mouseout(function(){
		$('#motto').clearQueue().fadeIn();
		$('#database-tag').clearQueue().fadeOut();
		$('#projects-tag').clearQueue().fadeOut();
		$('#gallery-tag').clearQueue().fadeOut();
		$('#links-tag').clearQueue().fadeOut();
		$('#contact-tag').clearQueue().fadeOut();
	});

	$('#links').mouseover(function(){
		$('#motto').clearQueue().fadeOut();
		$('#database-tag').clearQueue().fadeOut();
		$('#projects-tag').clearQueue().fadeOut();
		$('#gallery-tag').clearQueue().fadeOut();
		$('#links-tag').clearQueue().fadeIn();
		$('#contact-tag').clearQueue().fadeOut();
	});
	$('#links').mouseout(function(){
		$('#motto').clearQueue().fadeIn();
		$('#database-tag').clearQueue().fadeOut();
		$('#projects-tag').clearQueue().fadeOut();
		$('#gallery-tag').clearQueue().fadeOut();
		$('#links-tag').clearQueue().fadeOut();
		$('#contact-tag').clearQueue().fadeOut();
	});
	
	$('#contact').mouseover(function(){
		$('#motto').clearQueue().fadeOut();
		$('#database-tag').clearQueue().fadeOut();
		$('#projects-tag').clearQueue().fadeOut();
		$('#gallery-tag').clearQueue().fadeOut();
		$('#links-tag').clearQueue().fadeOut();
		$('#contact-tag').clearQueue().fadeIn();
	});
	$('#contact').mouseout(function(){
		$('#motto').clearQueue().fadeIn();
		$('#database-tag').clearQueue().fadeOut();
		$('#projects-tag').clearQueue().fadeOut();
		$('#gallery-tag').clearQueue().fadeOut();
		$('#links-tag').clearQueue().fadeOut();
		$('#contact-tag').clearQueue().fadeOut();
	});

	$(window).resize(function(){
		$('#backimg').css("width",function(){
			if (($('#backimg').height() > $(window).height()) & ($('#backimg').width() > $(window).width()))
				return $(window).width();
			else if($('#backimg').height() > $(window).height())
				return $(window).width();
			else if($('#backimg').width() > $(window).width())
				return $('#backimg').width();
			else
				return $(window).width();
		});
		$('#back2').css("width",$(window).width()).css("height",$(window).height());
	});
	
	$(document).ready(function(){
		$('#backimg').css("width",function(){
			if (($('#backimg').height() > $(window).height()) & ($('#backimg').width() > $(window).width()))
				return $(window).width();
			else if($('#backimg').height() > $(window).height())
				return $(window).width();
			else if($('#backimg').width() > $(window).width())
				return $('#backimg').width();
			else
				return $(window).width();
		});
		$('#back2').css("width",$(window).width()).css("height",$(window).height());
	});
	
	$('#searchbutton').mouseover(function(){
		$('#search-form ').clearQueue().fadeIn("fast");
		$('#search-input').focus();
	});
	
	$('#menubar').mouseleave(function(){
		$('#search-form ').clearQueue().fadeOut("fast");
		$('#search-input').blur();
	});
	
	$('#search-form1').submit(function(event){
		event.preventDefault();
		customSearchControl.execute($('#search-input').val());
		$('#search-wrapper').slideDown("slow");
	});
	
	$('#search-input').keyup(function(event){
		customSearchControl.execute($('#search-input').val());	$('#search-wrapper').slideDown("slow");
	});
	
   	$('#search-x-a').click(function(){
   		$('#search-wrapper').slideUp("slow");
   	});
   	
   	$('.announcement-li').hide();
   	
  	function announcements(query){
  		if(query.attr("id")=="announcement-end")
  			announcements($('.announcement-li').first());
		else
   			query.fadeIn().delay(5000).fadeOut(function(){announcements(query.next());});
   	}
   	announcements($('.announcement-li').first());
   	
});

var customSearchControl;
var options;

function GSEARCH(query){
	google.load('search', '1', {language: 'en'});
	google.setOnLoadCallback(function() {
		customSearchControl = new google.search.CustomSearchControl('009977386533804874761:a6tjrqtzyw0');
		customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
		options = new google.search.DrawOptions();
		options.setSearchFormRoot('cse-search-form');
		customSearchControl.draw('cse', options);
		customSearchControl.execute(query);  }, true);
}

GSEARCH("test");