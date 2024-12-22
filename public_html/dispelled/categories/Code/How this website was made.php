<!--date=20171021 -->

<?php include("../../headercat.php"); ?>

<h1>How this website was made. PHP, CSS, and Folders.</h1>

<p>Disclaimer: This is nothing fancy. I started out with HTML back in the 90's, started using Wordpress in the 00's, and lost interest in the 10's. I am a casual computer user, and didn't keep up with the times. I wanted something I could keep in one folder on my Desktop again. There is a lot of great flat file code out there, but I wanted something I could understand and control. I have tried to keep any code that I borrowed with the authors name. First things first.</p>

<p><strong>Here is what the public_html folder looks like</strong></p>

<p><img src="../../images/webhow.png"></p>

<p><strong>The main .htaccess file</strong></p>

<p>The .htaccess file redirects pages so they look like they are all in folders, when it is actually a file. Any requests for http://dispelled.ca/j, or http://dispelled.ca/j/ will be shown the page j.php and the same for the other user pages. It also strips any www. from requests.</p>
<div class="higlight">
<pre>
&lt;IfModule mod_rewrite.c&gt;
RewriteCond %{HTTPS} =on
RewriteCond %{HTTPS} ^on$
	RewriteRule ^(.*)$ http://dispelled.ca/$1 [R=301,L]
   	RewriteRule ^j$ j.php [L]
   	RewriteRule ^j/$ j.php [L]
	RewriteRule ^cori$ cori.php [L]
	RewriteRule ^cori/$ cori.php [L]
RewriteCond %{HTTP_HOST} ^www\.
	RewriteCond %{HTTP_HOST} ^www.dispelled.ca$ [NC]
	RewriteRule ^(.*)$ http://dispelled.ca/$1 [R=301,L]
&lt;/IfModule&gt;
</pre>
</div>
<p><strong>The main index.php</strong></p>

<p>Basic includes to header.php and footer.php with some RSS feeds of news on the homepage. By the way, whenever I reference a file here, i am using &lt;?php show_source("../../index.php"); ?&gt; Etc. So this is all currently what is running on the webserver. The images shown are from 2014 though lol.</p>

<pre>
<?php show_source("../../index.php"); ?>
</pre>

<p><strong>The header.php</strong></p>

<p>I still need to take this inline CSS out of the header file. It's just easier when you are banging out a new layout. Then it opens the divs. After that is a piece of code I added and modified by Chirp Internet: www.chirp.com.au that takes the contents of my categories folder (in the public_html root), displays each folder name, and links to each folders index.php.</p>

<pre>
<?php show_source("../../header.php"); ?>
</pre>

<p><strong>The footer.php</strong></p>

<pre>
<?php show_source("../../footer.php"); ?>
</pre>

<p><strong>Now to get into the categories folder</strong></p>

<p>So there is a folder called categories, with all of the subjects we want to show in the menu. Any pages in the root of the site will get the categories menu across the top.</p>

<p><img alt="categories" src="../../images/categories.png"></p>

<p><strong>Next. Looking into a category</strong></p>

<p>Let's take a look inside the first directory, Code (Back when I wrote this there was a Camp folder). Code is included with the templates.</p>

<p><img alt="camp" src="../../images/camp.png"></p>

<p>These folders (categories) use a special header called headercat.php that displays links back to your home pages, and a link back to your categories. It calls on cat.php which displays links to all of the pages in that directory based on the filename. I also added a way to read the first line from each file from a commented date stamp so it would display them based on their post date.</p>

<p><strong>The headercat.php</strong></p>

<pre>
<?php show_source("../../headercat.php"); ?>
</pre>

<p><strong>The cat.php</strong></p>

<pre>
<?php show_source("../../cat.php"); ?>
</pre>

<p><strong>The last piece of the puzzle. Adding posts</strong></p>

<p>At this point, you just start adding content. Add folders and add the index.php that looks like this.</p>

<pre>
<?php show_source("../../categories/Code/index.php"); ?>
</pre>

<p>and then add each post in each category as Name_of_Post.php using the same Name_of_Post for the title and using the &lt;!--date=20141027 --&gt; date stamp, headercat.php and footer.php includes like shown below.</p>

<pre>
<?php show_source("../../categories/Code/codetemplate.php"); ?>
</pre>

<p>That's it! I'll try and get a zip file working one day. (Edit: Dec 2024 - Working on a <a href="https://github.com/oddlej/jaysgreat">github repo</a> for this rn ;) Cheers.</p>

<?php include("../../footer.php"); ?>


