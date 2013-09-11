<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Website designed by Chirag Sangani (http://www.chiragsangani.com). Contact at andromorr@gmail.com for administrative issues or bug reports-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php include_once("./inc/head.inc"); ?>
<title>Database | Electronics Club | IIT Kanpur</title>
<style type="text/css">
#databasehead {
	background: url('./images/database.png');
	width: 89px;
	height: 16px;
	display: block;
	float: left;
	clear: both;
}
#lectures {
	background: url('./images/lectures.png');
	width: 60px;
	height: 12px;
	display: block;
	float: left;
	margin: 10px 0 0 10px;
	clear: both;
}
#tutorials {
	background: url('./images/tutorials.png');
	width: 65px;
	height: 12px;
	display: block;
	float: left;
	margin: 6px 0 0 10px;
	clear: both;
}
#datasheets {
	background: url('./images/datasheets.png');
	width: 74px;
	height: 12px;
	display: block;
	float: left;
	margin: 6px 0 0 10px;
	clear: both;
}
a.database-sidelink {
	display: block;
	width: 100%;
	height: 12px;
	cursor: pointer;
}
#lectures-block, #tutorials-block, #datasheets-block {
	display: none;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
	$('#lectures').mousedown(function(){
		$('#database-block').slideUp();
		$('#tutorials-block').slideUp();
		$('#datasheets-block').slideUp();
		$('#lectures-block').delay(400).slideDown();
	});
	
	$('#databasehead').mousedown(function(){
		$('#database-block').delay(400).slideDown();
		$('#lectures-block').slideUp();
		$('#datasheets-block').slideUp();
		$('#tutorials-block').slideUp();
	});

	$('#tutorials').mousedown(function(){
		$('#database-block').slideUp();
		$('#lectures-block').slideUp();
		$('#datasheets-block').slideUp();
		$('#tutorials-block').delay(400).slideDown();
	});

	$('#datasheets').mousedown(function(){
		$('#database-block').slideUp();
		$('#lectures-block').slideUp();
		$('#datasheets-block').delay(400).slideDown();
		$('#tutorials-block').slideUp();
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
		<!-- Database block -->
		<div id="database-block" class="block">
			<div class="block-t">
				<div class="block-l-r">
					<div id="content" class="block-l">
						<h1>Database</h1>
						<p>Welcome to the Electronics Club database! Here, you will 
						find a vast database of information, including lecture slides 
						and notes, tutorials and datasheets. To navigate on this 
						page, use the navigation menu on the right.</p>
						<p>Please note that any and all material posted here (apart 
						from datasheets) is the property of the Electronics Club 
						and its members. You are free to use the material provided 
						here under the condition that any information represented 
						elsewhere must be referenced properly to the source.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Lectures block -->
		<div id="lectures-block" class="block">
			<div class="block-t">
				<div class="block-l-r">
					<div id="content" class="block-l">
						<h1>Lectures</h1>
						<ul>
							<li>
							<h4>Digital Logic Design Using Verilog and FPGA Devices</h4>
							<ol>
								<li>
								<p>
								<a href="./assets/lectures/VerilogFPGA-1.pdf" rel="external">
								Part 1</a></p>
								</li>
								<li>
								<p>
								<a href="./assets/lectures/VerilogFPGA-2.pdf" rel="external">
								Part 2</a></p>
								</li>
								<li>
								<p>
								<a href="./assets/lectures/FPGAExamples.zip" rel="external">
								Code Examples</a></p>
								</li>
							</ol>
							</li>
							<li>
							<h4>Embedded Systems (new lecture series)</h4>
							<ol>
								<li>
								<p>
								<a href="./assets/lectures/Embedded-New-1.pdf" rel="external">
								Introduction and I/O</a></p>
								</li>
								<li>
								<p>
								<a href="./assets/lectures/Embedded-New-2.pdf" rel="external">
								Interrupts and Timers </a></p>
								</li>
								<li>
								<p>
								<a href="./assets/lectures/Embedded-New-3.pdf" rel="external">
								Communication </a></p>
								</li>
							</ol>
							</li>
							<li>
							<h4>Embedded Systems (old lecture series)</h4>
							<ol>
								<li>
								<p>
								<a href="./assets/lectures/Embedded-Old-1.pdf" rel="external">
								Basics</a></p>
								</li>
								<li>
								<p>
								<a href="./assets/lectures/Embedded-Old-2.pdf" rel="external">
								Timers and Interrupts</a></p>
								</li>
								<li>
								<p>
								<a href="./assets/lectures/Embedded-Old-3.pdf" rel="external">
								LCD and ADC</a></p>
								</li>
								<li>
								<p>
								<a href="./assets/lectures/Embedded-Old-4.pdf" rel="external">
								Communication</a></p>
								</li>
							</ol>
							</li>
							<li>
							<h4>Basic Digital Electronics</h4>
							<ol>
								<li>
								<p>
								<a href="./assets/lectures/Basic-1.pdf" rel="external">
								Introductory Lecture</a></p>
								</li>
								<li>
								<p>
								<a href="./assets/lectures/Basic-2.pdf" rel="external">
								Electrovate Lecture</a></p>
								</li>
								<li>
								<p>
								<a href="./assets/lectures/Basic-3.pdf" rel="external">
								Electromania Lecture</a></p>
								</li>
							</ol>
							</li>
							<li>
							<h4>Miscellaneous</h4>
							<ol>
								<li>
								<p>
								<a href="./assets/lectures/Analog.pdf" rel="external">
								Analog Electronics</a></p>
								</li>
							</ol>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- Tutorials block -->
		<div id="tutorials-block" class="block">
			<div class="block-t">
				<div class="block-l-r">
					<div id="content" class="block-l">
						<h1>Tutorials</h1>
						<ol>
							<li>
							<p>
							<a href="./assets/tutorials/EmbeddedBook.pdf" rel="external">
							Beginners Guide to Embedded Systems and Robotics</a></p>
							</li>
							<li>
							<p>
							<a href="./assets/tutorials/CapacitiveTouch.pdf" rel="external">
							Capacitive Touch Sensor</a></p>
							</li>
							<li>
							<p>
							<a href="./assets/tutorials/CombinatorialKeypad.pdf" rel="external">
							Combinatorial Keypad</a></p>
							</li>
							<li>
							<p>
							<a href="./assets/tutorials/KarnaughMap.pdf" rel="external">
							Karnaugh Map</a></p>
							</li>
							<li>
							<p>
							<a href="./assets/tutorials/PS2Keyboard.pdf" rel="external">
							PS/2 Keyboard</a></p>
							</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- Datasheets block -->
		<div id="datasheets-block" class="block">
			<div class="block-t">
				<div class="block-l-r">
					<div id="content" class="block-l">
						<h1>Datasheets</h1>
						<h4>ADC, DAC and S/H </h4>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17857/PHILIPS/LF398.html" rel="external">
						LF398 </a>Sample and Hold amplifier </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/8097/NSC/ADC0808.html" rel="external">
						ADC0808/ADC0809 </a>8 bit A/D converter (8 channel) </p>
						<h4>Amplifiers and Comparators</h4>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/53225/FAIRCHILD/KA741.html" rel="external">
						741</a> Single Operational amplifier </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/53583/FAIRCHILD/LM324.html" rel="external">
						LM324 </a>Quad Operational amplifier </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/53576/FAIRCHILD/LM311.html" rel="external">
						LM311 </a>Single Comparator </p>
						<h4>Buffers</h4>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15348/PHILIPS/74F06.html" rel="external">
						7406 7407 </a>4 bit buffer (Open collector) </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15215/PHILIPS/74AHC244.html" rel="external">
						74244 </a>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15216/PHILIPS/74AHC245.html" rel="external">
						74245 </a>Octal buffer, Tristate </p>
						<p><strong>Counters </strong></p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17702/PHILIPS/HEF4029B.html" rel="external">
						4029 </a>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15382/PHILIPS/74F193.html" rel="external">
						74193 </a>4 bit up-down counter </p>
						<h4>Gates </h4>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17699/PHILIPS/HEF4025B.html" rel="external">
						4025 </a>Triple 3-Input NOR Gate </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17730/PHILIPS/HEF4075B.html" rel="external">
						4075 </a>Triple 3-Input OR Gate </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17735/PHILIPS/HEF4082B.html" rel="external">
						4082 </a>Dual 4-Input AND Gate </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17726/PHILIPS/HEF4070B.html" rel="external">
						4070 </a>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15498/PHILIPS/74F86.html" rel="external">
						7486 </a>Quad 2-Input Exclusive OR Gate </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15519/PHILIPS/74HC7266.html" rel="external">
						7266 </a>Quad 2-Input Exclusive NOR Gate </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17663/PHILIPS/HEF4001B.html" rel="external">
						4001 </a>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15346/PHILIPS/74F02.html" rel="external">
						7402 </a>Quad 2-Input NOR Gate </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17672/PHILIPS/HEF4011B.html" rel="external">
						4011 </a>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15345/PHILIPS/74F00.html" rel="external">
						7400 </a>Quad 2-Input NAND Gate </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17727/PHILIPS/HEF4071B.html" rel="external">
						4071 </a>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15419/PHILIPS/74F32.html" rel="external">
						7432 </a>Quad 2-Input OR Gate </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17729/PHILIPS/HEF4073B.html" rel="external">
						4073 </a>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15351/PHILIPS/74F11.html" rel="external">
						7411 </a>Triple 3-Input AND Gate </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17734/PHILIPS/HEF4081B.html" rel="external">
						4081 </a>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15349/PHILIPS/74F08.html" rel="external">
						7408 </a>Quad 2-Input AND Gate </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/216670/PHILIPS/HEF4049B.html" rel="external">
						4049 </a>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17731/PHILIPS/HEF4069.html" rel="external">
						4069 </a>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15347/PHILIPS/74F04.html" rel="external">
						7404 </a>Hex Inverter (NOT Gate) </p>
						<p><strong>Flip Flops </strong></p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17675/PHILIPS/HEF4013B.html" rel="external">
						4013 </a>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15482/PHILIPS/74F74.html" rel="external">
						7474 </a>Dual Delay Flip Flop </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17684/PHILIPS/HEF40175B.html" rel="external">
						40175 </a>Quad Delay Flip Flop </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17700/PHILIPS/HEF4027B.html" rel="external">
						4027 </a>Dual Master/Slave JK Flip Flop </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15356/PHILIPS/I74F112D.html" rel="external">
						74112 </a>Dual JK Flip Flop negative edge </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15375/PHILIPS/N74F173D.html" rel="external">
						74173 </a>Quad Delay Flip Flop (3 state) </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/50324/FAIRCHILD/74F273.html" rel="external">
						74273 </a>Octal Delay Flip Flop </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/50368/FAIRCHILD/74F574.html" rel="external">
						74574 </a>Octal Delay Flip Flop (3 state) </p>
						<p><strong>Latches </strong></p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15426/PHILIPS/74F373.html" rel="external">
						74373 </a>Octal D-type latch, 3 state </p>
						<p><strong>Microcontrollers </strong></p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/74975/MICROCHIP/PIC16F84.html" rel="external">
						PIC16F84 </a>PIC16F84 </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/74972/MICROCHIP/PIC16F87X.html" rel="external">
						PIC16F87x </a>PIC16F87x </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/56216/ATMEL/AT89C52.html" rel="external">
						AT89C52 </a>Atmel 8052 </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/107780/INTEL/8051.html" rel="external">
						8051 </a>INTEL 51 Family Manual </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/78532/ATMEL/ATMEGA16.html" rel="external">
						ATmega16</a>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/174744/ATMEL/ATMEGA16L.html" rel="external">
						ATmega16L</a>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/77378/ATMEL/ATMEGA32.html" rel="external">
						ATmega32</a> Atmel AVR series</p>
						<h4>Multiplexers-Demultiplexers </h4>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17717/PHILIPS/HEF4051B.html" rel="external">
						4051 </a>8 X 1 Analog Multiplexer </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17718/PHILIPS/HEF4052B.html" rel="external">
						4052 </a>4 X 2 Analog Multiplexer </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17723/PHILIPS/HEF4067B.html" rel="external">
						4067 </a>16 X 1 Analog Multiplexer </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17719/PHILIPS/HEF4053B.html" rel="external">
						4053 </a>Triple 2 X 1 Analog Multiplexer </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15368/PHILIPS/74F157.html" rel="external">
						74157 </a>Quad 2 Input Multiplexer </p>
						<p><strong>Shift Registers </strong></p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15383/PHILIPS/74F194.html" rel="external">
						74194 </a>4 bit bidirectional Shift Register </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15370/PHILIPS/74F164.html" rel="external">
						74164 </a>8 bit serial in parallel out Shift Register
						</p>
						<p><strong>Switches </strong></p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17682/PHILIPS/HEF4016B.html" rel="external">
						4016 </a>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/17722/PHILIPS/HEF4066B.html" rel="external">
						4066 </a>Quad bilateral switches </p>
						<p><strong>Transistors </strong></p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/16103/PHILIPS/BC557.html" rel="external">
						BC557 </a>PNP BJT Transistor </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15068/PHILIPS/2N2369.html" rel="external">
						2N2369 </a>NPN BJT Transistor </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15067/PHILIPS/2N2222.html" rel="external">
						2N2222 </a>NPN BJT Transistor </p>
						<p><strong>Voltage Regulators </strong></p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/130557/FAIRCHILD/UA7805.html" rel="external">
						7805 </a>+5 Volt regulator chip </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/230317/TI/UA7812CKC.html" rel="external">
						7812 </a>+12 Volt regulator chip </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/82338/TI/UA7905.html" rel="external">
						7905 </a>-5 Volt regulator chip </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/82324/TI/UA7912.html" rel="external">
						7912 </a>-12 Volt regulator chip </p>
						<p><strong>Miscellaneous </strong></p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/53594/FAIRCHILD/NE555.html" rel="external">
						555 </a>555 Timer </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/50898/FAIRCHILD/DM7416.html" rel="external">
						7416 </a>Hex Inverting Buffers (Open Collector) </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/80214/NSC/DM7447A.html" rel="external">
						7447 </a>BCD to 7 segment decoders </p>
						<p>
						<a href="http://www.datasheetcatalog.org/datasheets2/99/99178_1.pdf" rel="external">
						4008 </a>4 bit binary full adder </p>
						<p>
						<a href="http://pdf1.alldatasheet.com/datasheet-pdf/view/15413/PHILIPS/74F299.html" rel="external">
						74299 </a>8 bit shift register </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15497/PHILIPS/74F85.html" rel="external">
						7485 </a>4 bit binary comparator </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/15564/PHILIPS/74HC221.html" rel="external">
						74221 </a>Monostable Multivibrator </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/73047/MAXIM/MAX232.html" rel="external">
						MAX232 </a>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/67115/INTERSIL/HIN232.html" rel="external">
						HIN232 </a>Level Shifter </p>
						<p>
						<a href="http://www.alldatasheet.com/datasheet-pdf/pdf/22437/STMICROELECTRONICS/L298.html" rel="external">
						L298 </a>Motor driver chip (H-Bridge implementation) </p>
						<p>
						<a href="http://www.farnell.com/datasheets/27715.pdf" rel="external">
						FMBIM-418-F </a>FM R.F. Transceiver Module (RadioMetrix)
						</p>
						<p>Want more datasheets? Check out the
						<a href="./links.php">Links</a> section, or drop an email 
						at <a href="mailto:eclub.iitk@gmail.com">eclub.iitk@gmail.com</a>.</p>
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
						<div id="databasehead">
							<a class="database-sidelink" rel="external"></a>
						</div>
						<div id="lectures">
							<a class="database-sidelink" rel="external"></a>
						</div>
						<div id="tutorials">
							<a class="database-sidelink" rel="external"></a>
						</div>
						<div id="datasheets">
							<a class="database-sidelink" rel="external"></a>
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
