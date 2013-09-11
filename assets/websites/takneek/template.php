<?php
 Header("Cache-Control: must-revalidate");

 $offset = 60;
 $ExpStr = "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
 Header($ExpStr);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="content-type" />
<meta content="index, follow" name="robots" />
<meta content="takneek, techkriti, iit, iitk, kanpur, iitkanpur, electronics, robotics, programming, ham, aeromodelling, club, scitech, competition" name="keywords" />
<meta content="Takneek is the inter-hall SciTech competition of IIT Kanpur." name="description" />
<meta content="Chirag Sangani, chirags@iitk.ac.in" name="designer" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<script src="js/mootools.js" type="text/javascript"></script>
<script src="js/mootools-more.js" type="text/javascript"></script>
<script src="js/takmenu.js" type="text/javascript"></script>
<link href="css/common.css" rel="stylesheet" type="text/css" />
<title>Takneek -</title>
</head>

<body>

<div class="bodywrapper">
	<div class="headerwrapper">
		<div class="headerbar"><div class="snt"></div>
			<div class="logo">
				<a class="logo" href="/"></a></div><div class="gear"><a class="gear" href="/"></a></div>
		</div>
	</div>
<div class="showcase">
	<?php
include_once("includes/showcase.inc");
?></div>
<div class="menuwrapper">
	<div class="menubar">
		<div class="menuback-l">
		</div>
		<div id="menucontainer">
			<ul id="dropdownmenu">
	<li class="menu">
	<div class="mainmenuitem">
		<a href="/"><span class="mainmenutitle">Home</span><span class="mainmenusubtitle">Takneek</span></a></div>
		<ul class="links"></ul>
	</li>
	<li class="menu">
	<div class="mainmenuitem">
		<a><span class="mainmenutitle">Competitions</span><span class="mainmenusubtitle">Problem Statements</span></a></div>
	<ul class="links">
		<li class="droptop"></li>
		<li>
		<div>
			<a href="#">Link 1</a></div>
		</li>
		<li>
		<div>
			<a href="#">Link 2</a></div>
		</li>
		<li>
		<div>
			<a href="#">Link 3</a></div>
		</li>
		<li class="dropbot"></li>
	</ul>
	</li>
	<li class="menu">
	<div class="mainmenuitem">
		<a><span class="mainmenutitle">Events</span><span class="mainmenusubtitle">Workshops &amp; Talks</span></a></div>
	<ul class="links">
		<li class="droptop"></li>
		<li>
		<div>
			<a href="#">Link 1</a></div>
		</li>
		<li>
		<div>
			<a href="#">Link 2</a></div>
		</li>
		<li>
		<div>
			<a href="#">Link 3</a></div>
		</li>
		<li class="dropbot"></li>
	</ul>
	</li>
	<li class="menu">
	<div class="mainmenuitem">
		<a><span class="mainmenutitle">Schedule</span><span class="mainmenusubtitle">Event Timings</span></a></div>
	<ul class="links">
		<li class="droptop"></li>
		<li>
		<div>
			<a href="#">Link 1</a></div>
		</li>
		<li>
		<div>
			<a href="#">Link 2</a></div>
		</li>
		<li>
		<div>
			<a href="#">Link 3</a></div>
		</li>
		<li class="dropbot"></li>
	</ul>
	</li>
	<li class="menu">
	<div class="mainmenuitem">
		<a><span class="mainmenutitle">Gallery</span><span class="mainmenusubtitle">Pics & Vids</span></a></div>
	<ul class="links">
		<li class="droptop"></li>
		<li>
		<div>
			<a href="#">Link 1</a></div>
		</li>
		<li>
		<div>
			<a href="#">Link 2</a></div>
		</li>
		<li>
		<div>
			<a href="#">Link 3</a></div>
		</li>
		<li class="dropbot"></li>
	</ul>
	</li>
	<li class="menu">
	<div class="mainmenuitem">
		<a><span class="mainmenutitle">Contacts</span><span class="mainmenusubtitle">Coordinators</span></a></div>
	<ul class="links"></ul>
	</li>
</ul></div>
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
			<h3>Updates</h3><div class="divider"></div>
<p>Coming Soon!</p>

				</div></div>
			<div class="content">
				<div class="contentinner">
					This is normal text<br />
					<a href="http://www.microsoft.com">This is a link</a><br />
					This is a paragraph:<br />
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
					Nunc vitae arcu euismod neque dignissim adipiscing. Nulla vitae 
					nisl et ante venenatis laoreet. Etiam posuere odio vel eros 
					tincidunt sollicitudin. Mauris a eros mauris, sed sollicitudin 
					leo. Cras quam sapien, tincidunt sed posuere eu, ullamcorper 
					vitae sapien. Phasellus eget turpis metus. Ut eros magna, semper 
					id semper non, pretium et diam. Phasellus eu ligula ipsum, sit 
					amet auctor metus. Integer vel magna quis urna vestibulum vulputate 
					sed eget diam. Vivamus sed lectus augue. Curabitur facilisis 
					odio in justo consectetur consequat. Ut luctus mauris quis quam 
					fringilla varius. Aenean iaculis tempus neque nec imperdiet. 
					Donec sed nisi quam, vel ultrices urna. </p>
					<h1>This is h1</h1>
					<h2>This is h2</h2>
					<h3>This is h3</h3>
					<h4>This is h4</h4>
					<h5>This is h5</h5>
					<h6>This is h6</h6>
					<ul>
						<li>Unordered list item</li>
					</ul>
					<ol>
						<li>Ordered list item</li>
					</ol>
					<dl>
						<dt>Definition Term</dt>
						<dd>Definition</dd>
					</dl>
					<address>
						Address</address>
					<pre>Preformatted</pre>
					<blockquote>
						Blockquote</blockquote>
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
			Webmaster: Chirag Sangani</div>
	</div>
	</div>
</div>

</body>

</html>
