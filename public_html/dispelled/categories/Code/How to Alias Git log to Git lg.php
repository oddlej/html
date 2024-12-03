<!--date=20241202 -->

<?php include("../../headercat.php"); ?>

<h1>How to Alias Git log to Git lg</h1>

<p>A quick search showed how easy it is to make a much better looking git log by using an alias.</p>

<pre>git config --global alias.lg "log --graph --pretty=tformat:'%Cred%h%Creset -%C(auto)%d%Creset %s %Cgreen(%cr) %C(bold blue)<%an>%Creset' --abbrev-commit --decorate=full"
    </pre>


<p>&nbsp;</p>
<?php include("../../footer.php"); ?>
