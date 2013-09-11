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
<title>Competitions - Gearloose | Takneek</title>
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
				<h1>Gearloose</h1>
				<h2>Wind Surfer</h2>
				<p>With the global energy and pollution crisis, wouldn&#39;t it be lovely 
				if one could put to use the energy provided naturally at no extra 
				cost? Of course it would! And so, we challenge you to create a vehicle 
				that runs on wind and wind alone. No Power Sources.</p>
				<h4>Problem Statement</h4>
				<p>You have to make a vehicle which can complete the track given 
				below in the shortest possible time with no human intervention (completely 
				automatic!!!).</p>
				<h4>Rules</h4>
				<ul>
					<li>You can participate in groups of maximum 3 people</li>
					<li>Your vehicle cross-sectional size should not exceed the 
					size of the tube (i.e. &lt; 30X30 cm<span style="vertical-align: super; font-size: small">2</span>) 
					and should be greater than 10X10 cm<span style="vertical-align: super; font-size: small">2</span></li>
					<li>Your vehicle should be completely automatic.</li>
					<li>There should be no source of power installed on your machines. 
					It should run using only the wind blowing in the rectangular 
					duct.</li>
					<li>Your machine should not damage the arena in any way. If 
					that happens, that team would face immediate disqualification.</li>
				</ul>
				<h4>Structure</h4>
				<ul>
					<li>The machine has to traverse the length of the arena in the 
					minimum possible time.</li>
					<li>The machine has to traverse the length of the arena in the 
					minimum possible time.</li>
					<li>Each team will be given 3 runs.</li>
				</ul>
				<h4>Specifications</h4>
				<p>The track is completely closed (rectangular duct-from all sides) 
				except for the openings for the pits and the blowers.</p>
				<center>
				<h3><a href="media/gearloose2.png">View Arena Map</a></h3>
				<address style="text-align: center">
					All dimensions in arena map are in metres</address>
				<img alt="Gearloose" src="media/gearloose1.png" /> </center>
				<h4>Useful links</h4>
				<ol>
					<li>
					<a href="http://www.google.com/patents?id=OSs7AAAAEBAJ&amp;amp;dq=wind+self+steering+mechanism">
					Self Steering Mechanism for sailboats</a></li>
					<li><a href="http://www.pdracer.com/sail/page2.htm">Simple sails</a></li>
				</ol>
				<h4>Contacts</h4>
				<ol>
					<li>Ashish Bajpai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9453287419&nbsp;&nbsp;&nbsp;
					<a href="mailto:ashishkb@iitk.ac.in">ashishkb@iitk.ac.in</a>&nbsp;&nbsp;&nbsp;&nbsp; H-214/5</li>
					<li>Rahul Meena&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9198228797&nbsp;&nbsp;&nbsp;
					<a href="mailto:rahulm@iitk.ac.in">rahulm@iitk.ac.in</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; G206/9</li>
					<li>Varun Mishra&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9956817270&nbsp;&nbsp;&nbsp;
					<a href="mailto:vkmishra@iitk.ac.in">vkmishra@iitk.ac.in</a>&nbsp;&nbsp;&nbsp; G-211/9 </li>
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
