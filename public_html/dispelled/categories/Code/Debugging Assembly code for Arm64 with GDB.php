<!--date=20241014 -->

<?php include("../../headercat.php"); ?>

<h1>Debugging Assembly code for Arm64 with GDB</h1>

<p>I'm starting to learn assembly for ARMV8(Aarch64). I've got a <a href="https://www.khadas.com/vim3">Khadas Vim 3</a> board with a Amlogic <a href="https://en.wikipedia.org/wiki/ARM_Cortex-A73">Cortex A73 processor</a>. I wanted to learn how to use <a href="https://www.sourceware.org/gdb/">GDB</a> (the Gnu Debugger) tonight so I grabbed a bit of code that wouldn't compile and got into it.</p>

<p>This is from chapter 26 of Thinkingeek's <a href="https://thinkingeek.com/2016/10/30/arm-assembler-raspberry-pi-chapter-26/">tutorial</a>.</p>
								
<pre>// ch26.s

.data

one_var : .word 42
another_var : .word 66

.globl result_var             /* mark result_var as global */
result_var : .word 0

.text

.globl main
main:
    ldr x0, addr_one_var      /* r0 ← &one_var */
    ldr x0, [x0]              /* r0 ← *r0 */
    ldr x1, addr_another_var  /* r1 ← &another_var */
    ldr x1, [x1]              /* r1 ← *r1 */
    add x0, x0, x1            /* r0 ← r0 + r1 */
    ldr x1, addr_result       /* r1 ← &result */
    str x0, [x1]              /* *r1 ← r0 */
    bl result_var             /* call to inc_result */
    mov x0, #0                /* r0 ← 0 */
    ret                     /* return */
   

addr_one_var  : .word one_var
addr_another_var  : .word another_var
addr_result  : .word result_var	

</pre>

<p>Now to assemble it</p>

<pre>$ aarch64-linux-gnu-as -c -g -o ch26.o ch26.s</pre>

<p>and then link it</p>

<pre>$ aarch64-linux-gnu-gcc -static -g -o ch26 ch26.o</pre>

<p>To run it</p>

<pre>$ ./ch26
Segmentation Fault</pre>

<p>Oh. Here we go.</p>

<p>Let's try the GNU Debugger, <a href="https://www.sourceware.org/gdb/">GDB</a></p>

<pre>$ gdb ch26
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
Reading symbols from ch26...
(gdb) run
Starting program: /home/khadas/Desktop/ch26 

This GDB supports auto-downloading debuginfo from the following URLs:
  <https://debuginfod.ubuntu.com>
Enable debuginfod for this session? (y or [n]) y
Debuginfod has been enabled.
To make this setting permanent, add 'set debuginfod enabled on' to .gdbinit.
Downloading separate debug info for system-supplied DSO at 0x7ff7fff000
                                                                                
Program received signal SIGSEGV, Segmentation fault.
main () at ch26.s:15
15	    ldr x0, [x0]              /* r0 ← *r0 */
(gdb) 
</pre>
    
    
<p>Ok! First debug. It doesn't like line 15. Commented it out for now along with line 17. Ran again. it doesn't like str. Changed that line to: </p>

<pre>mov x0, x1              /* *r1 ← r0 */</pre>

<p>And it passes. Now it doesn't like the way I modified the inc_result line, but look, there is data there.</p>

<pre>
Program received signal SIGSEGV, Segmentation fault.
0x0000000000490048 in result_var ()
</pre>

<p>I changed that line to addr_result</p>

<pre>Program received signal SIGILL, Illegal instruction.
0x00000000004007cc in addr_result () at ch26.s:23
23	    ret                     /* return */
</pre>

<p>Well it still doesn't work. Maybe inc_result was the right thing to put but it wasn't defined in this snippet. I should have read the whole page first before doing this. It turns out there is another source file that gets linked and it was an example of relocations. Still it was a great way for me to learn debugging Arm6 to Arm8 code.</p>


<?php include("../../footer.php"); ?>
