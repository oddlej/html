<!--date=20080105 -->
<?php include("../../headercat.php"); ?>

<h1>Parallel Circuits</h1>

<p>In a Parallel Circuit, there are two or more paths for the current to flow. Voltage in parallel circuits is the <em>same</em> across each Parallel branch. Each branch current is <em>inverse</em> to it’s resistance value, meaning the highest resistance value will have the least current flowing through it.</p>
<p>In parallel circuits, we substitute the current for the sum equals the total rule. The total current in a parallel circuit equals the sum of the branch currents.</p>
<p><strong>I</strong>t = <strong>I</strong>1 + <strong>I</strong>2 + <strong>I</strong>3… etc.</p>
<p>This is known as Kirchhoff’s current law. The value of current entering a point must equal the value of current leaving that same point.</p>
<p>As stated already, branch current is inverse to branch resistance. another difference in parallel circuits is the way total resistance is calculated. Whereas in a <em>series circuit</em> the total resistance is just the <em>sum</em> of all resistances, in a <em>parallel circuit</em>, the total (or equivalent) circuit resistance is <em>always less</em> than the smallest value branch resistance.</p>
<p>Knowing branch current, and total voltage, using Ohm’s law we can find each branch resistance.</p>
<p><strong>R</strong> branch = <strong>V</strong> / <strong>I</strong> branch</p>
<p>Knowing each branch current, and each branch (total) voltage, we can calculate the equivalent resistance.  To keep things simple, we will use the reciprocal method which is as shown below.</p>
<p><strong>1</strong>/<strong>R</strong>eq = <strong>1</strong>/<strong>R</strong>1 + <strong>1</strong>/<strong>R</strong>2 + <strong>1</strong>/<strong>R</strong>3… etc.</p>
<p>There is also another method for use only with two branches called the <em>product over the sum</em>, but seeing as the reciprocal method works for any amount of branches, it would be best to stick to a single method for calculating equivalent resistance (<strong>R</strong>eq).</p>
<p>If you want to calculate an unknown (<strong>R</strong>u) or desired resistance for a certain branch, you can use the following formula.</p>
<p><strong>R</strong>u = <strong>R</strong>k x <strong>R</strong>eq / <strong>R</strong>k – <strong>R</strong>eq<br>
where <strong>R</strong>u is the unknown you would like to solve,  <strong>R</strong>eq is the desired equivalent resistance, and <strong>R</strong>k is the known resistor that will be placed in parallel with <strong>R</strong>u, achieving the desired resistance. This is known as the <em>product over the difference</em>.</p>
<?php include("../../footer.php"); ?>
