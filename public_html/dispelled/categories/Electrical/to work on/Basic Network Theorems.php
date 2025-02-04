<!--date=20080108 -->
<?php include("../../headercat.php"); ?>

<h1>Basic Network Theorems</h1>

<p>The <strong>superposition</strong> theorem</p>
<p>The superposition theorem states that in linear circuits having more than one source, the voltage across or current through any given element equals the algebraic sum of voltages or currents produced by each source acting alone with the other sources disabled.</p>
<p>Say there is two opposing voltage sources, and two resistors in a series configuration, for simplicity.</p>
<p><img src="http://dispelled.wordpress.com/files/2006/11/networktheorems12.jpg" alt="networktheorems12.jpg" height="275" width="392"></p>
<p>Consider the second voltage source shorted, and calculate current, as well as voltage drops across resistors. We are going to treat each current, voltage source, and voltage drops across resistors seperately, and then subtract them, since they are opposing. Here is our circuit redrawn.</p>
<p><img src="http://dispelled.wordpress.com/files/2006/11/networktheorems2.jpg" alt="networktheorems2.jpg" height="281" width="409"></p>
<p>The current flows from the negative (bottom) of V1, through R2, though R1, and back to the positive (top) of V1. So what we have is:</p>
<p>V1 = 12 volts</p>
<p>R1 = 75,000 ohms<br>
R2 = 20,000 ohms<br>
Rt = 75,000+20000<br>
Total Resistance = 95,000 ohms</p>
<p>I1 = V1 / Rt<br>
I1 = 12v / 95,000<br>
Current produced by V1 = <strong>126.316</strong> uA</p>
<p><img src="http://dispelled.wordpress.com/files/2006/11/networktheorems7.JPG" alt="networktheorems7.JPG" height="100" width="160" align="right">So now we can calculate voltage drops across the series resistors, again using the rules for series circuits and Ohm’s law:</p>
<p>Vr1 = I * R1<br>
Vr1 = 126.316 uA * 75k ohms<br>
Vr1 = <strong>9.4737</strong> volts</p>
<p>Vr2 = I * R2<br>
Vr2 = 126.316 uA * 20k ohms<br>
Vr2 = <strong>2.52632</strong> volts</p>
<p>Then, do the same for the other voltage source, and make sure to keep track of the <em>polarity</em>, that is, the direction of current flow, and the polarity of each component. The current flows out of the negative (bottom) of V2, through R2, through R1, and back to the positive (top) of V2.</p>
<p><img src="http://dispelled.wordpress.com/files/2006/11/networktheorems3.jpg" alt="networktheorems3.jpg" height="292" width="460"></p>
<p>V2 = 18 volts</p>
<p>R1 = 75,000 ohms<br>
R2 = 20,000 ohms<br>
Rt = 75,000+20000<br>
Total Resistance is still = 95,000 ohms</p>
<p>I2 = V2 / Rt<br>
I2 = 18v / 95,000<br>
Current produced by V2 = <strong>189.414</strong> uA</p>
<p><img src="http://dispelled.wordpress.com/files/2006/11/networktheorems5.JPG" alt="networktheorems5.JPG" height="100" width="160" align="right">Again we calculate voltage drops across the series resistors, using the rules for series circuits and Ohm’s law:</p>
<p>Vr2 = I * R1<br>
Vr1 = 189.414 uA * 75k ohms<br>
Vr1 = <strong>14.2106</strong> volts</p>
<p>Vr2 = I * R2<br>
Vr2 = 189.414 uA * 20k ohms<br>
Vr2 = <strong>3.78948</strong> volts</p>
<p><img src="http://dispelled.wordpress.com/files/2006/11/networktheorems6.JPG" alt="networktheorems6.JPG" height="100" width="160" align="right">These two seperate calculations are then overlaid to find the voltage drops and currents at each component.</p>
<p>It = I2 – I1<br>
It = 189.414 uA – 126.316 uA<br>
Total current = <strong>63.098</strong> uA</p>
<p>Then calculate the voltage drop across R1</p>
<p>Vr1 = V2R1 – V1R1<br>
Vr1 = 14.2106v – 9.4737v</p>
<p>R1 voltage drop = <strong>4.7369</strong> Volts</p>
<p>Vr2 = V2R2 – V1R2<br>
Vr2 = 3.78948v – 2.52632v</p>
<p>R2 voltage drop = <strong>1.26316</strong> Volts</p>
<p>This was an example of the superposition theorem in a series circuit, using series opposing voltage sources. If the voltage sources are <em>series aiding, </em>meaning their polarities assist each other and current flows together, then you add the voltage drops at each component, and current produced. if they are <em>series opposing</em>, you subtract the amounts at each component.</p>
<p>This theorem can be applied to any series, parallel, or series-parallel circuit, using the same rules as a single voltage source and then adding or subtracting the results, depending if they aid or oppose each other. As circuits get more complicated and you get more components this becomes very handy.</p>
<p><strong>Thevinin’s</strong> Theorem</p>
<p><a href="http://hyperphysics.phy-astr.gsu.edu/hbase/electric/thevenin.html">Thevinin’s theorem</a> states that any two terminal network (of resistances and sources) can be replaced by a simplified equivalent circuit consisting of a single voltage source (<strong>V</strong>th) and a single series resistance (<strong>R</strong>th).</p>
<p><strong>Norton’s</strong> Theorem</p>
<p><a href="http://hyperphysics.phy-astr.gsu.edu/hbase/electric/norton.html">Norton’s Theorem</a> states that any linear two terminal network can be replaced by an equivalent circuit consisting of a single (constant) current source (<strong>I</strong>n) and a single shunt (parallel) resistance (<strong>R</strong>n).</p>
<p>The <strong>maximum power transfer</strong> theorem</p>
<p>Maximum power is transferred from the source to the load when the resistance of the load equals the resistance of the source. All power supplies have an internal resistance (<strong>R</strong>int) and to transfer maximum power, we need to match this to the resistance of the load (<strong>R</strong>l)</p>
<p><font size="1">References:<br>
Foundations of Electronics, by Russell L Meade</font>


<?php include("../../footer.php"); ?>
