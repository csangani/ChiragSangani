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
<title>Competitions - Slot Machine | Takneek</title>
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
				<h1>Slot Machine</h1>
				<address>
					By Electronics Club</address>
				<p>Ever wanted to gamble, but never lose? Well, now you can, with 
				your very own slot machine with more features that would make any 
				casino in Vegas go green.</p>
				<p>A slot machine (American), fruit machine (British), or poker 
				machine (Australian) is a casino gambling machine with three or 
				more reels which spin when a button is pushed. Slots are also known 
				as one-armed bandits because slot machines were originally operated 
				by a lever on the side of the machine (the one arm) instead of a 
				button on the front panel, and because of their ability to leave 
				the gamer penniless. Many modern machines still have a legacy lever 
				in addition to the button.</p>
				<img alt="Slot Machine" src="media/casino.png" />
				<h4>Problem Statement</h4>
				<p>The objective is to make a slot machine. The machine consists 
				of an LED matrix and push buttons. The matrix will have a minimum 
				of two columns, and each column will have a minimum of two LEDs 
				and a maximum of four. Each column of the matrix would have a &quot;number 
				7&quot;, denoted by a glowing LED, rolling down. Pressing one of the 
				push button will start the game. Successive presses will stop the 
				first and second column respectively. The player will be awarded 
				points depending on the combination he forms, the winning combination 
				being the third row.</p>
				<p>The problem statement will test your ability to apply the concepts 
				of electronics you have learnt so far, your ability to design an 
				efficient and correct logic to solve a particular problem, and your 
				meticulousness in debugging and weeding out unwanted or strange 
				behaviour, or handling extreme and abnormal cases of operation.</p>
				<h4>Circuit Specifications</h4>
				<ul>
					<li>You are allowed to use only 7xxx or 4xxx series of ICs.</li>
				</ul>
				<h4>General Rules</h4>
				<ul>
					<li>Students have to participate in teams that can have a maximum 
					of three members.</li>
				</ul>
				<h4>Judging Criteria</h4>
				<ul>
					<li>The effectiveness of the logic used in solving the problem 
					statement</li>
					<li>Understanding of the logic involved</li>
					<li>The simplicity and ease of use of input interface, and the 
					aesthetics of the display</li>
					<li>Neatness of bread boarding</li>
					<li>Extra features</li>
					<li>Presentation (Block Diagram)</li>
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
