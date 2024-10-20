<!--date=20241014 -->

<?php include("../../headercat.php"); ?>

<h1>Starting to learn Assembly for ARMV8 with a Khadas Vim3 and Ubuntu 24.04</h1>

<p>I'm starting to learn assembly for ARMV8(Aarch64). I've got a <a href="https://www.khadas.com/vim3">Khadas Vim 3</a> board with a Amlogic <a href="https://en.wikipedia.org/wiki/ARM_Cortex-A73">Cortex A73 processor</a>. I have flashed the eMMC with <a href="https://dl.khadas.com/firmware/vim3/ubuntu/emmc/ubuntu-24.04/">Ubuntu 24.04</a> with the <a href="https://docs.khadas.com/products/sbc/vim3/install-os/install-os-into-emmc-via-usb-tool">USB Burning Tool</a>. To start this off I'm going to follow some tutorials and take some examples from them. I have corrected some errors so I want somewhere to keep track of the code that works.</p>

<p>This is from chapter 2 of Thinkingeek's <a href="https://thinkingeek.com/2016/10/08/exploring-aarch64-assembler-chapter-2/">tutorial</a></p>
								
<pre>// first.s
.text

.globl main

main:
     mov w0, #2
     ret
</pre>

<p>Now to assemble it</p>

<pre>$ aarch64-linux-gnu-as -c -o first.o first.s</pre>

<p>and then link it</p>

<pre>$ aarch64-linux-gnu-gcc -static -o first first.o</pre>

<p>To run it</p>

<pre>$ ./first
$ echo $?
$ 2 </pre>

<p>2 is the return</p>

<p>Now let's try a hello world. This is from Peter Nelson's <a href="https://peterdn.com/post/2020/08/22/hello-world-in-arm64-assembly/">tutorial</a></p>

<pre>// hello.s

.data /* Data segment: define our message string and calculate its length. */
msg:
    .ascii        "Hello, ARM64!\n"
len = . - msg

.text /* Our application's entry point. */
.globl main
main:
    /* syscall write(int fd, const void *buf, size_t count) */
    mov     x0, #1      /* fd := STDOUT_FILENO */
    ldr     x1, =msg    /* buf := msg */
    ldr     x2, =len    /* count := len */
    mov     w8, #64     /* write is syscall #64 */
    svc     #0          /* invoke syscall */

    /* syscall exit(int status) */
    mov     x0, #0      /* status := 0 */
    mov     w8, #93     /* exit is syscall #93 */
    svc     #0          /* invoke syscall */</pre>
    
    
<p>and again to assemble it</p>

<pre>$ aarch64-linux-gnu-as -c -o hello.o hello.s</pre>

<p>and then link it</p>

<pre>$ aarch64-linux-gnu-gcc -static -o hello hello.o</pre>

<p>To run it</p>

<pre>$ ./hello
Hello, ARM64!
$ 
</pre>

<p>That's two working examples for now. I also highly recommend <a href="https://mariokartwii.com/armv8/">Vega's ARMv8 AArch64/ARM64 Full Beginner's Assembly Tutorial</a></p>


<?php include("../../footer.php"); ?>
