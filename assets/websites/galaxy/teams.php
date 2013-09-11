<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="content-type" />
<meta content="index, follow" name="robots" />
<meta content="galaxy, iit, iitk, kanpur, iitkanpur, cultural, event, dance, music, literature, radio, competition" name="keywords" />
<meta content="Galaxy is the inter-hall cultural competition of IIT Kanpur." name="description" />
<meta content="Chirag Sangani, chirags@iitk.ac.in" name="designer" />
<link rel="icon" type="image/png" href="./images/common/icon.png" />
<title>Teams | Galaxy '10 | IIT Kanpur</title>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.mousewheel.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo.js" type="text/javascript"></script>
<script src="js/jquery.clock.js" type="text/javascript"></script>
<script src="js/include.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="css/common.css" />
<link rel="stylesheet" type="text/css" href="css/<?php
if(isset($_GET['theme'])&&$_GET['theme']=="light") echo "light";
else if(isset($_GET['theme'])&&$_GET['theme']=="dark") echo "dark";
else{
	if((int)date("H")<7||(int)date("H")>18) echo "dark";
	else echo "light";
} ?>.css" />
</head>

<body>

<div id="loading">
	<p>loading</p>
	<noscript>
	<p>Javascript is required to view this page properly. Please enable javascript 
	in your web browser.</p></noscript></div>
<div id="outerwrapper">
	<div id="wrapper">
		<div id="header">
			<div id="header-left">
			</div>
			<div class="header-tab">
				<a id="home" href="index.php<?php if(isset($_GET['theme'])) echo "?theme=".$_GET['theme']; ?>"></a></div>
			<div class="header-tab">
				<a id="competitions" href="competitions.php<?php if(isset($_GET['theme'])) echo "?theme=".$_GET['theme']; ?>"></a></div>
			<div class="header-tab">
				<a id="teams" href="teams.php<?php if(isset($_GET['theme'])) echo "?theme=".$_GET['theme']; ?>"></a></div>
			<div class="header-tab">
				<a id="schedule" href="schedule.php<?php if(isset($_GET['theme'])) echo "?theme=".$_GET['theme']; ?>"></a></div>
			<div class="header-tab">
				<a id="results" href="results.php<?php if(isset($_GET['theme'])) echo "?theme=".$_GET['theme']; ?>"></a></div>
			<div class="header-tab">
				<a id="contacts" href="contacts.php<?php if(isset($_GET['theme'])) echo "?theme=".$_GET['theme']; ?>"></a></div>
			<div id="header-right">
				<div id="time-wrapper">
					<div id="time"></div>
					<div id="theme-wrapper">
						<a id="light" class="theme-select" href="<?php $url = explode('?',$_SERVER['REQUEST_URI']); echo $url[0] ?>?theme=light"></a>
						<a id="dark" class="theme-select" href="<?php $url = explode('?',$_SERVER['REQUEST_URI']); echo $url[0] ?>?theme=dark"></a>
						<a id="auto" class="theme-select" href="<?php $url = explode('?',$_SERVER['REQUEST_URI']); echo $url[0] ?>"></a></div>
				</div>
			</div>
			<div class="header-tab">
				<a id="logo" href="index.php<?php if(isset($_GET['theme'])) echo "?theme=".$_GET['theme']; ?>"></a></div>
		</div>
		<div id="content-wrapper">
			<div id="updates"><span id="updates-heading"></span><?php include_once("update.inc"); ?>
				</div>
			<div id="content">
				<span id="notsupported">This browser is not supported! Please update your browser to view this site properly.</span>
				<div id="teams-large">
					<a id="aryans" class="teams" href="aryans.php<?php if(isset($_GET['theme'])) echo "?theme=".$_GET['theme']; ?>"></a>
					<a id="spartans" class="teams" href="spartans.php<?php if(isset($_GET['theme'])) echo "?theme=".$_GET['theme']; ?>"></a>
					<a id="titans" class="teams" href="titans.php<?php if(isset($_GET['theme'])) echo "?theme=".$_GET['theme']; ?>"></a></div>
			</div>
		</div>
		<div id="cfbreak">
		</div>
		<div id="footer"><a id="designby" href="http://www.chiragsangani.com/"></a>
		</div>
	</div>
	<div id="bg0" class="bg">
	</div>
	<div id="bg1" class="bg">
	</div>
	<div id="bg2" class="bg">
	</div>
	<div id="bg3" class="bg">
	</div>
	<div id="bg4" class="bg">
	</div>
	<div id="bg5" class="bg">
	</div>
	<div id="bg6" class="bg">
	</div>
	<div id="leftcover">
	</div>
	<div id="symbol">
		<div id="eye" class="symbol">
		</div>
		<div id="bird" class="symbol">
		</div>
		<div id="arrow" class="symbol">
		</div>
		<div id="helmet" class="symbol">
		</div>
		<div id="swastika" class="symbol">
		</div>
		<div id="flag" class="symbol">
		</div>
		<div id="crown" class="symbol">
		</div>
	</div>
</div>

</body>

</html>
