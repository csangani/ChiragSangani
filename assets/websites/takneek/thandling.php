<?php
 Header("Cache-Control: must-revalidate");

 $offset = 60;
 $ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
 Header($ExpStr);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php
include_once("includes/head.inc");
?>
<title>Workshops - Telescope Handling | Takneek</title>
</head>

<body>

<?php
include_once("includes/header.inc");
?>
<div class="showcase">
	<?php
include_once("includes/showcase.inc");
?></div>
<div class="menuwrapper">
	<div class="menubar">
		<div class="menuback-l">
		</div>
		<div id="menucontainer">
			<?php
include_once("includes/menu.inc");
?></div>
		<div class="menuback-r">
		</div>
	</div>
</div>
<div class="contentwrapper">
	<div class="hr">
	</div>
	<div class="colholder">
		<div class="colwrapper-l">
			<div class="colwrapperinner">
				<?php
include_once("includes/column.inc");
?></div>
		</div>
		<div class="content">
			<div class="contentinner">
				<h1>Telescope Handling</h1>
				<address>
					By Astronomy Club</address>
				<p>Very few of us have ever seen through a telescope before coming 
				here, and even fewer have had the opportunity to handle one. This TAKNEEK we 
				give you an opportunity to learn to use one most important instrument 
				in the history of Science.</p>
				<p>In the workshop you will be taught some basic stars gazing, identification 
				of constellations, major stars, working principles of a telescope, 
				etc. 
				You will have hands on experience of handling a scope. We would 
				have a small competition at the end of the workshop on the same 
				lines as the star hunt. <strong>This workshop requires prior registration.</strong> 
				There are limited number of telescopes; and limited number of slots. 
				Can you afford to miss the opportunity? </p>
				<h4>Workshop Details</h4>
				<p>Date: 14th, 15th, 16th and 17th September (on slot basis, depending on the clarity of the skies)<br/>Time: 8:00pm<br/>Venue: SAC</p>
				<h4>Registration</h4>
				<p>Send a mail to <a href="mailto:astro.iitk@gmail.com">astro.iitk@gmail.com</a> with the subject 
				&quot;Workshop-Star Hunt&quot;</p>
			</div>
		</div>
	</div>
	<div class="clear">
	</div>
</div>
<div class="bottombreak">
</div>
<div class="footer">
	<div class="footerwrapper">
		<?php
include_once("includes/footer.inc");
?></div>
</div>

</body>

</html>
