<?php include_once("config.php"); ?>
<h3>Digital Notepad</h3>
<p>Embedded electronics is at the heart of the revolution that is personal 
electronic devices. At IIT Kanpur, the Electronics Club floats summer projects 
for interested students to learn and develop their own embedded devices. 
Undertaken in my freshman summers, this device, codenamed Adenzio, was the 
culmination of a month of learning about embedded design and programming.</p>
<p>The platform used for the device was the <a href="http://www.atmel.com" target="_blank">Atmel</a>
<a href="http://www.atmel.com/products/AVR/" target="_blank">AVR</a> series of 
microcontrollers. An 
<a href="http://www.atmel.com/dyn/resources/prod_documents/doc2503.pdf" target="_blank">ATmega32</a> part controlled the functionality of the entire 
device. An external EEPROM (<a href="http://www.atmel.com/dyn/resources/prod_documents/doc0336.pdf" target="_blank">AT24C64</a>) connectied via the I2C interface provided 
offline data storage capability.</p>
<p>The highlights of the project were the use of a monochromatic graphical LCD (<a href="http://www.egochina.net.cn/e-shop/ebay/Datasheet/JHD12864E.pdf" target="_blank">JHD12864E</a>), 
the custom-design QWERTY keypad, and the software that brought the components 
together. The graphical LCD, a first for any summer project ever organized by 
the Electronics Club, allowed a menu driven interface with graphical cues. The 
custom &quot;combinatorial&quot; keypad was a unique design that allowed the 
implementation of a large number of keys while using only a fraction of the 
microcontroller&#39;s pins without any external logic.</p>
<p>Finally, the software was written with modularity in mind. Termed as a 
pseudo-operating system, it allowed for entire applications to be added or 
removed just by the addition or removal of a few lines of code.</p>
<p>This project was a major exercise in self-learning. The software used, 
<a href="http://www.atmel.com/dyn/products/tools_card.asp?tool_id=2725" target="_blank">AVR 
Studio</a>, was not popular in the Club as an IDE, and hence I had to work around 
many obstacles. Additionally, I had no formal training in the C language.</p>
<p>The resources used to understand embedded programming are listed below:</p>
<p><a href="http://students.iitk.ac.in/eclub">Electronics Club Database</a></p>
<p><a href="http://www.extremeelectronics.co.in" target="_blank">Extreme 
Electronics</a></p>
<p><a href="http://hubbard.engr.scu.edu/avr/avrlib/" target="_blank">Procyon 
AVRLib</a></p>
<p>Following is the C code for the project. Schematics for the project are not 
available as of yet.</p>
<p><a href="<?php echo $base; ?>assets/ZIP/Adenzio.zip" target="_blank">Adenzio Software</a></p>
<p>The project report and a slideshow presentation are also available:</p>
<p><a href="<?php echo $base; ?>assets/PDF/Adenzio.pdf" target="_blank">Project Report</a></p>
<p>
<a href="<?php echo $base; ?>assets/PDF/AdenzioPresentation.pdf" target="_blank">
Project Presentation</a></p>
