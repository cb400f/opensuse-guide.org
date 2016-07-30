<?php include 'header.php'; ?>
<title>13. Multimedia Codecs - Install Support For MP3, DVD, WMA, WMV, MOV etc.</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 

<div class="os1">13. Multimedia Codecs</div>
This chapter describes three different methods for installing the packages needed to playback most multimedia formats - including MP3, DVDs etc., with Dragon (video) and Amarok (audio). You can use manual installation with graphical software or use the command line - whichever method you prefer.<br /><br />

By default only free, open, non-patent encumbered formats such as Ogg Theora, Ogg Vorbis and Flac are supported for legal reasons (US software patents and Digital Millennium Copyright Act (DMCA)).<br /><br />


<!--
<div class="os2">13.1 Codec Installation with 1-Click</div>

Temporarily not available for technical reasons.<br /><br /><br />


Click on the button below to install multmedia codecs with 1-click install.<br /><br />


<center><a href="http://opensuse-community.org/codecs-kde.ymp"><img src="images/oneclick/codecs.png" alt="ymp" class="pic" /></a></center><br />
-->


<!--
<center><a href="data:text/x-suse-ymu,http://opensuse-guide.org/ymp/codecs.ymp"><img src="images/oneclick/codecs.png" alt="codecs ymp" class="pic" /></a></center><br />
-->

<!--
Note, if you get a warning dialog like this don't panic! Simply select the proper option, to either allow changing the vendor for some packages from <i>openSUSE</i> to <i>Packman</i>, or possibly to downgrade a package (usually the same package version, only with a lower build number) then click <i>OK -- Try Again</i>.<br /><br />
-->

<!--
<center><a href="images/screenshots/conflict.png" rel="thumbnail"><img src="images/screenshots/conflictb.png" alt="conflict" class="pic" /></a></center><br />
-->


<div class="os2">13.1 Codec Installation with YaST Software Management</div>

1) First add/enable the repositories with YaST Software Repositories:<br />

<ul>
<li><b>Packman Repository</b></li>
<!-- <li><b>Non-OSS Respository</b></li> -->
<li><b>libdvdcss repository</b> (skip if you don't need DVD playback)</li>
</ul>

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

2) Then install the following packages with YaST Software Management:<br />

<ul>
<li><b>k3b-codecs</b></li>
<li><b>ffmpeg</b></li>
<li><b>lame</b></li>
<li><b>phonon-backend-vlc</b></li>
<li><b>phonon4qt5-backend-vlc</b></li>
<li><b>vlc-codecs</b></li>
<li><b>flash-player</b></li>
<li><b>libdvdcss2</b> (skip if you don't need DVD playback)</li>
</ul>

3) Finally remove/uninstall the following packages with YaST Software Management:<br />

<ul>
<li><b>phonon-backend-gstreamer</b></li>
<li><b>phonon4qt5-backend-gstreamer</li>
</ul><br />







<!--
You can install the packages manually instead if you prefer.<br /><br />

First add/enable the repositories with YaST Software Repositories:<br />

<ul>
<li><b>Packman Repository</b></li>
<li><b>Non-OSS Respository</b></li>
<li><b>libdvdcss repository</b> (skip if you don't need DVD playback)</li>
</ul>

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

Then install the following packages with YaST Software Management:<br />

<ul>
<li><b>k3b-codecs</b></li>
<li><b>ffmpeg</b></li>
<li><b>lame</b></li>
<li><b>gstreamer-plugins-bad</b></li>
<li><b>gstreamer-plugins-ugly</b></li>
<li><b>gstreamer-plugins-ugly-orig-addon</b></li>
<li><b>gstreamer-plugins-libav</b></li>
<li><b>gstreamer-fluendo-mp3</b></li>
<li><b>libdvdcss2</b> (skip if you don't need DVD playback)</li>
</ul>
-->

<div class="os2">13.2 Codec Installation in the Terminal</div>
To install codecs using the terminal instead, do these steps:<br /><br />

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>Use Copy/Paste to avoid typos. To paste in Konsole right click mouse => Paste - or use <b>Ctrl+Shift+V</b>.</td>
</tr>
</tbody>
</table>
</div><br />

1) Add the needed repositories (skip the dvd repo if you don't need DVD playback):
<div class="clroot">zypper addrepo -f http://packman.inode.at/suse/openSUSE_Leap_42.1/ packman</div>
<div class="clroot">zypper addrepo -f http://opensuse-guide.org/repo/openSUSE_Leap_42.1/ dvd</div><br />

2) Then install the necessary packages (skip libdvdcss2 if you don't need DVD playback):
<div class="clroot">zypper install k3b-codecs ffmpeg lame phonon-backend-vlc phonon4qt5-backend-vlc vlc-codecs flash-player libdvdcss2</div><br />

3) Now remove these packages:
<div class="clroot">zypper remove phonon-backend-gstreamer phonon4qt5-backend-gstreamer</div><br />

<!--
Add the needed repositories (skip the dvd repo if you don't need DVD playback):
<div class="clroot">zypper addrepo -f http://packman.inode.at/suse/openSUSE_Leap_42.1/Essentials/ packman</div>
<div class="clroot">zypper addrepo -f http://opensuse-guide.org/repo/openSUSE_Leap_42.1/ dvd</div><br />


Then install the necessary packages (skip libdvdcss2 if you don't need DVD playback):
<div class="clroot">zypper install k3b-codecs ffmpeg lame gstreamer-plugins-bad gstreamer-plugins-ugly gstreamer-plugins-ugly-orig-addon gstreamer-plugins-libav libdvdcss2</div>

You will be asked if you want to allow vendor change for some packages - allow it.<br /><br />

Finally ensure that you have a consistent set of packages from the Packman Repository:
<div class="clroot">zypper dup --from http://packman.inode.at/suse/openSUSE_Leap_42.1/Essentials/</div>

You will be asked if you want to allow vendor change for some packages - allow it.<br /><br />

If you still experience problems try removing the GStreamer cache and reboot your system:
<div class="cl">rm -rf ~/.cache/gstreamer-1.0/</div><br />
-->





<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="windows.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="browserplugins.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>


<?php include 'footer.php'; ?>
