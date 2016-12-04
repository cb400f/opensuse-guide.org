<?php include 'header.php'; ?>
<title>13. Multimedia Codecs - Install Support for restricted codecs including MP3, DVD, WMA, WMV, MOV etc.</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 



<div class="heading1">13. Multimedia Codecs</div>
This chapter describes two different methods for installing the packages needed to playback most multimedia formats - including MP3, DVDs etc., with Dragon (video) and Amarok (audio). You can use manual 1-click installation or use the command line - whichever method you prefer.<br /><br />

By default only free, open, non-patent encumbered formats such as Ogg Theora, Ogg Vorbis and Flac are supported for legal reasons (US software patents and Digital Millennium Copyright Act (DMCA)).<br /><br />




<div class="heading2">13.1 Codec Installation with 1-Click</div>

1) Click on the button below to add the necessary repositories and install the required packages with 1-click install.<br /><br />

<center><a href="http://opensuse-community.org/codecs-kde.ymp"><img src="images/oneclick/codecs.png" alt="ymp" class="pic" /></a></center><br />

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>If a conflict dialog appears, select to install the packages <i>with</i> Vendor Change.</td>
</tr>
</tbody>
</table>
</div><br />

2) Afterwards make sure all your multimedia packages are coming from the Packman Repository:
<div class="path">Start YaST Software Management => Click on View => Click on Repositories => Select the Packman Repository => Click "Switch system packages"</div><br />

<center><a href="images/screenshots/packman-vendorchange.png" rel="thumbnail"><img src="images/screenshots/packman-vendorchangeb.png" alt="packman_vendor_change" class="pic" /></a></center><br /><br />



<div class="heading2">13.2 Codec Installation in the Terminal</div>
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

1) Add the needed repositories:
<div class="clroot">zypper addrepo -f http://packman.inode.at/suse/openSUSE_Leap_42.2/ packman</div>
<div class="clroot">zypper addrepo -f http://opensuse-guide.org/repo/openSUSE_Leap_42.2/ dvd</div><br />

2) Then install the necessary packages:
<div class="clroot">zypper install k3b-codecs ffmpeg lame gstreamer-plugins-bad gstreamer-plugins-ugly gstreamer-plugins-ugly-orig-addon gstreamer-plugins-libav libdvdcss2</div><br />

You will be asked if you want to allow vendor change for some packages - allow it.<br /><br />

3) Make sure all your multimedia packages are coming from the Packman Repository: 
<div class="clroot">zypper dup --from http://packman.inode.at/suse/openSUSE_Leap_42.2/</div>

<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="windows.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="browserplugins.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>
