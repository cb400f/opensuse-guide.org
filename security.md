---
layout: default
title: 7. Security and Root - Basic Security and Working as the Root User
permalink: /security
---

<div class="heading1">7. Security and Root</div>
openSUSE and GNU/Linux in general is a very secure operating system, but when using any computer on the internet one should always be careful.<br /><br />

<div class="heading2">7.1 The Root User</div>
One of the reasons GNU/Linux is very secure is that you normally don't work with administrator permissions - only the root user has full administrative permissions.<br /><br />

You'll be asked for the root password when installing packages or performing other administrative tasks outside of your /home/ folder. Unless you unchecked the checkbox during installation the root user has the same password as your normal user.<br /><br />

<div class="note">
<table>
<tbody>
<tr>
<td><img src="images/pics/obs.png" alt="obs" /></td>
<td>Only work as root when it's required.</td>
</tr>
</tbody>
</table>
</div><br />



<div class="heading3">7.1.1 Super User File Manager</div>
To work graphically with system files that require root permissions you can launch the Dolphin file manager in super user mode.
<br /><br />

<center><a href="images/screenshots/super-dolph.png" rel="thumbnail"><img src="images/screenshots/super-dolphb.png" alt="super user dolphin" class="pic" /></a></center><br />



<div class="heading3">7.1.2 Working as Root User in the Terminal</div>
The following command is used to switch to the root user in a terminal:
<div class="cl">su -</div><br />

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>Nothing will appear on the screen while you type your password. This is intended.</td>
</tr>
</tbody>
</table>
</div><br />

To stop working as root, enter the following command:
<div class="clroot">exit</div><br />

To run a single command as root you can use:
<div class="cl">su -c "[command]"</div><br />

You can read more about using the terminal in the next chapter.<br /><br />



<div class="heading2">7.2 Security Updates</div>
When new updates are available you'll be notified by the update applet running in the system tray area.<br /><br />

<center><a href="images/screenshots/pk-updater.png" rel="thumbnail"><img src="images/screenshots/pk-updaterb.png" alt="pk-updater" class="pic" /></a></center><br />



<div class="heading3">7.2.1 Installing Updates in the Terminal</div>
To install official security and bugfix patches only, run:
<div class="clroot">zypper patch</div><br />

To install official patches as well as updates from 3rd party repositories, run:
<div class="clroot">zypper update</div><br />



<div class="heading2">7.3 Firewall</div>
openSUSE comes with a firewall included in the default installation ('firewalld'). By default it allows all outgoing traffic and blocks any incoming traffic, hence you'll only need to change the configuration, if you want to run some network servers. The firewall is configurable in YaST, read about YaST in a later chapter.<br /><br />



<div class="heading2">7.4 Virus and Spyware</div>
There's no need to run a virus scanner or to scan for spyware. Malware spreading via the internet and infecting normal home user desktop systems are practically non-existant for GNU/Linux. Just make sure you yourself don't install and run software or scripts from untrusted sources, and you'll be safe.<br /><br />
