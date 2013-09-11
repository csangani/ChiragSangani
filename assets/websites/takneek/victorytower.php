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
<title>Competitions - Victory Tower | Takneek</title>
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
				<h1>Victory Tower</h1>
				<address>
					By Robotics Club</address>
				<h4>Problem Statement</h4>
				<p>Build an AUTONOMOUS robot to build a tower shaped structure using 
				three blocks of different colour. The fastest robot wins and will 
				be called the VICTOR-BOT.</p>
				<h4>Rules</h4>
				<ul>
					<li>At the beginning of the game, in the start zone, the 
					dimensions of the Automatic Robot should not exceed 250mm 
					(long) x 250 mm (wide) x 150 mm (height)</li>
					<li>There would be three blocks of three different colours - 
					White, Red &amp; Black</li>
					<li>The order in which the three blocks will be placed in the 
					lifting zones is fixed in order - white (lifting zone 1), 
					black (lifting zone 2) &amp; red (lifting zone 3)</li>
					<li>The order in which the blocks have to be placed for making 
					of tower will be told before the start of the game and can change 
					from game to game. The order of placing of blocks would be (when 
					you are facing the construction zone from the start point) -
					<blockquote>
						Extreme left, extreme right and centre top. Example &gt;&gt; If 
						combination BRW is given then BLACK (extreme left), RED 
						(extreme right) &amp; WHITE (centre top)</blockquote>
					</li>
					<li>Total of 5 minutes will be given to complete the task</li>
					<li>Maximum of 4 members can form a team</li>
				</ul>
				<h4>Scoring (solely decided by the organizers)</h4>
				<ul>
					<li>Task of lifting each block - 20 points</li>
					<li>Task of placing each block at the right position - 30 points</li>
					<li>Completing the tower - 50 points (bonus)</li>
				</ul>
				<h4>Block Specifications</h4>
				<ul>
				<li>The block is 150 x 150 x 150 in dimension</li>
				<li>Groove is 90 (width) x 50 (height) x 150 (length)</li>
				<li>The block would face white line leading to it with groove towards it</li>
				</ul>
				<center><img src="media/victoryblock.png" alt="Block" /></center>
				<h4>Arena Specifications</h4>
				<ul>
				<li>The width of white line will be 2.5 cm with error 0.5cm.</li>
				<li>The figure of arena has all dimensions in mm.</li>
				</ul>
				<center><h4><a href="media/victoryarena.jpg">View Arena</a></h4></center>
				
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
