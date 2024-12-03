<!--date=20241114 -->

<?php include("../../headercat.php"); ?>

<h1>Disassembling C code on the Command Line</h1>

<p>Github Copilot ChatGPT 4o helped me with this one. I asked it to help me make a basic example of some c code, and how to view the assembly. I think it shows the difference between a basic assembly program, and what is generated in c. Here's what it said.</p>

<pre>To see the assembly code for your C program, you can use the `gcc` compiler with the `-S` flag. Here are the steps:

1. Open a terminal.
2. Navigate to the directory containing your C file:
    $ cd c/letsfigure
    </pre>

<p>Here is the contents of letsfigure.c</p>

<pre>#include <stdio.h>

int main() {
    printf("Hello, World!\n");
    return 0;
}
</pre>

<pre>3. Compile the C file to assembly using `gcc`:
    $ gcc -S letsfigure.c -o letsfigure.s

This will generate an assembly file named `letsfigure.s` in the same directory. You can open this file with any text editor to see the assembly code. 
</pre>

<p>Here is the contents of letsfigure.s</p>


<pre>	.arch armv8-a
	.file	"letsfigure.c"
	.text
	.section	.rodata
	.align	3
.LC0:
	.string	"Hello, World!"
	.text
	.align	2
	.global	main
	.type	main, %function
main:
.LFB0:
	.cfi_startproc
	stp	x29, x30, [sp, -16]!
	.cfi_def_cfa_offset 16
	.cfi_offset 29, -16
	.cfi_offset 30, -8
	mov	x29, sp
	adrp	x0, .LC0
	add	x0, x0, :lo12:.LC0
	bl	puts
	mov	w0, 0
	ldp	x29, x30, [sp], 16
	.cfi_restore 30
	.cfi_restore 29
	.cfi_def_cfa_offset 0
	ret
	.cfi_endproc
.LFE0:
	.size	main, .-main
	.ident	"GCC: (Ubuntu 13.2.0-23ubuntu4) 13.2.0"
	.section	.note.GNU-stack,"",@progbits
</pre>

<p>Now for example, here is a basic example of a Hello on Arm64 in Assembly.</p>

<pre>.data

/* Data segment: define our message string and calculate its length. */
msg:
    .ascii        "Hello, ARM64!\n"
len = . - msg

.text

/* Our application's entry point. */
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
    svc     #0          /* invoke syscall */
</pre>

<p>Added: Compile executable here and forget objdump:</p>

 <pre>   $ gcc letsfigure.c -o letsfigure</pre>

<p>But if you want to see the assembly code directly in the terminal, you can use the `objdump` tool:</p>

<pre>1. First, compile the C file to an object file:
    $ gcc -c letsfigure.c -o letsfigure.o

2. Or, use `objdump` to disassemble the object file:
    $ objdump -d letsfigure.o

This will display the assembly code in the terminal.</pre>
<p>&nbsp;</p>
<?php include("../../footer.php"); ?>
