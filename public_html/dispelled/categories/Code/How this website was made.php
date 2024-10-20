<!--date=20171021 -->

<?php include("../../headercat.php"); ?>

<h1>How this website was made. PHP, CSS, and Folders.</h1>

<p>Disclaimer: This is nothing fancy. I started out with HTML back in the 90's, started using Wordpress in the 00's, and lost interest in the 10's. I am a casual computer user, and didn't keep up with the times. I wanted something I could keep in one folder on my Desktop again. There is a lot of great flat file code out there, but I wanted something I could understand and control. I have tried to keep any code that I borrowed with the authors name. First things first.</p>

<p><strong>Here is what the public_html folder looks like</strong></p>

<p><img src="../../images/webhow.png"></p>

<p><strong>The main .htaccess file</strong></p>

<p>The .htaccess file redirects pages so they look like they are all in folders, when it is actually a file. Any requests for http://dispelled.ca/j, or http://dispelled.ca/j/ will be shown the page j.php and the same for the other user pages. It also strips any www. from requests.</p>

<p><pre>
<IfModule mod_rewrite.c>
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
</IfModule>
</pre></p>

<p><strong>The main index.php</strong></p>

<p>Basic includes to header.php and footer.php</p>

<p>
<?php show_source("../../index.php"); ?>
</p>

<p><strong>The header.php</strong></p>

<p>It is mostly the original header.php out of my wordpress installation so I could keep my existing style.css file. After that is a piece of code I added and modified by Chirp Internet: www.chirp.com.au that takes the contents of my categories folder (in the public_html root), displays each folder name, and links to each folders index.php.</p>

<p>
<?php show_source("../../header.php"); ?>
</p>

<p><strong>The footer.php</strong></p>

<p>
<?php show_source("../../footer.php"); ?>
</p>

<p><strong>Now to get into the categories folder</strong></p>

<p>So there is a folder called categories, with all of the subjects we want to show in the menu. Any pages in the root of the site will get the categories menu across the top.</p>

<p><img src="../../images/categories.png"></p>

<p><strong>Next. Looking into a category</strong></p>

<p>Let's take a look inside the first directory, Camp</p>

<p><img src="../../images/camp.png"></p>

<p>Each folder in categories contains a index.php that has a structure like categories/Camp/index.php below.</p>

<p>
<?php show_source("../../categories/Camping/index.php"); ?>
</p>

<p>It uses a special menu called headercat.php that displays links back to our home pages, and a link back to categories. It then calls on cat.php which displays all of the pages in that directory, using the code modified in a different way fom Chirp. I added a way for it to read the first line from each file from a date stamp so it would display them based on their post date.</p>

<p><strong>headercat.php</strong></p>

<p>
<?php show_source("../../headercat.php"); ?>
</p>

<p><strong>cat.php</strong></p>

<p>
<?php show_source("../../cat.php"); ?>
</p>

<p><strong>The last piece of the puzzle. Adding posts</strong></p>

<p>At this point, you just start adding content. Add folders (as long as you add the index.php that looks like this) 

<p><strong>Each folder needs a index.php to land on. Once again, here's the one from categories/Camp</strong></p>

<p>
<?php show_source("../Camping/index.php"); ?>
</p>

<p>and then add each post in each category as Name_of_Post.php using the same Name_of_Post for the title and using the &lt;!--date=20141027 --&gt; date stamp, headercat.php and footer.php includes like shown below.

<p><pre>
&lt;!--date=20141027 --&gt;

&lt;?php include("../../headercat.php"); ?&gt;
&lt;h1&gt;Your title&lt;/h1&gt;
&lt;p&gt;Content of your post.&lt;/p&gt;
&lt;?php include("../../footer.php"); ?&gt;
</pre></p>

<p>That's it! I'll try and get a zip file working one day. Like I said, casual computer user ;) Cheers.</p>

<?php include("../../footer.php"); ?>



