<!--date=20080102 -->
<?php include("../../headercat.php"); ?>

<h1>Electrical Quantities and Components</h1>

<p>For the most part, the metric system is used to measure and calculate electrical quantities in circuits and components. In the case of very large or small numbers, Engineering Notation is used.</p>
<p><code> .0000000000001    = 10 to the negative 12th power = pico  (p)<br>
.0000000001                = 10 to the negative 9th power    = nano (n)<br>
.0000001                            = 10 to the negative 6th power   =    micro (u)<br>
.0001                                       = 10 to the negative 6th power   =       milli (m)<br>
1                              = Base Units                                       =<br>
1,000             = 10 to the third power         = kilo (k)<br>
1,000,000         = 10 to the sixth power         = mega (M)<br>
1,000,000,000     = 10 to the ninth power         = giga (G)<br>
1,000,000,000,000 = 10 to the twelfth power       = tera (T)</code></p>
<p>This makes it much easier to deal with large numbers and quickly cancel out exponents when doing calculations. The power of ten tells us how many places and which direction to move the decimal point. Say you have a 10,000 ohm resistor, this is easily written as a 10k resistor. Say you have a current that is .0000000009 amperes, it would be much easier to say you have 9 nA (nanoamps) of current. One thing to remember when dealing with these different values, it a few shortcuts you can take when calculating them.</p>
<p>Units divided by Kilo units, the answer will be in Milli units. This is useful when calculating current. I = V / R. The resistance is often in Kilo Units, and the current will be small enough to be measured in milli units. The same is true when finding resistance. R = V / I. Since we are taking Units divided by Milli units, the calculation for resistance will be in Kilo units. Lastly, this makes it also true that Milli units times Kilo units will leave you with Base units. This is used when finding voltage. If you think of the Ohm’s Law triangle, you see that as long as you remember what you are working with, there is no need to transpose the values. Your voltage is in base units (ex. 12v), your resistance is in Kilo (k) units (ex. 10k ohms), and finally your current is in Milli (m) units (ex. 4m amps).</p>
<p><strong>Electrical Components</strong></p>
<p>Every circuit must have at least three parts. A Source, Path and a Load. The <em>Source</em> is anything that supplies power to your circuit. Examples of a source are a DC battery, a DC power supply, an AC outlet on the wall in your home, etc. This is the part of your circuit that provides the potential difference (or voltage) to put the current through your <em>Path</em>, and to the <em>Load</em>, with the load being whatever you need to provide power to.</p>
<p>To put it correctly, you could say that the voltage is a potential difference (a difference of polarity between two points) which allows the current (the electrons) to move from the negative post through the circuit. This current runs through the path (your conductor such as wire) to the load, whether it is a resistor, a light bulb, an electric motor, and flows back to the positive post of the source to complete the path of the circuit.<br>
Conductors are the “Path” for your current to flow. What type of conductor should you use? It depends on what you are building and what kind of electrical energy is need to support. Things to consider are the type of metal used, the physical dimensions of the wire, type of wire (solid, stranded or braided) and the wire’s insulation or lack thereof.  THe ideal conductor would have zero resistance, just as the ideal insulator would have zero conductivity. Unfortunately this is not possible in the latter, but in the case of conductors, it is possible to cool the temperature to almost absolute zero ( -273 degrees C), and have it at an almost zero ohm resistance. This is known as Superconductivity.</p>
<p>Wire is gauged by the American Wire Gauge Standard (AWG) and is measured in Circular Mils. A Mil is about a thousandth of an Inch. To find the cross sectional area of a wire, take the following formula.</p>
<p>A = d squared</p>
<p>Where A is the cross sectional area you would like to find (this will be circular mils)<br>
and d is the diameter of wire in mils.</p>
<p>Resistance for a given length also depends on the gauge of wire used. A 100 meter length of 10 gauge wire will have the same resistance as a 50 meter length of 13 gauge.  The general rule of thumb is that for every three wire sizes larger, the current carrying capacity of the wire will double.</p>
<p>Resistors limit current and help determine current values for a given circuit, and can also divide voltages. The four main types of resistors are Carbon-Composition, Precision Film-type, Surface Mount “Chip”, and Wire-Wound. Carbon Composition resistors are available in ranges from 1 ohm to several million ohms. They are economical and are formed by two lead connections encapsulated in a carbon insulating material. Precision Film-Type resistors are more expensive, and as the name suggests, the values can be accurately controlled. Surface mount resistors look like tiny “chips” and are naturally better for smaller applications.  Wire-Wound resistors are typically the larger resistors you find. Due to their size and construction, they are suitable for larger resistances and higher current.</p>
<p>The bands on a resistor tell you what the value of the resistor is, as well as the resistor tolerance (the amount the resistor’s value can fluctuate and still be considered good). In normal Four-Band resistors, the first band is the color code for the first significant figure (digit), the second band is the color code for the second significant figure (digit) and the third band is the color code for the decimal multiplier (number of zeros) to append to the end of the number. The fourth band is the color code for the tolerance level. Normal values are 5%, 10% and 20%.</p>
<p>Below is a color code chart for resistors</p>
<p><code> Black = 0<br>
Brown = 1<br>
Red = 2<br>
Orange = 3<br>
Yellow = 4<br>
Green = 5<br>
Blue = 6<br>
Violet = 7<br>
Gray = 8<br>
White = 9<br>
</code></p>
<p>Now for the decimal multipliers.</p>
<p><code>Black = base units<br>
Brown = 10 (1 zero added)<br>
Red = 100 (2 zeros added)<br>
Orange = 1,000 (3 zeros added)<br>
Yellow = 10,000 (4 zeros added)<br>
Green = 100,000 (5 zeros added)<br>
Blue = 1,000,000 (6 zeros added)<br>
Violet = 10,000,000 (7 zeros added)<br>
Gray = 100,000,000 (8 zeros added)<br>
White = 1,000,000,000 (9 zeros added)<br>
</code></p>
<p>Gold and Silver are used in the 3rd band to move the decimal place to the left.</p>
<p><code>Gold = .1<br>
Silver = .01</code></p>
<p>Gold and Silver are also used in the fourth band to show the resistor’s tolerance (+ or – it’s shown value).</p>
<p><code>Gold = 5%<br>
Silver = 10%<br>
No Band = 20%</code></p>
<p>More to come, laters for now!</p>
<p><font size="1">References:<br>
Foundations of Electronics, by Russell L Meade</font>

<?php include("../../footer.php"); ?>
