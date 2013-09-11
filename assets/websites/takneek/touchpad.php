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
<title>Competitions - Smart Touchpad | Takneek</title>
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
				<h1>Smart Touchpad</h1>
				<address>
					By Electronics Club</address>
				<p>Touchpad is the choice for any user interface today. It is found 
				in many popular devices such as iPhone, laptops, PDAs, etc. There 
				are various underlying technology involved in it. Capacitive sensor, 
				which is mostly used in laptop touchpads, where there is a change 
				in the capacitance of the device when a finger is in its proximity. 
				Pressure sensor is another to name in this area. Another approach 
				is to interrupt the light falling on a sensor by a finger. The latter 
				has inspired the Takneek problem statement for Embedded Design this 
				year.</p>
				<center><img src="media/touchpad.png" alt="Smart Touchpad"/></center>
				<h4>Problem Statement</h4>
				<p>To make a touch pad that is capable of recognizing decimal digits 0 to 9 from gestures of finger over it. It can be possible made using suitable arrangement of light sensors (like LDR or TSOP), where touching a particular sensor would cut the light intensity falling over it, and thus touch sensing occurs. The recognized digit has to be displayed suitable by using either of following LCD / 7-Seg-Display / LED array.</p>
				<h4>Extra Features</h4>
				<p>You are free to add any extra features to the above basic problem statement, that can fetch you some extra points. Some suggestions are:</p>
				<ul>
				<li>Hover rather than touch</li>
				<li>Intuitive gestures / multiple gestures</li>
				<li>Extending to some of the alphabets.</li>
				<li>If LCD is used then changing backlight according to: low surrounding intensity (in dark) 
				&gt;&gt; low backlight; the phenomenon which is usually preferred on LCD screens.</li>
				</ul>
				<h3>Rules</h3>
				<h4>Circuit Specifications</h4>
				<ul><li>You are allowed to use only ATmega 16 microcontrollers or equivalent</li></ul>
				<h4>General Rules</h4>
				<ul>
				<li>Students have to participate in teams that can have a maximum of three members</li>
				<li>All teams issuing components from Electronics Club are required to submit a caution money of Rs.500/-</li>
				</ul>
				<h4>Judging Criteria</h4>
				<ul>
				<li>The effectiveness of the algorithm used in solving the problem statement</li>
				<li>Understanding of the basic concepts involved</li>
				<li>The simplicity and ease of use of touch pad aesthetics of the display</li>
				<li>Neatness of bread boarding and soldering</li>
				<li>Extra features</li>
				<li>Presentation</li>
				</ul>
				<h4>Coordinators</h4>
				<div class="smcontact">
					Ankit Gupta<br/>
					341, Hall 3<br />
					<a href="mailto:angupta@iitk.ac.in">angupta@iitk.ac.in</a><br />
					9956772050
				</div>
				<div class="smcontact">
					Anubhav Singla<br/>
					H-113, Hall 5<br />
					<a href="mailto:anubhav@iitk.ac.in">anubhav@iitk.ac.in</a><br />
					9956325404
				</div>
				<div class="smcontact">
					Siddharth Garg<br/>
					266, Hall 2<br />
					<a href="mailto:gsid@iitk.ac.in">gsid@iitk.ac.in</a><br />
					9838571000
				</div>
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
