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
<title>Contacts | Takneek</title>
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
				<h2>Contacts</h2>
				<p>Puneet Singh Rathor<br />
				General Secretary<br />
				Science and Technology Council<br />
				Students&#39; Gymkhana<br />
				IIT Kanpur-208016<br />
				<a href="mailto:psrathor@iitk.ac.in">psrathor@iitk.ac.in</a>, 
				<a href="mailto:sntsecy@iitk.ac.in">sntsecy@iitk.ac.in</a><br />
				Phone: +91-9956664320, 0512-259-4807</p>
				<h3>Club Coordinators</h3>
				<h4>Aeromodelling Club</h4>
				<ol>
					<li>Atul Nipane&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:nipane@iitk.ac.in">nipane@iitk.ac.in</a></li>
					<li>Abhineet Gupta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:abhiji@iitk.ac.in">abhiji@iitk.ac.in</a></li>
					<li>Mitul Kumar Sonkar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:mitul@iitk.ac.in">mitul@iitk.ac.in</a></li>
				</ol>
				<h4>Astronomy Club</h4>
				<ol>
					<li>Karthik Vijayakumar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:karthikv@itk.ac.in">karthikv@itk.ac.in</a></li>
					<li>Ronak Shah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:ronaks@iitk.ac.in">ronaks@iitk.ac.in</a></li>
				</ol>
				<h4>Business Club</h4>
				<ol>
					<li>Abhishek Sharma&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:sharmaj@iitk.ac.in">sharmaj@iitk.ac.in</a></li>
					<li>Avani Nandini&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:nadini@iitk.ac.in">nadini@iitk.ac.in</a></li>
					<li>Vivek Gera&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:vvgr@iitk.ac.in">vvgr@iitk.ac.in</a></li>
				</ol>
				<h4>Electronics Club</h4>
				<ol>
					<li>Ankit Gupta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:angupta@iitk.ac.in">angupta@iitk.ac.in</a></li>
					<li>Anubhav Singla&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:anubhav@iitk.ac.in">anubhav@iitk.ac.in</a></li>
					<li>Siddharth Garg&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:gsid@iitk.ac.in">gsid@iitk.ac.in</a></li>
				</ol>
				<h4>Gliding Club</h4>
				<ol>
					<li>Dipanshu Bansal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:dipanshu@iitk.ac.in">dipanshu@iitk.ac.in</a></li>
				</ol>
				<h4>HAM Club</h4>
				<ol>
					<li>Prakhar Jaiswal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:prakharj@iitk.ac.in">prakharj@iitk.ac.in</a></li>
				</ol>
				<h4>Programming Club</h4>
				<ol>
					<li>Abhilash Jindal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:ajindal@iitk.ac.in">ajindal@iitk.ac.in</a></li>
					<li>Diptarka Chakravarty&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:dipchak@iitk.ac.in">dipchak@iitk.ac.in</a></li>
				</ol>
				<h4>Robotics Club</h4>
				<ol>
					<li>Ankur Agrawal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:ankuragr@iitk.ac.in">ankuragr@iitk.ac.in</a></li>
					<li>Ashish Kumar Bajpai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:ashishkb@iitk.ac.in">ashishkb@iitk.ac.in</a></li>
					<li>Nishant Agrawal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:nishanta@iitk.ac.in">nishanta@iitk.ac.in</a></li>
				</ol>
				<h3>Tech-Cell Members</h3>
				<ol>
					<li>Manish Kumar Singh&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:manisks@iitk.ac.in">manisks@iitk.ac.in</a></li>
					<li>Paras Gupta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:parasg@iitk.ac.in">parasg@iitk.ac.in</a></li>
					<li>Pratyush Pandey&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:prpandey@iitk.ac.in">prpandey@iitk.ac.in</a></li>
					<li>Pulkit Agrawal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:pulkit@iitk.ac.in">pulkit@iitk.ac.in</a></li>
					<li>Sushobhan Nayak&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:snayak@iitk.ac.in">snayak@iitk.ac.in</a></li>
					<li>Vinamra Agrawal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:vinagr@iitk.ac.in">vinagr@iitk.ac.in</a></li>
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
