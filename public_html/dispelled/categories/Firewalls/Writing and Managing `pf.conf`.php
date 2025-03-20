<!--date=20250208 -->

<?php include("../../headercat.php"); ?>

<h1>Writing and Managing `pf.conf`</h1>
<p>The `pf.conf` file is the heart of OpenBSD’s `pf` (Packet Filter) firewall. It defines all the rules, options, and configurations for the firewall. This tutorial provides an in-depth guide to writing, organizing, and managing `pf.conf` effectively, with examples and best practices.</p>

<h2>Overview of `pf.conf`</h2>
<p>The `pf.conf` file is typically located at `/etc/pf.conf`. It is a plain text file that contains the rules and settings for the `pf` firewall. The file is divided into several sections:</p>
<ul>
    <li><strong>Macros:</strong> Variables for simplifying and reusing values.</li>
    <li><strong>Tables:</strong> Dynamic lists of IP addresses or networks.</li>
    <li><strong>Options:</strong> Global settings for `pf` behavior.</li>
    <li><strong>Normalization:</strong> Rules for normalizing packets.</li>
    <li><strong>Queueing:</strong> Traffic shaping and prioritization rules.</li>
    <li><strong>Filtering Rules:</strong> Rules for allowing or blocking traffic.</li>
    <li><strong>NAT and Redirection:</strong> Rules for Network Address Translation and port forwarding.</li>
</ul>

<h2>Basic Structure of `pf.conf`</h2>
<p>Here’s a basic template for a `pf.conf` file:</p>
<pre>
<code class="language-plaintext">
# Macros
ext_if = "em0"  # External interface
int_if = "em1"  # Internal interface
local_net = "192.168.1.0/24"

# Tables
table <blocked_ips> persist

# Options
set skip on lo  # Skip filtering on the loopback interface
set block-policy drop  # Drop packets silently
set loginterface $ext_if  # Log traffic on the external interface

# Normalization
scrub in on $ext_if all fragment reassemble

# NAT
nat on $ext_if from $local_net to any -> ($ext_if)

# Filtering Rules
block all
pass in on $int_if from $local_net to any keep state
pass out on $ext_if proto tcp to port 80 keep state
block in quick from <blocked_ips>
</code>
</pre>

<h3>Explanation</h3>
<ul>
    <li><strong>Macros:</strong> Simplify the configuration by defining variables for interfaces and networks.</li>
    <li><strong>Tables:</strong> Use dynamic lists for managing IP addresses efficiently.</li>
    <li><strong>Options:</strong> Configure global settings for `pf` behavior.</li>
    <li><strong>Normalization:</strong> Ensure packets are well-formed and reassemble fragments.</li>
    <li><strong>NAT:</strong> Enable NAT for traffic from the internal network to the external interface.</li>
    <li><strong>Filtering Rules:</strong> Define rules for blocking or allowing traffic.</li>
</ul>

<h2>Writing Rules in `pf.conf`</h2>
<p>Rules in `pf.conf` are written in a specific format. Here’s a breakdown of the key components:</p>

<h3>1. Block and Pass Rules</h3>
<p>These rules determine whether traffic is allowed or blocked:</p>
<pre>
<code class="language-plaintext">
# Block all traffic by default
block all

# Allow incoming SSH traffic
pass in on $ext_if proto tcp to port 22 keep state
</code>
</pre>

<h3>2. NAT Rules</h3>
<p>NAT rules translate private IP addresses to public IP addresses:</p>
<pre>
<code class="language-plaintext">
# NAT for internal network
nat on $ext_if from $local_net to any -> ($ext_if)
</code>
</pre>

<h3>3. Redirection Rules</h3>
<p>Redirect traffic to internal servers:</p>
<pre>
<code class="language-plaintext">
# Redirect HTTP traffic to an internal web server
rdr on $ext_if proto tcp to port 80 -> 192.168.1.100 port 80
</code>
</pre>

<h3>4. Logging Rules</h3>
<p>Log specific traffic for monitoring and troubleshooting:</p>
<pre>
<code class="language-plaintext">
# Log incoming SSH traffic
pass in log on $ext_if proto tcp to port 22 keep state
</code>
</pre>

<h3>5. Quick Rules</h3>
<p>Quick rules are evaluated immediately and override subsequent rules:</p>
<pre>
<code class="language-plaintext">
# Block traffic from a specific IP immediately
block in quick from 192.168.1.200
</code>
</pre>

<h2>Managing `pf.conf`</h2>
<p>Once you’ve written your `pf.conf` file, you need to load and manage it using `pfctl`:</p>

<h3>1. Enabling and Reloading `pf`</h3>
<pre>
<code class="language-plaintext">
# Enable pf
pfctl -e

# Load the configuration file
pfctl -f /etc/pf.conf
</code>
</pre>

<h3>2. Testing the Configuration</h3>
<p>Always test your configuration before applying it:</p>
<pre>
<code class="language-plaintext">
# Test the syntax of pf.conf
pfctl -nf /etc/pf.conf
</code>
</pre>

<h3>3. Viewing Active Rules</h3>
<p>Check the currently loaded rules:</p>
<pre>
<code class="language-plaintext">
pfctl -sr
</code>
</pre>

<h3>4. Monitoring Traffic</h3>
<p>Use `tcpdump` to monitor traffic in real-time:</p>
<pre>
<code class="language-plaintext">
tcpdump -n -e -ttt -i pflog0
</code>
</pre>

<h2>Best Practices for Managing `pf.conf`</h2>
<p>Follow these best practices to ensure your `pf.conf` file is effective and maintainable:</p>
<ul>
    <li><strong>Comment Your Rules:</strong> Add comments to explain the purpose of each rule.</li>
    <li><strong>Group Related Rules:</strong> Organize rules by function (e.g., NAT, filtering, logging).</li>
    <li><strong>Use Macros and Tables:</strong> Simplify your configuration and make it easier to update.</li>
    <li><strong>Test Before Applying:</strong> Always test your configuration with `pfctl -nf` before reloading it.</li>
    <li><strong>Enable Logging:</strong> Log critical rules to monitor traffic and troubleshoot issues.</li>
    <li><strong>Backup Configurations:</strong> Keep backups of your `pf.conf` file to recover from mistakes or failures.</li>
</ul>

<h2>Advanced Techniques</h2>
<p>Here are some advanced techniques for managing `pf.conf`:</p>

<h3>1. Dynamic Tables</h3>
<p>Use tables to manage large lists of IP addresses dynamically:</p>
<pre>
<code class="language-plaintext">
table <blocked_ips> persist
block in quick from <blocked_ips>
</code>
</pre>
<p>Add or remove IPs dynamically:</p>
<pre>
<code class="language-plaintext">
pfctl -t blocked_ips -T add 192.168.1.100
pfctl -t blocked_ips -T delete 192.168.1.100
</code>
</pre>

<h3>2. Anchors</h3>
<p>Use anchors to modularize your configuration:</p>
<pre>
<code class="language-plaintext">
anchor "webserver"
load anchor "webserver" from "/etc/pf.webserver.conf"
</code>
</pre>

<h2>Conclusion</h2>
<p>Writing and managing `pf.conf` is a critical skill for using OpenBSD’s `pf` firewall effectively. By understanding its structure, syntax, and best practices, you can create powerful and maintainable firewall configurations. In the next tutorial, we’ll explore advanced features of `pf`, including traffic shaping and high availability. Stay tuned!</p>

<p>&nbsp;</p>
<?php include("../../footer.php"); ?>
