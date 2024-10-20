<!DOCTYPE html>
<html>
<head>
<style>
body {
  min-width : 600px;
  background-color: #ffffff;
  background-image: url("img/wrbg.png");
  background-repeat: no-repeat;
  background-position: left top;
  background-attachment: fixed;
}

h1 {
font-family: 'assistantbold', Arial, sans-serif;
font-weight:normal;
font-style:normal;
color: #111111;
}
p, a    {
font-family: 'assistantregular', Arial, sans-serif;
font-weight:normal;
font-style:normal;
color: #333333;
}
/* to make comments on slashdot disappear */
iframe {
	display:none;
}
@font-face {
    font-family: 'assistantbold';
    src: url('https://webroot.net/font/assistant-bold-webfont.woff2') format('woff2'),
         url('https://webroot.net/font/assistant-bold-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'assistantregular';
    src: url('https://webroot.net/font/assistant-regular-webfont.woff2') format('woff2'),
         url('https://webroot.net/font/assistant-regular-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
</style>
<title>Webroot.net</title>
</head>

<body>
<div align="right" style="margin-right: 120px;">
	<a href="https://webroot.net/"><img src="img/wrlogo.png"></img></a>
</div>
<p>&nbsp;</p>
<div style="margin: auto; width: 1000px; background-color: #BBBBBB; opacity: 0.8;">
	<div align="left" style="border: 10px solid #DDDDDD; padding: 0px 20px 20px 20px;">
<!-- end of header.php -->

<h1>Testing 1,2,3...</h1>

<?php
$a =
 '
';
$b = htmlentities($a);
echo $b;
?>


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
	$limit = 20;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
		echo '<p>'.$description.'</p>';
	}
?>


<p><b>Summit News</b></p>
<?php
	$rss = new DOMDocument();
	$rss->load('https://summit.news/feed');
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
	$limit = 15;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
		echo '<p>'.$description.'</p>';
	}
?>

<p>&nbsp;</p>

<!-- start of footer.php -->
	</div>
</div>
<p>&nbsp;</p>
</body>
</html> 











