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
<title>Competitions - Boomerang | Takneek</title>
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
			<h1>Boomerang</h1>
			<address>By Aeromodelling Club</address>
			<p>Fabricate a boomerang from balsa plywood which can follow nearly circular path of as large radius as possible and should land at minimum distance from the thrower.</p>
			<ul>
			<li>The boomerang will be thrown by a member of the team.</li>
			<li>The efficiency of a boomerang will be measured by the closeness of landing with respect to throwing person and the maximum distance covered by boomerang.</li>
			<li>Each team will be given three chances and the best out of three will be considered for final judgement.</li>
			<li>Participant can make any changes to the boomerang, but can't use another boomerang.</li>
			<li>The materials (balsa plywood, adhesives, etc.) required for the boomerang will be provided by the organizers. Participants are free to use any other materials to fabricate 
			the boomerang.</li>
			<li>Boomerang should be handmade. Readymade models are strictly not allowed.</li>
			<li>Limited Number of teams will be allowed to participate from each Pool. So, register yourself as soon as possible.</li>
			</ul>
			<h4>Team Specifications:</h4>
			<ul><li>A team must consist of minimum 3 members.</li></ul>
			<h4>Judging Criteria:</h4>
			<p>A pole will be situated at 8m from throwing point. Distance of boomerang from throwing point will be measured. This distance will be considered as score of the team. Boomerang crossing pole will get a deduction by 25% in score. The team with the least score will win. </p>
			<h4>Contacts:</h4>
			<ol>
			<li>Abhineet Gupta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="mailto:abhiji@iitk.ac.in">abhiji@iitk.ac.in</a>&nbsp;&nbsp;&nbsp;&nbsp;	9452961625</li>
			<li>Atul Nipane&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="mailto:nipane@iitk.ac.in">nipane@iitk.ac.in</a>&nbsp;&nbsp;	9889914818</li>
			<li>Mitul Kumar Sonker&nbsp;&nbsp;&nbsp;	<a href="mailto:mitul@iitk.ac.in">mitul@iitk.ac.in</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	9795108655</li>
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
