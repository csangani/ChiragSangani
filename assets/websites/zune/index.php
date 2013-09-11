<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include_once("inc/config.php"); ?>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Chirag Sangani</title>
<script src="<?php echo $base; ?>js/jquery.js" type="text/javascript"></script>
<script type="text/javascript">
var subpage = "<?php if(isset($_GET['p'])) echo $_GET['p']; else echo "blank"; ?>";
var subsubpage = "<?php if(isset($_GET['r'])) echo $_GET['r']; else echo "blank"; ?>";

function loadContent(id, traceBack){
	$('div.contentWrapper').fadeOut(function(){
		$('div.content').load("<?php echo $base; ?>inc/"+id+".php",function(response, status, xhr) {
			if (status == "error") {$('div.error').clearQueue().slideDown().delay(5000).fadeOut(function(){$('div.contentWrapper').slideDown();});}
 			else {
 				if(traceBack == false)
 					hist.push(currentPage);
 				currentPage = id;
 				$('div.error').clearQueue().fadeOut("fast");
 				$('div.contentWrapper').slideDown();
 			}
  			$('div.loading').clearQueue().fadeOut("fast");
		});
	});
	$('div.loading').delay(500).fadeIn("fast");
}

var currentPage = "home";
var hist = new Array();
	
$(document).ready(function(E){
	$('#skull').css("left",$(window).width()/2-900+20/1000*(1000-E.pageX));
	$('#thread').css("left",$(window).width()/2-1150+20/500*(1000-E.pageX)); 
	$('div.loading').css("left",$(window).width()/2-15);
	$('div.loading').css("top",$(window).height()/2-15);
	$('div.error').css("left",$(window).width()/2-$('div.error').width()/2);
	$('div.error').css("top",$(window).height()/2-$('div.error').height()/2);
	$('div.backGradient').css("width",$(window).width());
	$('div.backGradient').css("height",$(window).height());
	$('div.loading').fadeIn();
	$('div.content').load("<?php echo $base; ?>inc/<?php if(!isset($_GET['q'])){echo "home";} else {echo $_GET['q'];}?>.php",function(response, status, xhr){if (status == "error")$('div.content').load("<?php echo $base; ?>inc/home.php");});
		
	$(window).load(function(){
		gradientRecurse();
		$('div.loading').fadeOut();
		$('div.skull').fadeIn();
		$('div.thread').fadeIn(function(){$('div.header').slideDown();$('div.contentWrapper').fadeIn();$('div.footer').slideDown();});
	});
	
	var gradientDelay = 40000;
	var gradientDuration = 10000;
	
	function gradientRecurse(){
		//$('div.blue').fadeIn().delay(60000).fadeOut(function(){$('div.pink').fadeIn().delay(60000).fadeOut(function(){$('div.yellow').fadeIn().delay(60000).fadeOut(function(){gradientRecurse();});});});
		blueCycle();
	}
	
	function blueCycle(){
		$('div.blue').fadeIn(gradientDuration,function(){window.setTimeout(function(){$('div.blue').fadeOut(gradientDuration);pinkCycle();},gradientDelay);});
	}
	function pinkCycle(){
		$('div.pink').fadeIn(gradientDuration,function(){window.setTimeout(function(){$('div.pink').fadeOut(gradientDuration);yellowCycle();},gradientDelay);});
	}
	function yellowCycle(){
		$('div.yellow').fadeIn(gradientDuration,function(){window.setTimeout(function(){$('div.yellow').fadeOut(gradientDuration);greenCycle();},gradientDelay);});
	}
	function greenCycle(){
		$('div.green').fadeIn(gradientDuration,function(){window.setTimeout(function(){$('div.green').fadeOut(gradientDuration);blueCycle();},gradientDelay);});
	}
	
	$('div.back').click(function(){
		var previous = hist.pop();
		if (previous != null)
			loadContent(previous,true);
	});
	
	$(window).mousemove(function(e){
		$('#skull').css("left",$(window).width()/2-900+20/1000*(1000-e.pageX));
		$('#thread').css("left",$(window).width()/2-1150+20/500*(1000-e.pageX)); 
	//	$('#body').css("left",20/2000*(1000-e.pageX));  //This part causes too much lag

	});
	
	$(window).resize(function(){
		$('div.loading').css("left",$(window).width()/2-15);
		$('div.loading').css("top",$(window).height()/2-15);
		$('div.error').css("left",$(window).width()/2-$('div.error').width()/2);
		$('div.error').css("top",$(window).height()/2-$('div.error').height()/2);
		$('div.backGradient').css("width",$(window).width());
		$('div.backGradient').css("height",$(window).height());

	});
	
	$('a.home').click(function(){loadContent("home",false);});
	
	$('a.projects').click(function(){loadContent("projects",false);});

	$('a.creativity').click(function(){loadContent("creativity",false);});

	$('a.resume').click(function(){loadContent("resume",false);});
	
	$('a.contact').click(function(){loadContent("contact",false);});
	
	$('div.about').click(function(){loadContent("about",false);});
	
	$('div.disclaimer').click(function(){loadContent("disclaimer",false);});
	
});

function loadSpecial(id, cell){
	$(cell).fadeOut(function(){
		$(cell).load("<?php echo $base; ?>inc/"+id+".php",function(response, status, xhr) {
			if (status == "error") {$('div.error').clearQueue().slideDown().delay(5000).fadeOut(function(){$(cell).slideDown();});}
 			else {
  				$('div.error').clearQueue().fadeOut("fast");
 				$(cell).slideDown();
 			}
  			$('div.loading').clearQueue().fadeOut("fast");
		});
	});
	$('div.loading').delay(500).fadeIn("fast");
}
	
</script>
<style type="text/css">
body {
	margin: 0;
	padding: 0;
	font-family: "Segoe WP", Segoe UI, tahoma, sans-serif;
	font-size: small;
}
div.pink {
	background: #fbd5d5 url('<?php echo $base; ?>images/backGradientPink.png') repeat-y 50% 50%;
}
div.blue {
	background: #cce3f0 url('<?php echo $base; ?>images/backGradientBlue.png') repeat-y 50% 50%;
}
div.yellow {
	background: #fffccd url('<?php echo $base; ?>images/backGradientYellow.png') repeat-y 50% 50%;
}
div.green {
	background: #ccf9d8 url('<?php echo $base; ?>images/backGradientGreen.png') repeat-y 50% 50%;
}
div.backGradient {
	width: 100%;
	position: fixed;
	z-index: 0;
	display: none;
	top: 0;
}
a {
	outline: none;
	color: #767676;
	text-decoration: none;
	cursor: default;
	position: relative;
}
a:hover {
	color: #000000;
}
a:active {
	top: 1px;
	left: 1px;
}
div.skull {
	width: 1648px;
	height: 1200px;
	background: url('<?php echo $base; ?>images/skull.png') no-repeat;
	display: block;
	position: fixed;
	z-index: 1;
	top: 0px;
	margin: auto;
	display: none;
}
div.thread {
	width: 2300px;
	height: 850px;
	background: url('<?php echo $base; ?>images/thread.png') no-repeat;
	display: block;
	position: fixed;
	z-index: 2;
	top: 0px;
	margin: auto;
	display: none;
	left: -500px;
}
div.body {
	width: 900px;
	margin: auto;
	position: relative;
	z-index: 3;
}
div.header {
	padding: 30px 0 0 100px;
	font-size: 24pt;
	display: none;
}
div.logo {
	width: 184px;
	height: 31px;
	background: url('<?php echo $base; ?>images/logo.png') no-repeat;
	display: block;
	float: left;
}
div.clear {
	clear: both;
}
div.menuBar {
	width: 500px;
	height: 31px;
	display: block;
	float: left;
	margin-left: 50px;
}
div.menuItem {
	height: 14px;
	float: left;
	margin-top: 10px;
	margin-right: 30px;
}
a.menuLink {
	display: block;
	height: 14px;
	position: relative;
	outline: none;
	cursor: default;
}
a.home {
	width: 48px;
	background: url('<?php echo $base; ?>images/home.png') no-repeat;
}
a.contact {
	width: 76px;
	background: url('<?php echo $base; ?>images/contact.png') no-repeat;
}
a.menuLink:hover {
	background-position: 0 -14px;
}
a.menuLink:active {
	top: 1px;
	left: 1px;
}
a.projects {
	width: 76px;
	background: url('<?php echo $base; ?>images/projects.png') no-repeat;
}
a.creativity {
	width: 87px;
	background: url('<?php echo $base; ?>images/creativity.png') no-repeat;
}
a.resume {
	width: 62px;
	background: url('<?php echo $base; ?>images/resume.png') no-repeat;
}
div.contentWrapper {
	padding-top: 60px;
	display: none;
}
div.leftColumn {
	width: 285px;
	text-align: right;
	float: left;
	font-size: medium;
	position: relative;
}
div.heading {
	color: #747474;
	font-size: 36pt;
	margin-top: 0;
	position: relative;
}
div.rightColumn {
	width: 500px;
	float: left;
	margin-left: 50px;
	text-align: justify;
	position: relative;
}
div.projectsPage {
	width: 778px;
	height: 521px;
	margin: auto;
	background: url('<?php echo $base; ?>images/projectsPage.png');
	display: block;
}
div.loading {
	width: 31px;
	height: 31px;
	background: url('<?php echo $base; ?>images/ajax-loader.gif');
	position: fixed;
	z-index: 1;
	display: none;
}
div.error {
	text-align: center;
	display: none;
	position: fixed;
	z-index: 10;
	background: #ffffff;
	border: 1px #767676 solid;
	padding: 0 30px 10px 30px;
}
div.footer {
	text-align: right;
	padding-right: 65px;
	display: none;
	position: relative;
	margin: 0 0 20px 0;
	padding-top: 40px;
}
div.copyright {
	background: url('<?php echo $base; ?>images/copyright.png');
	width: 282px;
	height: 10px;
	display: block;
	float: right;
	margin-left: 20px;
	position: relative;
}
div.about {
	background: url('<?php echo $base; ?>images/about.png');
	width: 88px;
	height: 10px;
	display: block;
	float: right;
	margin-left: 20px;
}
div.disclaimer {
	background: url('<?php echo $base; ?>images/disclaimer.png');
	width: 62px;
	height: 10px;
	display: block;
	float: right;
	margin-left: 20px;
}
div.footerLink {
	position: relative;
}
div.footerLink:hover {
	background-position: 0 -10px;
}
div.footerLink:active {
	top: 1px;
	left: 1px;
}
div.backWrapper {
	position: absolute;
	top: -10px;
	left: 30px;
}
div.back {
	position: relative;
	z-index: 3;
	width: 48px;
	height: 48px;
	background: url('<?php echo $base; ?>images/back.png');
}
div.back:hover {
	background-position: 0 -48px;
}
div.back:active {
	top: 1px;
	left: 1px;
}
div.noscript {
	position: relative;
	top: 300px;
	margin: auto;
	text-align: center;
}
div.contentBar {
	position: relative;
	padding-bottom: 10px;
}
div.contentBarItem {
	display: block;
	float: left;
	height: 18px;
	margin-right: 15px;
	position: relative;
}
div.contentBarItem:hover {
	background-position: 0 -18px;
}
div.contentBarItem:active {
	top: 1px;
	left: 1px;
}
div.contentSpecial {
	display: block;
	position: relative;
}
div.contentMenu {
	margin-top: 10px;
}
div.contentMenuItem {
	text-align: right;
	margin-bottom: 10px;
	color: #767676;
	cursor: default;
	position: relative;
}
div.overview {
	width: 88px;
	background: url('<?php echo $base; ?>images/overview.png');
}
div.education {
	width: 98px;
	background: url('<?php echo $base; ?>images/education.png');
}
div.electronics {
	width: 104px;
	background: url('<?php echo $base; ?>images/electronics.png');
}
div.art {
	width: 28px;
	background: url('<?php echo $base; ?>images/art.png');
}
div.websites {
	width: 86px;
	background: url('<?php echo $base; ?>images/websites.png');
}
div.literature {
	width: 89px;
	background: url('<?php echo $base; ?>images/literature.png');
}
div.contentMenuItem:hover {
	color: #000000;
}
div.contentMenuItem:active {
	top: 1px;
	left: 1px;
}
div.aboutme {
	width: 191px;
	height: 37px;
	display: block;
	background: url('<?php echo $base; ?>images/aboutme.png');
	position: relative;
	float: right;
}
div.projectsBig {
	width: 153px;
	height: 46px;
	display: block;
	background: url('<?php echo $base; ?>images/projectsbig.png');
	position: relative;
	float: right;
}
div.contactBig {
	width: 143px;
	height: 32px;
	display: block;
	background: url('<?php echo $base; ?>images/contactBig.png');
	position: relative;
	float: right;
}
div.resumeBig {
	width: 142px;
	height: 26px;
	display: block;
	background: url('<?php echo $base; ?>images/resumeBig.png');
	position: relative;
	float: right;
}
div.stuffIMake {
	width: 227px;
	height: 37px;
	display: block;
	background: url('<?php echo $base; ?>images/stuffIMake.png');
	position: relative;
	float: right;
}
div.aboutThisWebsite {
	width: 195px;
	height: 95px;
	display: block;
	background: url('<?php echo $base; ?>images/aboutThisWebsite.png');
	position: relative;
	float: right;
}
/*	Typography	*/
blockquote {
	font-style: italic;
}
h3 {
	text-align: center;
	color: #565656;
}
span.nodisp {
	display: none;
}
address {
	margin-left: 40px;
}
a.artShowcase {
	display:block;
	width:500px;
	height: 641px;
	background:url('<?php echo $base; ?>images/artShowcase.png') ;
}
</style>
</head>

<body>

<div class="loading">
	<span class="nodisp">Loading</span> </div>
<div id="body" class="body">
	<div class="header">
		<div class="backWrapper">
			<div class="back">
			</div>
		</div>
		<div class="logo">
			<span class="nodisp">Chirag Sangani</span> </div>
		<div class="menuBar">
			<div class="menuItem">
				<a class="menuLink home"><span class="nodisp">Home</span></a></div>
			<div class="menuItem">
				<a class="menuLink projects"><span class="nodisp">Projects</span></a></div>
			<div class="menuItem">
				<a class="menuLink creativity"><span class="nodisp">Creativity</span></a></div>
			<div class="menuItem">
				<a class="menuLink resume"><span class="nodisp">Resume</span></a></div>
			<div class="menuItem">
				<a class="menuLink contact"><span class="nodisp">Contact</span></a></div>
		</div>
		<div class="clear">
		</div>
	</div>
	<div class="contentWrapper">
		<div class="content">
		</div>
		<div class="footer">
			<div class="copyright">
				<span class="nodisp">Copyright Chirag Sangani</span> </div>
			<div class="disclaimer footerLink">
				<span class="nodisp">Disclaimer</span> </div>
			<div class="about footerLink">
				<span class="nodisp">About this site</span> </div>
			<div class="clear">
			</div>
		</div>
	</div>
</div>
<div id="skull" class="skull">
</div>
<div id="thread" class="thread">
</div>
<div class="backGradient pink">
</div>
<div class="backGradient blue">
</div>
<div class="backGradient yellow">
</div>
<div class="backGradient green">
</div>
<div class="error">
	<h3>Error!</h3>
	<p>Unable to load page. Please check your internet connection or try again later.</p>
</div>
<noscript>
<div class="noscript">
<h3>Error!</h3>Javascript is required to view this website. Please enable javascript       
in your browser options.</div></noscript>
<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=5374486; 
var sc_invisible=1; 
var sc_security="54f79320"; 
</script>
<script src="http://www.statcounter.com/counter/counter_xhtml.js" type="text/javascript"></script>
<noscript>
<div class="statcounter">
<a class="statcounter" href="http://statcounter.com/tumblr/" title="counter on tumblr">
<img alt="counter on tumblr" class="statcounter" src="http://c.statcounter.com/5374486/0/54f79320/1/" />
</a></div>
</noscript>
<!-- End of StatCounter Code -->

</body>

</html>
