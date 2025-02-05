<!--date=20080104 -->
<?php include("../../headercat.php"); ?>

<h1>Series Circuits</h1>

<p>A Series Circuit is defined by having a source, a path, and a load. There is only ever <em>one</em> path for current to flow. A series circuit can be viewed as a linear path, starting at the negative post of the power source, and continuing along the path, through each component, until it reaches the positive post of the power source.</p>
<p>To find the total resistance of a series circuit, you can simply add each resistance in the circuit, and you will have the total resistance. This is usually expressed as <strong>R</strong>t or Resistance total. From now on when you see <strong>R</strong>t, you know it is referring to total resistance in a series circuit.  Another way or showing the formula for total resistance is:</p>
<p><strong>R</strong>t = <strong>R</strong>1 + <strong>R</strong>2 + <strong>R</strong>3… etc.</p>
<p>Another important method to find total resistance in any circuit, is the Ohm’s law formula <strong>R</strong> = <strong>V</strong> / <strong>I</strong>. If you know the voltage of the power source, and the total <em>current</em> (which is the <em>same</em> through any and <em>all</em> parts of a series circuit) then you can use it to find the circuit’s resistance.</p>
<p><strong>R</strong>t = <strong>V</strong>t / <strong>I</strong>t</p>
<p>You can also use this when you have a resistor’s voltage drop and you want to calculate it’s resistance.</p>
<p>Next we will look at how voltage is distributed in a series circuit. Each resistor “drops” a percentage of the total voltage as it travels through the circuit. To calculate these drops, we use the following formula.</p>
<p><strong>V</strong>r1 = <strong>I</strong>r1 x <strong>R</strong>1</p>
<p>That is, to calculate resistor 1’s voltage drop (V), you take resistor 1’s current (I), times it’s resistance (R) value.</p>
<p>The largest value resistor in a series circuit drops the largest voltage, and the smallest resistor drops the least voltage. These drops occur because the <em>current is the same</em>, and each resistor’s drop is equal to current times resistance, or <strong>V</strong> = <strong>I</strong> x <strong>R</strong></p>
<p>The voltage divider rule is the relation for a given resistor to it’s resistance value. If you take the resistor’s value divided by the total resistance of the circuit, and the multiply that by the total voltage, you end up with the voltage drop of that particular resistor.  To find the voltage drop of resistor 1:</p>
<p><strong>V</strong>1 = (<strong>R</strong>1 / <strong>R</strong>t) x <strong>V</strong>t</p>
<p>Kirchhoff’s voltage law states that the <em>arithmetic sum </em>of the voltages around a single circuit loop (<strong>V</strong>1 + <strong>V</strong>2… etc.) equals the applied voltage (<strong>V</strong>t)  it also states that the algebraic sum, incuding the source must equal zero.</p>
<p>Here is a link to a great site called <a href="http://www.allaboutcircuits.com/vol_1/chpt_5/2.html" target="_blank">All about circuits</a>.</p>

<?php include("../../footer.php"); ?>
