<!--date=20241114 -->

<?php include("../../headercat.php"); ?>

<h1>$ git help --all</h1>
<p> Not mine! This is from <a href="https://www.w3schools.com/git/git_help.asp?remote=github">W3schools Git Help</a>. Cheers!</p>
<p>See 'git help &lt;command&gt;' to read about a specific subcommand</p>

<h2>Main Porcelain Commands</h2>
<p>These are the most commonly used Git commands that you will interact with on a daily basis:</p>

<h3>add</h3>
<p>Add file contents to the index (staging area). This command is used to add changes in the working directory to the staging area.</p>
<pre><code>git add &lt;file&gt;</code></pre>

<h3>am</h3>
<p>Apply a series of patches from a mailbox. This command is used to apply patches created by <code>git format-patch</code>.</p>
<pre><code>git am &lt;patch-file&gt;</code></pre>

<h3>archive</h3>
<p>Create an archive of files from a named tree. This command is used to create a tar or zip archive of the files in the repository.</p>
<pre><code>git archive --format=tar --output=archive.tar HEAD</code></pre>

<h3>bisect</h3>
<p>Use binary search to find the commit that introduced a bug. This command helps you find the commit that introduced a bug by performing a binary search.</p>
<pre><code>git bisect start
git bisect bad
git bisect good &lt;commit&gt;</code></pre>

<h3>branch</h3>
<p>List, create, or delete branches. This command is used to manage branches in your repository.</p>
<pre><code>git branch
git branch &lt;branch-name&gt;
git branch -d &lt;branch-name&gt;</code></pre>

<h3>bundle</h3>
<p>Move objects and refs by archive. This command is used to create a single file containing all the objects and references in a repository.</p>
<pre><code>git bundle create &lt;file&gt; &lt;branch&gt;</code></pre>

<h3>checkout</h3>
<p>Switch branches or restore working tree files. This command is used to switch branches or restore files in the working directory.</p>
<pre><code>git checkout &lt;branch-name&gt;
git checkout -- &lt;file&gt;</code></pre>

<h3>cherry-pick</h3>
<p>Apply the changes introduced by some existing commits. This command is used to apply changes from a specific commit to the current branch.</p>
<pre><code>git cherry-pick &lt;commit&gt;</code></pre>

<h3>citool</h3>
<p>Graphical alternative to git-commit. This command opens a graphical interface for committing changes.</p>
<pre><code>git citool</code></pre>

<h3>clean</h3>
<p>Remove untracked files from the working tree. This command is used to remove untracked files and directories from the working directory.</p>
<pre><code>git clean -f
git clean -fd</code></pre>

<h3>clone</h3>
<p>Clone a repository into a new directory. This command is used to create a copy of an existing repository.</p>
<pre><code>git clone &lt;repository-url&gt;</code></pre>

<h3>commit</h3>
<p>Record changes to the repository. This command is used to save changes from the staging area to the repository.</p>
<pre><code>git commit -m "Commit message"</code></pre>

<h3>describe</h3>
<p>Give an object a human-readable name based on an available ref. This command is used to find the most recent tag that is reachable from a commit.</p>
<pre><code>git describe --tags</code></pre>

<h3>diff</h3>
<p>Show changes between commits, commit and working tree, etc. This command is used to show the differences between commits, branches, or files.</p>
<pre><code>git diff
git diff &lt;commit&gt;
git diff &lt;branch&gt;</code></pre>

<h3>fetch</h3>
<p>Download objects and refs from another repository. This command is used to download changes from a remote repository.</p>
<pre><code>git fetch &lt;remote&gt;</code></pre>

<h3>format-patch</h3>
<p>Prepare patches for e-mail submission. This command is used to create patch files from commits.</p>
<pre><code>git format-patch &lt;commit-range&gt;</code></pre>

<h3>gc</h3>
<p>Cleanup unnecessary files and optimize the local repository. This command is used to clean up and optimize the repository.</p>
<pre><code>git gc</code></pre>

<h3>gitk</h3>
<p>The Git repository browser. This command opens a graphical interface to browse the repository history.</p>
<pre><code>gitk</code></pre>

<h3>grep</h3>
<p>Print lines matching a pattern. This command is used to search for text patterns in the repository files.</p>
<pre><code>git grep &lt;pattern&gt;</code></pre>

<h3>gui</h3>
<p>A portable graphical interface to Git. This command opens a graphical interface for Git operations.</p>
<pre><code>git gui</code></pre>

<h3>init</h3>
<p>Create an empty Git repository or reinitialize an existing one. This command is used to create a new Git repository.</p>
<pre><code>git init</code></pre>

<h3>log</h3>
<p>Show commit logs. This command is used to display the commit history.</p>
<pre><code>git log</code></pre>

<h3>maintenance</h3>
<p>Run tasks to optimize Git repository data. This command is used to perform maintenance tasks on the repository.</p>
<pre><code>git maintenance run</code></pre>

<h3>merge</h3>
<p>Join two or more development histories together. This command is used to merge branches.</p>
<pre><code>git merge &lt;branch&gt;</code></pre>

<h3>mv</h3>
<p>Move or rename a file, a directory, or a symlink. This command is used to move or rename files and directories.</p>
<pre><code>git mv &lt;old-path&gt; &lt;new-path&gt;</code></pre>

<h3>notes</h3>
<p>Add or inspect object notes. This command is used to add or view notes attached to objects.</p>
<pre><code>git notes add
git notes show</code></pre>

<h3>pull</h3>
<p>Fetch from and integrate with another repository or a local branch. This command is used to fetch and merge changes from a remote repository.</p>
<pre><code>git pull &lt;remote&gt; &lt;branch&gt;</code></pre>

<h3>push</h3>
<p>Update remote refs along with associated objects. This command is used to upload local changes to a remote repository.</p>
<pre><code>git push &lt;remote&gt; &lt;branch&gt;</code></pre>

<h3>range-diff</h3>
<p>Compare two commit ranges (e.g., two versions of a branch). This command is used to compare two ranges of commits.</p>
<pre><code>git range-diff &lt;range1&gt; &lt;range2&gt;</code></pre>

<h3>rebase</h3>
<p>Reapply commits on top of another base tip. This command is used to move or combine a sequence of commits to a new base commit.</p>
<pre><code>git rebase &lt;base-branch&gt;</code></pre>

<h3>reset</h3>
<p>Reset current HEAD to the specified state. This command is used to undo changes by resetting the current branch to a previous state.</p>
<pre><code>git reset &lt;commit&gt;</code></pre>

<h3>restore</h3>
<p>Restore working tree files. This command is used to restore files in the working directory to their state in the index or a commit.</p>
<pre><code>git restore &lt;file&gt;</code></pre>

<h3>revert</h3>
<p>Revert some existing commits. This command is used to create a new commit that undoes the changes made by previous commits.</p>
<pre><code>git revert &lt;commit&gt;</code></pre>

<h3>rm</h3>
<p>Remove files from the working tree and from the index. This command is used to remove files from the working directory and the index.</p>
<pre><code>git rm &lt;file&gt;</code></pre>

<h3>shortlog</h3>
<p>Summarize 'git log' output. This command is used to summarize the commit history.</p>
<pre><code>git shortlog</code></pre>

<h3>show</h3>
<p>Show various types of objects. This command is used to display information about objects in the repository.</p>
<pre><code>git show &lt;object&gt;</code></pre>

<h3>sparse-checkout</h3>
<p>Initialize and modify the sparse-checkout. This command is used to control which files are checked out in a sparse-checkout.</p>
<pre><code>git sparse-checkout init
git sparse-checkout set &lt;file&gt;</code></pre>

<h3>stash</h3>
<p>Stash the changes in a dirty working directory away. This command is used to save changes in the working directory and index temporarily.</p>
<pre><code>git stash
git stash pop</code></pre>

<h3>status</h3>
<p>Show the working tree status. This command is used to display the state of the working directory and the staging area.</p>
<pre><code>git status</code></pre>

<h3>submodule</h3>
<p>Initialize, update or inspect submodules. This command is used to manage submodules in a repository.</p>
<pre><code>git submodule init
git submodule update</code></pre>

<h3>switch</h3>
<p>Switch branches. This command is used to switch branches in the working directory.</p>
<pre><code>git switch &lt;branch&gt;</code></pre>

<h3>tag</h3>
<p>Create, list, delete or verify a tag object signed with GPG. This command is used to manage tags in a repository.</p>
<pre><code>git tag
git tag -a &lt;tag-name&gt; -m "Message"
git tag -d &lt;tag-name&gt;</code></pre>

<h3>worktree</h3>
<p>Manage multiple working trees. This command is used to manage multiple working trees attached to the same repository.</p>
<pre><code>git worktree add &lt;path&gt; &lt;branch&gt;</code></pre>

<h2>Ancillary Commands / Manipulators</h2>
<p>These commands are used to manipulate the repository in various ways:</p>

<h3>config</h3>
<p>Get and set repository or global options. This command is used to configure Git settings.</p>
<pre><code>git config --global user.name "Your Name"
git config --global user.email "your.email@example.com"</code></pre>

<h3>fast-export</h3>
<p>Git data exporter. This command is used to export Git data to a fast-import stream.</p>
<pre><code>git fast-export &lt;commit-range&gt;</code></pre>

<h3>fast-import</h3>
<p>Backend for fast Git data importers. This command is used to import data into Git from a fast-import stream.</p>
<pre><code>git fast-import &lt;data-file&gt;</code></pre>

<h3>filter-branch</h3>
<p>Rewrite branches. This command is used to rewrite branches by applying filters to each commit.</p>
<pre><code>git filter-branch --env-filter 'GIT_AUTHOR_NAME="New Author"; GIT_AUTHOR_EMAIL="new.email@example.com"; GIT_COMMITTER_NAME="New Author"; GIT_COMMITTER_EMAIL="new.email@example.com";' HEAD</code></pre>

<h3>mergetool</h3>
<p>Run merge conflict resolution tools to resolve merge conflicts. This command is used to run a merge tool to resolve conflicts.</p>
<pre><code>git mergetool</code></pre>

<h3>pack-refs</h3>
<p>Pack heads and tags for efficient repository access. This command is used to pack references in a repository.</p>
<pre><code>git pack-refs --all</code></pre>

<h3>prune</h3>
<p>Prune all unreachable objects from the object database. This command is used to remove unreachable objects from the repository.</p>
<pre><code>git prune</code></pre>

<h3>reflog</h3>
<p>Manage reflog information. This command is used to manage the reference logs.</p>
<pre><code>git reflog</code></pre>

<h3>remote</h3>
<p>Manage set of tracked repositories. This command is used to manage remote repositories.</p>
<pre><code>git remote add &lt;name&gt; &lt;url&gt;
git remote remove &lt;name&gt;</code></pre>

<h3>repack</h3>
<p>Pack unpacked objects in a repository. This command is used to pack unpacked objects in the repository.</p>
<pre><code>git repack -a -d -l</code></pre>

<h3>replace</h3>
<p>Create, list, delete refs to replace objects. This command is used to create, list, or delete replacement refs.</p>
<pre><code>git replace &lt;object&gt; &lt;replacement&gt;</code></pre>

<h2>Ancillary Commands / Interrogators</h2>
<p>These commands are used to interrogate the repository and gather information:</p>

<h3>annotate</h3>
<p>Annotate file lines with commit information. This command is used to show which commit last modified each line of a file.</p>
<pre><code>git annotate &lt;file&gt;</code></pre>

<h3>blame</h3>
<p>Show what revision and author last modified each line of a file. This command is used to show which commit and author last modified each line of a file.</p>
<pre><code>git blame &lt;file&gt;</code></pre>

<h3>bugreport</h3>
<p>Collect information for user to file a bug report. This command is used to collect information for filing a bug report.</p>
<pre><code>git bugreport</code></pre>

<h3>count-objects</h3>
<p>Count unpacked number of objects and their disk consumption. This command is used to count the number of unpacked objects and their disk usage.</p>
<pre><code>git count-objects</code></pre>

<h3>difftool</h3>
<p>Show changes using common diff tools. This command is used to show changes using an external diff tool.</p>
<pre><code>git difftool</code></pre>

<h3>fsck</h3>
<p>Verifies the connectivity and validity of the objects in the database. This command is used to check the integrity of the repository.</p>
<pre><code>git fsck</code></pre>

<h3>gitweb</h3>
<p>Git web interface (web frontend to Git repositories). This command is used to set up a web interface for browsing the repository.</p>
<pre><code>gitweb</code></pre>

<h3>help</h3>
<p>Display help information about Git. This command is used to display help information about Git commands.</p>
<pre><code>git help &lt;command&gt;</code></pre>

<h3>instaweb</h3>
<p>Instantly browse your working repository in gitweb. This command is used to start a web server to browse the repository.</p>
<pre><code>git instaweb</code></pre>

<h3>merge-tree</h3>
<p>Show three-way merge without touching index. This command is used to show the result of a three-way merge without affecting the index.</p>
<pre><code>git merge-tree &lt;base&gt; &lt;branch1&gt; &lt;branch2&gt;</code></pre>

<h3>rerere</h3>
<p>Reuse recorded resolution of conflicted merges. This command is used to reuse recorded resolutions of merge conflicts.</p>
<pre><code>git rerere</code></pre>

<h3>show-branch</h3>
<p>Show branches and their commits. This command is used to show branches and their commits.</p>
<pre><code>git show-branch</code></pre>

<h3>verify-commit</h3>
<p>Check the GPG signature of commits. This command is used to verify the GPG signature of commits.</p>
<pre><code>git verify-commit &lt;commit&gt;</code></pre>

<h3>verify-tag</h3>
<p>Check the GPG signature of tags. This command is used to verify the GPG signature of tags.</p>
<pre><code>git verify-tag &lt;tag&gt;</code></pre>

<h3>whatchanged</h3>
<p>Show logs with difference each commit introduces. This command is used to show logs with the differences introduced by each commit.</p>
<pre><code>git whatchanged</code></pre>

<h2>Interacting with Others</h2>
<p>These commands are used to interact with other repositories and systems:</p>

<h3>archimport</h3>
<p>Import a GNU Arch repository into Git. This command is used to import a GNU Arch repository into Git.</p>
<pre><code>git archimport &lt;repository&gt;</code></pre>

<h3>cvsexportcommit</h3>
<p>Export a single commit to a CVS checkout. This command is used to export a single commit to a CVS checkout.</p>
<pre><code>git cvsexportcommit &lt;commit&gt;</code></pre>

<h3>cvsimport</h3>
<p>This command is used to import data from a CVS repository into Git.</p>
<pre><code>git cvsimport -d :pserver:anonymous@cvs.example.com:/cvsroot co -r HEAD</code></pre>

<h3>cvsserver</h3>
<p>A CVS server emulator for Git. This command is used to provide a CVS server interface for a Git repository.</p>
<pre><code>git cvsserver</code></pre>

<h3>imap-send</h3>
<p>Send a collection of patches from stdin to an IMAP folder. This command is used to send patches via IMAP.</p>
<pre><code>git imap-send</code></pre>

<h3>p4</h3>
<p>Import from and submit to Perforce repositories. This command is used to interact with Perforce repositories.</p>
<pre><code>git p4 clone //depot/path/project</code></pre>

<h3>quiltimport</h3>
<p>Applies a quilt patchset onto the current branch. This command is used to apply a series of patches from a quilt patchset.</p>
<pre><code>git quiltimport &lt;patch-directory&gt;</code></pre>

<h3>request-pull</h3>
<p>Generates a summary of pending changes. This command is used to generate a summary of changes to be sent to another repository.</p>
<pre><code>git request-pull &lt;start&gt; &lt;url&gt; &lt;end&gt;</code></pre>

<h3>send-email</h3>
<p>Send a collection of patches as emails. This command is used to send patches via email.</p>
<pre><code>git send-email --to=&lt;recipient&gt; &lt;patches&gt;</code></pre>

<h3>svn</h3>
<p>Bidirectional operation between a Subversion repository and Git. This command is used to interact with Subversion repositories.</p>
<pre><code>git svn clone &lt;svn-repo-url&gt;</code></pre>

<h2>Low-level Commands / Manipulators</h2>
<p>These commands are used to manipulate the repository at a low level:</p>

<h3>apply</h3>
<p>Apply a patch to files and/or to the index. This command is used to apply a patch file to the working directory or index.</p>
<pre><code>git apply &lt;patch-file&gt;</code></pre>

<h3>checkout-index</h3>
<p>Copy files from the index to the working tree. This command is used to copy files from the index to the working directory.</p>
<pre><code>git checkout-index --all</code></pre>

<h3>commit-graph</h3>
<p>Write and verify Git commit-graph files. This command is used to create and verify commit-graph files.</p>
<pre><code>git commit-graph write --reachable</code></pre>

<h3>commit-tree</h3>
<p>Create a new commit object. This command is used to create a new commit object from a tree object.</p>
<pre><code>git commit-tree &lt;tree&gt; -m "Commit message"</code></pre>

<h3>hash-object</h3>
<p>Compute object ID and optionally creates a blob from a file. This command is used to compute the object ID for a file and optionally create a blob object.</p>
<pre><code>git hash-object -w &lt;file&gt;</code></pre>

<h3>index-pack</h3>
<p>Build pack index file for an existing packed archive. This command is used to create an index file for a pack file.</p>
<pre><code>git index-pack &lt;pack-file&gt;</code></pre>

<h3>merge-file</h3>
<p>Run a three-way file merge. This command is used to perform a three-way merge of files.</p>
<pre><code>git merge-file &lt;file1&gt; &lt;base-file&gt; &lt;file2&gt;</code></pre>

<h3>merge-index</h3>
<p>Run a merge for files needing merging. This command is used to merge files that need merging.</p>
<pre><code>git merge-index &lt;merge-program&gt; &lt;file-list&gt;</code></pre>

<h3>mktag</h3>
<p>Creates a tag object. This command is used to create a tag object.</p>
<pre><code>git mktag &lt;tag-file&gt;</code></pre>

<h3>mktree</h3>
<p>Build a tree-object from ls-tree formatted text. This command is used to create a tree object from ls-tree formatted text.</p>
<pre><code>git mktree &lt;tree-file&gt;</code></pre>

<h3>multi-pack-index</h3>
<p>Write and verify multi-pack-indexes. This command is used to create and verify multi-pack-indexes.</p>
<pre><code>git multi-pack-index write</code></pre>

<h3>pack-objects</h3>
<p>Create a packed archive of objects. This command is used to create a pack file containing objects.</p>
<pre><code>git pack-objects &lt;pack-file&gt;</code></pre>

<h3>prune-packed</h3>
<p>Remove extra objects that are already in pack files. This command is used to remove objects that are already packed.</p>
<pre><code>git prune-packed</code></pre>

<h3>read-tree</h3>
<p>Reads tree information into the index. This command is used to read tree objects into the index.</p>
<pre><code>git read-tree &lt;tree&gt;</code></pre>

<h3>symbolic-ref</h3>
<p>Read, modify and delete symbolic refs. This command is used to manage symbolic refs.</p>
<pre><code>git symbolic-ref &lt;ref&gt; &lt;target&gt;</code></pre>

<h3>unpack-objects</h3>
<p>Unpack objects from a packed archive. This command is used to unpack objects from a pack file.</p>
<pre><code>git unpack-objects &lt;pack-file&gt;</code></pre>

<h3>update-index</h3>
<p>Register file contents in the working tree to the index. This command is used to update the index with the contents of the working directory.</p>
<pre><code>git update-index --add &lt;file&gt;</code></pre>

<h3>update-ref</h3>
<p>Update the object name stored in a ref safely. This command is used to update the reference to an object.</p>
<pre><code>git update-ref &lt;ref&gt; &lt;object&gt;</code></pre>

<h3>write-tree</h3>
<p>Create a tree object from the current index. This command is used to create a tree object from the index.</p>
<pre><code>git write-tree</code></pre>

<h2>Low-level Commands / Interrogators</h2>
<p>These commands are used to gather information from the repository:</p>

<h3>cat-file</h3>
<p>Provide content or type and size information for repository objects. This command is used to display information about objects in the repository.</p>
<pre><code>git cat-file -p &lt;object&gt;</code></pre>

<h3>cherry</h3>
<p>Find commits yet to be applied to upstream. This command is used to find commits that have not been applied to the upstream branch.</p>
<pre><code>git cherry &lt;upstream&gt; &lt;branch&gt;</code></pre>

<h3>diff-files</h3>
<p>Compares files in the working tree and the index. This command is used to compare the working directory with the index.</p>
<pre><code>git diff-files</code></pre>

<h3>diff-index</h3>
<p>Compare a tree to the working tree or index. This command is used to compare a tree object with the working directory or index.</p>
<pre><code>git diff-index &lt;tree&gt;</code></pre>

<h3>diff-tree</h3>
<p>Compares the content and mode of blobs found via two tree objects. This command is used to compare the contents of two tree objects.</p>
<pre><code>git diff-tree &lt;tree1&gt; &lt;tree2&gt;</code></pre>

<h3>for-each-ref</h3>
<p>Output information on each ref. This command is used to display information about each reference in the repository.</p>
<pre><code>git for-each-ref</code></pre>

<h3>for-each-repo</h3>
<p>Run a Git command on a list of repositories. This command is used to run a Git command on multiple repositories.</p>
<pre><code>git for-each-repo &lt;command&gt;</code></pre>

<h3>get-tar-commit-id</h3>
<p>Extract commit ID from an archive created using git-archive. This command is used to extract the commit ID from a tar archive.</p>
<pre><code>git get-tar-commit-id &lt;archive&gt;</code></pre>

<h3>ls-files</h3>
<p>Show information about files in the index and the working tree. This command is used to display information about files in the index and working directory.</p>
<pre><code>git ls-files</code></pre>

<h3>ls-remote</h3>
<p>List references in a remote repository. This command is used to display references in a remote repository.</p>
<pre><code>git ls-remote &lt;remote&gt;</code></pre>

<h3>ls-tree</h3>
<p>List the contents of a tree object. This command is used to display the contents of a tree object.</p>
<pre><code>git ls-tree &lt;tree&gt;</code></pre>

<h3>merge-base</h3>
<p>Find as good common ancestors as possible for a merge. This command is used to find common ancestors for a merge.</p>
<pre><code>git merge-base &lt;commit1&gt; &lt;commit2&gt;</code></pre>

<h3>name-rev</h3>
<p>Find symbolic names for given revs. This command is used to find symbolic names for revisions.</p>
<pre><code>git name-rev &lt;commit&gt;</code></pre>

<h3>pack-redundant</h3>
<p>Find redundant pack files. This command is used to find redundant pack files in the repository.</p>
<pre><code>git pack-redundant &lt;pack-files&gt;</code></pre>

<h3>rev-list</h3>
<p>Lists commit objects in reverse chronological order. This command is used to list commit objects in reverse chronological order.</p>
<pre><code>git rev-list &lt;commit-range&gt;</code></pre>

<h3>rev-parse</h3>
<p>Pick out and massage parameters. This command is used to parse revision parameters.</p>
<pre><code>git rev-parse &lt;revision&gt;</code></pre>

<h3>show-index</h3>
<p>Show packed archive index. This command is used to display the index of a pack file.</p>
<pre><code>git show-index &lt;pack-file&gt;</code></pre>

<h3>show-ref</h3>
<p>List references in a local repository. This command is used to display references in a local repository.</p>
<pre><code>git show-ref</code></pre>

<h3>unpack-file</h3>
<p>Creates a temporary file with a blob's contents. This command is used to create a temporary file with the contents of a blob object.</p>
<pre><code>git unpack-file &lt;blob&gt;</code></pre>

<h3>var</h3>
<p>Show a Git logical variable. This command is used to display the value of a Git logical variable.</p>
<pre><code>git var &lt;variable&gt;</code></pre>

<h3>verify-pack</h3>
<p>Validate packed Git archive files. This command is used to verify the integrity of pack files.</p>
<pre><code>git verify-pack &lt;pack-file&gt;</code></pre>

<h2>Low-level Commands / Syncing Repositories</h2>
<p>These commands are used to synchronize repositories:</p>

<h3>daemon</h3>
<p>A really simple server for Git repositories. This command is used to start a simple server for Git repositories.</p>
<pre><code>git daemon --reuseaddr --base-path=/path/to/repo /path/to/repo</code></pre>

<h3>fetch-pack</h3>
<p>Receive missing objects from another repository. This command is used to fetch missing objects from another repository.</p>
<pre><code>git fetch-pack &lt;repository&gt;</code></pre>

<h3>http-backend</h3>
<p>Server side implementation of Git over HTTP. This command is used to provide a server-side implementation of Git over HTTP.</p>
<pre><code>git http-backend</code></pre>

<h3>send-pack</h3>
<p>Push objects over Git protocol to another repository. This command is used to push objects to another repository.</p>
<pre><code>git send-pack &lt;repository&gt;</code></pre>

<h3>update-server-info</h3>
<p>Update auxiliary info file to help dumb servers. This command is used to update auxiliary information files for dumb servers.</p>
<pre><code>git update-server-info</code></pre>

<h2>Low-level Commands / Internal Helpers</h2>
<p>These commands are used internally by Git and are not typically used directly by users:</p>

<h3>check-attr</h3>
<p>Display gitattributes information. This command is used to display information about gitattributes.</p>
<pre><code>git check-attr &lt;attribute&gt; -- &lt;file&gt;</code></pre>

<h3>check-ignore</h3>
<p>Debug gitignore / exclude files. This command is used to debug gitignore and exclude files.</p>
<pre><code>git check-ignore -v &lt;file&gt;</code></pre>

<h3>check-mailmap</h3>
<p>Show canonical names and email addresses of contacts. This command is used to display canonical names and email addresses from the mailmap.</p>
<pre><code>git check-mailmap &lt;contact&gt;</code></pre>

<h3>check-ref-format</h3>
<p>Ensures that a reference name is well formed. This command is used to check if a reference name is well-formed.</p>
<pre><code>git check-ref-format &lt;refname&gt;</code></pre>

<h3>column</h3>
<p>Display data in columns. This command is used to format output into columns.</p>
<pre><code>git column &lt;options&gt;</code></pre>

<h3>credential</h3>
<p>Retrieve and store user credentials. This command is used to manage user credentials.</p>
<pre><code>git credential fill
git credential approve
git credential reject</code></pre>

<h3>credential-cache</h3>
<p>Helper to temporarily store passwords in memory. This command is used to cache credentials in memory.</p>
<pre><code>git credential-cache &lt;options&gt;</code></pre>

<h3>credential-store</h3>
<p>Helper to store credentials on disk. This command is used to store credentials on disk.</p>
<pre><code>git credential-store &lt;options&gt;</code></pre>

<h3>fmt-merge-msg</h3>
<p>Produce a merge commit message. This command is used to format a merge commit message.</p>
<pre><code>git fmt-merge-msg &lt;options&gt;</code></pre>

<h3>interpret-trailers</h3>
<p>Add or parse structured information in commit messages. This command is used to add or parse trailers in commit messages.</p>
<pre><code>git interpret-trailers &lt;options&gt;</code></pre>

<h3>mailinfo</h3>
<p>Extracts patch and authorship from a single e-mail message. This command is used to extract patch information from an email message.</p>
<pre><code>git mailinfo &lt;options&gt;</code></pre>

<h3>mailsplit</h3>
<p>Simple UNIX mbox splitter program. This command is used to split an mbox file into individual messages.</p>
<pre><code>git mailsplit &lt;options&gt;</code></pre>

<h3>merge-one-file</h3>
<p>The standard helper program to use with git-merge-index. This command is used as a helper for git-merge-index.</p>
<pre><code>git merge-one-file &lt;options&gt;</code></pre>

<h3>patch-id</h3>
<p>Compute unique ID for a patch. This command is used to compute a unique ID for a patch.</p>
<pre><code>git patch-id &lt;options&gt;</code></pre>

<h3>sh-i18n</h3>
<p>Git's i18n setup code for shell scripts. This command is used for internationalization setup in shell scripts.</p>
<pre><code>git sh-i18n &lt;options&gt;</code></pre>

<h3>sh-setup</h3>
<p>Common Git shell script setup code. This command is used for common setup in Git shell scripts.</p>
<pre><code>git sh-setup &lt;options&gt;</code></pre>

<h3>stripspace</h3>
<p>Remove unnecessary whitespace. This command is used to remove unnecessary whitespace from input.</p>
<pre><code>git stripspace &lt;options&gt;</code></pre>

<h2>External commands</h2>
<p>These are external commands that can be used with Git:</p>

<h3>askyesno</h3>
<p>Prompt the user for a yes/no answer. This command is used to prompt the user for a yes/no answer.</p>
<pre><code>git askyesno &lt;prompt&gt;</code></pre>

<h3>credential-helper-selector</h3>
<p>Select a credential helper. This command is used to select a credential helper.</p>
<pre><code>git credential-helper-selector &lt;options&gt;</code></pre>

<h<h3>cvsimport</h3>
<p>Salvage your data out of another SCM people love to hate. This command is used to import data from a CVS repository into Git.</p>
<pre><code>git cvsimport -d :pserver:anonymous@cvs.example.com:/cvsroot co -r HEAD</code></pre>

<h3>cvsserver</h3>
<p>A CVS server emulator for Git. This command is used to provide a CVS server interface for a Git repository.</p>
<pre><code>git cvsserver</code></pre>

<h3>imap-send</h3>
<p>Send a collection of patches from stdin to an IMAP folder. This command is used to send patches via IMAP.</p>
<pre><code>git imap-send</code></pre>

<h3>p4</h3>
<p>Import from and submit to Perforce repositories. This command is used to interact with Perforce repositories.</p>
<pre><code>git p4 clone //depot/path/project</code></pre>

<h3>quiltimport</h3>
<p>Applies a quilt patchset onto the current branch. This command is used to apply a series of patches from a quilt patchset.</p>
<pre><code>git quiltimport &lt;patch-directory&gt;</code></pre>

<h3>request-pull</h3>
<p>Generates a summary of pending changes. This command is used to generate a summary of changes to be sent to another repository.</p>
<pre><code>git request-pull &lt;start&gt; &lt;url&gt; &lt;end&gt;</code></pre>

<h3>send-email</h3>
<p>Send a collection of patches as emails. This command is used to send patches via email.</p>
<pre><code>git send-email --to=&lt;recipient&gt; &lt;patches&gt;</code></pre>

<h3>svn</h3>
<p>Bidirectional operation between a Subversion repository and Git. This command is used to interact with Subversion repositories.</p>
<pre><code>git svn clone &lt;svn-repo-url&gt;</code></pre>

<h2>Low-level Commands / Manipulators</h2>
<p>These commands are used to manipulate the repository at a low level:</p>

<h3>apply</h3>
<p>Apply a patch to files and/or to the index. This command is used to apply a patch file to the working directory or index.</p>
<pre><code>git apply &lt;patch-file&gt;</code></pre>

<h3>checkout-index</h3>
<p>Copy files from the index to the working tree. This command is used to copy files from the index to the working directory.</p>
<pre><code>git checkout-index --all</code></pre>

<h3>commit-graph</h3>
<p>Write and verify Git commit-graph files. This command is used to create and verify commit-graph files.</p>
<pre><code>git commit-graph write --reachable</code></pre>

<h3>commit-tree</h3>
<p>Create a new commit object. This command is used to create a new commit object from a tree object.</p>
<pre><code>git commit-tree &lt;tree&gt; -m "Commit message"</code></pre>

<h3>hash-object</h3>
<p>Compute object ID and optionally creates a blob from a file. This command is used to compute the object ID for a file and optionally create a blob object.</p>
<pre><code>git hash-object -w &lt;file&gt;</code></pre>

<h3>index-pack</h3>
<p>Build pack index file for an existing packed archive. This command is used to create an index file for a pack file.</p>
<pre><code>git index-pack &lt;pack-file&gt;</code></pre>

<h3>merge-file</h3>
<p>Run a three-way file merge. This command is used to perform a three-way merge of files.</p>
<pre><code>git merge-file &lt;file1&gt; &lt;base-file&gt; &lt;file2&gt;</code></pre>

<h3>merge-index</h3>
<p>Run a merge for files needing merging. This command is used to merge files that need merging.</p>
<pre><code>git merge-index &lt;merge-program&gt; &lt;file-list&gt;</code></pre>

<h3>mktag</h3>
<p>Creates a tag object. This command is used to create a tag object.</p>
<pre><code>git mktag &lt;tag-file&gt;</code></pre>

<h3>mktree</h3>
<p>Build a tree-object from ls-tree formatted text. This command is used to create a tree object from ls-tree formatted text.</p>
<pre><code>git mktree &lt;tree-file&gt;</code></pre>

<h3>multi-pack-index</h3>
<p>Write and verify multi-pack-indexes. This command is used to create and verify multi-pack-indexes.</p>
<pre><code>git multi-pack-index write</code></pre>

<h3>pack-objects</h3>
<p>Create a packed archive of objects. This command is used to create a pack file containing objects.</p>
<pre><code>git pack-objects &lt;pack-file&gt;</code></pre>

<h3>prune-packed</h3>
<p>Remove extra objects that are already in pack files. This command is used to remove objects that are already packed.</p>
<pre><code>git prune-packed</code></pre>

<h3>read-tree</h3>
<p>Reads tree information into the index. This command is used to read tree objects into the index.</p>
<pre><code>git read-tree &lt;tree&gt;</code></pre>

<h3>symbolic-ref</h3>
<p>Read, modify and delete symbolic refs. This command is used to manage symbolic refs.</p>
<pre><code>git symbolic-ref &lt;ref&gt; &lt;target&gt;</code></pre>

<h3>unpack-objects</h3>
<p>Unpack objects from a packed archive. This command is used to unpack objects from a pack file.</p>
<pre><code>git unpack-objects &lt;pack-file&gt;</code></pre>

<h3>update-index</h3>
<p>Register file contents in the working tree to the index. This command is used to update the index with the contents of the working directory.</p>
<pre><code>git update-index --add &lt;file&gt;</code></pre>

<h3>update-ref</h3>
<p>Update the object name stored in a ref safely. This command is used to update the reference to an object.</p>
<pre><code>git update-ref &lt;ref&gt; &lt;object&gt;</code></pre>

<h3>write-tree</h3>
<p>Create a tree object from the current index. This command is used to create a tree object from the index.</p>
<pre><code>git write-tree</code></pre>

<h2>Low-level Commands / Interrogators</h2>
<p>These commands are used to gather information from the repository:</p>

<h3>cat-file</h3>
<p>Provide content or type and size information for repository objects. This command is used to display information about objects in the repository.</p>
<pre><code>git cat-file -p &lt;object&gt;</code></pre>

<h3>cherry</h3>
<p>Find commits yet to be applied to upstream. This command is used to find commits that have not been applied to the upstream branch.</p>
<pre><code>git cherry &lt;upstream&gt; &lt;branch&gt;</code></pre>

<h3>diff-files</h3>
<p>Compares files in the working tree and the index. This command is used to compare the working directory with the index.</p>
<pre><code>git diff-files</code></pre>

<h3>diff-index</h3>
<p>Compare a tree to the working tree or index. This command is used to compare a tree object with the working directory or index.</p>
<pre><code>git diff-index &lt;tree&gt;</code></pre>

<h3>diff-tree</h3>
<p>Compares the content and mode of blobs found via two tree objects. This command is used to compare the contents of two tree objects.</p>
<pre><code>git diff-tree &lt;tree1&gt; &lt;tree2&gt;</code></pre>

<h3>for-each-ref</h3>
<p>Output information on each ref. This command is used to display information about each reference in the repository.</p>
<pre><code>git for-each-ref</code></pre>

<h3>for-each-repo</h3>
<p>Run a Git command on a list of repositories. This command is used to run a Git command on multiple repositories.</p>
<pre><code>git for-each-repo &lt;command&gt;</code></pre>

<h3>get-tar-commit-id</h3>
<p>Extract commit ID from an archive created using git-archive. This command is used to extract the commit ID from a tar archive.</p>
<pre><code>git get-tar-commit-id &lt;archive&gt;</code></pre>

<h3>ls-files</h3>
<p>Show information about files in the index and the working tree. This command is used to display information about files in the index and working directory.</p>
<pre><code>git ls-files</code></pre>

<h3>ls-remote</h3>
<p>List references in a remote repository. This command is used to display references in a remote repository.</p>
<pre><code>git ls-remote &lt;remote&gt;</code></pre>

<h3>ls-tree</h3>
<p>List the contents of a tree object. This command is used to display the contents of a tree object.</p>
<pre><code>git ls-tree &lt;tree&gt;</code></pre>

<h3>merge-base</h3>
<p>Find as good common ancestors as possible for a merge. This command is used to find common ancestors for a merge.</p>
<pre><code>git merge-base &lt;commit1&gt; &lt;commit2&gt;</code></pre>

<h3>name-rev</h3>
<p>Find symbolic names for given revs. This command is used to find symbolic names for revisions.</p>
<pre><code>git name-rev &lt;commit&gt;</code></pre>

<h3>pack-redundant</h3>
<p>Find redundant pack files. This command is used to find redundant pack files in the repository.</p>
<pre><code>git pack-redundant &lt;pack-files&gt;</code></pre>

<h3>rev-list</h3>
<p>Lists commit objects in reverse chronological order. This command is used to list commit objects in reverse chronological order.</p>
<pre><code>git rev-list &lt;commit-range&gt;</code></pre>

<h3>rev-parse</h3>
<p>Pick out and massage parameters. This command is used to parse revision parameters.</p>
<pre><code>git rev-parse &lt;revision&gt;</code></pre>

<h3>show-index</h3>
<p>Show packed archive index. This command is used to display the index of a pack file.</p>
<pre><code>git show-index &lt;pack-file&gt;</code></pre>

<h3>show-ref</h3>
<p>List references in a local repository. This command is used to display references in a local repository.</p>
<pre><code>git show-ref</code></pre>

<h3>unpack-file</h3>
<p>Creates a temporary file with a blob's contents. This command is used to create a temporary file with the contents of a blob object.</p>
<pre><code>git unpack-file &lt;blob&gt;</code></pre>

<h3>var</h3>
<p>Show a Git logical variable. This command is used to display the value of a Git logical variable.</p>
<pre><code>git var &lt;variable&gt;</code></pre>

<h3>verify-pack</h3>
<p>Validate packed Git archive files. This command is used to verify the integrity of pack files.</p>
<pre><code>git verify-pack &lt;pack-file&gt;</code></pre>

<h2>Low-level Commands / Syncing Repositories</h2>
<p>These commands are used to synchronize repositories:</p>

<h3>daemon</h3>
<p>A really simple server for Git repositories. This command is used to start a simple server for Git repositories.</p>
<pre><code>git daemon --reuseaddr --base-path=/path/to/repo /path/to/repo</code></pre>

<h3>fetch-pack</h3>
<p>Receive missing objects from another repository. This command is used to fetch missing objects from another repository.</p>
<pre><code>git fetch-pack &lt;repository&gt;</code></pre>

<h3>http-backend</h3>
<p>Server side implementation of Git over HTTP. This command is used to provide a server-side implementation of Git over HTTP.</p>
<pre><code>git http-backend</code></pre>

<h3>send-pack</h3>
<p>Push objects over Git protocol to another repository. This command is used to push objects to another repository.</p>
<pre><code>git send-pack &lt;repository&gt;</code></pre>

<h3>update-server-info</h3>
<p>Update auxiliary info file to help dumb servers. This command is used to update auxiliary information files for dumb servers.</p>
<pre><code>git update-server-info</code></pre>

<h2>Low-level Commands / Internal Helpers</h2>
<p>These commands are used internally by Git and are not typically used directly by users:</p>

<h3>check-attr</h3>
<p>Display gitattributes information. This command is used to display information about gitattributes.</p>
<pre><code>git check-attr &lt;attribute&gt; -- &lt;file&gt;</code></pre>

<h3>check-ignore</h3>
<p>Debug gitignore / exclude files. This command is used to debug gitignore and exclude files.</p>
<pre><code>git check-ignore -v &lt;file&gt;</code></pre>

<h3>check-mailmap</h3>
<p>Show canonical names and email addresses of contacts. This command is used to display canonical names and email addresses from the mailmap.</p>
<pre><code>git check-mailmap &lt;contact&gt;</code></pre>

<h3>check-ref-format</h3>
<p>Ensures that a reference name is well formed. This command is used to check if a reference name is well-formed.</p>
<pre><code>git check-ref-format &lt;refname&gt;</code></pre>

<h3>column</h3>
<p>Display data in columns. This command is used to format output into columns.</p>
<pre><code>git column &lt;options&gt;</code></pre>

<h3>credential</h3>
<p>Retrieve and store user credentials. This command is used to manage user credentials.</p>
<pre><code>git credential fill
git credential approve
git credential reject</code></pre>

<h3>credential-cache</h3>
<p>Helper to temporarily store passwords in memory. This command is used to cache credentials in memory.</p>
<pre><code>git credential-cache &lt;options&gt;</code></pre>

<h3>credential-store</h3>
<p>Helper to store credentials on disk. This command is used to store credentials on disk.</p>
<pre><code>git credential-store &lt;options&gt;</code></pre>

<h3>fmt-merge-msg</h3>
<p>Produce a merge commit message. This command is used to format a merge commit message.</p>
<pre><code>git fmt-merge-msg &lt;options&gt;</code></pre>

<h3>interpret-trailers</h3>
<p>Add or parse structured information in commit messages. This command is used to add or parse trailers in commit messages.</p>
<pre><code>git interpret-trailers &lt;options&gt;</code></pre>

<h3>mailinfo</h3>
<p>Extracts patch and authorship from a single e-mail message. This command is used to extract patch information from an email message.</p>
<pre><code>git mailinfo &lt;options&gt;</code></pre>

<h3>mailsplit</h3>
<p>Simple UNIX mbox splitter program. This command is used to split an mbox file into individual messages.</p>
<pre><code>git mailsplit &lt;options&gt;</code></pre>

<h3>merge-one-file</h3>
<p>The standard helper program to use with git-merge-index. This command is used as a helper for git-merge-index.</p>
<pre><code>git merge-one-file &lt;options&gt;</code></pre>

<h3>patch-id</h3>
<p>Compute unique ID for a patch. This command is used to compute a unique ID for a patch.</p>
<pre><code>git patch-id &lt;options&gt;</code></pre>

<h3>sh-i18n</h3>
<p>Git's i18n setup code for shell scripts. This command is used for internationalization setup in shell scripts.</p>
<pre><code>git sh-i18n &lt;options&gt;</code></pre>

<h3>sh-setup</h3>
<p>Common Git shell script setup code. This command is used for common setup in Git shell scripts.</p>
<pre><code>git sh-setup &lt;options&gt;</code></pre>

<h3>stripspace</h3>
<p>Remove unnecessary whitespace. This command is used to remove unnecessary whitespace from input.</p>
<pre><code>git stripspace &lt;options&gt;</code></pre>

<h2>External commands</h2>
<p>These are external commands that can be used with Git:</p>

<h3>askyesno</h3>
<p>Prompt the user for a yes/no answer. This command is used to prompt the user for a yes/no answer.</p>
<pre><code>git askyesno &lt;prompt&gt;</code></pre>

<h3>credential-helper-selector</h3>
<p>Select a credential helper. This command is used to select a credential helper for Git.</p>
<pre><code>git credential-helper-selector</code></pre>

<h3>flow</h3>
<p>Git extensions to provide high-level repository operations for Vincent Driessen's branching model.</p>
<pre><code>git flow &lt;subcommand&gt;</code></pre>

<h3>lfs</h3>
<p>Git extension for versioning large files. This command is used to manage large files with Git.</p>
<pre><code>git lfs &lt;subcommand&gt;</code></pre>

<p>&nbsp;</p>
<?php include("../../footer.php"); ?>
