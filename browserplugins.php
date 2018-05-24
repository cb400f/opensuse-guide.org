<?php include 'header.php'; ?>
<title>14. Browser Plugins - Install Plugins For Your Web Browser Such As Flash and Java</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 



<div class="heading1">14. Browser Plugins</div>
Many websites require various browser plugins to be installed to function as expected. Here are some plugins that you may want to install. Only install these plugins if you need them, as they can impact performance and security while browsing the internet.<br /><br /> 


<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>If the concepts of <i>package manager</i> and <i>repositories</i> are foreign to you, revisit the chapters <a href="installpackage.php">Installing Software</a> and <a href="repositories.php">Software Repositories</a>.</td>
</tr>
</tbody>
</table>
</div><br />



<div class="heading2">14.1 Adobe Flash</div>
Install the package <b>freshplayerplugin</b>, if you need Flash support for some online videos, games and other things (<i>Packman Repository</i> is required).<br /><br />

Installing Flash in the terminal:

<div class="clroot">zypper addrepo -f http://packman.inode.at/suse/openSUSE_Leap_15.0/ packman</div><br />
<div class="clroot">zypper install freshplayerplugin</div><br /><br />



<div class="heading2">14.2 Java</div>
Java web applets are used for games, home banking in some countries, and various other things.<br /><br />

Install the package <b>java-1_8_0-openjdk-plugin</b> with the package manager if it isn't already installed.<br /><br />

Installing Java browser plugin in the terminal:
<div class="clroot">zypper install java-1_8_0-openjdk-plugin</div><br />



<div class="heading2">14.3 Video and Audio Streaming</div>
To get support for various multimedia streams in Firefox and other browsers, install the package <b>xine-browser-plugin</b> (<i>Packman Repository</i> required).<br /><br />

Installing multimedia plugin in the terminal:
<div class="clroot">zypper install xine-browser-plugin</div><br />



<div class="heading2">14.4 Microsoft Silverlight</div>
Microsoft have created something called Silverlight to compete with Adobe Flash in making the web require proprietary extensions.<br /><br />

As you'd expect Microsoft do <i>not</i> provide an official plugin for GNU/Linux, but there is something called <a href="http://fds-team.de/cms/articles/2013-08/pipelight-using-silverlight-in-linux-browsers.html" target="_blank">Pipelight</a> bringing Microsoft Silverlight to the GNU/Linux platform. You can find Pipelight packages for openSUSE <a href="http://software.opensuse.org/package/pipelight" target="_blank">here</a><br /><br />

Netflix will play in the latest Google Chrome Browser, without any need for Microsoft Silverlight.<br /><br />



<div class="heading2">14.5 Google Hangouts</div>
Google provide voice and video chat with Google services on GNU/Linux with a browser plugin. Download the RPM files for openSUSE here:<br />
<a href="http://www.google.com/chat/video">http://www.google.com/chat/video</a><br /><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="codecs.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="3d.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>


<?php include 'footer.php'; ?>
