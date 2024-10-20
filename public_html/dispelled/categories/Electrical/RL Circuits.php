<!--date=20080110 -->
<?php include("../../headercat.php"); ?>

<h1>RL Circuits</h1>

<p>RL Circuits have a combination of Resistors and Inductors as their name would suggest. What we need to do is combine the resistive elements of our circuit with the reactive ones. Due to the way inductors behave, you cannot just add the resistors and inductive reactance, but you can use the pythagorean theorem, and you can also use vector mapping and basic trigonometry functions.</p>
<p><a href="http://dispelled.wordpress.com/files/2006/10/seriesrl.jpg" title="seriesrl.jpg"><img src="http://dispelled.wordpress.com/files/2006/10/seriesrl.jpg" alt="seriesrl.jpg" height="167" width="210" align="right"></a><strong>Series RL</strong></p>
<p>In a series circuit containing resistors and inductors, the current (<strong>I</strong>) is our reference vector.</p>
<p>Resistors (<strong>R</strong>) are in phase, at 0 degrees. (Adj)<br>
Inductive reactance (<strong>Xl</strong>) is at 90 degrees. (Opp)<br>
Impedance (<strong>Z</strong>) is somewhere in between. (Hyp)</p>
<p>For calculating total voltage and, we use the same vector.</p>
<p>Resistor voltage (<strong>Vr</strong>) is in phase, at 0 degrees. (Adj)<br>
Inductive voltage (<strong>Vl</strong>) is at 90 degrees. (Opp)<br>
and total voltage (<strong>Vt</strong>) is somewhere in between. (Hyp)<br>
The phase angle (Theta) is the angle between R and Z and can be calculated by</p>
<p>Tan-1(Opp/Adj) or in this case Tan-1(<strong>Xl</strong>/<strong>R</strong>)</p>
<p>This is most common in electronic circuits. However, sometimes you might only have the impedance and the resistance, and need to find the inductive reactance.</p>
<p>Cos-1(Adj/Hyp) so Cos-1(<strong>R</strong>/<strong>Z</strong>)</p>
<p>We can use a 3/4/5 triangle to quickly show how this works.  Let’s say we need to find impedance, and <strong>Xl</strong> = 4, <strong>R</strong>=3.</p>
<p>Tan-1(4/3) = 53.130 degrees (This is your phase angle)</p>
<p>âˆš(4^2+3^2) = 5 (This is your impedance)</p>
<p>5 * Sin(53.130) = 4 (Checking the angle by requesting the Inductive reactance (Opp).</p>
<p><a href="http://dispelled.wordpress.com/files/2006/10/parallelrl.jpg" title="parallelrl.jpg"><img src="http://dispelled.wordpress.com/files/2006/10/parallelrl.jpg" alt="parallelrl.jpg" height="167" width="210" align="right"></a><strong>Parallel RL</strong></p>
<p>In parallel, Total voltage (<strong>V</strong>) is our reference vector on the horizontal (0 degrees) since the voltage is the same through each branch, and,</p>
<p>Resistive current (<strong>Ir</strong>) is in phase (0 degrees)</p>
<p>Inductive current (<strong>Il</strong>) is plotted downward (-90 degrees)</p>
<p>Total current (<strong>It</strong>) is plotted somewhere in between.</p>
<p>In parallel RL, you just use pythagorean to solve for impedance.</p>
<p>Z = âˆš(Xl^2+R^2)</p>

<?php include("../../footer.php"); ?>
