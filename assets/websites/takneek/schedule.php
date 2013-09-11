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
<title>Schedule | Takneek</title>
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
				<h1>Schedule</h1>
				<h3>Lectures, Workshops and Events</h3>
				<h4>Monday</h4>
				<ol>
					<li>Rubik&#39;s Cube Workshop, L2, 8:00 pm - 10:00 pm</li>
				</ol>
				<h4>Tuesday</h4>
				<ol>
					<li>Rubik&#39;s Cube Workshop, L7, 6:00 pm - 8:00 pm</li>
					<li>Starhunt Workshop, SAC, 8:00 pm onwards</li>
					<li>Google vs. Microsoft: All that you need to know, L1, 8:30 
					pm - 10:00 pm</li>
				</ol>
				<h4>Wednesday</h4>
				<ol>
					<li>Boomerang Making Workshop, LHC Foyer, 5:30 pm - 8:00 pm</li>
					<li>Starhunt Workshop, SAC, 8:00 pm onwards</li>
					<li>Programming Club Lecture, L2, 8:00 pm - 9:30 pm</li>
					<li>Lecture cum Workshop on how to write a B-Plan, L1, 8:30 
					pm - 10:00 pm</li>
				</ol>
				<h4>Thursday</h4>
				<ol>
					<li>Nirmaan - Popsicle Bridge Making Contest Intro Lecture, L1, 7:00 pm - 8:00 pm</li>
					<li>Starhunt Workshop, SAC, 8:00 pm onwards</li>
					<li>Rise &amp; fall of the big three: GM, Ford &amp; Chrysler, L1, 8:30 
					pm - 10:00 pm</li>
				</ol>
				<h4>Friday</h4>
				<ol>
					<li>Inauguration of Takneek and trophy unveiling by DOSA, Skating 
					Rink, 6:00 pm</li>
				</ol>
				<h4>Saturday</h4>
				<ol>
					<li>Scientoons Talk, L2, 5:00 pm onwards</li>
				</ol>
				<h3>Competitions</h3>
				<h4>Friday</h4>
				<ol>
					<li>Business Case Study competition, L5, 8:30 pm - 10:00 pm</li>
					<li>Foxhunt, SAC, All day</li>
					<li>Rube Goldberg Start, 2:00 pm</li>
					<li>Starhunt, SAC, 8:00 pm onwards</li>
					<li>Rubik's Cube for Y8, L8, 8:00 pm onwards</li>
				</ol>
				<h4>Saturday</h4>
				<ol>
					<li>Embedded Design, E-Club, 9:15 am onwards</li>
					<li>Ultimate Safari, SAC Conference Room, 2:00 pm onwards</li>
					<li>Rubik's Cube for Y9, L8, 2:30 pm onwards</li>
					<li>Pushpak, SAC, 2:30 pm - 5:30 pm</li>
					<li>Astro-quiz, L8, 8:00 pm - 10:00 pm</li>
					<li>Foxhunt, SAC, All day</li>
					<li>Starhunt, SAC, 8:00 pm onwards</li>
					<li>Game Showcase, Skating Rink, 9:30 pm onwards</li>
				</ol>
				<h4>Sunday</h4>
				<ol>
				<li>Slot Machine, E-Club, 10:00 am onwards</li>
				<li>Gearloose, Skating Ring, 11:00 am onwards</li>
				<li>Boomerang, Football Grounds, 3:00 pm - 6:00 pm</li>
				<li>Victory Tower, SAC Conference Room, 5:00 pm</li>
				<li>Foxhunt, SAC, All day</li>
					<li>Starhunt, SAC, 8:00 pm onwards</li>

				<li>Rube Goldberg Judging, 6:00 pm - 9:00 pm</li>
				</ol>
				<h4>Online Events</h4>
				<ol><li>Scimatex: Nutcraker</li></ol>
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
