<!--date=20250210 -->

<?php include("../../headercat.php"); ?>

<h1>DC Circuits</h1>
<p>DC (Direct Current) circuits are electrical circuits powered by a constant voltage source. In DC circuits, the current flows in one direction.</p>

<h2>Ohm's Law</h2>
<p>Ohm's Law is fundamental to understanding DC circuits. It states that the current (I) flowing through a resistor (R) is directly proportional to the voltage (V) across it:</p>
<pre>
<code class="language-plaintext">
V = I * R
</code>
</pre>

<h2>Series and Parallel Circuits</h2>
<p>DC circuits can be configured in series or parallel:</p>
<ul>
    <li><strong>Series Circuit</strong>: Components are connected end-to-end, and the current is the same through all components.</li>
    <li><strong>Parallel Circuit</strong>: Components are connected across the same voltage source, and the voltage is the same across all components.</li>
</ul>

<h2>Kirchhoff's Laws</h2>
<p>Kirchhoff's laws are essential for analyzing complex DC circuits:</p>
<ul>
    <li><strong>Kirchhoff's Current Law (KCL)</strong>: The sum of currents entering a junction equals the sum of currents leaving the junction.</li>
    <li><strong>Kirchhoff's Voltage Law (KVL)</strong>: The sum of voltages around a closed loop equals zero.</li>
</ul>

<h2>Applications of DC Circuits</h2>
<p>DC circuits are used in various applications, including:</p>
<ul>
    <li>Battery-Powered Devices: Supplying power to portable electronics.</li>
    <li>DC Motors: Driving motors in various applications.</li>
    <li>Electronics: Powering electronic circuits and components.</li>
</ul>

<h2>Example Circuit</h2>
<p>Here is an example of a simple series DC circuit:</p>
<pre>
<code class="language-plaintext">
Components:
- Resistor R1 (1k ohm)
- Resistor R2 (2k ohm)
- Power supply (5V DC)

Circuit:
1. Connect R1 and R2 in series.
2. Connect the series combination to the power supply (5V DC).

The total resistance is given by:
R_total = R1 + R2

The current flowing through the circuit is given by:
I = V / R_total
</code>
</pre>

<p>&nbsp;</p>
<?php include("../../footer.php"); ?>
