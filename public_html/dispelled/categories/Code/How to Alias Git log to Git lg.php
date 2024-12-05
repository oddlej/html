<!--date=20241202 -->

<?php include("../../headercat.php"); ?>

<h1>How to Alias Git log to Git lg</h1>

<p>A quick search showed how easy it is to make a much better looking git log by using an alias.</p>

<pre>git config --global alias.lg "log --graph --pretty=tformat:'%Cred%h%Creset -%C(auto)%d%Creset %s %Cgreen(%cr) %C(bold blue)<%an>%Creset' --abbrev-commit --decorate=full"
    </pre>

    <h2>Creating a Basic Git Log Alias</h2>
<p>To create a basic alias for <code>git log</code>, you can use the following command:</p>
<pre><code>git config --global alias.lg "log --graph --pretty=format:'%h - %s (%cr) &lt;%an&gt;' --abbrev-commit"</code></pre>
<p>This command does the following:</p>
<ul>
    <li><code>--graph</code>: Shows a text-based graph of the commit history.</li>
    <li><code>--pretty=format:'%h - %s (%cr) &lt;%an&gt;'</code>: Customizes the log output format:
        <ul>
            <li><code>%h</code>: Abbreviated commit hash.</li>
            <li><code>%s</code>: Commit message.</li>
            <li><code>%cr</code>: Commit date, relative to the current time.</li>
            <li><code>&lt;%an&gt;</code>: Author name.</li>
        </ul>
    </li>
    <li><code>--abbrev-commit</code>: Shows only the abbreviated commit hash.</li>
</ul>

<h2>Enhancing the Git Log Alias</h2>
<p>You can enhance the alias to include more information and add colors for better readability:</p>
<pre><code>git config --global alias.lg "log --graph --pretty=format:'%Cred%h%Creset -%C(auto)%d%Creset %s %Cgreen(%cr) %C(bold blue)&lt;%an&gt;%Creset' --abbrev-commit --decorate=full"</code></pre>
<p>This enhanced alias includes:</p>
<ul>
    <li><code>%Cred%h%Creset</code>: Colors the commit hash in red.</li>
    <li><code>%C(auto)%d%Creset</code>: Colors the branch and tag names automatically.</li>
    <li><code>%Cgreen(%cr)</code>: Colors the commit date in green.</li>
    <li><code>%C(bold blue)&lt;%an&gt;%Creset</code>: Colors the author name in bold blue.</li>
    <li><code>--decorate=full</code>: Shows full ref names (branches, tags) in the log.</li>
</ul>

<h2>Customizing the Git Log Alias</h2>
<p>You can further customize the alias to suit your preferences. Here are some additional options you can use:</p>
<ul>
    <li><code>%C(yellow)%d%Creset</code>: Colors the branch and tag names in yellow.</li>
    <li><code>%C(cyan)%ar%Creset</code>: Colors the commit date in cyan and shows it in a relative format (e.g., "2 days ago").</li>
    <li><code>%C(magenta)%an%Creset</code>: Colors the author name in magenta.</li>
</ul>
<p>For example, to create an alias that uses these customizations, you can use the following command:</p>
<pre><code>git config --global alias.lg "log --graph --pretty=format:'%Cred%h%Creset -%C(yellow)%d%Creset %s %C(cyan)(%ar) %C(magenta)&lt;%an&gt;%Creset' --abbrev-commit --decorate=full"</code></pre>

<h2>Using the Git Log Alias</h2>
<p>Once you have created the alias, you can use it by running:</p>
<pre><code>git lg</code></pre>
<p>This will display your commit history in the customized format you specified.</p>

<p>&nbsp;</p>
<?php include("../../footer.php"); ?>
