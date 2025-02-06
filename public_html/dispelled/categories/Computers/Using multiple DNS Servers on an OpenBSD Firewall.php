<!--date=20150901 -->

<?php include("../../headercat.php"); ?>

<h1>Using multiple DNS Servers on an OpenBSD Firewall</h1>
								
<p>I run an OpenBSD firewall configured much like the <a href="http://www.bsdnow.tv/tutorials/openbsd-router">tutorial at BSD Now</a>. After setting up the encrypted DNS lookups I ran into a problem. Some of the devices in the house needed to use the <a href="https://www.unblock-us.com/">Unblock-us</a> DNS service. I had already setup static I.P. addresses in <a href="http://www.openbsd.org/cgi-bin/man.cgi?query=dhclient.conf">/etc/dhclient.conf</a> so these two lines in <a href="http://www.openbsd.org/cgi-bin/man.cgi?query=pf.conf">/etc/pf.conf</a> took care of the problem. $crypt is the I.P.’s of the computers that will use encrypted lookups on <a href="https://www.opendns.com/">OpenDNS</a>. This is a modification to the configuration shown at BSD Now. In <a href="http://www.openbsd.org/cgi-bin/man.cgi?query=pf.conf">/etc/pf.conf</a></p>
<pre># crypt is wireless router, server, my computer, and music room computer
crypt="{ 192.168.1.2, 192.168.1.3, 192.168.1.5, 192.168.1.6 }"

block out quick log on egress proto { tcp udp } from $crypt to any port 53
pass in on $int_if proto { tcp udp } from $crypt to ! 192.168.1.1 port 53 rdr-to 192.168.1.1</pre>
<p>Now the wireless router, server and my computers use the OpenDNS encrypted lookups and the rest of the wired devices and my wife’s computer use the Unblock-us service. Why not default to OpenDNS? For me the only other devices in the house that are wired are media devices, and we have the wireless router (192.168.1.2) with a separate subnet (10.0.0.1) that now forces OpenDNS for the wireless.</p>


<?php include("../../footer.php"); ?>
