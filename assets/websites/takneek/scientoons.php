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
<title>Talks - Scientoons | Takneek</title>
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
				<h1>Scientoons: Enjoy science with fun</h1>
				<p style="text-align: center">by</p>
				<h3>Dr. Pradeep Srivastava</h3>
				<center>
				<h5>&quot;Outstanding Young Person of the Year&quot; by Junior Chamber International 
				(USA)</h5>
				</center>
				<h4>Abstract:</h4>
				<p>Scientoons are cartoons based on science. They not only make 
				you smile and laugh but also provide information about new researchers, 
				subjects and data in a simple, understandable and though provoking 
				way. Scientoonics is a new branch of science that deals with effective 
				science communication by using these novel scientoons.</p>
				<p>The name &#39;Scientoons&#39; was coined by Dr. Pradeep Srivastava while 
				he was delivering a lecture in 1988, and since then, scientoons 
				have received great international recognition. WHO has appreciated 
				AIDS education and awareness through scientoons. UNESCO has initiated 
				a project based on Scientoons and showed interest to collaborate 
				for exhibits, seminars etc. International Council of Science Collaboration 
				(ICSU) have planned to use scientoons for creating public awareness 
				in Africa in a eight year long program. In a nutshell, scientoons 
				are path breaking in terms of science communication and creating 
				awareness about scientific, environmental and other topics, and 
				they have even been included in course curriculum in some universities 
				and that of Indian Science Communication Society&#39;s Science Journalism 
				course.</p>
				<h4>About the speaker:</h4>
				<p>Dr. Pradeep Srivastava is Senior Scientist in Medicinal &amp; Process 
				Chemistry Division at Central Drug Research Institute, Lucknow. 
				He developed the field of scientoonics while delivering a lecture 
				in 1988 in an Asian conference at NUS, Singapore. He has delivered 
				more than 660 lectures all across the world on Scientoons on topics 
				such as environmental pollution and its impact on human health, 
				development of drugs, waste management, biodiversity, water conservation, 
				nanotechnology etc. He was awarded as the International Young Person 
				of the Year by Junior Chambers Association (USA) - this award is 
				given to 10 persons across the world annually. Singapore based magazine 
				&quot;The Young Scientist&quot; having a readership of more than 1,00,000, 
				named him as the International Brand Ambassador in 2007. He was 
				invited by Royal Swedish Academy and Swedish National Academy on 
				Science and Technology (which awards Nobel Prize in Chemistry) to 
				present a paper on Scientoons in 32nd IUPAC Congress held at Stockholm. 
				European Science festival 2008 also had a session on scientoonics. 
				UNEP (United Nations Environment Panel) has published report on 
				scientoon in its Asia-Pacific News Letter. He is also in the expert 
				panel of DST (Department of Science and Technology), India to conduct 
				Science Journalism workshops all across India.</p>
				<h3>September 19, 2009 (Saturday), L2, 5:00 pm</h3>
				<h4>Let&#39;s enjoy and learn science!</h4>
				<p>Please note: The Scientoons Comic Design Contest does not hold any points.</p>
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
