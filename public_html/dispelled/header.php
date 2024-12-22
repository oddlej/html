<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>Dispelled.ca</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Slab:wght@100..900&family=Roboto+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/screen.css">
	<link rel="stylesheet" href="/css/light.css">
	<link rel="stylesheet" href="/css/dark.css">
<!-- <style>
.content {
  display: flex;
   justify-content: center;
filter:alpha(opacity=90);
-moz-opacity:.90;
opacity:.90;
}
.flex-container {
  width: 80%;
  display: flex;
  background-color: #11111a;
  justify-content: center;
}
.flex-menu {
  width: 80%;
  display: flex;
  background-color: #11111a;
  justify-content: center;
}
.flex-container > div {
  background-color: #252539;
  width: 100%;
  margin: 10px;
  padding: 20px;
}
.menu-item {
  background-color: #11111a;
  margin: 5px;
  padding: 5px;
  justify-content: center;
}
.menu-item:hover {
  background-color: #252539;
}


</style>-->

<style>
.content {
  display: flex;
   justify-content: center;
   filter:alpha(opacity=90);
-moz-opacity:.90;
opacity: .90;
}
.flex-container {
  width: 80%;
 /* display: flex; */
  background-color: #11111a;
  justify-content: center;
}
.flex-menu {
  width: 80%;
  display: flex;
  background-color: #11111a;
  justify-content: center;
}
.flex-container > div {
  background-color: #252539;
  margin: 10px;
  padding: 20px;
}
.menu-item {
  background-color: #11111a;
  margin: 5px;
  padding: 5px;
  justify-content: center;
}
.menu-item:hover {
  background-color: #252539;
}

pre { 
color: white !important;
	font-family: "Roboto Mono", monospace !important;
    margin: 10px;
  padding: 20px;
  background-color: #434367 !important;
      white-space: pre-wrap;       /* Since CSS 2.1 */
    white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
    white-space: -pre-wrap;      /* Opera 4-6 */
    white-space: -o-pre-wrap;    /* Opera 7 */
    word-wrap: break-word;       /* Internet Explorer 5.5+ */
}
span, code {
color: white !important;
	font-family: "Roboto Mono", monospace !important;
	  background-color: #434367 !important;
	  }

</style>

<style type="text/css" id="custom-background-css">
body.custom-background {background-image: url('/bg/bg.jpg'); background-repeat: no-repeat; background-position: top left; background-attachment: fixed; background-size: 100%; }
</style>
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
</head>

<body class="custom-background full-width">
<div id="titlediv"><div id="title">
<div style="text-align: right;"><a href="https://github.com/oddlej/" title="@oddlej on Github.com"><img style="padding-top: 63px; display: inline !important" src="https://avatars.githubusercontent.com/u/185309100?v=4&s=48" ></a><a href="/"><img src="/bg/dispelled.png" style="padding-right: 100px; display: inline !important" title="Hocus Pocus Black Magic"></a></div></div></div>			
<div class="content">
<div class="flex-menu">			
<div id="menu-item" class="menu-item"><a href="/cori/">Cori&#8217;s Stuff</a></div><div id="menu-item" class="menu-item"><a href="/j/">J&#8217;s stuff</a></div><div id="menu-item" class="menu-item"><a href="https://sellco.ca">Sellco.ca</a></div>
			
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
echo "<div class=\"menu-item\">\n";
    if(preg_match("/\index.php$/", $file['name'])) continue;
    echo "<a href=\"/{$file['name']}\">",basename($file['name']),"</a>\n";
echo "</div>\n";
  }
//echo "</ul>\n";
?>

<div id="menu-item" class="menu-item"><a title="Requires Javascript" href="/stocks.php">Stocks</a></div>

</div>
</div>

<!-- Open Divs -->
<div class="content">
<div class="flex-container">
<div id="main" class="wrapper">
