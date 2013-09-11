<?php include_once("config.php"); ?>

<head>
<meta content="en-us" http-equiv="Content-Language">
</head>

<h3>Digital Design Manual: FPGAs and Verilog</h3>
<p>Field Programmable Gate Arrays (FPGAs) are the rich man&#39;s breadboards. In crude 
terms, they are ICs that can mimic the working of any other digital and, possibly, 
analog IC.</p>
<p>The above definition is crude because it fails to capture a number of details, 
advantages and limitations that are otherwise important while working with FPGAs. 
Most importantly, it fails to justify the very reason why FPGAs are most commonly 
used. In spite of such shortcomings, the definition stands, since it is the simplest 
description that can be given to a layman.</p>
<p>As per a technical definition by
<a href="http://en.wikipedia.org/wiki/Field-programmable_gate_array" target="_blank">
Wikipedia</a>:</p>
<blockquote>
	<p>A <b>field-programmable gate array</b> (<b>FPGA</b>) is an integrated circuit 
	designed to be configured by the customer or designer after manufacturing, 
	hence 
	&quot;field-programmable&quot;. The FPGA configuration is generally specified using a 
	hardware description language (HDL), similar to that used for an application-specific 
	integrated circuit (ASIC) (circuit diagrams were previously used to specify 
	the configuration, as they were for ASICs, but this is increasingly rare). FPGAs 
	can be used to implement any logical function that an ASIC could perform. The 
	ability to update the functionality after shipping, partial re-configuration 
	of the portion of the design and the low non-recurring engineering costs relative 
	to an ASIC design (not withstanding the generally higher unit cost), offer advantages 
	for many applications.</p>
</blockquote>
<p>The keywords are &quot;any logical function that an ASIC could perform&quot; which implies 
FPGAs can be used as a testing base for new ASIC designs. This, and the ability 
to implement any digital logic in a hardware fashion quickly and cheaply make FPGAs 
an attractive option for design engineers and testers.</p>
<p>My personal interest in FPGAs arose when I happened to coordinate the Xilinx 
FPGA Design Challenge at Techkriti &#39;10 (<a href="http://www.techkriti.org/" target="_blank">Techkriti</a> 
is the annual national level technology and management festival of
<a href="http://www.iitk.ac.in" target="_blank">IIT Kanpur</a>) as part of the
<a href="http://www.xilinx.com/university/index.htm" target="_blank">Xilinx 
University Programme</a>. This competition involved the design of an implementation for the 
<a href="http://www.jstor.org/stable/1831029" target="_blank">Black-Scholes algorithm</a> for determining 
options prices on a Xilinx Virtex-5 FPGA kit. My duty as a coordinator extended 
to handling all issues, managerial as well as technical issues. At that point, 
I had been exposed to only basic digital logic through actual breadboarding and 
embedded design using low-cost microcontrollers. The ability of FPGAs to implement 
any digital logic reliably and easily made me undertake this project in my sophomore 
summers under the guidance of
<a href="http://www.cse.iitk.ac.in/users/moona" target="_blank">Dr. Rajat Moona</a> 
of the <a href="http://www.cse.iitk.ac.in/" target="_blank">Department of Computer 
Science and Engineering</a> at IIT Kanpur.</p>
<p>This manual is intended for laboratory sessions accompanying a typical sophomore 
undergraduate course that introduces computer organization. The manual, as well 
as sample solutions were completed within a span of 15 days; this included my personal 
learning since I had not been exposed to FPGAs previously.</p>
<p><a href="<?php echo $base; ?>assets/PDF/VM.pdf" target="_blank">Download the 
PDF version of the manual.</a></p>
<p><a href="<?php echo $base; ?>assets/ZIP/SDLXProcessor.zip" target="_blank">Download 
the sample implementation of a simplified DLX processor.</a></p>
<p>The FPGA kit used is a
<a href="http://www.xilinx.com/products/devkits/HW-SPAR3E-SK-US-G.htm" target="_blank">
Xilinx Spartan-3E Starter Kit</a>. Documentation for this kit is available at the 
product information page. The software used was the
<a href="http://www.xilinx.com/tools/designtools.htm" target="_blank">Xilinx ISE</a> 
software.</p>
<p>The manual does not explicitly teach the basics of Verilog. However, Verilog 
is an easy language to learn and excellent resources are available on the internet. 
In particular, the resource I made use of was <em>
<a href="https://www.digilentinc.com/Products/Detail.cfm?NavPath=2,719,748&amp;Prod=LBE-DD" target="_blank">
Introduction to Digital Design Using Digilent FPGA Boards ─ Block Diagram / Verilog 
Examples</a></em> by Richard E. Haskell and Darrin M. Hanna.</p>
