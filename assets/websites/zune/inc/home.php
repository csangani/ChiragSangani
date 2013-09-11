<?php include_once("config.php"); ?>
<div class="leftColumn">
	<div class="aboutme">
	</div>
	<div class="clear">
	</div>
	<div class="contentMenu">
		<div class="contentMenuItem">
			<a href="http://www.facebook.com/chirag.sangani" target="_blank">FACEBOOK</a></div>
		<div class="contentMenuItem">
			<a href="http://www.twitter.com/chiragsangani" target="_blank">TWITTER</a></div>
	</div>
</div>
<div class="rightColumn">
	<script type="text/javascript">	
	$('div.overview').click(function(){loadSpecial("home-overview","div.contentSpecial");});	
	$('div.education').click(function(){loadSpecial("home-education","div.contentSpecial");});
	if(subpage == "education")
		loadSpecial("home-education","div.contentSpecial");
	else 
		loadSpecial("home-overview","div.contentSpecial");
	</script>
	<div class="contentBar">
		<div class="contentBarItem overview">
		</div>
		<div class="contentBarItem education">
		</div>
	</div>
	<div class="clear">
	</div>
	<div class="contentSpecial">
	</div>
</div>
<div class="clear">
</div>
