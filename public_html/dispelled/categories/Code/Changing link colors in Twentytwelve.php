<!--date=20150901 -->

<?php include("../../headercat.php"); ?>

<h1>Changing link colors in Twentytwelve</h1>

<p><a href="https://theme.wordpress.com/themes/twentytwelve/">Twentytwelve</a> for <a href="https://wordpress.org/">WordPress</a>. When using <a href="http://codex.wordpress.org/Child_Themes">child themes</a>, you can’t just throw in a quick a, a:hover, and a:visited and be done with it. For a while this morning, I was having trouble getting the a:visited links to change color or change on hover when inside a post. After a bunch of <a href="https://addons.mozilla.org/en-US/firefox/addon/firebug/">Firebugging</a>, nothing came up. <a href="https://wordpress.org/support/topic/theme-twentytwelve-changing-link-color">This post</a> had some answers, and I just changed the code to make it easier to change the colors quickly.</p>
<pre>a:link,
.widget-area .widget a,
footer[role="contentinfo"] a,
.comments-link a,
.entry-meta a,
a.comment-reply-link, a.comment-edit-link,
.comments-link a, .entry-meta a,
.comments-area article header a,
.comments-area article header cite a { color: #996614; }

a:visited,
.entry-content a:visited,
.comment-content a:visited,
.widget-area .widget a:visited { color: orange; }

a:hover,
.widget-area .widget a:hover,
footer[role="contentinfo"] a:hover,
a.comment-reply-link:hover, a.comment-edit-link:hover,
.comments-link a:hover, .entry-meta a:hover,
.comments-area article header a:hover,
.comments-area article header cite a:hover { color: #E89B1E; !important}

a:visited:hover { color: #E89B1E; }

a:active { color: #E89B1E; }</pre>
<p>That’s better. Now if I could just get back that wasted time.</p>


<?php include("../../footer.php"); ?>
