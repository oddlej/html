<!--date=20241019 -->

<?php include("../../headercat.php"); ?>

<h1>Starting with Github - Create a new repository on the command line</h1>

<p>This is specifically for <a href="https://github.com">Github.com</a>. I have set up an SSH key and authenticated it, and now I want to start building repos. There is other ways to do this, but i'd rather do it locally on the command line.</p>


<pre>$ mkdir test 							# make a new directory in your main git folder
$ cd test							# change to that directory
$ gh repo create test --public					# create the repository folder on github
$ echo "# test repository" >> README.md				# make a line in a file called README.md that says # test repository 
$ git init 							# initialize the repository
$ git add . 							# or -A for all or README.md for one file
$ git commit -m "test commit"					# commit with the message test commit
$ git branch -M main						# specify the branch is main
$ git remote add origin git@github.com:oddlej/test.git		# this is showing how you are going to authenticate. It can be ssh as I have setup up or https
$ git push -u origin main					# push these changes to the server

</pre>

<p>That's it. You now have a synced version on Github.com. If you get any errors, you either have a directory under that name, or have configuration problems. If you have trouble on the push after the set remote line check <a href="https://stackoverflow.com/questions/14762034/push-to-github-without-a-password-using-ssh-key">here</a>. Once the remote is set you need to use set-url to change it. Also here is a <a href="https://git-scm.com/docs/git-add">few</a> <a href="https://www.atlassian.com/git/tutorials/saving-changes">links</a> to using the <a href="https://github.com/git-guides/git-add">add command</a>. Here is the complete sequence on my machine, and here's a <a href="https://github.com/oddlej/test">link</a> to it.</p>

<pre>stakes@kelethin:~/Desktop/mygit$ ls
as  c  html  music  README.md
stakes@kelethin:~/Desktop/mygit$ mkdir test
stakes@kelethin:~/Desktop/mygit$ cd test
stakes@kelethin:~/Desktop/mygit/test$ gh repo create test --public
✓ Created repository oddlej/test on GitHub
  https://github.com/oddlej/test
stakes@kelethin:~/Desktop/mygit/test$ echo "# test repository" >> README.md
stakes@kelethin:~/Desktop/mygit/test$ git init
Initialized empty Git repository in /home/khadas/Desktop/mygit/test/.git/
stakes@kelethin:~/Desktop/mygit/test$ git add .
stakes@kelethin:~/Desktop/mygit/test$ git commit -m "test commit"
[main (root-commit) 0027e18] test commit
 1 file changed, 1 insertion(+)
 create mode 100644 README.md
stakes@kelethin:~/Desktop/mygit/test$ git branch -M main
stakes@kelethin:~/Desktop/mygit/test$ git remote add origin git@github.com:oddlej/test.git
stakes@kelethin:~/Desktop/mygit/test$ git push -u origin main
Enumerating objects: 3, done.
Counting objects: 100% (3/3), done.
Writing objects: 100% (3/3), 221 bytes | 221.00 KiB/s, done.
Total 3 (delta 0), reused 0 (delta 0), pack-reused 0
To github.com:oddlej/test.git
 * [new branch]      main -> main
branch 'main' set up to track 'origin/main'.
</pre>
<p> I then changed the README.md file on the Github app on my phone to test and committed it. Let's get it locally with a pull.</p>

<pre>stakes@kelethin:~/Desktop/mygit/test$ git pull
remote: Enumerating objects: 5, done.
remote: Counting objects: 100% (5/5), done.
Unpacking objects: 100% (3/3), 904 bytes | 904.00 KiB/s, done.
remote: Total 3 (delta 0), reused 0 (delta 0), pack-reused 0 (from 0)
From github.com:oddlej/test
   0027e18..123823d  main       -> origin/main
Updating 0027e18..123823d
Fast-forward
 README.md | 2 +-
 1 file changed, 1 insertion(+), 1 deletion(-)
stakes@kelethin:~/Desktop/mygit/test$ 
</pre>

<p>Once you have completed this sequence, you will use some of these commands to commit new changes to the folder. <a href="https://opentechschool.github.io/github-from-scratch/git/">This</a> is a great starting point as well. You can use master instead of main, I just like my main branch being called main. Git 'er done! :p</p>

<?php include("../../footer.php"); ?>
