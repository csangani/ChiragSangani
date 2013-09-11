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
<title>Competitions - Astro Events | Takneek</title>
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
				<h1>Astro Events</h1>
				<address>
					By Astronomy Club</address>
				<h2>Astro Quiz</h2>
				<p>All of us look up to the sky. All of us love gazing into the 
				night sky wondering what great mysterious and beautiful things lay 
				in the infinite cosmos. Ever wondered about things like how big 
				are other stars compared to sun, how stars are mapped or plotted, 
				how many servicing missions did &#39;Hubble&#39; have? Do you think you 
				really know about stars, planets and whatever that lies out there? 
				Come along and rack your brains in the TAKNEEK ASTRO QUIZ.</p>
				<h4>About</h4>
				<p>The quiz will be held in two stages prelims and finals. The prelims 
				will consist of some elementary questions on astronomy and space 
				exploration. Teams will be selected from the prelims for the finals. 
				The finals will be an elaborate on stage quiz with very CATCHY rounds.</p>
				<h4>Event details</h4>
				<p>Date: Saturday, 19th September<br />
				Time: 8:00pm<br />
				Venue: L8<br />
				Registration: On the spot</p>
				<h2>Star Hunt</h2>
				<p>Fed up of hunting earthly things like treasures and hidden transmitters. 
				It&#39;s time to go way beyond all these, it&#39;s time we start hunting 
				stars.</p>
				<p>You would be given a telescope, a star map, and will be asked 
				to point a specified list of stars in the scope. The students can 
				participate individually or form teams of a maximum of three members. 
				We encourage the beginners to form teams rather than individual 
				participation. </p>
				<p>This event requires prior registration. There are limited number 
				of telescopes; and limited number of slots. Can you afford to miss 
				the opportunity? </p>
				<h4>Event details</h4>
				<p>Date: 18th, 19th and 20th September (on slot basis)<br />
				Time: 8:00pm onwards<br />
				Venue: SAC </p>
				<h4>Registration</h4>
				<p>Send a mail to <a href="mailto:astro.iitk@gmail.com">astro.iitk@gmail.com</a> 
				with the subject &quot;Star Hunt&quot;</p>
				<h2>Article Galore</h2>
				<p>Do you think you know a lot about something in astronomy or space 
				exploration or do you have a flair for writing article writing and 
				can put enough research into your article? This is the perfect time 
				to unravel your talent.</p>
				<p>We invite articles on any topic in Astronomy or Space exploration. 
				Articles can be information based/history based, theoretical or 
				explanatory in nature. </p>
				<p>The best three articles will get an <strong>opportunity be published 
				in the Astronomy Club magazines</strong> issue for this semester.</p>
				<p>Articles could be about one to two pages long when written in 
				times new roman size 14.</p>
				<h4>Last date for entries: 6.00pm, 19th September, 2009</h4>
				<h4>Articcle Submission</h4>
				<p>You can submit your article in either of the following ways:</p>
				<ol>
					<li>Mail to <a href="mailto:astro.iitk@gmail.com">astro.iitk@gmail.com</a> 
					with the subject &quot;Articles Galore&quot;</li>
					<li>Submit the hard copies to any of the Coordinators of Astronomy 
					Club (contact information is available
					<a href="contacts.php">here</a>) </li>
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
