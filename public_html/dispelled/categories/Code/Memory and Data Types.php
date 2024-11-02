<!--date=20241029 -->

<?php include("../../headercat.php"); ?>

<h1>Memory and Data Types</h1>

<p>I haven't enjoyed revisiting this. But it is essential otherwise you will suck at it (me). Lets go.</p>

<p>Decimal math is called base 10. An example. We count to nine starting at zero.</p>

<pre>0,1,2,3,4,5,6,7,8,9</pre>

<p>There is ten digits and we move a column left at nine to:</p>

<pre>10,11,12,13,14,15,16,17,18,19</pre>

<p>Base 10 keeps going and continues through 30, 40, 50 etc. Now in Binary there is only ones and zeros. (0,1) then we move a column to the left. This is called base 2.</p>

<pre>0 1 10 11 (decimal 0,1,2,3)</pre>

<p>There is only a 0 or a 1 to represent each column and then we are moving left. each column represents an increasing value. I will add another zero on the left bit to show it is empty. The rightmost  bit is the least significant bit (LSB) and can contain 0 or 1, and the bit to the left, most significant bit (MSB) contains a value of 0 or 2.</p>

<pre>00 01 10 11</pre>

<p>The right column is zero or one, and the left column is zero or two. If there was a third column to the left it is zero or four, and if there is a fourth column after it, it is zero or eight. Etc.</p>

<p>A Byte (link) is 8 bits. If there is 8 columns the values for each column in binary will be 128,64,32,16,8,4,2,1. The maximum 8 bits binary can hold is 255 decimal (remember we are starting at zero). So if it is binary 11111111 we are adding:</p>

<pre>128+64+32+16+8+4+2+1=255</pre>

<p>Hexidecimal is base 16 (it resets after 16 numbers have been counted starting at zero). Think of it like the Jack, Queen and King of a deck of cards. In hexidecimal it goes </p>
<pre>0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F</pre> 
<pre>0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15</pre>
<p>A is 10, B is 11, C is 12, D is 13, E is 14, F is 15.</p>

<p><a href="https://learn.sparkfun.com/tutorials/binary/bits-nibbles-and-bytes">Here's</a> a link. Each column is a bit. Four Bits 0000 (decimal 0) are a Nibble, and eight Bits 00000000 (this example is also Decimal 0 but longer) are a Byte. 8 digits (8 Bits make a Byte) in Binary can be shown in Hexidecimal with two digits (still one Byte).</p>

<p>Ok. so let's convert Binary Bytes to Hex Bytes.</p>

<pre>00111110 in binary is
3E in Hexidecimal and
62 in Decimal</pre>

<p><a href="https://www.rapidtables.com/convert/number/binary-to-hex.html?x=00111110">Here</a> double check me.</p>

<h1>Data Types</h1>

<p>At this point we are halfway through data types so we might as well keep going. It is also important to recognize at this point how we show that we are using Binary or Hexidecimal values. For binary 00111110 we append 0B</p>

<pre>0B00111110</pre>

<p>And for Hexidecimal we append an 0X</p>

<pre>0X3E</pre>

<p>For Decimal we can use 0D. We will continue with Hex for now so there is no need to append these. Just to know if you see 0B or 0X it is to show what the value is.</p>

<p>As We have stated, Eight Bits make a Byte. Continuing on with Hexidecimal, a Byte is two columns (3E). From there we move up to a Halfword (003E). A Halfword is four Bytes, and a <a href="https://en.wikipedia.org/wiki/Word_(computer_architecture)">Word</a> (0000003E) is eight. Before we go too far, lets scale our bits.</p>

<pre>3E					// Byte (8 Bits)
003E					// Halfword (16 Bits)
0000003E				// Word (32 Bits)
000000000000003E		// Doubleword (64 bits)</pre>

<p>These all represent the Hexidecimal value 3E, which is 00111110 in binary and 62 in Decimal.</p>

<p>Now lets look. The difference in the extra columns is the amount you can address with the extra space. In a Halfword example:</p>

<pre>0xFFFF = 0D65535
FFFF = 65335</pre>

<p>16 bits in Binary. (0B1111111111111111).</p>
<p>A Word (FFFFFFFF) in Hex equates to the number (4294967295) in Decimal. After that there is Doublewords and such, but the numbers are so large we are already using a converter anyways. So let's stop there. Next is Signed and Unsigned values and that is another chapter lol. Hope I was able to help somewhat.</p>

<?php include("../../footer.php"); ?>



