<!--date=20080106 -->
<?php include("../../headercat.php"); ?>

<h1>Resonance</h1>

<p>After looking at Inductors and Capacitors and their <a href="http://en.wikipedia.org/wiki/Reactance" title="Wiki">reactances</a>, I got to wondering why you would use both inductors and capacitors in a circuit when it seems they counteract each other. The answer is to create <a href="http://en.wikipedia.org/wiki/Resonant_circuit" title="Wiki">resonant circuits</a>.  The goal here is to create a circuit with equal inductive reactance (<strong>Xl</strong>) and Capacitive reactance (<strong>Xc</strong>).</p>
<p>Lets start with <a href="http://en.wikipedia.org/wiki/Resonant_circuit#Series_LC" title="Wiki">series resonance</a>. In inductive reactance, the voltage leads the current (ELI) by 90 degrees. In capacitive reactance, the current leads the voltage (ICE) by 90 degrees, or to be more precise, the voltage lags the current and creates a negative phase angle. Current is our reference vector and is plotted on the horizontal axis.</p>
<p><strong>Characteristics of series resonance</strong></p>
<ul>
<li>Xl = Xc</li>
<li>Impedance (Z) is at a minimum because the inductive and capacitive elements are counteracting each other. This causes Z to equal Resistance (R)</li>
<li>Current (I) is at a maximum and equals V/R</li>
<li>Phase angle is 0 degrees since the circuit is acting completely resistive.</li>
</ul>
<p>The inductive voltage (Opp at +90 degrees) is leading the current and resistive voltage (our reference vector, the Adj, etc.) and the Capacitive voltage is lagging the current and resistive voltage by -90 degrees (also the Opp).</p>
<p>Remembering the formula used in calculations of frequency when dealing with <a href="http://en.wikipedia.org/wiki/Inductance" title="Wiki">inductive</a> reactance,</p>
<p>f = Xl/(6.28*L)</p>
<p>Where:<br>
f = frequency in hertz<br>
Xl = inductive reactance in ohms<br>
L = inductance in henrys</p>
<p>and the formula for <a href="http://en.wikipedia.org/wiki/Capacitance" title="Wiki">capacitive</a> reactance.</p>
<p>f = 1/(6.28*C*Xc)</p>
<p>where:<br>
f = frequency in hertz<br>
Xc = capacitive reactance in ohms<br>
C = capacitor value in farads</p>
<p>We need to combine them so we can get a formula to calculate <a href="http://en.wikipedia.org/wiki/Resonant_circuit" title="Wiki">resonant circuits</a>.</p>
<p>fr = 1/(6.28 * âˆš(L*C))</p>
<p>where:<br>
f = frequency in hertz<br>
C = capacitor value in farads<br>
L = inductance in henrys</p>
<p>This, and the variations below, are formulas used to create series and parallel resonant circuits. If you have the Frequency (Fr) of the circuit and the capacitive value (C) you can calculate the inductor(s) needed by transposing the formula to the following.</p>
<p>L = .02533 / Fr^2 * C</p>
<p>and if you have the Frequency and the inductive value, you can use the formula</p>
<p>C = .02533 / Fr^2 * L</p>
<p><a href="http://en.wikipedia.org/wiki/Q-factor" title="Wiki">Q</a> is known as a <a href="http://en.wikipedia.org/wiki/Q-factor" title="Wiki">magnification factor</a> or figure of merit. In general, the higher the ratio of reactance at resonance to the series resistance, the higher the Q. We can calculate Q from the following formula.</p>
<p>Q = Xl / Rs</p>
<p>where:<br>
Q = Magnification Factor<br>
Xl = Inductive reactance at the resonant frequency<br>
Rs = resistance in series with Xl</p>
<p>Q can also be calculated by</p>
<p>Q = Vout /Vin</p>
<p>where:<br>
Vout = ac voltage measured  across the reactive element<br>
Vin = applied voltage</p>
<p>Q will always be a positive number.</p>
<p><strong>Characteristics of Parallel resonance</strong></p>
<p>In <a href="http://en.wikipedia.org/wiki/Resonant_circuit#Parallel_resonance" title="Wiki">parallel resonance</a>,</p>
<ul>
<li>Impedance (Z) is at a maximum</li>
<li>Tank current is current measured between the inductors and the capacitors and can be thought of as circulating from one to the other.</li>
<li>Line current is at a minimum</li>
<li>Xl = Xc</li>
<li>Phase angle is still 0 degrees</li>
</ul>
<p>The same formulas for calculating series resonance apply here, just the results differ depending on whether the circuit is series or parallel. To calculate Q in a parallel resonant circuit, use</p>
<p>Q = Zt / Xl</p>
<p>where:<br>
Q = Magnification Factor<br>
Zt =  total  impedance<br>
Xl = inductive reactance<br>
<a href="http://en.wikipedia.org/wiki/Electronic_selectivity" title="Wiki">Selectivity</a> refers to the response curve of a resonant circuit. When resonance is achieved, the sharper the rise (and fall) of the curve, the more selective it is. For series resonance, the two points which current rises and falls to 70.7% of it’s maximum level is known as it’s <a href="http://en.wikipedia.org/wiki/Bandwidth" title="Wiki">bandwidth</a>. For parallel resonant circuits, impedance (Z) is used.</p>
<p>Total bandwidth is calculated by the resonant frequency divided by the <a href="http://en.wikipedia.org/wiki/Q-factor" title="Wiki">Q Factor</a>.</p>
<p>BW = Fr / Q</p>
<p>where:<br>
BW = bandwidth in Hertz<br>
Fr = resonant frequency in Hertz<br>
Q = Magnification factor</p>
<p>* Please note in these formulas, I am writing 6.28 as a rounded off version of two times pi. To get a truer number, it would be better to use (2 * pi).</p>
<p><font size="1">References:<br>
Foundations of Electronics, by Russell L Meade<br>
Basic Electronics, by Bernard Grob</font>



<?php include("../../footer.php"); ?>
