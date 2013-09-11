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
<title>Competitions - Rubik's Cube | Takneek</title>
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
				<h1>Rubik&#39;s Cube</h1>
				<p>Here is your first chance to show your talent of Rubik's Cube solving.
We are organizing this event separately for Y8 and Y9 batch so that Y9 batch can compete among themselves as they are just beginners.
</p>
				<h4>Rules and regulations</h4>
				<ul>
					<li>You can use any cube but if you don&#39;t have a good quality 
					Rubik&#39;s Cube, we will provide you Funskool cubes.</li>
					<li>Event will held on Standard Stack Timers.</li>
				</ul>
				<center>
				<h3><a href="http://www.youtube.com/watch?v=-CQNi_PHW9w">Watch Video</a></h3>
				</center>
				<h4>Prelims</h4>
				<ul>
					<li>Each participant will be given two chances and the best 
					of the two will be taken.</li>
				</ul>
				<h4>Finals</h4>
				<ul>
					<li>Depending on the number of participants we will select about 
					5-6 (may vary) participants for the finals.</li>
					<li>Each finalist will be given 5 chances and average of three 
					will be taken after removing best and worst time.</li>
					<li>We are keeping this event simple but if you want to know 
					WCA rules and regulations please visit
					<a href="http://www.worldcubeassociation.org/regulations/">http://www.worldcubeassociation.org/regulations/</a></li>
				</ul>
				<h4>Team specifications</h4>
				<ul>
					<li>Any pool can have any number of participants</li>
					<li>18th Sept: Open for UG-Y9, All PG Students (Non Y5)</li>
<li>19th Sept: For other batches (UG- Y5, Y6, Y7 and Y8)</li>
				</ul>
				<h4>Event specifications</h4>
				<h5>Y8 Batch</h5>
				<p>Date: 18th September<br />
				Time: 8:00 pm<br />
				Venue: L8</p>
				<h5>Y9 Batch</h5>
				<p>Date: 19th September<br/>Time: 2:30 pm<br/>Venue: L8</p>
				<h4>Contacts</h4>
				<ol>
					<li>Satyam Kumar&nbsp;&nbsp;&nbsp;
					<a href="mailto:satyam@iitk.ac.in">satyam@iitk.ac.in</a>&nbsp;&nbsp;&nbsp;&nbsp; 9956931817</li>
					<li>Shobhit Jain&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:shobhit@iitk.ac.in">shobhit@iitk.ac.in</a>&nbsp;&nbsp;&nbsp;&nbsp;9452004037</li>
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
