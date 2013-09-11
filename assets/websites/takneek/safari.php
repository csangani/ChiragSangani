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
<title>Competitions - Ultimate Safari | Takneek</title>
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
				<h1>Ultimate Safari</h1>
				<address>
					By Robotics Club</address>
				<h4>Problem Statement</h4>
				<p>The Y9 robotics enthusiasts....are invited to a safari through 
				the African Jungles.... The problem is simple - Count the zebra 
				stripes and avoid barging into the Great Brown Walls (obviously!!)
				</p>
				<h4>Event Specifications</h4>
				<ul>
					<li>A manually controlled robot is to be constructed which traverses 
					the arena like that in the figure below. The robot has to detect 
					the strips automatically. Whenever it detects the strip it has 
					to indicate it by some mean (e.g. glowing an LED). It should 
					clearly show whether it has detected a white, black or green 
					strip.</li>
					<li>Only driving motors will be controlled manually, rest of 
					the task is to be done automatically. </li>
					<li>If a wall is encountered on the path, it should detect it 
					(automatically and not manually) and also show that a wall has 
					been detected (again by some means e.g. LED) and then only the 
					operator can turn the bot. If the bot turns at the encounter 
					of wall without showing that it has detected the wall, then 
					10 marks will be deducted from the final score. This will be 
					applicable for each such turn. By detection of the wall, we 
					mean that though operator knows where the wall is, but he cannot 
					turn the bot at such encounter, also he cannot glow an indicator 
					on such turn manually, but bot should detect it by itself (with 
					the help of a sensor or a switch) and indicate the presence 
					of wall, only then operator can turn the bot.</li>
					<li>At the end of the journey, the robot should tell the exact 
					numbers of white and black strips encountered. It should clearly 
					indicate the number of black and white strips individually. 
					It may use LEDs to show this number.</li>
					<li>Maximum of 5 members can form a team.</li>
				</ul>
				<center><h4><a href="media/safariarena.jpg">View Sample Arena</a></h4></center>
				<h4>Constraints</h4>
				<ol>
				<li>The bot dimensions should not exceed 25 X 25 sq cm.</li>
				<li>Maximum number of sensors that can be used is TWO.</li>
				<li>Maximum Voltage supply should not exceed 12 volts at any point of time.</li>
				</ol>
				<h4>Scoring and Point Guidelines</h4>
				<ul>
				<li>For every correct stripe detection, 10 bugs will be awarded.</li>
				<li>For every wall detection, 15 beetles shall be awarded.</li>
				<li>For every stripe correctly counted and reported by the robot, 5  earthworms will be awarded.</li>
				<li>If the bot takes turn without indicating the presence of wall, 10 bugs will be taken.</li>
				</ul>
					<p>Decision of Judges and coordinators will be final in case of any discrepancy.</p>
				<center><h5>THE TEAM WITH MAXIMUM NUMBER OF INSECTS WINS!!</h5></center>
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
