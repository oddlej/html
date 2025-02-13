<!--date=20080107 -->
<?php include("../../headercat.php"); ?>

<h1>Complex Numbers in AC Circuits</h1>

<p> This page has some issues displaying the notation I used at the time. I'm still working on it.</p>
<p><a href="http://en.wikipedia.org/wiki/Complex_numbers" title="Wiki">Complex numbers</a> are an easy way to perform mathematical computations with AC quantities. While you can use Trigonometry and the Pythagorean Theorem to solve for magnitudes and values, two notations exist to make life easier.</p>
<p>In <a href="http://www.allaboutcircuits.com/vol_2/chpt_2/5.html" title="All about circuits">rectangular notation</a>, the complex number has two parts, one real and one imaginary. The real number represents the in phase and resistive element, and is plotted on the X-axis. The <a href="http://en.wikipedia.org/wiki/Imaginary_number" title="Wiki">imaginary number</a>, is represented on the Y-axis. To input an imaginary number on your calculator, you use the <em>i</em> button. The real number is input, followed by + or – depending on if the imaginary number is a positive or negative angle, then the imaginary number, followed by the <em>i</em> symbol. On my Ti-89, to show an i you press (2nd &gt; Catalog). It ends up looking like this.</p>
<p>3 + 4<em>i</em></p>
<p align="left">This tells you that 3 is the Adjacent (horizontal axis) and 4 is the Opposite (vertical axis). If you input numbers in this fashion, and put your calculator in Polar form notation, it will give you the hypotenuse, and the phase angle, all at once.<br>
<a href="http://www.ucl.ac.uk/Mathematics/geomath/level2/complex/cn10.html" title="UCL"></a></p>
<p align="left"><a href="http://dispelled.wordpress.com/files/2006/11/rect1.JPG" title="rect1.JPG"><img src="http://dispelled.wordpress.com/files/2006/11/rect1.JPG" alt="rect1.JPG" height="100" width="160" align="right"></a><a href="http://www.ucl.ac.uk/Mathematics/geomath/level2/complex/cn10.html" title="UCL">Polar form notation</a> shows you the length (hypotenuse) and the angle of the resulting vector. The angle symbol on the Ti-89 is generated by the keystrokes (2nd &gt; EE). In this example, you would see</p>
<p>5 âˆŸ 53.1301Â°</p>
<p>This can be confirmed by using the <a href="http://www.gcseguide.co.uk/sin,_cos,_tan.htm" title="GCSE Guide">sin and cos</a> functions.</p>
<p>5 * sin(53.1301Â°) = 4<br>
5 * cos(53.1301Â°) = 3</p>
<p>With your calculator in <a href="http://www.allaboutcircuits.com/vol_2/chpt_2/5.html" title="All about circuits">Rectangular form</a>, you can input polar equations and have them return a real number and an imaginary number. On my calculator I need to enclose the polar notation in brackets.</p>
<p>(5 âˆŸ53.1301Â°) = 3 + 4 * <em>i </em></p>
<p><a href="http://dispelled.wordpress.com/files/2006/11/polar1.JPG" title="polar1.JPG"><img src="http://dispelled.wordpress.com/files/2006/11/polar1.JPG" alt="polar1.JPG" height="100" width="160" align="right"></a>You can also use built in functions on a Ti 89 to do these conversions on the fly.  Press the catalog button and you will find â–ºRect and â–ºPolar. You can use these functions without changing the mode of your calc.</p>
<p>(5 âˆŸ 53.1301Â°) â–ºRect<br>
returns<br>
3 + 4 <em>i</em></p>
<p>and also<br>
(3 + 4 <em>i) </em>â–ºPolar<br>
returns<br>
5 âˆŸ 53.1301Â°</p>
<p><strong>Algebraic Operations in Rectangular notation</strong></p>
<p>Addition (add the in phase terms, and add the out of phase terms)</p>
<p>10 + 10<em>i </em><br>
15 + 15<em>i</em><br>
———<br>
25 + 25<em>i</em></p>
<p>Subtraction (change the sign of the subtrahend and add each)</p>
<p>10 + 10<em>i</em><br>
-5 – 15<em>i</em><br>
———<br>
5 – 5<em>i</em></p>
<p><strong>Algebraic Operations in Polar notation</strong></p>
<p>Multiplication (Multiply the magnitudes and add the angles)</p>
<p>5 âˆŸ 30Â°<br>
20 âˆŸ -15Â°<br>
———-<br>
100 âˆŸ 15Â°</p>
<p>Division (Divide one magnitude by the other and subtract the angles)</p>
<p>35 âˆŸ 60Â°<br>
140 âˆŸ 20Â°</p>
<p>35 / 140 = .25<br>
60Â° – 20Â° = 40Â°<br>
so the answer is<br>
.25 âˆŸ 40Â°</p>
<p><font size="1">References:<br>
Foundations of Electronics, by Russell L Meade<br>
Basic Electronics, by Bernard Grob</font>

<?php include("../../footer.php"); ?>
