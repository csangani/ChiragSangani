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
<title>Competitions - Points Break-up | Takneek</title>
<style type="text/css">
div.pointhead {
	text-align: center;
	width: 200px;
	display:inline-block;
	font-weight: bold;
	margin-left: 60px;
}
div.pointcell {
	text-align: center;
	width: 200px;
	display:inline-block;
	margin-left: 60px;
	padding: 10px 0;
}
</style>
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
				<h1>Points Break-up</h1>
				<div class="pointhead">
					Event</div>
				<div class="pointhead">
					Points (1st - 2nd - 3rd)</div>
				<br />
				<div class="pointcell">
					Rube Goldberg</div>
				<div class="pointcell">
					100-70-50</div>
				<br />
				<div class="pointcell">
					Nirmaan</div>
				<div class="pointcell">
					50-35-20</div>
				<br />
				<div class="pointcell">
					Pushpak</div>
				<div class="pointcell">
					40-30-20</div>
				<br />
				<div class="pointcell">
					Foxhunt</div>
				<div class="pointcell">
					40-30-20</div>
				<br />
				<div class="pointcell">
					Touchpad (Embedded)</div>
				<div class="pointcell">
					40-30-20</div>
				<br />
				<div class="pointcell">
					Ultimate Safari</div>
				<div class="pointcell">
					30-20-10</div>
				<br />
				<div class="pointcell">
					Boomerang</div>
				<div class="pointcell">
					30-20-10</div>
				<br />
				<div class="pointcell">
					Astro Quiz</div>
				<div class="pointcell">
					30-20-10</div>
				<br />
				<div class="pointcell">
					Star Hunt</div>
				<div class="pointcell">
					30-20-10</div>
				<br />
				<div class="pointcell">
					B-Case Study</div>
				<div class="pointcell">
					30-20-10</div>
				<br />
				<div class="pointcell">
					Slot Machine</div>
				<div class="pointcell">
					30-20-10</div>
				<br />
				<div class="pointcell">
					Game Programming</div>
				<div class="pointcell">
					30-20-10</div>
				<br />
				<div class="pointcell">
					Gearloose</div>
				<div class="pointcell">
					30-20-10</div>
				<br />
				<div class="pointcell">
					Victory Tower</div>
				<div class="pointcell">
					40-30-20</div>
				<br />
				<div class="pointcell">
					Rubik&#39;s Cube</div>
				<div class="pointcell">
					30-20-10</div>
				<br />
				<div class="pointcell">
					Scimatex: Nutcracker</div>
				<div class="pointcell">
					30-20-10</div>
				<br />
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
