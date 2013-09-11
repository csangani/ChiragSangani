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
<title>Competitions - Pushpak | Takneek</title>
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
			<h1>Pushpak</h1>
			<address>By Aeromodelling Club</address>
			<p>Design a glider which will have a <strong>Maximum Range and Time Of Flight</strong> when released vertically downwards with a zero velocity from a height of approximately 10 meters.</p>
			<h4>Rules and Regulations:</h4>
			<ul>
			<li>The glider will be released by a member of the organizing team to ensure uniformity.</li>
			<li>The judging criterion will be the range and time of flight of the glider.</li>
			<li>Each team will be given three chances and the best out of three will be considered for final judgement.</li>
			<li>Participant can make any changes to the glider, but can't use another glider.</li>
			<li>Limited Number of teams will be allowed to participate from each Pool. So, register yourself as soon as possible.</li>
			<li>The materials (Balsa wood, Adhesives etc.) required for the glider will be provided by the organizers. Participants are free to use any other materials to fabricate Glider.</li>
			<li>Gliders should be handmade. Readymade models are strictly not allowed.</li>
			</ul>
			<h4>Team Specifications:</h4>
			<ul><li>A team must consist of minimum 3 members.</li></ul>
			<h4>Contacts:</h4>
			<ol>
			<li>Abhineet Gupta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="mailto:abhiji@iitk.ac.in">abhiji@iitk.ac.in</a>&nbsp;&nbsp;&nbsp;&nbsp;	9452961625</li>
			<li>Atul Nipane&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="mailto:nipane@iitk.ac.in">nipane@iitk.ac.in</a>&nbsp;&nbsp;	9889914818</li>
			<li>Mitul Kumar Sonker&nbsp;&nbsp;&nbsp;	<a href="mailto:mitul@iitk.ac.in">mitul@iitk.ac.in</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	9795108655</li>
			</ol>
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
