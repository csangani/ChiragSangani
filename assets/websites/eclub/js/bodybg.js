$(document).ready(function(){
	$('#database-tag').hide();
	$('#projects-tag').hide();
	$('#gallery-tag').hide();
	$('#links-tag').hide();
	$('#contact-tag').hide();
	$('#search-input').val("").attr("autocomplete","off");
	$('#database').mouseover(function(){
		$('#motto').fadeOut();
		$('#database-tag').fadeIn();
		$('#projects-tag').fadeOut();
		$('#gallery-tag').fadeOut();
		$('#links-tag').fadeOut();
		$('#contact-tag').fadeOut();
	});
	$('#database').mouseout(function(){
		$('#motto').fadeIn();
		$('#database-tag').fadeOut();
		$('#projects-tag').fadeOut();
		$('#gallery-tag').fadeOut();
		$('#links-tag').fadeOut();
		$('#contact-tag').fadeOut();
	});

	$('#projects').mouseover(function(){
		$('#motto').fadeOut();
		$('#database-tag').fadeOut();
		$('#projects-tag').fadeIn();
		$('#gallery-tag').fadeOut();
		$('#links-tag').fadeOut();
		$('#contact-tag').fadeOut();
	});
	$('#projects').mouseout(function(){
		$('#motto').fadeIn();
		$('#database-tag').fadeOut();
		$('#projects-tag').fadeOut();
		$('#gallery-tag').fadeOut();
		$('#links-tag').fadeOut();
		$('#contact-tag').fadeOut();
	});
$('#gallery').mouseover(function(){
		$('#motto').fadeOut();
		$('#database-tag').fadeOut();
		$('#projects-tag').fadeOut();
		$('#gallery-tag').fadeIn();
		$('#links-tag').fadeOut();
		$('#contact-tag').fadeOut();
	});
	$('#gallery').mouseout(function(){
		$('#motto').fadeIn();
		$('#database-tag').fadeOut();
		$('#projects-tag').fadeOut();
		$('#gallery-tag').fadeOut();
		$('#links-tag').fadeOut();
		$('#contact-tag').fadeOut();
	});
$('#links').mouseover(function(){
		$('#motto').fadeOut();
		$('#database-tag').fadeOut();
		$('#projects-tag').fadeOut();
		$('#gallery-tag').fadeOut();
		$('#links-tag').fadeIn();
		$('#contact-tag').fadeOut();
	});
	$('#links').mouseout(function(){
		$('#motto').fadeIn();
		$('#database-tag').fadeOut();
		$('#projects-tag').fadeOut();
		$('#gallery-tag').fadeOut();
		$('#links-tag').fadeOut();
		$('#contact-tag').fadeOut();
	});
$('#contact').mouseover(function(){
		$('#motto').fadeOut();
		$('#database-tag').fadeOut();
		$('#projects-tag').fadeOut();
		$('#gallery-tag').fadeOut();
		$('#links-tag').fadeOut();
		$('#contact-tag').fadeIn();
	});
	$('#contact').mouseout(function(){
		$('#motto').fadeIn();
		$('#database-tag').fadeOut();
		$('#projects-tag').fadeOut();
		$('#gallery-tag').fadeOut();
		$('#links-tag').fadeOut();
		$('#contact-tag').fadeOut();
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
		$('#search-form').fadeIn("fast");
		$('#search-input').focus();
	});
	$('#menubar').mouseleave(function(){
		$('#search-form').fadeOut("fast");
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