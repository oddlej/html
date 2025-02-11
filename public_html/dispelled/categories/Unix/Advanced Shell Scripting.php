<!--date=20250206 -->

<?php include("../../headercat.php"); ?>

<h1>Advanced Shell Scripting</h1>
<p>Shell scripting is a powerful tool for automating tasks and managing Unix systems. This tutorial will explore advanced techniques in shell scripting, including control structures, functions, error handling, and interacting with system processes.</p>

<h2>Introduction to Shell Scripting</h2>
<p>Shell scripts are text files containing a sequence of commands that are executed by the shell. They are used to automate repetitive tasks, manage system configurations, and perform complex operations. Advanced shell scripting requires a deep understanding of shell syntax, control structures, and system commands.</p>

<h2>Control Structures</h2>
<p>Control structures allow you to control the flow of execution in a shell script. Here are some common control structures:</p>

<h3>If-Else Statements</h3>
<p>If-else statements are used to execute commands based on a condition:</p>
<pre>
<code class="language-plaintext">
if [ condition ]; then
    # Commands to execute if condition is true
elif [ another_condition ]; then
    # Commands to execute if another_condition is true
else
    # Commands to execute if all conditions are false
fi
</code>
</pre>

<h3>Case Statements</h3>
<p>Case statements are used to execute commands based on multiple conditions:</p>
<pre>
<code class="language-plaintext">
case $variable in
    pattern1)
        # Commands to execute if variable matches pattern1
        ;;
    pattern2)
        # Commands to execute if variable matches pattern2
        ;;
    *)
        # Commands to execute if variable does not match any pattern
        ;;
esac
</code>
</pre>

<h3>For Loops</h3>
<p>For loops are used to iterate over a list of items:</p>
<pre>
<code class="language-plaintext">
for item in list; do
    # Commands to execute for each item
done
</code>
</pre>

<h3>While Loops</h3>
<p>While loops are used to execute commands as long as a condition is true:</p>
<pre>
<code class="language-plaintext">
while [ condition ]; do
    # Commands to execute while condition is true
done
</code>
</pre>

<h3>Until Loops</h3>
<p>Until loops are used to execute commands until a condition becomes true:</p>
<pre>
<code class="language-plaintext">
until [ condition ]; do
    # Commands to execute until condition becomes true
done
</code>
</pre>

<h2>Functions</h2>
<p>Functions allow you to group commands into reusable blocks. Here is the syntax for defining and calling functions:</p>

<h3>Defining Functions</h3>
<pre>
<code class="language-plaintext">
function_name() {
    # Commands to execute
}
</code>
</pre>

<h3>Calling Functions</h3>
<pre>
<code class="language-plaintext">
function_name
</code>
</pre>

<h3>Passing Arguments to Functions</h3>
<p>Arguments can be passed to functions and accessed using positional parameters:</p>
<pre>
<code class="language-plaintext">
function_name() {
    arg1=$1
    arg2=$2
    # Commands to execute using arg1 and arg2
}

function_name value1 value2
</code>
</pre>

<h2>Error Handling</h2>
<p>Error handling is essential for creating robust shell scripts. Here are some techniques for error handling:</p>

<h3>Exit Status</h3>
<p>Every command returns an exit status, which can be checked to determine if the command was successful:</p>
<pre>
<code class="language-plaintext">
command
if [ $? -eq 0 ]; then
    echo "Command succeeded"
else
    echo "Command failed"
fi
</code>
</pre>

<h3>Using set -e</h3>
<p>The <code>set -e</code> command causes the script to exit immediately if any command returns a non-zero exit status:</p>
<pre>
<code class="language-plaintext">
set -e
command1
command2
</code>
</pre>

<h3>Trap Command</h3>
<p>The <code>trap</code> command allows you to specify commands to execute when the script exits or receives a signal:</p>
<pre>
<code class="language-plaintext">
trap 'echo "An error occurred. Exiting..."; exit 1' ERR
command1
command2
</code>
</pre>

<h2>Interacting with System Processes</h2>
<p>Shell scripts can interact with system processes to perform various tasks. Here are some common techniques:</p>

<h3>Background Processes</h3>
<p>Commands can be run in the background by appending an ampersand (&) to the command:</p>
<pre>
<code class="language-plaintext">
command &
</code>
</pre>

<h3>Waiting for Processes</h3>
<p>The <code>wait</code> command waits for background processes to complete:</p>
<pre>
<code class="language-plaintext">
command1 &
command2 &
wait
</code>
</pre>

<h3>Process Substitution</h3>
<p>Process substitution allows you to use the output of a command as input to another command:</p>
<pre>
<code class="language-plaintext">
diff <(command1) <(command2)
</code>
</pre>

<h3>Reading from Pipes</h3>
<p>Pipes allow you to pass the output of one command as input to another command:</p>
<pre>
<code class="language-plaintext">
command1 | command2
</code>
</pre>

<h2>Example: Backup Script</h2>
<p>Let's create a backup script that compresses a directory and stores the backup in a specified location. The script will include error handling and logging:</p>

<h3>Backup Script</h3>
<pre>
<code class="language-plaintext">
#!/bin/bash

# Function to display usage information
usage() {
    echo "Usage: $0 source_directory backup_directory"
    exit 1
}

# Check if the correct number of arguments is provided
if [ $# -ne 2 ]; then
    usage
fi

SOURCE_DIR=$1
BACKUP_DIR=$2
TIMESTAMP=$(date +%Y%m%d%H%M%S)
BACKUP_FILE="$BACKUP_DIR/backup_$TIMESTAMP.tar.gz"
LOG_FILE="$BACKUP_DIR/backup_$TIMESTAMP.log"

# Function to log messages
log() {
    echo "$(date +%Y-%m-%d\ %H:%M:%S) - $1" | tee -a $LOG_FILE
}

# Error handling
trap 'log "An error occurred. Exiting..."; exit 1' ERR
set -e

# Create backup
log "Starting backup of $SOURCE_DIR to $BACKUP_FILE"
tar -czf $BACKUP_FILE $SOURCE_DIR
log "Backup completed successfully"

exit 0
</code>
</pre>

<h2>Practice Exercises</h2>
<p>Here are some practice exercises to help you develop your shell scripting skills:</p>
<ol>
    <li>Write a script to monitor disk usage and send an email alert if usage exceeds a specified threshold.</li>
    <li>Write a script to automate the process of updating and upgrading system packages.</li>
    <li>Write a script to search for files with specific extensions in a directory and move them to a specified location.</li>
    <li>Write a script to generate a report of system resource usage (CPU, memory, disk) and save it to a file.</li>
    <li>Write a script to create user accounts from a CSV file and set default passwords.</li>
</ol>

<p>&nbsp;</p>
<?php include("../../footer.php"); ?>
