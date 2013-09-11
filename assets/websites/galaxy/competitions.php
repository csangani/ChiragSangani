<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="content-type" />
<meta content="index, follow" name="robots" />
<meta content="galaxy, iit, iitk, kanpur, iitkanpur, cultural, event, dance, music, literature, radio, competition" name="keywords" />
<meta content="Galaxy is the inter-hall cultural competition of IIT Kanpur." name="description" />
<meta content="Chirag Sangani, chirags@iitk.ac.in" name="designer" />
<link rel="icon" type="image/png" href="./images/common/icon.png" />
<title>Competitions | Galaxy '10 | IIT Kanpur</title>
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
				<h1>Competitions</h1>
				<p>All the competitions go here.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non dolor magna. Pellentesque porta massa at quam auctor pulvinar. Sed eu vulputate justo. Vestibulum quis mi in est auctor ornare nec vel ante. Donec posuere volutpat leo sed dictum. Nulla velit purus, aliquet sed dignissim vel, pulvinar eu lorem. Mauris id varius magna. Aliquam urna lorem, scelerisque ac ullamcorper sed, porttitor in odio. Duis eget suscipit justo. Donec eget mi a augue scelerisque ullamcorper varius at mi. Maecenas ac nisi nibh. Donec eget ante nunc, vitae porttitor tellus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non dolor magna. Pellentesque porta massa at quam auctor pulvinar. Sed eu vulputate justo. Vestibulum quis mi in est auctor ornare nec vel ante. Donec posuere volutpat leo sed dictum. Nulla velit purus, aliquet sed dignissim vel, pulvinar eu lorem. Mauris id varius magna. Aliquam urna lorem, scelerisque ac ullamcorper sed, porttitor in odio. Duis eget suscipit justo. Donec eget mi a augue scelerisque ullamcorper varius at mi. Maecenas ac nisi nibh. Donec eget ante nunc, vitae porttitor tellus.

Mauris mattis sapien diam. Fusce ullamcorper diam eget sem semper in porttitor erat varius. Ut ac pharetra neque. Pellentesque ac sapien arcu. Mauris id risus nisl, a faucibus lorem. Nulla eget velit eleifend lectus venenatis ullamcorper. Donec lobortis consequat augue, sed commodo tellus mattis sed. Nullam vitae rutrum dui. Phasellus augue erat, consequat vitae adipiscing sed, hendrerit ut est. Donec auctor quam eget ipsum vehicula scelerisque posuere nisi varius. Nulla auctor diam ac felis rhoncus eget egestas dui adipiscing. Nunc volutpat imperdiet commodo.

Etiam iaculis, ante nec blandit laoreet, ligula quam adipiscing risus, ut dapibus nisi magna vel sem. Quisque eget augue urna, consectetur vehicula ipsum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce gravida felis ac diam ultricies vel euismod dui sagittis. Vestibulum ullamcorper neque sit amet leo tincidunt vel vestibulum arcu tincidunt. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi accumsan ultrices iaculis. Sed quis sagittis ipsum. Cras sed enim orci, aliquam tristique libero. Maecenas tempor mauris semper leo vulputate nec tincidunt augue gravida.

Quisque interdum vehicula est, nec interdum tortor rhoncus id. Cras mi nunc, dignissim et luctus eu, aliquam tempor purus. Pellentesque tristique ligula non metus iaculis commodo vel vitae ipsum. Nulla eleifend neque ut est iaculis lobortis. Duis sed sapien vitae risus venenatis porttitor volutpat sed turpis. Mauris cursus congue nisl ac feugiat. Suspendisse augue neque, iaculis non tincidunt in, posuere at odio. Cras purus mi, imperdiet a viverra et, viverra nec turpis. Praesent porttitor interdum risus, quis imperdiet risus faucibus in. Sed ut ante orci, at facilisis ipsum. </p>
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
