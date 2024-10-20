<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8" />
<title>Dispelled.ca</title>
<link rel="stylesheet" href="https://dispelled.ca/css/style.css" type="text/css" media="all" />
<style type="text/css" id="custom-background-css">
body.custom-background {background-image: url('https://dispelled.ca/bg/bg.jpg'); background-repeat: no-repeat; background-position: top left; background-attachment: fixed; background-size: 100%; }
</style>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
</head>

<body class="page page-template-default custom-background full-width">
<div id="titlediv"><div id="title">
<div style="text-align: right;"><a href="https://github.com/oddlej/" title="@oddlej on Github.com"><img style="padding-bottom: 31px; display: inline !important" src="https://avatars.githubusercontent.com/u/185309100?v=4&s=48" ></a><a href="https://dispelled.ca/"><img src="https://dispelled.ca/bg/dispelled.png" style="display: inline !important" title="Hocus Pocus Black Magic"></a></div></div></div>
<div id="page" class="hfeed site">
<header id="masthead" class="site-header" role="banner">
		
<!-- #site-navigation -->
<nav id="site-navigation" class="main-navigation" role="navigation">
			<div class="menu-menu1-container"><ul id="menu-menu1" class="nav-menu"><li id="menu-item-2915" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2915"><a href="https://dispelled.ca/cori/">Cori&#8217;s Stuff</a></li><li id="menu-item-2915" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2915"><a href="https://dispelled.ca/j/">J&#8217;s stuff</a></li><li id="menu-item-2915" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2915"><a href="https://sellco.ca">Sellco.ca</a></li>

<?PHP
  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.
  function getFileList($dir)
  {
    // array to hold return value
    $retval = array();
    // add trailing slash if missing
    if(substr($dir, -1) != "/") $dir .= "/";
    // open pointer to directory and read list of files
    $d = @dir($dir) or die("getFileList: Failed opening directory $dir for reading");
    while(false !== ($entry = $d->read())) {
      // skip hidden files
      if($entry[0] == ".") continue;
      if(is_dir("$dir$entry")) {
        $retval[] = array(
          "name" => "$dir$entry/",
          "type" => filetype("$dir$entry"),
          "size" => 0,
          "lastmod" => filemtime("$dir$entry")
        );
      } elseif(is_readable("$dir$entry")) {
        $retval[] = array(
          "name" => "$dir$entry",
          "type" => mime_content_type("$dir$entry"),
          "size" => filesize("$dir$entry"),
          "lastmod" => filemtime("$dir$entry")
        );
      }
    }
    $d->close();
    return $retval;
  }
?>

<?PHP
  $dirlist = getFileList("./categories/");
// echo "<ul class=\"sub-menu\">\n";
  foreach($dirlist as $file) {
echo "<li class=\"menu-item menu-item-type-taxonomy menu-item-object-category\">\n";
    if(preg_match("/\index.php$/", $file['name'])) continue;
    echo "<a href=\"/{$file['name']}\">",basename($file['name']),"</a>\n";
echo "</li>\n";
  }
//echo "</ul>\n";
?>

</li>

<li id="menu-item-2915" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2915"><a title="Requires Javascript" href="https://dispelled.ca/stocks.php">Stocks</a></li>

</ul></div>	
</nav><!-- #site-navigation -->
</header><!-- #masthead -->


<!-- Open Divs -->
<div id="main" class="wrapper">
<div id="primary" class="site-content">
<div id="content" role="main">
