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
<title>Competitions - Foxhunt | Takneek</title>
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
				<h1>Foxhunt</h1>
				<address>
					By HAM Club</address>
				<p>Are you a fun loving adventurous person?? Are you over enthusiastic 
				about wireless communication devices?? Then yes, you are at the 
				right place. This Takneek we bring to you the most awaited event 
				- Fox Hunt. It not only involves thrill of finding a hidden fox 
				(transmitter) but also the opportunity of learning the basics of 
				direction finding.</p>
				<p>For those who couldn't get the flavour from above, here is the 
				description: Fox hunting or Transmitter hunting will require amateurs 
				to compete against each other in locating hidden transmitter (a.k.a 
				the Fox) using suitable equipments. It would be a timed race where 
				teams would have to track down the transmitter using an antenna 
				and a receiver that would be provided to them.</p>
				<p>Following are the key points for Fox Hunt:</p>
				<ul>
					<li>Receiver and antenna will be provided to the teams by us.</li>
					<li>Frequency range would lie in 2 meter band i.e. approximately 
					145MHz.</li>
					<li>Multiple rounds for elimination will be employed.</li>
					<li>The fox may be mobile i.e. can be shifted from one location 
					to another during the event which makes the event much more 
					challenging and interesting.</li>
					<li>The Fox can be hidden anywhere within the campus.</li>
					<li>No technical knowledge is required to participate in this 
					event. The participants would be briefed about the operating 
					principles of the equipment and the techniques to be employed 
					before the start of the event. </li>
					<li>All you need is a good sense of direction!</li>
				</ul>
				<p>More information on Foxhunts and Radio Direction Finding (RDF) 
				in general can be found in the links below:</p>
				<ol>
					<li>
					<a href="http://en.wikipedia.org/wiki/Amateur_Radio_Direction_Finding">
					http://en.wikipedia.org/wiki/Amateur_Radio_Direction_Finding</a></li>
					<li><a href="http://www.open-circuit.co.uk/home.php#basics">
					http://www.open-circuit.co.uk/home.php#basics</a></li>
					<li><a href="http://www.utaharc.org/rptr/UARC_RDF1.html">http://www.utaharc.org/rptr/UARC_RDF1.html</a></li>
					<li><a href="http://www.ardf-r2.org/en/whatisardf.shtml">http://www.ardf-r2.org/en/whatisardf.shtml</a></li>
				</ol>
				<h4>Rules and Guidelines</h4>
				<ol>
					<li>Each team would constitute of not more than four members.</li>
					<li>Use of mobile phones is strictly prohibited during the event.</li>
					<li>We would provide each team with a three element Yagi antenna 
					for the 2 meter band and a handheld transceiver.</li>
					<li>Before the start of each round, one of the team members 
					of each team will be required to submit his/her ID card for 
					the security of the equipments we are providing to each team. 
					After returning the equipments at the end of the round he/she 
					can collect his/her ID card back. </li>
					<li>In each round we would hide a fox (transmitter) in the campus. 
					The team which finds it first would be declared the winner for 
					the round.</li>
					<li>Team members should not separate during the foxhunt.</li>
					<li>We may ask the teams to track down multiple foxes also. 
					In that case the team that finds the maximum number of foxes 
					in the given time would be declared the winner.</li>
					<li>The decision of the judges and the coordinators will be 
					final and binding.</li>
				</ol>
				<h4>Schedule and Registration</h4>
				<address>Schedule of Foxhunt:   Sept. 18th to 20th, 2009</address>
				<p>On the spot registration: Registration of teams will start from 18th September itself. Teams will be required to select their preferred slots during the registration. Timings of the slots will be announced during the registration.</p>
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
