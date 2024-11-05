<!--date=20241104 -->

<?php include("../../headercat.php"); ?>

<h1>Data Types Part 2 - Signed and Unsigned Values</h1>

<p>Again I am learning Assembly language on a Khadas Vim3 dev board (Arm64) with Ubuntu 24.04. The size of the bus varies on different architectures so this matters. I will be copy pasting some from the great tutorial from Vega at <a href="https://mariokartwii.com/armv8/ch6.html">Mariokartwii.com</a> and trying to create a summary of what I have learned for completeness.</p>

<p>I want to focus on the General Purpose Registers (GPRs) for right now. There is different types of registers I will explore later. Having just finished the Memory and Data Types summary, I think it is best to address this now. The GPRs have two different "modes". Extended and Non-Extended. Extended is when an Instruction will utilize all 64-bits of the GPR. When a GPR is in extended use, it is written:</p>

<pre>xD</pre>

<p>D = Register's number. For example, GPR 5 in extended form is x5. GPR 22 in extended form is x22.</p>

<p>Non-Extended is when an Instruction will utilize only the lower (righthand-side) 32-bits of the GPR. When a GPR is in non-extended use, it is written as</p>

<pre>wD</pre>

<p>How do we know if a number is negative? You specify the values to be treated as Signed, AND the first bit of the value contained in the register is a 1.</p>


<pre>Signed Range in Non-Extended GPRs:
0x80000000 thru 0xFFFFFFFF (Decimal -2,147,483,648 thru -1)
0x00000000 = zero
0x00000001 thru 0x7FFFFFFF (Decimal 1 thru 2,147,483,647)</pre>

<p>Ok you need to specify the value to be treated as Signed number (which can make negative numbers) and then the following is true. Take the first hex digit and convert it to binary (8 = 1000). Let's assume we have declared a signed number. Now because the MSB (Most significant Bit) in binary is a 1, <a href="https://www.rapidtables.com/convert/number/hex-to-binary.html?x=80000000">Hex to Binary</a> shows it starts with a one, and Hex to Decimal shows its value (as signed) as -2147483648. Lets do -1 next.</p>

<p>0xFFFFFFFF. The first Hex digit is F (1111 binary). <a href="https://www.rapidtables.com/convert/number/hex-to-decimal.html?x=FFFFFFFF">Totally Negative 1.</a> Hey but wait. Why does it say 4294967295 as the decimal value on the line above. That is for unsigned numbers.</p>

<pre>Unsigned Range in Non-Extended GPRs:
0x00000000 = zero
0x00000001 thru 0xFFFFFFFF (Decimal 1 thru 4,294,967,295)</pre>

<p>For an extended register, since it is 64-bits in size instead of 32-bits, the Signed and Unsigned range is a bit different but follows the same principle.</p>

<pre>Signed Range in Extended GPRs:
0x8000000000000000 thru 0xFFFFFFFFFFFFFFFF (Decimal -9,223,372,036,854,775,808 thru -1)
0x0000000000000000 = zero
0x0000000000000001 thru 0x7FFFFFFFFFFFFFFF (Decimal 1 thru 9,223,372,036,854,775,807)

Unsigned Range in Extended GPRs:
0x0000000000000000 = zero
0x0000000000000001 thru 0xFFFFFFFFFFFFFFFF (Decimal 1 thru 18,446,744,073,709,551,615)</pre>

<p>This page is unfinished. I am tired. Cheers :)</p>


<?php include("../../footer.php"); ?>
