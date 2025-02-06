<!--date=20151108 -->

<?php include("../../headercat.php"); ?>

<h1>Overheating problems on an old ECS TF570 motherboard. Xubuntu 12.04 workarounds</h1>
										
<p>Well this old motherboard of mine (<a href="http://www.biostar-usa.com/app/en-us/mb/introduction.php?S_ID=181">ECS TF-570</a>) has started to have some problems. When encoding videos with Avidemux, it was randomly shutting down. I run Xubuntu Linux 12.04 as my operating system. I have driven myself crazy troubleshooting hardware problems as software problems in the past. Luckily this time I thought hardware first since it is only happening when the CPU is loaded up. I was headed in the right direction from the get go.</p>
<p>I googled my way to <a href="http://butterflyofdream.wordpress.com/2012/08/05/how-to-prevent-cpu-overheating/">this page</a>, which really got things started fast.</p>
<pre>$ sudo apt-get install cpufrequtils

$ cpufreq-info</pre>
<p>For me it read</p>
<pre>current CPU frequency is 2.4 GHz</pre>
<pre>hardware limits: 1000 MHz - 2.40 GHz</pre>
<pre>available frequency steps: 2.40 GHz, 2.20 GHz, 2.00 GHz, 1.80 GHz, 1000 MHz</pre>
<p>This is while the system was encoding. When the CPU is not loaded up, it showed 1000MHz. I let an encoding run while I set the cpu. So using the next command, you can adjust to any value shown in your “available frequency steps”. I set it to</p>
<p><code>sudo cpufreq-set -u 2.0Ghz</code></p>
<p>Now, when you run the cpufreq-info command it shows 2.0Ghz (as long as the CPU is loaded up doing work!). Here is the <a href="http://www.thinkwiki.org/wiki/How_to_use_cpufrequtils">wiki page for cpufreq</a>. Now to display it. I looked for <a href="http://superuser.com/questions/25176/how-can-i-monitor-the-cpu-temperature-under-linux">another page</a> and installed the sensors side of things.</p>
<pre>$ sudo apt-get install lm-sensors
$ sensors</pre>
<p>This showed me</p>
<pre>acpitz-virtual-0
Adapter: Virtual device
temp1:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +59.0°C&nbsp; (crit = +70.0°C)

k8temp-pci-00c3
Adapter: PCI adapter
Core0 Temp:&nbsp;&nbsp; +59.0°C &nbsp;
Core1 Temp:&nbsp;&nbsp; +64.0°C</pre>
<p>And higher, so I knew I was on the right track. it was shutting down when it reached the crit limit.</p>
<pre>$ sudo sensors-detect</pre>
<p>and said yes to everything</p>
<pre>$ sudo service module-init-tools start</pre>
<p>Lastly, a way to view the sensors.</p>
<pre>$ sudo apt-get install gkrellm</pre>
<pre>$ gkrellm</pre>
<p>I went into the preferences and checked off all my sensors so they would display. No more guessing WTF happened! You can also use widgets or conky (as shown at the bottom of <a href="http://superuser.com/questions/25176/how-can-i-monitor-the-cpu-temperature-under-linux">this</a> page) to display the sensor information, but this was the way I decided I liked it.</p>



<?php include("../../footer.php"); ?>
