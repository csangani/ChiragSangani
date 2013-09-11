<?php include_once("config.php"); ?>
<div class="leftColumn">
	<div class="projectsBig">
	</div>
	<div class="clear">
	</div>
	<div class="contentMenu">
	</div>
</div>
<div class="rightColumn">
<script type="text/javascript">
	$('div.overview').click(function(){loadSpecial("projects-overview","div.contentSpecial");loadSpecial("blank","div.contentMenu");});
	$('div.electronics').click(function(){loadSpecial("projects-electronics","div.contentSpecial");loadSpecial("projects-electronics-menu","div.contentMenu");});
	if(subpage == "electronics"){
		loadSpecial("projects-electronics-menu","div.contentMenu");
		if(subsubpage == "FPGADesignManual")
			loadSpecial("projects-electronics-FPGADesignManual","div.contentSpecial");
		else if(subsubpage == "DigitalNotepad")
			loadSpecial("projects-electronics-Adenzio","div.contentSpecial");
		else
			loadSpecial("projects-electronics","div.contentSpecial");
		subpage = "blank";
		subsubpage = "blank";
	}
	else{
		loadSpecial("projects-overview","div.contentSpecial");
		subpage = "blank";
		subsubpage = "blank";
	}
</script>
	<div class="contentBar">
		<div class="contentBarItem overview">
		</div>
		<div class="contentBarItem electronics">
		</div>
	</div>
	<div class="clear"></div>
	<div class="contentSpecial">
	</div>
</div>
<div class="clear">
</div>
