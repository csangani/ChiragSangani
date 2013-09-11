<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Website designed by Chirag Sangani (http://www.chiragsangani.com). Contact at andromorr@gmail.com for administrative issues or bug reports-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php include_once("./inc/head.inc"); ?>
<title>Home | Electronics Club | IIT Kanpur</title>
<style type="text/css">
#home-introvideo {
	text-align: center;
}
#home-calendar{
	display:block;
	background:url('./images/calendar.png');
	width:95px;
	height:16px;
}
#home-electrovate{
	display:block;
	background:url('./images/electrovate.png');
	width:200px;
	height:25px;

}
</style>
</head>

<body>

<?php include_once("./inc/bg.inc"); ?>
<div id="body">
	<?php include_once("./inc/header.inc"); ?><?php include_once("./inc/announcements.inc"); ?>
	<div id="content-wrapper">
		<?php include_once("./inc/search.inc"); ?>
		<div class="block">
			<div class="block-t">
				<div class="block-l-r">
					<div id="content" class="block-l">
						<div id="home-introvideo">
							<object height="475" width="600">
								<param name="movie" value="http://www.youtube.com/v/ieOqYrcfMF8?fs=1&amp;hl=en_GB&amp;rel=0">
								</param>
								<param name="allowFullScreen" value="true">
								</param>
								<param name="allowscriptaccess" value="always">
								</param>
								<embed allowfullscreen="true" allowscriptaccess="always" height="475" src="http://www.youtube.com/v/ieOqYrcfMF8?fs=1&amp;hl=en_GB&amp;rel=0" type="application/x-shockwave-flash" width="600">
								
								
								</embed>
							</object>
						</div>
						<p>The Electronics Club is a hobby group that aims to teach 
						and help people understand the seemingly incomprehensible 
						electronic gadgets in the world today, and also assists 
						people in developing their own devices. To this end, various 
						lectures, workshops, projects as well as competitions throughout 
						the year concerning both analog as well as digital electronics 
						keep the calendar busy and the participants, learning.</p>
						<p>In this rapidly moving world, where everyday a new technology 
						comes into existence, it is extremely hard to keep abreast 
						with all the technical know-how, but if our basic concepts 
						are intact then we can aim for the top. Innovation, Imagination 
						and Application is our motto. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="column-wrapper">
		<div class="block">
			<div class="block-t">
				<div class="block-r-r">
					<div id="column-u" class="block-l">
						<div id="home-calendar"></div>
						<p>February: <a href="http://www.techkriti.org">Techkriti</a></p>
					</div>
				</div>
			</div>
		</div>
		<?php include_once("inc/column.inc"); ?></div>
	<div class="clear">
	</div>
	<?php include_once("./inc/footer.inc"); ?></div>
<div id="cse-search-form">
</div>

</body>

</html>
