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
<title>Result | Takneek</title>
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
				<h1>Result</h1>
				<p>The following are the pool standings after the end of Takneek, 
				the annual intra-IITK Science and Technology Championship:</p>
				<p><strong>Pool A</strong> (Hall-2, Hall-1, GH-2, Hall-7) :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>480</strong><br />
				<strong>Pool B</strong> (Hall-3, Hall-9, Hall-8) :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>410</strong><br />
				<strong>Pool C</strong> (Hall-5, Hall-10, GH-1, Hall-4,Others) :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>405</strong></p>
				<p>The participation of GH-1 in various events was remarkable and highly appreciable. Hall 9 participation in Rube Goldberg and the innovativeness of their steps is also commendable.</p>
				<p>The individual event standings are as follows:<br><br>1)
				<strong>Pushpak</strong> - Aeromodelling Club (40-30-20) <br>
				Participation Statistics: (No. of Teams turning up for the 
				event) <br>Pool A: 13 <br>Pool B: 4 <br>Pool C: 2 <br><br>
				Results:<br>First: Ankur, Deepesh Pool B<br>Second: Sumit Kumar, 
				Piyush Dharnidharka, Niwas Bharti Pool A<br>Third: Piyush Negi, 
				Pritam Mishra, Karan Bagadiya, Kishalve Pethia Pool A <br><br>
				-------- <br>2) <strong>Ultimate Safari</strong> - Robotics Club 
				(30-20-10) <br>Participation Statistics: (No. of Teams turning 
				up for the event) <br>Pool A: 10 <br>Pool B: 7 <br>Pool C: 6 <br>
				<br>Results: <br>First: Joy Vipul Choudhary, Aekaansh, Kushagra, 
				Akash Patel Pool C <br>Second: Ayush Goel, Vinit Hinograni, Aman 
				Gupta, Rohit Upasani Pool A<br>Third: Sidhrath Agrawal, Himanshu 
				Gupta, Abhishek Kumar Pool C <br><br>-------- <br>3) <strong>
				Case Study Competition</strong> - Business Club (30-20-10) <br>
				Participation Statistics: (No. of Teams turning up for the 
				event) <br>Pool A: 11 <br>Pool B: 11 <br>Pool C: 6 <br><br>
				Results: <br>First: Abhishek Malik (Y6020), Ancha Prateek 
				(Y6064) Pool A <br>Second: Arijit (Y9125006) Pool C<br>Third: 
				Anurag Dash (Y9115), Navneet Kumar (Y9362) Pool B <br><br>
				Special Mention: Swati Kumari, Anusha Reddy, Sagar Setu, Avinash 
				Verma, Vishnu Agarwal, Rahul Maddheshia, Erum, Lovish and Ankit 
				Kaushik. <br><br>-------- <br>4) <strong>Rubik's Cube</strong> 
				(Total: 30-20-10) <br>Participation Statistics: (No. of people 
				turning up for the event) <br>Pool A: 6 <br>Pool B: 22 <br>Pool 
				C: 14 <br><br>Results: <br>(Y9 and PGs) - (20-13-7)<br><br>
				First: Lakshya Khurana Y9305 Pool B 1 min 07 sec<br>Second: 
				Ahiron Deori Y9043 Pool B 1 min 23 sec<br>Third: Nikhil 
				Pangarkar Y9374 Pool C 1 min 28 sec<br><br>(Y5, Y6, Y7 and Y8) - 
				(10-7-3)<br><br>First: Pulkit Bansal Y7323 Pool A 18.40 sec<br>
				Second: Dishan Gupta Y7142 Pool B 28.32 sec<br>Third: Shruti 
				Ranjan Satpathy Y8490 Pool C 37.23 sec <br><br>-------- <br>5)
				<strong>Astro Quiz</strong> - Astronomy Club (30-20-10) <br>
				Participation Statistics: (No. of Teams turning up for the 
				event) <br>Pool A: 4 <br>Pool B: 7 <br>Pool C: 1 <br><br>
				Results: <br>First: Arshat Singhal, Lovish, Manu.M Pool B <br>
				Second: Nidhi Pashine, Shreya P. Kumar, Ravikiran Gunale Pool C<br>
				Third: Kumar Shubham, Piyush Negi, Anuj Gargava Pool A <br><br>
				-------- <br>6) <strong>Star Hunt</strong> - Astronomy Club 
				(30-20-10) <br>Participation Statistics: (No. of Teams turning 
				up for the event) <br>Pool A: 7 <br>Pool B: 11 <br>Pool C: 4 <br>
				<br>Results: <br>First: Nidhi Pashine, Shreya P Kumar, and Aditi 
				Gupta Pool C Score: 185/200 <br>Second: Kunwar Siddharth Singh, 
				Avinash Verma, Harishanker Pool B Score: 130*/200<br>Third: 
				Vaishali Ashok, Megha Singh Pool C Score: 130*/200 <br><br>* Tie 
				was broken using the number of hints used by the teams. <br><br>
				-------- <br>7) <strong>Game Programming</strong> - Programming 
				Club (30-20-10) <br>Participation Statistics: (No. of Teams 
				turning up for the event) <br>Pool A: 3 <br>Pool B: 4 <br>Pool 
				C: 1 <br><br>Results: <br>First: Pankaj More, Pankaj Bhanu, Arun 
				Raj, Piyush Vyas, Atul Pool B (Ball and Bricks) <br>Second: 
				Karanveer Singh, Rohit Agarwal Pool A (2D Racing) <br>Third: 
				Pranjal Prateek, Saurabh Saxena Pool B (3D Counter Strike)<br>
				<br>--------<br>8) <strong>Touchpad - Embedded</strong> - 
				Electronics Club (40-30-20)<br>Participation Statistics: (No. of 
				Teams turning up for the event)<br>Pool A: 1<br>Pool B: 2<br>
				Pool C: 3<br><br>Results: Judges decided to give 2 first 
				positions and 1 third position, as the event saw great 
				competition among first two circuits and unable to decide a 
				single winner.<br>First: Joy Bhattacharjee, Arun Kumar Rajput, 
				Krishna Kanhaiya Pool B<br>'First': Anshul Modi, Arzoo Katiyar, 
				Keerti Choudhary Pool C<br>Third: Chirag Sangani, Sumeet Kumar, 
				Soumya Jain Pool A<br>--------<br><br>9) <strong>Foxhunt</strong> 
				- HAM Club (40-30-20)<br>Participation Statistics: (No. of Teams 
				turning up for the event)<br>Pool A: 24<br>Pool B: 11<br>Pool C: 
				2<br><br>Results: <br>First: Niraj Kumar, Y D Jaiswal, Manish 
				Kumar (Y9318), Bipin Kedia Pool A<br>Second: Ravi Kumar Arya, 
				Manish Kumar (Y9319), Ashish Paswan, Chaturbhuj Pool A<br>Third: 
				M.M. Sohel Tarir, Nirant Ramakuru, Ayush Goel, Aman Gupta Pool A<br>
				--------<br><br>10) <strong>Nirmaan</strong> - Bridge Making 
				Competition (50-35-20)<br>Participation Statistics: (No. of 
				Teams turning up for the event)<br>Pool A: 3<br>Pool B: 5<br>
				Pool C: 4<br>Maximum Teams allowed from a pool is 5.<br><br>
				Results: <br>First: Amit Kumar, Kumar Kislay, Kedar Khaliya, 
				Vishwadeep, Bhavesh Mittal Pool B<br>Second: Ankita Dashrath 
				Maske, Indu, Neha Lahri, Shraddha Katiyar Pool C<br>Third: Akash 
				Gramin, Shivam, Prateek Mittal, Suyash Baderiya, Shrikant Myskar 
				Pool B<br>--------<br><br>11) <strong>Slot Machine</strong> - 
				Electronics Club (30-20-10)<br>Participation Statistics: (No. of 
				Teams turning up for the event)<br>Pool A: 7<br>Pool B: 9<br>
				Pool C: 7<br><br>Results: <br>First: Anupam Kumar, Apoorva 
				Mishra, Rohan Jinger Pool B<br>Second: Avinash Prem Koyya, 
				Neeraj Kulkarni, Abhinav Prakash Pool A<br>Third: Shubham 
				Banarjee, Ashish Khandelwal, Vempati Anurag Sai Pool A<br>
				--------<br><br>12) <strong>Gearloose</strong> - Wind Surfer 
				(30-20-10)<br>Participation Statistics: (No. of Teams turning up 
				for the event)<br>Pool A: 4<br>Pool B: 2<br>Pool C: 4<br><br>
				Results: <br>First: Rohit Kumar, Ashish Kumar Pool C<br>Second: 
				Rahul, Ashish, Tushar Pool A<br>Third: Abhishek, Aviroop Pool A<br>
				--------<br><br>13) <strong>Boomerang</strong> - Aeromodelling 
				Club (30-20-10)<br>Participation Statistics: (No. of Teams 
				turning up for the event)<br>Pool A: 8<br>Pool B: 3<br>Pool C: 2<br>
				<br>Results: The team with the least distance is the winner.<br>
				First: Nidhi Tusiyan, Sohini Pandeya, Gunjan Kolhe, Ankita Asai, 
				Prarthana P Pool C (0 m)<br>Second: Arpit Indora, Ashesh Anand, 
				Vidit Jindal, Vijay Bal Singh Pool A (0.4 m)<br>Third: Sumit 
				Choka, Anuj Bhargava, Ronak Goyal, Saurabh Chokra Pool A (0.5 m)<br>
				--------<br><br>14) <strong>Victory Tower</strong> - Robotics 
				Club (40-30-20)<br>Participation Statistics: (No. of Teams 
				turning up for the event)<br>Pool A: 1<br>Pool B: 1<br>Pool C: 3<br>
				<br>Results: <br>First: Akshay Mittal, Anjani Varshney, Ankit 
				Kumar, Shubhender Singh, Parth Prateek Pool C<br>Second: Nikhil 
				Upadhyay, Pradeep Sharma, Akash Rastogi, Sandeep Adhikari, 
				Shailendra Pool A<br>Third: Nikunj Gupta, Sahil Singla, Rohit 
				Gangrade, Abhisek Kumar Adarsh Pool C<br>--------<br><br>15)
				<strong>Scimatex</strong> - Nutcracker (30-20-10)<br>
				Participation Statistics: (No. of Submissions)<br>Pool A: 3<br>
				Pool B: 4<br>Pool C: 5<br><br>Results: The results shown here 
				were the first to submit the correct solution(s) <br>Day-1: 
				Physics: R Laxminarayan (Hall-5)<br>Maths: Shubhayu Chatterjee 
				(Hall-5)<br>Prasanna Mutthuraman (Hall-5)<br>Day-2: Physics: 
				Abhishek Dodda (Hall-3)<br>Maths: Palak Bhushan (Hall-9)<br><br>
				First: Pool C<br>Second: Pool B<br>Third: Pool A<br>--------<br>
				<br>16) <strong>Rube Goldberg</strong> (100-70-50)<br><br>
				Results: There was a very close competition between the setup 
				made by Pool A and Pool B. Even after considering 3 penalties on 
				each of these pools, overall points of Pool A were 10 points 
				(the points for completion of task) more than Pool B.<br>Efforts 
				of each of the hall were very laudable, especially by Hall-5 as 
				the level of complexity of their machine steps was remarkable.<br>
				<br>First: 100 points Pool A<br>Second: 70 points Pool B<br>
				Third: 50 points Pool C<br><br>Congratulations to the winning 
				Pool!<br></p>
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
