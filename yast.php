<?php include 'header.php'; ?>
<title>9. Administrator Settings (YaST) - Introduction to the YaST Setup Tool</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 



<div class="heading1">9. Administrator Settings (YaST)</div>
YaST (Yet another Setup Tool) is the central tool for system administration. You find YaST in the launch menu in the System category.<br /><br /> 

<center><a href="images/screenshots/yast-controlcenter.png" rel="thumbnail"><img src="images/screenshots/yast-controlcenterb.png" alt="yast" class="pic" /></a></center><br />

<b>Default YaST modules</b><br />
In YaST you can perform almost any system task, with powerful graphical modules, e.g.:
<ul>
<li>Install and remove software (see next chapter)</li>
<li>Set up your printer</li>
<li>Configure the firewall</li>
<li>Enable and disable system services</li>
<li>Configure network sharing (samba)</li>
<li>Format and partition your drives</li>
<li>Enable NTP daemon</li>
<li>And much, much more...</li>
</ul>

<b>Additional YaST modules</b><br />
A lot more YaST modules are available than the ones included in the default installation (read about installing packages in the next chapter). Some notable modules not installed by default are:

<ul>
<li>Apache web server (package: yast2-http-server)</li>
<li>SSH daemon (package: yast2-sshd)</li>
<li>FTP server (package: yast2-ftp-server)</li>
<li>NFS server (package: yast2-nfs-server)</li>
<li>And many more...</li>
</ul>

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>You don't have to use YaST if you don't want to. You can achieve the same things and more using command line tools and manually editing configuration files.</td>
</tr>
</tbody>
</table>
</div><br />



<div class="heading2">9.1 YaST in the Terminal</div>
The YaST modules can also be used in a terminal (ncurses mode) - this is very useful for servers with no graphical environment running, for remote access via SSH, or in case your graphical environment fails.<br /><br />

Simply run <i>yast</i> as root in a terminal.<br />

<div class="clroot">yast</div><br />

<center><a href="images/screenshots/yast-ncurses.png" rel="thumbnail"><img src="images/screenshots/yast-ncursesb.png" alt="yast-ncurses" class="pic" /></a></center><br />

Navigate using arrow keys, Enter and Alt+[highlighted letters] (e.g. Alt+Q to quit).<br /><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="command.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="installpackage.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>
