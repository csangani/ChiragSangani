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
<title>Competitions - Scimatex | Takneek</title>
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
			<h1>Scimatex</h1><h3>Problems - Day 2</h3>
			<h4>Mathematics Problem</h4>
			<p>Prove the polynomial f(x)=x<span style="vertical-align:super">n</span>+ax+p, a is an integer and p is a prime such
that p&gt;|a|+1 is irreducible over integers.</p>
<h4>Physics Problem</h4>
<p>Consider an infinitely tall system of identical massive cylinders and
massless planks in which each row has two cylinders and the subsequent
ones have the cylinders placed right above the cylinders of the lower row
separated by planks. The moment of inertia of the cylinders is I = MR<span style="vertical-align:super">2</span>/2 .
There are two cylinders at each level, and the number of levels is infinite.
The cylinders do not slip with respect to the planks, but the bottom plank is
free to slide on a table. If you pull on the bottom plank so that it accelerates
horizontally with acceleration 'a' to the right, parallel to its length, what
is the horizontal acceleration of the bottom row of cylinders?</p>
<hr/>
			<h3>Problems - Day 1</h3>
			<h4>Physics Problem</h4>
			<p>An elliptic cylinder (that is a cylinder with a uniform elliptical cross-section) is kept stationary with its bottommost point touching the topmost point of another identical elliptic cylinder so that both are parallel to the ground. The major axis of any cross section cut perpendicular to the long axis of both the cylinders (i.e. axis parallel to the length of the cylinders) is also horizontal. A uniform gravitational field 
			'g' exists downwards. We shall try to investigate the stability criterion of the upper cylinder corresponding to small rolling displacements on the fixed cylinder. Assume that sufficient friction exists that slipping is absent at the point of contact. Take the semi'major axis of the cylinder to be 
			'a'.</p>
				<p>(a) If the eccentricity of the ellipse is small it can be intuitively guessed that for small displacements the cylinder shall violate the stability criterion and go for a roll never to come back. Find the critical eccentricity of the ellipse such that the cylinder is stable for small rolling displacements. Call it e.</p>
				<p>(b) If the eccentricity of cylinders is taken to be = [sqrt(3/2)]*e , what is the time period of the cylinder for small displacements?</p>
				<h4>Mathematics Problem</h4>
				<p>Find all sets of nine consecutive integers such that for any such set, there exists a partition such that the product of the numbers in the first partition is equal to the product of the numbers in the second partition. Show that your list is exhaustive and for each set in your list give the appropriate partition.</p>
				<h4>Winners</h4>
				<h5>Physics</h5>
				<ol><li>R Lakshminarayan <a href="mailto:rlnb@iitk.ac.in">rlnb@iitk.ac.in</a> (50% points)</li></ol>
				<h5>Mathematics</h5>
				<ol>
				<li>Shubhayu Chatterjee <a href="mailto:shubhayu@iitk.ac.in">shubhayu@iitk.ac.in</a> (100% points)</li>
				<li>Prasanna Muthuraman <a href="mailto:prasu@iitk.ac.in">prasu@iitk.ac.in</a> (90% points)</li>
				</ol>
				<p>Note that the prize (one each for physics and maths) goes to the topmost
name in the corresponding field but the points indicated in the bracket
are for the pool points.</p>
				<hr/>
				<h4>Rules</h4>
				<ul>
				<li>The solutions to the problems are to be sent at sidch@iitk.ac.in before 11:59pm daily. The results shall be up the next day with the problem.</li>
				<li>The mail for the solution should also very clearly mention your hall.</li>
				<li>The first three correct solutions shall be considered for the purpose of awarding points. Each day the name of the top three shall be announced, with the pools receiving 30-20-10 points tentatively on the first day. At the end of the second day, the points awarded will be reconsidered taking into account the maximum eligible solutions received in the two days and the pools shall be awarded a maximum of 30-20-10 points in Takneek.</li>
				
				</ul>
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
