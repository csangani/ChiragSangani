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
<title>Home | Takneek</title>
</head>

<body>

<?php
include_once("includes/header.inc");
?>
<div class="showcase">
	<div class="homeshow"></div></div>
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
			<h2 style="text-align:center"><a href="result.php">Final Results</a></h2>
				<p>In the first competition of its kind, we present Takneek, the 
				intra-IITK Science and Technology Championship. A competition in which all the 
				halls in IIT Kanpur shall participate to see which hall, in the 
				end, receives the coveted trophy. Takneek will comprise of three 
				days packed with a great variety of tech events, ranging from the 
				intensely time-taking fields of robotics and aero modelling to fun 
				competitions like foxhunt. So, people, get your mental circuits 
				whirring at top speed, and start developing algorithms right on. 
				Because in a competition of the best, only the awesome win...</p>
				<h3><a href="points.php">Points Break-up</a></h3>
				<h3>Competition Pools</h3>
				<blockquote><strong>Pool A:</strong> Hall 2, Hall 1, GH-2, Hall 7<br/>
<strong>Pool B:</strong> Hall 3, Hall 9, Hall 8<br/>
<strong>Pool C:</strong> Hall 5, GH-1, Hall 10, Hall 4, Others (includes SBRA).</blockquote>
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
