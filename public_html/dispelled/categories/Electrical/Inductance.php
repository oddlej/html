<!--date=20080109 -->
<?php include("../../headercat.php"); ?>

<h1>Inductance</h1>

<p>Inductance is a measure of magnetic flux for a given current, and it’s measurement is called the Henry (H). When we talk about inductance in electronics, we are talking about the ability to oppose a change in current flow. The lines of magnetic flux are exactly what produces this opposition. Energy is stored by an inductor in the form of a magnetic field surrounding it. Inductors are made of a conductor, coiled upon itself to produce a set amount of magnetic lines of flux. The opposition to the change in current produces a induced voltage. This can be thought of as a series-opposing voltage source. The amount of induced voltage (emf) depends on the rate of cutting the lines of flux. This is known as Faraday’s Law, and it’s formula is represented by:</p>
<p><strong>V</strong>ind = d<strong>0</strong>/d<strong>T</strong></p>
<p>Where:<br>
<strong>V</strong>ind is the induced voltage (emf)<br>
d<strong>0</strong> is the rate of cutting the flux (in webers) and<br>
d<strong>T</strong> is the change in time (seconds)<br>
d is the symbol Delta, which represnts “the change in”</p>
<p>The four important physical elements that affect the amount of inductance are the coil length (number of turns per unit length), the cross sectional area of the coil, the amount of current through the coil, and the type of core material. Inductors can be made with an iron-core, like the ones commonly used for power supplies and audio circuitry, powdered iron-core, ferrite-core, or even just air-core. Each metal (or lack of, in the case of air-core)has a relative permeability and has some effect on the final inductance. iron-core inductors have typical ranges measured in Henry’s, powdered iron-core are usually found measured in milliHenrys (mH) and air-core inductors are usually found in the microHenry (uH) range.</p>
<p>The amount of induced voltage, also known as back-emf or counter-emf is related to the amount of inductance, and the rate of current change. This is more commonly known as <em>self-inductance</em>. The symbol for inductance is <strong>L</strong>. When we are talking about this oppostion to change, the formula to use is:</p>
<p><strong>V</strong>l = <strong>L</strong> * d<strong>i</strong> / d<strong>t</strong></p>
<p><strong>V</strong>l is our induced voltage in Volts<br>
<strong>L</strong> is our inductance in  Henry’s<br>
d<strong>i</strong> is the change in current, in amperes and<br>
d<strong>t</strong> is the change in time, in seconds.</p>
<p>When using inductors in a circuit, you can apply many of the concepts you use with resistances in series and parallel. Total inductance in a series circuit is the sum of all inductances in it:</p>
<p><strong>L</strong>t = <strong>L</strong>1 + <strong>L</strong>2 + <strong>L</strong>3 … etc.</p>
<p>When finding the total inductance for a parallel circuit, it is also treted exactly the same as a resistance in parallel. you can either use the product over the sum, or the reciprocal method.</p>
<p><strong>L</strong>t = <strong>L</strong>1 * <strong>L</strong>2 / <strong>L</strong>1 + <strong>L</strong>2</p>
<p>or as with resistances, with more than two inductances in parallel:</p>
<p>1 / <strong>L</strong>t = 1 / <strong>L</strong>1 + 1 / <strong>L</strong>2 + 1 / <strong>L</strong>3 … etc.</p>
<p>These formulas assume of course, that the inductors are <em>non-coupled</em>. This brings up the topic of mutual inductance. To quickly define non-coupled inductors, it refers to the magnetic fields (flux lines) of each inductor acting seperately, and not affecting each other.</p>
<p>Mutual Inductance is when you have two coils located near each other, and it causes the magnetic field of one to interact with the field of the other coil. This is how transformers work. This is usually the only place you want mutual inductance. In the case of seies or parallel inductors, any mutual inductance is undesirable.</p>
<p><font size="1">References:<br>
Foundations of Electronics, by Russell L Meade</font>

<?php include("../../footer.php"); ?>
