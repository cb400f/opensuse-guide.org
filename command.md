---
layout: default
title: 8. Terminal - Running Commands and Using the Command Line Interface on openSUSE
permalink: command
---

# 8. Terminal

Almost any task can be performed graphically on a modern GNU/Linux distribution such as openSUSE, but to really become a self-reliant user and to truly take advantage of the power of your GNU/Linux operating system, you should at least know a few terminal basics - it's not difficult at all!

There are thousands of commands you can run, each with a number of different options. So this chapter is just a small teaser describing the most common commands.

You'll find _Konsole_ under System in the launch menu.

{% include video.html video="konsole" screenshot="konsole" size="4.5 MB" %}

Using the command line is quite easy. Simply enter a command and possibly one or more options and one or more arguments and then press Enter. Example:

<div class="cl">ls -l /home/[username]/ </div>

The _command_ **ls** displays a list of files, the _option_ **-l** means that the list will be displayed in a long listing format, and the _argument_ **/home/[username]/** sets the directory of which the contents are listed.

## 8.1 Useful Shortcuts

### Tab-key

The tab-key is increcibly useful, if possible it will auto-complete commands and arguments, which helps you work faster and avoid typos.

### Ctrl+Shift+V

Paste from the clipboard.

### Ctrl+C

This shortcut stops any operation you may have started.

## 8.2 Examples of Basic Commands

This is just a very small selection of commands to give you an idea of how things work.

{% include tip.html tip="Commands written in **red** need to be run as root." %}

### 8.2.1 File Management

Changing directory

<div class="cl">cd /home/user/directoryname/</div>

Listing files of a directory

<div class="cl">ls</div>

Copying a file

<div class="cl">cp filename /home/user/directoryname/filename</div>

Deleting a file

<div class="cl">rm filename</div>

Deleting a directory including contents

<div class="cl">rm -rf /home/user/directoryname</div>

Moving or renaming a file

<div class="cl">mv /home/user/filename /home/user/newfilename</div>

### 8.2.2 System Monitoring

Running processes and consumption of system resources. Press **'Q'** to exit.

<div class="cl">top </div>

Disk space usage

<div class="cl">df</div>

Memory consumption

<div class="cl">free</div>

### 8.2.3 Network

Find out your IP-address

<div class="cl">ip a</div>

Find out your gateway

<div class="cl">ip route</div>

Find out your DNS servers

<div class="cl">cat /etc/resolv.conf</div>

### 8.2.4 Man Pages and Help

Almost all commands have an accompanying manual page describing how to use the command and the available options. For example type:

<div class="cl">man cp</div>

To leave the man page again press **'Q'**

If a command does not have a man page, try _--help_ instead, example:

<div class="cl">cp --help</div>

### 8.2.5 Becoming Root

To switch to the root user to perform system administration tasks, type:

<div class="cl">su -</div>

Then type your (root) password. Nothing will appear on screen as you type, this is intended.

To stop working as root and return to working as your normal user, run _exit_.

<div class="clroot">exit</div>

To run a single command as root use:

<div class="cl">su -c "[command]"</div>

{% include note.html note="Do not work as root unless it's required." %}

### 8.2.6 System Tasks

Shutting down.

<div class="clroot">systemctl shutdown</div>

Rebooting.

<div class="clroot">systemctl reboot</div>

Start, stop, restart or get status of system services (start|stop|restart|status). Examples:

<div class="clroot">systemctl restart network</div>
<div class="clroot">systemctl stop firewalld</div>
<div class="clroot">systemctl start apache2</div>
<div class="clroot">systemctl status smb</div>

Enable or disable a service from starting at every boot. Examples:

<div class="clroot">systemctl enable sshd</div>
<div class="clroot">systemctl disable cups</div>

### 8.2.7 The Kernel

Find out your kernel version and flavour.

<div class="cl">uname -r</div>

Check kernel messages (useful for troubleshooting hardware issues).

<div class="clroot">dmesg</div>

Listing loaded kernel modules.

<div class="clroot">lsmod</div>

Loading a kernel module.

<div class="clroot">modprobe [modulename]</div>

Unloading a kernel module.

<div class="clroot">rmmod [modulename]</div>

### 8.2.8 Hardware Information

The command hwinfo can provide you with information about almost any hardware, some examples:

<div class="clroot">hwinfo --short --wlan</div>
<div class="clroot">hwinfo --short --gfxcard</div>

List PCI devices:

<div class="clroot">lspci</div>

List USB devices:

<div class="cl">lsusb</div>

## 8.3 Editing Text Files

Editing configuration files or other text files can be done like this using the vim editor, which is installed by default.

Open a file with _vim /path/to/file_. Example:

<div class="clroot">vim /etc/sysconfig/yast2</div>

{% include note.html note="Root permissions are used in the example because _yast2_ is a system configuration file - this is not generally required to edit files with vim." %}

Press **i** to enter insert mode (you will see "-- INSERT --" at the bottom). Now you can edit the text in the file. When you're done editing press **Esc** to leave insert mode and return to command mode. Now type **:x** which is the command for exit and save. To quit without saving any changes use **:q!**.

Vim is quite advanced, you might consider installing a simpler text based editor, e.g. try _nano_.

## 8.4 Further reading

If you want to learn more about using the terminal there are many resources available on the internet, here are a couple of links.

<https://www.guru99.com/unix-linux-tutorial.html>

<http://linuxcommand.org/>

<http://tldp.org/LDP/GNU-Linux-Tools-Summary/html/index.html>
