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
<title>Competitions - Game Programming | Takneek</title>
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
				<h1>Game Programming</h1>
				<address>
					By Programming Club</address>
				<p>Design any 2D or 3D game in software of your choice. The game 
				might be a single player or a multi player game.</p>
				<h4>Rules and regulations</h4>
				<ul>
					<li>No form of copying from the net is acceptable.</li>
					<li>If there is any inspiration/copying done then that should 
					be clearly mentioned in a report.</li>
					<li>The code/action script should be submitted before the display 
					of the games.</li>
					<li>Questions would be asked related to the action script so 
					the team should be ready to answer.</li>
				</ul>
				<h4>Team specifications</h4>
				<ul>
					<li>Teams of 2-4 members will be accepted.</li>
				</ul>
				<h4>Judging criterion</h4>
				<ul>
					<li>Graphics</li>
					<li>Gamer&#39;s Choice</li>
					<li>Innovation</li>
					<li>Other Features</li>
				</ul>
				<h3>Register <a href="http://students.iitk.ac.in/programmingclub/takneek.html">here</a></h3>
				<center>
				<h4>Registration closes 11:59 pm, 16th September</h4>
				</center>
				<h4>Contacts</h4>
				<ol>
					<li>Abhilash Jindal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:ajindal@iitk.ac.in">ajindal@iitk.ac.in</a>&nbsp;&nbsp;&nbsp;&nbsp; (+91)9889914733 </li>
					<li>Diptarka Chakravarty&nbsp;&nbsp;&nbsp;
					<a href="mailto:dipchak@iitk.ac.in">dipchak@iitk.ac.in</a>&nbsp;&nbsp;&nbsp; (+91)9956818044</li>
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
