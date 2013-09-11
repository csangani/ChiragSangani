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
<title>Competitions - Rube Goldberg | Takneek</title>
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
				<h1>Rube Goldberg</h1>
				<blockquote>
					<span style="font-style: italic">&quot;Rube Goldberg, a comically 
					involved, complicated invention, laboriously contrived to perform 
					a simple operation&quot;</span> - Webster&#39;s new world dictionary</blockquote>
				<p>Life is as simple as you make it... but does one truly appreciate 
				simplicity all the time? For those of us, who are tired of straightforward 
				algorithms - put on your thinking hats, and come up with all the 
				bizarre and uncanny ideas you can think of to accomplish the most 
				common tasks.</p>
				<p>For all day-dreamers and dramatists alike, for whom the world 
				is too mundane - unleash yourselves in The Rube Goldberg Challenge 
				at Techkriti &#39;10, where the sole objective is to find the craziest, 
				most complicated, convoluted, and &quot;coolest&quot; way to complete a given 
				task.</p>
				<p>Got you hooked yet? </p>
				<h4>Problem Statement</h4>
				<p>Fill a glass of water.</p>
				<h4>Rules</h4>
				<ul>
					<li>The machine must complete the task as described in the challenge.</li>
					<li>The machine must be no larger than 6mx6mx6m.</li>
					<li>The machine must have a minimum of fifteen (15) steps. There 
					is no maximum number of steps.</li>
					<li>The machine must not imply profane, indecent or lewd expressions.
					</li>
					<li>Any loose or flying objects must remain within the set boundaries 
					of the machine.</li>
					<li>You may use electricity however you may use only one power 
					cord outside the specified area.</li>
					<li>No flames may be used on the machine.</li>
					<li>No hazardous materials or explosives can be used on the 
					machine.</li>
					<li>Library books are not allowed. Instead, you may use bricks.</li>
					<li>Parallel steps won&#39;t be counted as steps.</li>
					<li>If any team is not found not following any of the rules, 
					serious action would be taken even upto disqualification from 
					the event.</li>
					<li>You would get the glass to be filled before the start of 
					event from us.</li>
				</ul>
				<h4>Time Guidelines</h4>
				<ul>
					<li>The machine must take no more than five (5) minutes per 
					run.</li>
					<li>The machine is allowed two resets of maximum fifteen (15) 
					minutes.</li>
					<li>No materials must be found in TV room before start of the 
					event i.e. 2 pm on 18th.</li>
					<li>The room would be locked on 20th at 6pm. No extra time should 
					be asked.</li>
					<li>You are required to submit a flowchart in hard copy in F321/Hall 
					1 by 10 pm on 17th.</li>
					<li>Judging would take place on 20th between 6 pm to 9 pm.</li>
				</ul>
				<h3><a href="media/rubeflowchart.pdf">View Sample Flowchart</a></h3>
				<h4>Judging Criterion</h4>
				<ul>
					<li>Innovation.</li>
					<li>Complexity applied in connecting movements.</li>
					<li>Continuity without any human intervention (However, if it 
					is inevitable in order to complete the run, you will be allowed 
					to do so at cost of marks deducted).</li>
					<li>This machine can contain moving electronics gadgets, but 
					the technical manipulations applied by the participants for 
					mechanical motion will carry the weightage.</li>
				</ul>
				<h5>Points break-up</h5>
				<ol id="rubepoints">
					<li>General Impressions<div class="points">
						<strong>10 points</strong></div>
					<ul>
						<li>Explanation/Description
						<div class="points">
							10 points</div>
						</li>
					</ul>
					</li>
					<li>Run Related<div class="points">
						<strong>70 points</strong></div>
					<ul>
						<li>Task Completed
						<div class="points">
							10 points</div>
						</li>
						<li>Visibility<div class="points">
							10 points</div>
						</li>
						<li>Complexity applied in connecting movements<div class="points">
							50 points</div>
						</li>
					</ul>
					</li>
					<li>Aesthetics and compactness<div class="points">
						<strong>20 points</strong></div>
					</li>
					<li>Penalties
					<ul>
						<li>Run Length (time &gt; 5 mins)<div class="points">
							-10 points/min</div>
						</li>
						<li>Human Intervention<div class="points">
							-10 points each</div>
						</li>
						<li>Objects leaving machine<div class="points">
							-5 points each</div>
						</li>
						<li>Water spilling out of glass<div class="points">
							-5 points</div>
						</li>
					</ul>
					</li>
				</ol>
				<h4>Contacts</h4>
				<ol>
					<li>Harsh&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:harshg@iitk.ac.in">harshg@iitk.ac.in</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
					9956772053</li>
					<li>Tusheet&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="mailto:tusheet@iitk.ac.in">tusheet@iitk.ac.in</a>&nbsp;&nbsp;&nbsp; 
					9956817156 </li>
				</ol>
				<h3>Frequently Asked Questions</h3>
				<ol>
					<li>&nbsp;I have no idea about Rube Goldberg. Can&#39;t you tell 
					me what exactly it is?<blockquote>
&nbsp;Well, yeah. Rube Goldberg Machine is a series of complicated motions / processes 
						which in the end conducts some specified task. For example, 
						you can take this sequence----If Tom throws the golf ball 
						upwards--- ball hits the ceiling fan--- gets deflected and 
						falls on a book stack--- books starts falling on the table--- 
						and finally hit the keyboard on the computer. Here, if Tom 
						did all these stuff knowingly, he just made a Rube Goldberg 
						Machine. Simple.. isn&#39;t it?</blockquote>
					</li>
					<li>How do you define a step?
					<blockquote>
						A step will be counted as any action or a series of similar 
						action which are a part of your Rube Goldberg Mechanism. 
						Do not count similar steps as many-For example-In a Dominoes-different 
						objects will initiate the fall of each other but it will 
						be counted as one step only. It is expected that each step 
						will initiate the next step (until it is not a termination 
						of some branch steps).</blockquote>
					</li>
					<li>What type of steps will fetch more marks?<blockquote>
&nbsp;You should expect more marks if you have applied some complex yet accurate 
						step. Your innovation will certainly increase your points. 
						Just running some electronic toy may do your job, but it 
						is less likely to fetch marks.</blockquote>
					</li>
					<li>Is human intervention allowed?
					<blockquote>
						Yes we may allow maximum 2 human interventions in case we 
						see that the mechanism is not able to complete its task. 
						But one should not make human intervention as a part of 
						his mechanism because in such cases we would not allow it. 
						Human intervention will also lead to negative marking.</blockquote>
					</li>
					<li>Are we expected to make all the parts at the time of competition 
					itself?
					<blockquote>
						No - you are allowed to make sub parts at your respective 
						places and bring them,to do the assembling.</blockquote>
					</li>
					<li>What&#39;s the prize?
					<blockquote>
						The winner of this zonal event will be selected for the 
						finals in Techkriti &#39;10 at IIT Kanpur.
					</blockquote>
					</li>
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
