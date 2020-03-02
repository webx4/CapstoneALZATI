# Developer's Guide
 Alzati World 
=================

Use this guide to work on **Alzati World** on your personal machine.

As always, _**please**_ make sure that you're working on a branch, not master. Confused about this? Let's get started.

_(Note that this developer's guide assumes that you're comfortable working with the terminal and terminal commands. If not, pull up a tutorial – I recommend Tania Rascia's fantastic tutorial [linked here](https://www.taniarascia.com/how-to-use-the-command-line-for-apple-macos-and-linux/))_

Installing for the first time
-----------------------------

Create a directory where your 'local' version of the project will live. `cd` into the directory.

Clone the repository by entering this command:
`git clone https://github.com/webx4/CapstoneALZATI.git`.

Important note: if you _have not_ already set up your credentials inside your terminal/command prompt, you will want to do so **_ASAP_**. Seriously. It'll be dicey if you don't.

Congratulations! You're now able to start working with the project.

Beginning to develop on a branch
-----------------------------
For this project, you want to be working in weekly 'sprints'. Every Monday, we come together to do a code review and merge into master. But _before_ all that, you need to create a branch to work on.

You'll first want to check that you have a branch that exists for you. Use the command
`git branch -a`
to see what branches exist in the project. If you see `remotes/origin/your-name-here` as one of the listed branches, then you have a branch listed. If not, move to the next section ('If you don't have a branch already made').

## If you don't have a branch already made
If you _don't_ have a branch already made, use the command `git branch checkout [insert-branch-name-here]` to create a new branch **and** check it out.

To confirm that you _are_ on the branch you (just) created, use the command `git branch`. If you see the branch you just created with an asterisk beside it, then you're good to go!
