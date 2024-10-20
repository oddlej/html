<!--date=20241015 -->

<?php include("../../headercat.php"); ?>

<h1>The Branch command for Assembly in Arm64 with GDB</h1>

<p>I'm starting to learn assembly for ARMV8(Aarch64). I've got a <a href="https://www.khadas.com/vim3">Khadas Vim 3</a> board with a Amlogic <a href="https://en.wikipedia.org/wiki/ARM_Cortex-A73">Cortex A73 processor</a>. </p>

<p>This is from chapter 6 of Thinkingeek's <a href="https://thinkingeek.com/2016/11/27/exploring-aarch64-assembler-chapter-6/">tutorial</a>.</p>
								
<pre>// branch.s
.text
.globl main
main:
  mov w0, #3   // w0 ← 3
  b jump       // branch to label jump
  mov w0, #4   // w0 ← 4
  jump:
    ret        // end function
</pre>

<p>Now to assemble it. I learned that the command</p>

<pre>aarch64-linux-gnu-as -c -o first.o first.s</pre>

<p>that I was using <a href="https://dispelled.ca/categories/Code/Starting%20to%20learn%20Assembly%20for%20ARMV8%20with%20a%20Khadas%20Vim3%20and%20Ubuntu%2024.04.php">before</a> is unnecessary since I am already on the arm64 platform. I can just use as in place. Now I did an as --help and looked up what i was using and what we are looking for is just -g for debugging and -o to specify the object file name. I'm not even sure -c is a thing.

<pre>$ as -g -o branch.o branch.s</pre>

<p>Much easier. Now to link it but I learned a few things here too.</p>

<pre>ld -e main -o branch branch.o</pre>

<p>This compiles, but then seg faults. The -e main is because the code is using main instead of _start which <a href="https://stackoverflow.com/questions/34758769/load-warning-cannot-find-entry-symbol-start">ld is looking for</a>. 

<pre>$ gdb branch
GNU gdb (Ubuntu 15.0.50.20240403-0ubuntu1) 15.0.50.20240403-git
Copyright (C) 2024 Free Software Foundation, Inc.
License GPLv3+: GNU GPL version 3 or later <http://gnu.org/licenses/gpl.html>
This is free software: you are free to change and redistribute it.
There is NO WARRANTY, to the extent permitted by law.
Type "show copying" and "show warranty" for details.
This GDB was configured as "aarch64-linux-gnu".
Type "show configuration" for configuration details.
For bug reporting instructions, please see:
<https://www.gnu.org/software/gdb/bugs/>.
Find the GDB manual and other documentation resources online at:
    <http://www.gnu.org/software/gdb/documentation/>.

For help, type "help".
Type "apropos word" to search for commands related to "word"...
Reading symbols from branch...
(gdb) run
Starting program: /home/khadas/Desktop/branch 

This GDB supports auto-downloading debuginfo from the following URLs:
  <https://debuginfod.ubuntu.com>
Enable debuginfod for this session? (y or [n]) y
Debuginfod has been enabled.
To make this setting permanent, add 'set debuginfod enabled on' to .gdbinit.
Downloading separate debug info for system-supplied DSO at 0x7ff7fff000
                                                                                                                                                                                         
Program received signal SIGSEGV, Segmentation fault.
0x0000000000000000 in ?? ()
</pre>

<p>So it looks like I'm doing it wrong. some some reading up on ld is needed. I'll just use gcc for now.</p>

<pre>$ gcc -static -o branch branch.o
$ ./branch ; echo $?
3
</pre>

<p>works, and much easier to type.</p>




<?php include("../../footer.php"); ?>
