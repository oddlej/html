<!--date=20250207 -->

<?php include("../../headercat.php"); ?>

<h1>Advanced Process Management</h1>
<p>Process management is a critical aspect of Unix system administration, involving the creation, monitoring, and control of processes. This tutorial will explore advanced techniques in process management, including process creation, signals, job control, and performance monitoring.</p>

<h2>Introduction to Process Management</h2>
<p>A process is an instance of a running program. Unix systems use processes to manage the execution of programs and tasks. Advanced process management requires a deep understanding of process creation, signals, job control, and performance monitoring to ensure efficient and reliable system operation.</p>

<h2>Process Creation</h2>
<p>Processes can be created using various commands and system calls. Here are some common methods for process creation:</p>

<h3>Fork and Exec</h3>
<p>The <code>fork</code> system call creates a new process by duplicating the calling process. The <code>exec</code> family of functions replaces the current process image with a new process image:</p>
<pre>
<code class="language-plaintext">
pid_t pid = fork();
if (pid == 0) {
    // Child process
    execl("/bin/ls", "ls", NULL);
} else if (pid > 0) {
    // Parent process
    wait(NULL);
} else {
    // Fork failed
    perror("fork");
}
</code>
</pre>

<h3>System Command</h3>
<p>The <code>system</code> function executes a shell command in a new process:</p>
<pre>
<code class="language-plaintext">
system("ls -l");
</code>
</pre>

<h3>Shell Commands</h3>
<p>Shell commands can be used to create processes directly from the command line:</p>
<pre>
<code class="language-plaintext">
$ ls -l
</code>
</pre>

<h2>Signals</h2>
<p>Signals are used to communicate with and control processes. Here are some common signals and their purposes:</p>
<ul>
    <li><strong>SIGHUP:</strong> Hangup detected on controlling terminal or death of controlling process.</li>
    <li><strong>SIGINT:</strong> Interrupt from keyboard (Ctrl+C).</li>
    <li><strong>SIGQUIT:</strong> Quit from keyboard (Ctrl+\).</li>
    <li><strong>SIGKILL:</strong> Kill signal (cannot be caught or ignored).</li>
    <li><strong>SIGTERM:</strong> Termination signal.</li>
    <li><strong>SIGSTOP:</strong> Stop process (cannot be caught or ignored).</li>
    <li><strong>SIGCONT:</strong> Continue if stopped.</li>
</ul>

<h3>Sending Signals</h3>
<p>Use the <code>kill</code> command to send signals to processes:</p>
<pre>
<code class="language-plaintext">
$ kill -SIGTERM pid
$ kill -9 pid   # Send SIGKILL signal
</code>
</pre>

<h3>Handling Signals</h3>
<p>Processes can handle signals using signal handlers:</p>
<pre>
<code class="language-plaintext">
#include <signal.h>
#include <stdio.h>
#include <stdlib.h>

void handle_signal(int signal) {
    printf("Received signal %d\n", signal);
}

int main() {
    signal(SIGINT, handle_signal);
    while (1) {
        printf("Running...\n");
        sleep(1);
    }
    return 0;
}
</code>
</pre>

<h2>Job Control</h2>
<p>Job control allows you to manage multiple processes within a single shell session. Here are some common job control commands:</p>

<h3>Background and Foreground</h3>
<p>Use the <code>&</code> operator to run a command in the background:</p>
<pre>
<code class="language-plaintext">
$ command &
</code>
</pre>
<p>Use the <code>fg</code> command to bring a background job to the foreground:</p>
<pre>
<code class="language-plaintext">
$ fg %job_id
</code>
</pre>

<h3>Job Listing</h3>
<p>Use the <code>jobs</code> command to list all jobs in the current shell session:</p>
<pre>
<code class="language-plaintext">
$ jobs
</code>
</pre>

<h3>Stopping and Continuing Jobs</h3>
<p>Use the <code>Ctrl+Z</code> key combination to stop a foreground job:</p>
<pre>
<code class="language-plaintext">
$ command
^Z
[1]+  Stopped                 command
</code>
</pre>
<p>Use the <code>bg</code> command to continue a stopped job in the background:</p>
<pre>
<code class="language-plaintext">
$ bg %job_id
</code>
</pre>

<h2>Performance Monitoring</h2>
<p>Performance monitoring is essential for ensuring efficient and reliable system operation. Here are some common tools for monitoring process performance:</p>

<h3>top</h3>
<p>The <code>top</code> command provides a real-time view of system processes and resource usage:</p>
<pre>
<code class="language-plaintext">
$ top
</code>
</pre>

<h3>ps</h3>
<p>The <code>ps</code> command displays information about active processes:</p>
<pre>
<code class="language-plaintext">
$ ps aux
</code>
</pre>

<h3>htop</h3>
<p>The <code>htop</code> command is an interactive process viewer with a user-friendly interface:</p>
<pre>
<code class="language-plaintext">
$ htop
</code>
</pre>

<h3>vmstat</h3>
<p>The <code>vmstat</code> command reports virtual memory statistics:</p>
<pre>
<code class="language-plaintext">
$ vmstat
</code>
</pre>

<h3>iostat</h3>
<p>The <code>iostat</code> command reports CPU and I/O statistics:</p>
<pre>
<code class="language-plaintext">
$ iostat
</code>
</pre>

<h3>netstat</h3>
<p>The <code>netstat</code> command displays network connections, routing tables, and interface statistics:</p>
<pre>
<code class="language-plaintext">
$ netstat
</code>
</pre>

<h2>Example: Monitoring and Managing a Long-Running Process</h2>
<p>Let's create a script to monitor and manage a long-running process. The script will start the process, monitor its resource usage, and send an alert if the process exceeds a specified resource threshold:</p>

<h3>Monitoring Script</h3>
<pre>
<code class="language-plaintext">
#!/bin/bash

# Function to send an alert
send_alert() {
    echo "Resource usage exceeded threshold. Sending alert..."
    # Add code to send an email or notification
}

# Start the long-running process in the background
long_running_process &
PID=$!

# Monitor the process
while true; do
    # Get the CPU and memory usage of the process
    CPU_USAGE=$(ps -p $PID -o %cpu=)
    MEM_USAGE=$(ps -p $PID -o %mem=)

    # Check if the process exceeds the resource threshold
    if (( $(echo "$CPU_USAGE > 80.0" | bc -l) )) || (( $(echo "$MEM_USAGE > 80.0" | bc -l) )); then
        send_alert
    fi

    # Sleep for a specified interval before checking again
    sleep 60
done
</code>
</pre>

<h2>Practice Exercises</h2>
<p>Here are some practice exercises to help you develop your process management skills:</p>
<ol>
    <li>Write a script to start multiple background processes and monitor their resource usage. Send an alert if any process exceeds a specified resource threshold.</li>
    <li>Write a script to periodically check the status of a critical process and restart it if it is not running.</li>
    <li>Write a script to log the resource usage of a process over time and generate a report.</li>
    <li>Write a script to manage a batch of jobs, ensuring that only a specified number of jobs run concurrently.</li>
    <li>Write a script to capture and handle specific signals (e.g., SIGINT, SIGTERM) and perform cleanup tasks before exiting.</li>
</ol>

<p>&nbsp;</p>
<?php include("../../footer.php"); ?>
