<?php include("header.php"); ?>
<h1>Homepage</h1>

<p><strong>Games</strong><br />

<a href="https://hsr.hoyoverse.com/en-us/">Honkai Star Rail</a>, <a href="https://www.reddit.com/r/HonkaiStarRail/">HSR Reddit</a>, <a href="https://genshin.hoyoverse.com/en/">Genshin Impact</a>,
<a href="https://www.reddit.com/r/Genshin_Impact/">Genshin Reddit</a>, <a href="https://www.hoyolab.com/home">HoyoLab</a>
</p>

<p><strong>3D Printing</strong><br />
<a href="https://thingiverse.com/">Thingiverse</a>, <a href="https://thangs.com/?sort=likes&range=month">Thangs</a>, <a href="https://cults3d.com/">Cults 3D</a>, <a href="https://www.printables.com/">Printables</a>, <a href="https://www.myminifactory.com/search/?stw=1&sortBy=date&featured=1">My Mini Factory</a>, <a href="https://pinshape.com/3d-marketplace">Pinshape</a>, <a href="https://www.youmagine.com/">Youmagine</a>, <a href="https://library.zortrax.com/">Zortrax</a>, <a href="https://www.artec3d.com/3d-models">Artec 3D</a>, <a href="https://www.creality.com/pages/download/">Creality</a>, <a href="https://ultimaker.com/software/ultimaker-cura/">Cura by Ultimaker</a>
</p>

<p><b>News Feeds (RSS)</b></a></p>

<p><b>Subs Please Latest Releases</b></p>
<?php
	$rss = new DOMDocument();
	$rss->load('https://subsplease.org/rss/?t');
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


<p><b>Crunchyroll Anime Videos</b></p>
<?php
	$rss = new DOMDocument();
	$rss->load('http://feeds.feedburner.com/crunchyroll/rss/anime');
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



<?php include("footer.php"); ?>



					