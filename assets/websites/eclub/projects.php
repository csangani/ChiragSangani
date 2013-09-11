<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Website designed by Chirag Sangani (http://www.chiragsangani.com). Contact at andromorr@gmail.com for administrative issues or bug reports-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php include_once("./inc/head.inc"); ?>
<title>Projects | Electronics Club | IIT Kanpur</title>
<style type="text/css">
#projectshead {
	background: url('./images/projects.png');
	width: 91px;
	height: 16px;
	display: block;
	float: left;
	clear: both;
}
#summer10 {
	background: url('./images/summer10.png');
	width: 73px;
	height: 12px;
	display: block;
	float: left;
	margin: 10px 0 0 10px;
	clear: both;
}
#summer09 {
	background: url('./images/summer09.png');
	width: 73px;
	height: 12px;
	display: block;
	float: left;
	margin: 6px 0 0 10px;
	clear: both;
}
#summer08 {
	background: url('./images/summer08.png');
	width: 73px;
	height: 12px;
	display: block;
	float: left;
	margin: 6px 0 0 10px;
	clear: both;
}
#summer07 {
	background: url('./images/summer07.png');
	width: 73px;
	height: 12px;
	display: block;
	float: left;
	margin: 6px 0 0 10px;
	clear: both;
}
#summer07-block, #summer08-block, #summer09-block, #summer10-block {
	display: none;
}
a.projects-sidelink {
	display: block;
	width: 100%;
	height: 12px;
	cursor: pointer;
}
table {
	text-align: center !important;
	width: 100%;
	padding: 10px;
}
table p {
	text-align: center;
}
td {
	border-width: 1px 0 0 0;
	border-style: ridge;
	border-color: #555555;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
	$('#projectshead').mousedown(function(){
		$('#projects-block').delay(400).slideDown();
		$('#summer10-block').slideUp();
		$('#summer09-block').slideUp();
		$('#summer08-block').slideUp();
		$('#summer07-block').slideUp();
	});
	$('#summer10').mousedown(function(){
		$('#projects-block').slideUp();
		$('#summer10-block').delay(400).slideDown();
		$('#summer09-block').slideUp();
		$('#summer08-block').slideUp();
		$('#summer07-block').slideUp();
	});
	$('#summer09').mousedown(function(){
		$('#projects-block').slideUp();
		$('#summer10-block').slideUp();
		$('#summer09-block').delay(400).slideDown();
		$('#summer08-block').slideUp();
		$('#summer07-block').slideUp();
	});
	$('#summer08').mousedown(function(){
		$('#projects-block').slideUp();
		$('#summer10-block').slideUp();
		$('#summer09-block').slideUp();
		$('#summer08-block').delay(400).slideDown();
		$('#summer07-block').slideUp();
	});
	$('#summer07').mousedown(function(){
		$('#projects-block').slideUp();
		$('#summer10-block').slideUp();
		$('#summer09-block').slideUp();
		$('#summer08-block').slideUp();
		$('#summer07-block').delay(400).slideDown();
	});
});
</script>
</head>

<body>

<?php include_once("./inc/bg.inc"); ?>
<div id="body">
	<?php include_once("./inc/header.inc"); ?><?php include_once("./inc/announcements.inc"); ?>
	<div id="content-wrapper">
		<?php include_once("./inc/search.inc"); ?>
		<div id="projects-block" class="block">
			<div class="block-t">
				<div class="block-l-r">
					<div id="content" class="block-l">
						<h1>Projects</h1>
						<p>This is an archive of the various projects undertaken 
						by the club members. Information about the project itself 
						and documentation are made available where possible. Please 
						note that these project documentations are the property 
						of the Electronics Club. You are free to use any of the 
						information made available here provided you attribute the 
						credits to the proper sources.</p>
					</div>
				</div>
			</div>
		</div>
		<div id="summer10-block" class="block">
			<div class="block-t">
				<div class="block-l-r">
					<div id="content" class="block-l">
						<h1>Summer &#39;10</h1>
						<table cellpadding="0" cellspacing="0" style="width: 100%">
							<tr>
								<td>
								<p>Project</p>
								</td>
								<td>
								<p>Team Members</p>
								</td>
								<td>
								<p>Mentor</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Bar Code Reader</p>
								</td>
								<td>
								<p>Anuja Ranjan</p>
								<p>Pallavi Kumari</p>
								<p>Priya Gautam </p>
								</td>
								<td>
								<p>Arzoo Katiyar</p>
								<p>Keerti Choudhry</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Braille Reader</p>
								</td>
								<td>
								<p>Manoj Pandey</p>
								<p>Hunaid Ali Shakkarwala</p>
								<p>Pratyush Sinha</p>
								</td>
								<td>
								<p>Abhinav Prateek</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Caller ID</p>
								</td>
								<td>
								<p>Naincy Pandey</p>
								<p>Shivani Agarwal</p>
								<p>Surbhi Singhania</p>
								<p>Smriti Agarwal</p>
								</td>
								<td>
								<p>Richa Srivastava</p>
								<p>Keerti Choudhry</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Digital Multimeter</p>
								</td>
								<td>
								<p>Adarsh Keshan</p>
								<p>Aviral Vaid</p>
								<p>Mayank Agarwal</p>
								</td>
								<td>
								<p>Arun Kumar Rajput</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Music Equalizer and Visualizer</p>
								</td>
								<td>
								<p>Rajat Arora</p>
								<p>Rishabh Maheshwari</p>
								<p>Rohit Kumar</p>
								<p>Saurabh Bansal</p>
								</td>
								<td>
								<p>Chirag Sangani</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>GPS Navigator</p>
								</td>
								<td>
								<p>Ganesh Pitchiah</p>
								<p>Nitish Goenka</p>
								<p>Manu Agarwal</p>
								</td>
								<td>
								<p>Chirag Sangani</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Graphing Scientific Calculator</p>
								</td>
								<td>
								<p>Nikhil Pangarkar</p>
								<p>Mayank Dang</p>
								<p>Vaibhav Singhal</p>
								</td>
								<td>
								<p>Sumeet Kumar</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Intelligent Traffic<br />
								Control System</p>
								</td>
								<td>
								<p>Pragyanandesh Tripathi</p>
								<p>Palash Jain</p>
								<p>Nitesh Kumar</p>
								</td>
								<td>
								<p>Abhinav Prateek</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Mirror Messaging System</p>
								</td>
								<td>
								<p>Sharan Kumar</p>
								<p>Nirant Ramkuru</p>
								<p>Swaroop Shankar</p>
								</td>
								<td>
								<p>Joy Bhattacharjee</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>POV Display</p>
								</td>
								<td>
								<p>Md. Shadab Alam</p>
								<p>Amit Barjatya</p>
								</td>
								<td>
								<p>Joy Bhattacharjee</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Remote Control of Appliances<br />
								through Telephone</p>
								</td>
								<td>
								<p>Atul Agarwal</p>
								<p>Diwakar Chauhan</p>
								<p>Gaurav Chauda</p>
								<p>Himanshu Agarwal</p>
								</td>
								<td>
								<p>Sumeet Kumar</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Stroboscope</p>
								</td>
								<td>
								<p>Nihil Samdaria</p>
								<p>Akash Manghnani</p>
								<p>Ashutosh Firake</p>
								</td>
								<td>
								<p>Arun Kumar Rajput</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Synthesizer</p>
								</td>
								<td>
								<p>Avinash Koyya</p>
								<p>Neeraj Kulkarni</p>
								<p>Abhinav Prakash</p>
								</td>
								<td>
								<p>Aseem Kushwah</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Touch Notebook</p>
								</td>
								<td>
								<p>Anant Goel</p>
								<p>Anupam Kumar</p>
								<p>Rohit Kumar Sinha</p>
								</td>
								<td>
								<p>Ankit Sharma</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Wireless Health<br />
								Monitoring System</p>
								</td>
								<td>
								<p>Anurag Sai</p>
								<p>Sivaram Konanki</p>
								<p>Lokesh Kriplani</p>
								</td>
								<td>
								<p>Ankit Sharma</p>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div id="summer09-block" class="block">
			<div class="block-t">
				<div class="block-l-r">
					<div id="content" class="block-l">
						<h1>Summer &#39;09</h1>
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td>
								<p>Project</p>
								</td>
								<td>
								<p>Team Members</p>
								</td>
								<td>
								<p>Mentor</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Digital Notebook</p>
								</td>
								<td>
								<p>Chirag Sangani</p>
								<p>Nitin Pal</p>
								<p>Sumeet Kumar </p>
								</td>
								<td>
								<p>Palash Soni</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Portable Function Generator</p>
								</td>
								<td>
								<p>Puneet Chugh</p>
								<p>Soumya Jain</p>
								<p>Varun Jindal </p>
								</td>
								<td>
								<p>Ankit Gupta</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Neural Network Robot</p>
								</td>
								<td>
								<p>Arun Kumar Rajput</p>
								<p>Utkarsh Lath </p>
								</td>
								<td>
								<p>Tanmay Gangwani</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Propeller Clock</p>
								</td>
								<td>
								<p>Joy Bhattacharjee</p>
								<p>Pranay Sharma </p>
								</td>
								<td>
								<p>Arpit Nema</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Infrared Device Controller</p>
								</td>
								<td>
								<p>Devesh Kumar</p>
								<p>Devesh Kumar Singh </p>
								</td>
								<td>
								<p>Arpit Mathur</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>DTMF Decoder</p>
								</td>
								<td>
								<p>Ankit Agrawal</p>
								<p>Himanshu Singh</p>
								<p>Venkata Koppula </p>
								</td>
								<td>
								<p>Anubhav Singla</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>IC Recognizer and Tester</p>
								</td>
								<td>
								<p>Ankita Agarwal</p>
								<p>Anshul Modi</p>
								<p>Richa Srivastava</p>
								<p>Sandhya Kumari </p>
								</td>
								<td>
								<p>Siddharth Garg</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Electronic Voting Machine</p>
								</td>
								<td>
								<p>Rajdeep Chauhan</p>
								<p>Rohit Kumar </p>
								</td>
								<td>
								<p>Siddharth Garg</p>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div id="summer08-block" class="block">
			<div class="block-t">
				<div class="block-l-r">
					<div id="content" class="block-l">
						<h1>Summer &#39;08</h1>
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td>
								<p>Project</p>
								</td>
								<td>
								<p>Team Members</p>
								</td>
								<td>
								<p>Mentors</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Digital IC Tester </p>
								</td>
								<td>
								<p>Abhishek Jain</p>
								<p>Anshul Goyal</p>
								<p>Siddharth Garg </p>
								</td>
								<td>
								<p>Arpit Mathur </p>
								</td>
							</tr>
							<tr>
								<td>
								<p>PC Oscilloscope </p>
								</td>
								<td>
								<p>Anubhav Singla</p>
								<p>Manish Kumar Singh </p>
								</td>
								<td>
								<p></p>
								</td>
							</tr>
							<tr>
								<td>
								<p>POV Display </p>
								</td>
								<td>
								<p>Arpit Nema</p>
								<p>Ankit Malhotra </p>
								</td>
								<td>
								<p>Arpit Mathur </p>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div id="summer07-block" class="block">
			<div class="block-t">
				<div class="block-l-r">
					<div id="content" class="block-l">
						<h1>Summer &#39;07</h1>
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td>
								<p>Project</p>
								</td>
								<td>
								<p>Team Members</p>
								</td>
								<td>
								<p>Mentor</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Wireless toy control<br />
								using tilt sensors </p>
								</td>
								<td>
								<p>Geetak Gupta</p>
								<p>Paritosh Karnatak</p>
								<p>Sharavan Sharma</p>
								<p>Anurag Mishra</p>
								<p>Abhishek Rajput</p>
								<p>Abhishek Srivastava </p>
								</td>
								<td>
								<p>Kunal</p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Overhead tank water<br />
								level indicator </p>
								</td>
								<td>
								<p>Sandip Kumar Gupta</p>
								<p>Arpit Mathur </p>
								</td>
								<td>
								<p>Kshitij Deo </p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Wireless Keyboard </p>
								</td>
								<td>
								<p>Pravesh Kothari</p>
								<p>Abhijeet Gupta</p>
								<p>Shailendra Pal Singh</p>
								<p>Vishal Agarwal</p>
								<p>Anand Verma </p>
								</td>
								<td>
								<p>Utkarsh Upadhyay</p>
								<p>Praneeth </p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Voice Recorder </p>
								</td>
								<td>
								<p>Ankit Singh Rawat</p>
								<p>Varun Aggarwal</p>
								<p>Suniel Meena</p>
								<p>Sunil Meher </p>
								</td>
								<td>
								<p>Utkarsh Upadhyay</p>
								<p>Praneeth </p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Universal Infrared Remote Control<br />
								System for Home Appliances</p>
								</td>
								<td>
								<p>Abhishek Agarwal</p>
								<p>Dinesh Bharadia</p>
								<p>Gaurav Kothari</p>
								<p>Navneet Agarwal </p>
								</td>
								<td>
								<p>Kshitij Deo </p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Digital Calculator</p>
								</td>
								<td>
								<p>Rashmi Singh</p>
								<p>Durgesh Chandel </p>
								</td>
								<td>
								<p>Utkarsh Upadhyay</p>
								<p>Praneeth </p>
								</td>
							</tr>
							<tr>
								<td>
								<p>Karaoke System/<br />
								Graphic Equilizer</p>
								</td>
								<td>
								<p>Divya</p>
								<p>Tanya Gupta</p>
								<p>Jyoti Wadhwani </p>
								</td>
								<td>
								<p>Utkarsh Upadhyay</p>
								<p>Praneeth </p>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="column-wrapper">
		<div class="block">
			<div class="block-t">
				<div class="block-r-r">
					<div id="column-u" class="block-l">
						<div id="projectshead">
							<a class="projects-sidelink" rel="external"></a>
						</div>
						<div id="summer10">
							<a class="projects-sidelink" rel="external"></a>
						</div>
						<div id="summer09">
							<a class="projects-sidelink" rel="external"></a>
						</div>
						<div id="summer08">
							<a class="projects-sidelink" rel="external"></a>
						</div>
						<div id="summer07">
							<a class="projects-sidelink" rel="external"></a>
						</div>
						<div class="clear">
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include_once("inc/column.inc"); ?></div>
	<div class="clear">
	</div>
	<?php include_once("./inc/footer.inc"); ?></div>
<div id="cse-search-form">
</div>

</body>

</html>
