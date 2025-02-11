<!--date=20250214 -->

<?php include("../../headercat.php"); ?>

<h1>Resistors</h1>
<p>Resistors are passive electronic components that resist the flow of electric current. They are used to control the current and voltage in electronic circuits.</p>

<h2>Types of Resistors</h2>
<p>There are several types of resistors, including:</p>
<ul>
    <li><strong>Fixed Resistors</strong>: Have a fixed resistance value.</li>
    <li><strong>Variable Resistors</strong>: Have an adjustable resistance value (e.g., potentiometers).</li>
    <li><strong>Thermistors</strong>: Change resistance with temperature.</li>
    <li><strong>Photoresistors</strong>: Change resistance with light intensity.</li>
</ul>

<h2>Ohm's Law</h2>
<p>The resistance of a resistor is measured in ohms (Ω) and is defined by Ohm's Law:</p>
<pre>
<code class="language-plaintext">
V = I * R
</code>
</pre>
<p>Where:</p>
<ul>
    <li><strong>V</strong> is the voltage (in volts)</li>
    <li><strong>I</strong> is the current (in amperes)</li>
    <li><strong>R</strong> is the resistance (in ohms)</li>
</ul>

<h2>Color Code</h2>
<p>Resistors have color bands that indicate their resistance value. The color code is as follows:</p>
<pre>
<code class="language-plaintext">
Black: 0
Brown: 1
Red: 2
Orange: 3
Yellow: 4
Green: 5
Blue: 6
Violet: 7
Gray: 8
White: 9
</code>
</pre>

<h2>Applications of Resistors</h2>
<p>Resistors are used in various applications, including:</p>
<ul>
    <li>Current Limiting: Controlling the current flow in a circuit.</li>
    <li>Voltage Division: Dividing the voltage in a circuit.</li>
    <li>Biasing: Setting the operating point of active devices.</li>
    <li>Pull-up/Pull-down: Ensuring a known state for digital inputs.</li>
</ul>

<h2>Example Circuit</h2>
<p>Here is an example of a simple voltage divider circuit:</p>
<pre>
<code class="language-plaintext">
Components:
- Resistor R1 (1k ohm)
- Resistor R2 (2k ohm)
- Power supply (5V)

Circuit:
1. Connect R1 and R2 in series.
2. Connect the series combination to the power supply (5V).
3. Measure the voltage across R2.

The voltage across R2 is given by:
Vout = Vin * (R2 / (R1 + R2))
</code>
</pre>

<p>&nbsp;</p>
<?php include("../../footer.php"); ?>
