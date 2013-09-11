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
<title>Competitions | Takneek</title>
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
				<h1>Competitions</h1>
				<center><h2><a href="points.php">Points Break-up</a></h2></center>
				<h3><a href="rube.php">Rube Goldberg</a></h3>
				<p>Life is as simple as you make it... but does one truly appreciate simplicity all the time? For those of us, who are tired of straightforward algorithms - put on your thinking hats, and come up with all the bizarre and uncanny ideas you can think of to accomplish the most common tasks...</p>
				<address><a href="rube.php">Read more &gt;&gt;</a></address>
				<h3>Aeromodelling Club</h3>
				<h4><a href="boomerang.php">Boomerang</a></h4>
				<p>Fabricate a boomerang from balsa plywood which can follow nearly 
				circular path of as large radius as possible and should land at 
				minimum distance from the thrower...</p>
				<address>
					<a href="boomerang.php">Read more &gt;&gt;</a></address>
				<h4><a href="pushpak.php">Pushpak</a></h4>
				<p>Design a glider which will have a <strong>Maximum Range and Time 
				Of Flight</strong> when released vertically downwards with a zero 
				velocity from a height of approximately 10 meters...</p>
				<address>
					<a href="pushpak.php">Read more &gt;&gt;</a></address>
				<h3>Astronomy Club</h3>
				<h4><a href="astroevents.php">Astro Events</a></h4>
				<h5>Astro Quiz</h5>
				<p>All of us look up to the sky. All of us love gazing into the 
				night sky wondering what great mysterious and beautiful things lay 
				in the infinite cosmos. Ever wondered about things like how big 
				are other stars compared to sun...</p>
				<h5>Star Hunt</h5>
				<p>Fed up of hunting earthly things like treasures and hidden transmitters. 
				It's time to go way beyond all these, it's time we start hunting 
				stars...</p>
				<h5>Article Galore</h5>
				<p>Do you think you know a lot about something in astronomy or space 
				exploration or do you have a flair for writing article writing and 
				can put enough research into your article...</p>
				<address>
					<a href="astroevents.php">Read more &gt;&gt;</a></address>
				<h3>Electronics Club</h3>
				<h4><a href="casino.php">Slot Machine</a></h4>
				<p>Ever wanted to gamble, but never lose? Well, now you can, with 
				your very own slot machine with more features that would make any 
				casino in Vegas go green...</p>
				<address>
					<a href="casino.php">Read more &gt;&gt;</a></address>
				<h4><a href="touchpad.php">Smart Touchpad</a></h4>
				<p>Touchpad is the choice for any user interface today. It is found 
				in many popular devices such as iPhone, laptops, PDAs, etc. There 
				are various underlying technology involved in it...</p>
				<address>
					<a href="touchpad.php">Read more &gt;&gt;</a></address>
				<h3>HAM Club</h3>
				<h4><a href="foxhunt.php">Foxhunt</a></h4>
				<p>Are you a fun loving adventurous person?? Are you over enthusiastic 
				about wireless communication devices?? Then yes, you are at the 
				right place...</p>
				<address>
					<a href="foxhunt.php">Read more &gt;&gt;</a></address>
					<h3>Programming Club</h3>
					<h4><a href="gameprogram.php">Game Programming</a></h4>
					<p>Design any 2D or 3D game in software of your choice. The game might be a single player or a multi player game...</p>
					<address><a href="gameprogram.php">Read more &gt;&gt;</a></address>
				<h3>Robotic Club</h3>
				<h4><a href="gearloose.php">Gearloose</a></h4>
				<p>With the global energy and pollution crisis, wouldn't it be lovely if one could put to use the energy provided naturally at no extra cost? Of course it would! And so, we challenge you to create a vehicle that runs on wind and wind alone. No Power Sources...</p>
				<address><a href="gearloose.php">Read more &gt;&gt;</a></address>
				<h4><a href="safari.php">Ultimate Safari</a></h4>
				<p>The Y9 robotics enthusiasts... are invited to a safari through 
				the African Jungles... The problem is simple - Count the zebra stripes 
				and avoid barging into the Great Brown Walls (obviously!!) ...</p>
				<address>
					<a href="safari.php">Read more &gt;&gt;</a></address>
				<h4><a href="victory.php">Victory Tower</a></h4>
				<p>Build an AUTONOMOUS robot to build a tower shaped structure using 
				three blocks of different colour. The fastest robot wins and will 
				be called the VICTOR-BOT...</p>
				<address>
					<a href="victorytower.php">Read more &gt;&gt;</a></address>
					<h3>Rubik's Cube</h3>
					<h4><a href="rubik.php">Rubik's Cube Challenge</a></h4>
					<p>Here is your first chance to show your talent of Rubik's 
					Cube solving. We are organizing this event separately for Y8 
					and Y9 batch so that Y9 batch can compete among themselves 
					as they are just beginners...</p>
					<address><a href="rubik.php">Read more &gt;&gt;</a></address>
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
