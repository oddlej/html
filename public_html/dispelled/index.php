<?php include("header.php"); ?>

<!-- This overrides image display (!important) and keeps iframes off of this page only. -->
<style>
img {display: none !important;}
iframe {display: none;}
</style>
<h1>Dispelled.ca Homepage</h1>
<p>Welcome to our little spot on the Internet. Finally got it back to the basics. This site is made only from <a href="http://dispelled.ca/categories/Code/How%20this%20website%20was%20made.php">a few PHP files and a flat file directory structure</a>.</p>
<p>Things will get broken, and things will get better. Cheers.</p>
<!-- Quick links is back lol! I'll move the CSS later -->
<div style="display: inline-block; background-color:#259ccc; -webkit-border-top-left-radius: 2ex; -webkit-border-top-right-radius: 2ex; -webkit-border-bottom-left-radius: 2ex; -webkit-border-bottom-right-radius: 2ex;"><div style="padding: 10px;"><p><b>New Links!</b></p>
<p>New in Code: (Oct 20 2024)
<br><a href="https://dispelled.ca/categories/Code/Starting%20with%20Github%20-%20Create%20a%20new%20repository%20on%20the%20command%20line.php">Starting with Github - Create a new repository on the command line</a></p>
<p>New in Code: (Oct 14 2024)
<br><a href="https://dispelled.ca/categories/Code/The%20Branch%20command%20for%20Assembly%20in%20Arm64%20with%20GDB.php">The Branch command for Assembly in Arm64 with GDB</a></p>
<p><a href="https://dispelled.ca/categories/Code/Starting%20to%20learn%20Assembly%20for%20ARMV8%20with%20a%20Khadas%20Vim3%20and%20Ubuntu%2024.04.php">Starting to learn Assembly for ARMV8 with a Khadas Vim3 and Ubuntu 24.04</a></p>
<p><a href="https://dispelled.ca/categories/Code/Debugging%20Assembly%20code%20for%20Arm64%20with%20GDB.php">Debugging Assembly code for Arm64 with GDB</a></p>
<p>New in Cpus: (Oct 14 2024)
<br><a href="https://dispelled.ca/categories/Cpus/Re-installing%20ProtonVPN%20on%20Ubuntu%2024.04%20for%20ARM.php">Re-installing ProtonVPN on Ubuntu 24.04 for ARM</a></p>
</div></div>
<p><b>Old School News Feeds (RSS)</b> <a href="https://dispelled.ca/categories/Code/RSS%20example%20from%20main%20page.php">How?</a></p>
<p><b>Slashdot</b></p>
<?php
	$rss = new DOMDocument();
	$rss->load('http://rss.slashdot.org/Slashdot/slashdot');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 5;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
		echo '<p>'.$description.'</p>';
	}
?>


<p><b>Ars Technica</b></p>
<?php
	$rss = new DOMDocument();
	$rss->load('https://feeds.arstechnica.com/arstechnica/index');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 20;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
		echo '<p>'.$description.'</p>';
	}
?>


<p><b>Rebel News</b></p>
<?php
	$rss = new DOMDocument();
	$rss->load('https://www.rebelnews.com/news.rss');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 20;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong></p>';
	}
?>


<p><b>The Gateway Pundit</b></p>
<?php
	$rss = new DOMDocument();
	$rss->load('https://www.thegatewaypundit.com/rss/');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 15;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
		echo '<p>'.$description.'</p>';
	}
?>

<p><b>Dissentwatch</b></p>
<?php
	$rss = new DOMDocument();
	$rss->load('https://dissentwatch.com/?feed=linkfeed');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 10;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
		echo '<p>'.$description.'</p>';
	}
?>


<p><b>Childrens Health Defense</b></p>
<?php
	$rss = new DOMDocument();
	$rss->load('https://childrenshealthdefense.org/rss/');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 20;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
		echo '<p>'.$description.'</p>';
	}
?>

<p><b>Infowars</b></p>
<?php
	$rss = new DOMDocument();
	$rss->load('https://www.infowars.com/rss.xml');
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			);
		array_push($feed, $item);
	}
	$limit = 9;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
		echo '<p>'.$description.'</p>';
	}
?>


<?php include("footer.php"); ?>
					
