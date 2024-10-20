<!--date=20151108 -->

<?php include("../../headercat.php"); ?>

<h1>Playing local Video content on the Wii U</h1>

<p><a href="/images/qweborf2.jpg"><img class="alignright wp-image-3253" src="/images/qweborf2.jpg" alt="qweborf" height="210" width="200"></a>A quick post on how I got the kids videos playing on the Wii U this morning. I’m running <a href="http://ubuntustudio.org/">Ubuntu Studio</a> on this computer, but the idea is the same even for Windows, Mac, or BSD. A simple HTTP Server, and mp4 video played through the Wii U Internet Browser.</p>
<p>From the Software Center in Ubuntu I found the server <a href="http://manpages.ubuntu.com/manpages/precise/man1/qweborf.1.html">Qweborf</a>, and installed it. Opening it up, I made a http directory on the Desktop, and chose it as the directory to serve. Then I dropped the files in there and started the server.</p>
<p>&nbsp;</p>
<p>If you don’t know the IP of your computer look it up</p>
<pre>$ ifconfig

eth0 Link encap:Ethernet HWaddr (your mac address) 
 inet addr:192.168.1.5 Bcast:192.168.1.255 Mask:255.255.255.0
 inet6 addr: (your inet6 address) Scope:Link
 UP BROADCAST RUNNING MULTICAST MTU:1500 Metric:1
 RX packets:5679305 errors:0 dropped:0 overruns:0 frame:0
 TX packets:3703226 errors:0 dropped:0 overruns:0 carrier:0
 collisions:0 txqueuelen:1000 
 RX bytes:4521950937 (4.5 GB) TX bytes:9325905863 (9.3 GB)
 Interrupt:17

lo Link encap:Local Loopback 
 inet addr:127.0.0.1 Mask:255.0.0.0
 inet6 addr: ::1/128 Scope:Host
 UP LOOPBACK RUNNING MTU:65536 Metric:1
 RX packets:203480 errors:0 dropped:0 overruns:0 frame:0
 TX packets:203480 errors:0 dropped:0 overruns:0 carrier:0
 collisions:0 txqueuelen:0 
 RX bytes:23289411 (23.2 MB) TX bytes:23289411 (23.2 MB)</pre>
<p>Mine is 192.168.1.5 so on the Wii U, I open the Internet Browser and type</p>
<pre data-wpview-marker="http%3A%2F%2F192.168.1.5%3A8080">http://192.168.1.5:8080</pre>
<p>and it shows the files. Click to play. Now, I found that mp4 videos worked so far. Most of my stuff is MKV from <a href="https://handbrake.fr/">Handbrake</a>. Open a terminal.</p>
<pre>$ sudo apt-get install libav-tools
[sudo] password for user: 
Reading package lists... Done
Building dependency tree 
Reading state information... Done
The following NEW packages will be installed:
 libav-tools
0 upgraded, 1 newly installed, 0 to remove and 40 not upgraded.
Need to get 3,304 kB of archives.
After this operation, 9,396 kB of additional disk space will be used.
Get:1 http://ca.archive.ubuntu.com/ubuntu/ trusty-updates/universe libav-tools amd64 6:9.18-0ubuntu0.14.04.1 [3,304 kB]
Fetched 3,304 kB in 11s (281 kB/s) 
Selecting previously unselected package libav-tools.
(Reading database ... 319257 files and directories currently installed.)
Preparing to unpack .../libav-tools_6%3a9.18-0ubuntu0.14.04.1_amd64.deb ...
Unpacking libav-tools (6:9.18-0ubuntu0.14.04.1) ...
Processing triggers for man-db (2.6.7.1-1ubuntu1) ...
Setting up libav-tools (6:9.18-0ubuntu0.14.04.1) ...
$</pre>
<p>And then it’s just</p>
<pre>avconv -i movie.mkv -c copy movie.mp4</pre>
<p>I found anything with AC3 audio didn’t play. So I converted it to AAC. It takes a bit of time to transcode the audio.</p>
<pre>$ avconv -i movie.mkv -c:v copy -c:a libvo_aacenc movie.mp4</pre>
<p>Flash videos to mp4?</p>
<pre>$ avconv -i movie.flv -c copy movie.mp4</pre>
<p>That’s pretty much far as I’ve got.</p>

<?php include("../../footer.php"); ?>
