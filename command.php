<?php include 'header.php'; ?>
<title>8. Terminal - Running Commands and Using the Command Line Interface on openSUSE</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 



<div class="heading1">8. Terminal</div>
Almost any task can be performed graphically on a modern GNU/Linux distribution such as openSUSE, but to really become a self-reliant user and to truly take advantage of the power of your GNU/Linux operating system, you should at least know a few terminal basics - it's not difficult at all!<br /><br />

There are thousands of commands you can run, each with a number of different options. So this chapter is just a small teaser describing the most common commands.<br /><br />

You'll find <i>Konsole</i> under System in the launch menu.<br /><br />

<center><video src="video/konsole.ogv" controls>  

<center><a href="images/screenshots/konsole.png" rel="thumbnail"><img src="images/screenshots/konsoleb.png" alt="konsole" class="pic" /></a></center><br />

<b>Your web browser does not support the HTML5 video element and/or Ogg Theora format.<br />
Try Firefox, Konqueror or Opera.</b><br /><br />

<a href="video/konsole.ogv">Download video for local viewing (4.3 MB)</a>
</video></center>  <br /><br />

Using the command line is quite easy. Simply enter a command and possibly one or more options and one or more arguments and then press Enter. Example:

<div class="cl">ls -l /home/[username]/ </div><br />

The <i>command</i> <b>ls</b> displays a list of files, the <i>option</i> <b>-l</b> means that the list will be displayed in a long listing format, and the <i>argument</i> <b>/home/[username]/</b> sets the directory of which the contents are listed.<br /><br />



<div class="heading2">8.1 Useful Shortcuts</div><br />

<div class="heading3">Tab-key</div>
The tab-key is increcibly useful, if possible it will auto-complete commands and arguments, which helps you work faster and avoid typos.<br /><br />

<div class="heading3">Ctrl+Shift+V</div>
Paste from the clipboard.<br /><br />

<div class="heading3">Ctrl+C</div>
This shortcut stops any operation you may have started.<br /><br />



<div class="heading2">8.2 Examples of Basic Commands</div>
This is just a very small selection of commands to give you an idea of how things work.<br /><br />

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>Commands written in <u>red</u> need to be ran as root.</td>
</tr>
</tbody>
</table>
</div><br />



<div class="heading3">8.2.1 File Management</div>

Changing directory<br />
<div class="cl">cd /home/user/directoryname/</div><br />

Listing files of a directory<br />
<div class="cl">ls</div><br />

Copying a file<br />
<div class="cl">cp filename /home/user/directoryname/filename</div><br />

Deleting a file<br />
<div class="cl">rm filename</div><br />

Deleting a directory including contents<br />
<div class="cl">rm -rf /home/user/directoryname</div><br />

Moving or renaming a file<br />
<div class="cl">mv /home/user/filename /home/user/newfilename</div><br /><br />



<div class="heading3">8.2.2 System Monitoring</div>

Running processes and consumpition of system resources. Press <b>'Q'</b> to exit.<br />
<div class="cl">top </div><br />

Disk space usage<br />
<div class="cl">df</div><br />

Memory consumption<br />
<div class="cl">free</div><br /><br />



<div class="heading3">8.2.3 Network</div>

Find out your IP-address<br />
<div class="cl">ip a</div><br />

Find out your gateway<br />
<div class="cl">ip route</div><br />

Find out your DNS servers<br />
<div class="cl">cat /etc/resolv.conf</div><br /><br />



<div class="heading3">8.2.4 Man Pages and Help</div>
Almost all commands have an accompanying manual page describing how to use the command and the available options. For example type:
<div class="cl">man cp</div><br />

To leave the man page again press <b>'Q'</b><br /><br />

If a command does not have a man page, try <i>--help</i> instead, example:
<div class="cl">cp --help</div><br /><br />



<div class="heading3">8.2.5 Becoming Root</div>
To switch to the root user to perform system administration tasks, type:<br />
<div class="cl">su -</div>

Then type your (root) password. Nothing will appear on screen as you type, this is intended.<br /><br />

To stop working as root and return to working as your normal user, run <i>exit</i>.
<div class="clroot">exit</div><br />

To run a single command as root use:
<div class="cl">su -c "[command]"</div><br />

<div class="note">
<table>
<tbody>
<tr>
<td><img src="images/pics/obs.png" alt="obs" /></td>
<td>Do not work as root unless it's required.</td>
</tr>
</tbody>
</table>
</div><br />



<div class="heading3">8.2.6 System Tasks</div>
Shutting down.<br />
<div class="clroot">systemctl shutdown</div><br />

Rebooting.<br />
<div class="clroot">systemctl reboot</div><br />

Start, stop, restart or get status of system services (start|stop|restart|status). Examples:<br />
<div class="clroot">systemctl restart network</div>
<div class="clroot">systemctl stop firewalld</div>
<div class="clroot">systemctl start apache2</div>
<div class="clroot">systemctl status smb</div><br />

Enable or disable a service from starting at every boot. Examples:
<div class="clroot">systemctl enable sshd</div>
<div class="clroot">systemctl disable cups</div><br /><br />



<div class="heading3">8.2.7 The Kernel</div>
Find out your kernel version and flavour.<br />
<div class="cl">uname -r</div><br />

Check kernel messages (useful for troubleshooting hardware issues).<br />
<div class="clroot">dmesg</div><br />

Listing loaded kernel modules.<br />
<div class="clroot">lsmod</div><br />

Loading a kernel module.<br />
<div class="clroot">modprobe [modulename]</div><br />

Unloading a kernel module.<br />
<div class="clroot">rmmod [modulename]</div><br /><br />



<div class="heading3">8.2.8 Hardware Information</div>

The command hwinfo can provide you with information about almost any hardware, some examples:<br />
<div class="clroot">hwinfo --short --wlan</div>
<div class="clroot">hwinfo --short --gfxcard</div><br />

List PCI devices:
<div class="clroot">lspci</div><br />

List USB devices:
<div class="cl">lsusb</div><br /><br />



<div class="heading2">8.3 Editing Text Files</div>
Editing configuration files or other text files can be done like this using the vim editor, which is installed by default.<br /><br />

Open a file with <i>vim /path/to/file</i>. Example:<br />
<div class="clroot">vim /etc/sysconfig/yast2</div><br />

<div class="note">
<table>
<tbody>
<tr>
<td><img src="images/pics/obs.png" alt="obs" /></td>
<td>Root permissions are used in the example because <i>yast2</i> is a system configuration file - this is not generally required to edit files with vim.</td>
</tr>
</tbody>
</table>
</div><br />

Press <b>i</b> to enter insert mode (you will see "-- INSERT --" at the bottom). Now you can edit the text in the file. When you're done editing press <b>Esc</b> to leave insert mode and return to command mode. Now type <b>:x</b> which is the command for exit and save. To quit without saving any changes use <b>:q!</b>.<br /><br />

Vim is quite advanced, you might consider installing a simpler text based editor, e.g. try <i>nano</i>.<br /><br />

<div class="heading2">8.4 Further reading</div>
If you want to learn more about using the terminal there are many resources available on the internet, here are a couple of links.<br />
<a href="http://linuxcommand.org/" target="_blank">http://linuxcommand.org/</a><br />
<a href="http://tldp.org/LDP/GNU-Linux-Tools-Summary/html/index.html" target="_blank">http://tldp.org/LDP/GNU-Linux-Tools-Summary/html/index.html</a><br /><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="security.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="yast.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>
