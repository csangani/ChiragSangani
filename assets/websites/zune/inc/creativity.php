<?php include_once("config.php"); ?>
<div class="leftColumn">
	<div class="stuffIMake">
	</div>
	<div class="clear">
	</div>
	<div class="contentMenu">
	</div>
</div>
<div class="rightColumn">
<script type="text/javascript">
	$('div.overview').click(function(){loadSpecial("creativity-overview","div.contentSpecial");loadSpecial("blank","div.contentMenu");});
	$('div.art').click(function(){loadSpecial("creativity-art","div.contentSpecial");loadSpecial("blank","div.contentMenu");});
	$('div.websites').click(function(){loadSpecial("creativity-websites","div.contentSpecial");loadSpecial("creativity-websites-menu","div.contentMenu");});
	$('div.literature').click(function(){loadSpecial("creativity-literature","div.contentSpecial");loadSpecial("creativity-literature-menu","div.contentMenu");});
	if(subpage == "art"){
		loadSpecial("creativity-art","div.contentSpecial");
		subpage = "blank";
		subsubpage = "blank";
	}
	else if(subpage == "websites"){
		loadSpecial("creativity-websites-menu","div.contentMenu");
		if(subsubpage == "takneek")
			loadSpecial("creativity-websites-takneek","div.contentSpecial");
		else if(subsubpage == "galaxy")
			loadSpecial("creativity-websites-galaxy","div.contentSpecial");
		else if(subsubpage == "eclub")
			loadSpecial("creativity-websites-eclub","div.contentSpecial");
		else if(subsubpage == "ZuneDesign")
			loadSpecial("creativity-websites-ZuneDesign","div.contentSpecial");
		else
			loadSpecial("creativity-websites","div.contentSpecial");
		subpage = "blank";
		subsubpage = "blank";
	}
	else if(subpage == "literature"){
		loadSpecial("creativity-literature-menu","div.contentMenu");
		if(subsubpage == "TheConundrumOfHappiness")
			loadSpecial("creativity-literature-TCOH","div.contentSpecial");
		else if(subsubpage == "TheRealityOfIllusions")
			loadSpecial("creativity-literature-TROI","div.contentSpecial");
		else
			loadSpecial("creativity-literature","div.contentSpecial");
		subpage = "blank";
		subsubpage = "blank";
	}
	else{
		loadSpecial("creativity-overview","div.contentSpecial");
		subpage = "blank";
		subsubpage = "blank";
	}
	</script>

	<div class="contentBar">
		<div class="contentBarItem overview">
		</div>
		<div class="contentBarItem art">
		</div>
		<div class="contentBarItem websites">
		</div>
		<div class="contentBarItem literature">
		</div>
	</div>
	<div class="clear"></div>
	<div class="contentSpecial">
	</div>
	
</div>
<div class="clear">
	</div>