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
<title>Talks - Science Communication in India | Takneek</title>
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
			<h1>Science Communication in India</h1>
			<p style="text-align:center">by</p>
			<h3>Dr. Manoj Patairiya</h3>
			<p style="text-align:center">President, Indian Science Writers Association (ISWA)<br/>
Editor, Indian Journal of Science Communication</p>
<h4>Abstract</h4>
<p>Science communication in India has gained significant momentum in last two decades and innovative methods of communicating and popularizing science - cartoons, science fairs, seminars, scientific tours, digital software, scientific poems and plays etc. have been very appreciated and gained popularity. It is the key by virtue of which scientific knowledge is carried to the common man by means of popular science magazines, broadcast programmes etc., yet popular science writing in India is shackled by over dependence on foreign sources, and a lot remains under-exploited. The talk shall be about what exactly is science communication and its present state in India, measures taken recently to build up scientific temper among the common masses and making them realize the significance of science, current shortcomings and the future vision of science communication and journalism in India.</p>
<h4>About the Speaker</h4>
<p>Dr. Manoj Patairiya is the current President of Indian Science Writers' Association (ISWA) and the Editor of Indian Journal of Science Communication. Science communication is not only his profession and hobby, but also his mission, vision and passion. He started his career as a science journalist in 1981 and started 'Vigyanpuri'- a popular science quarterly, of which he has been the editor and publisher. He did his PhD in Science Communication and joined the National Council for Science and Technology Communication (NCSTC) in 1991.</p>
<p>He has written 3 books on science journalism, performed scientific plays, delivered popular science lectures etc. He is a recipient of prestigious B.C. Deb Memorial National Award for Popularisation of Science by Indian Science Congress Association (2000). Center for Global Studies, c/o NASA, USA honored him recently by its International Annual Award for Global Advancement of Science Communication and Popularization. </p>
<p>For more details, kindly refer to 
<a href="http://www.geocities.com/manojpatairiya/index.html">http://www.geocities.com/manojpatairiya/index.html</a></p>
<center><strong>Date: September 19, 2009 (Saturday)<br/>
Venue: L1<br/>
Time: 2:00pm-3:30pm</strong></center>
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
