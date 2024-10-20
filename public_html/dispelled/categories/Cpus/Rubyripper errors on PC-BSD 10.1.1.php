<!--date=20150419 -->

<?php include("../../headercat.php"); ?>

<h1>Rubyripper errors on PC-BSD 10.1.1</h1>

<p>An easy one, but might as well document it. PC-BSD 10.1.1, Rubyripper 0.6.2_2. I was having trouble ripping some of my CD’s with Rubyripper. It would crash as soon as the ripping process started</p>
<p><code>% rrip_gtk2<br>
/usr/home/myusername/Desktop/flac/Name of CD<br>
/usr/local/lib/ruby/site_ruby/2.0/rr_lib.rb:1661:in `gsub!': incompatible encoding regexp match (UTF-8 regexp with ASCII-8BIT string)<br>
 from /usr/local/lib/ruby/site_ruby/2.0/rr_lib.rb:1661:in `allFilter'<br>
	 from /usr/local/lib/ruby/site_ruby/2.0/rr_lib.rb:1638:in `tagFilter'<br>
	 from /usr/local/lib/ruby/site_ruby/2.0/rr_lib.rb:1599:in `block in setMetadata'<br>
	 from /usr/local/lib/ruby/site_ruby/2.0/rr_lib.rb:1598:in `times'<br>
	 from /usr/local/lib/ruby/site_ruby/2.0/rr_lib.rb:1598:in `setMetadata'<br>
	 from /usr/local/lib/ruby/site_ruby/2.0/rr_lib.rb:1481:in `attemptDirCreation'<br>
	 from /usr/local/lib/ruby/site_ruby/2.0/rr_lib.rb:1387:in `initialize'<br>
	 from /usr/local/lib/ruby/site_ruby/2.0/rr_lib.rb:2529:in `new'<br>
	 from /usr/local/lib/ruby/site_ruby/2.0/rr_lib.rb:2529:in `settingsOk'<br>
	 from /usr/local/bin/rrip_gtk2:285:in `start_rip'<br>
	 from /usr/local/bin/rrip_gtk2:90:in `block in create_signals'<br>
	 from /usr/local/bin/rrip_gtk2:1486:in `call'<br>
	 from /usr/local/bin/rrip_gtk2:1486:in `main'<br>
	 from /usr/local/bin/rrip_gtk2:1486:in `main'</code></p>
<p>Then nothing. The second line tells you which file to look at, and in this case helped. I opened /usr/local/lib/ruby/site_ruby/2.0/rr_lib.rb and went to line 1661 which reads</p>
<p><code>		# replace utf-8 single quotes with latin single quote<br>
		var.gsub!(/\342\200\230|\342\200\231/, "'")<br>
		# replace utf-8 double quotes with latin double quote<br>
		var.gsub!(/\342\200\234|\342\200\235/, '"')</code></p>
<p>So this is all about quotes. My workaround is to remove quotes from the Album artist, title, and song names. Done and burned. I’m sure I could look further into why this happened, but it’s not my job man!</p>

<?php include("../../footer.php"); ?>
