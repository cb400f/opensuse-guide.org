---
layout: default
title: 13. Multimedia Codecs - Install Support for restricted codecs including MP3, DVD, WMA, WMV, MOV etc.
permalink: /codecs
---

# 13. Multimedia Codecs

This chapter describes two different methods for installing the packages needed to playback most multimedia formats - including MP3, DVDs etc., with the default media player VLC as well as playing online videos in Firefox. You can use manual 1-click installation or use the command line - whichever method you prefer.

By default only free, open, non-patent encumbered formats such as Ogg Theora, Ogg Vorbis and Flac are supported for legal reasons (US software patents and Digital Millennium Copyright Act (DMCA)).

## 13.1 Codec Installation with 1-Click

1) Click on the button below to add the necessary repositories and install the required packages with 1-click install.

<center><a href="https://opensuse-community.org/codecs-kde.ymp"><img src="images/oneclick/codecs.png" alt="ymp" class="pic" /></a></center>

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>These 1-Click Installers currently only work with the <b>Firefox web browser</b>.</td>
</tr>
</tbody>
</table>
</div>

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>If a conflict dialog appears, select to install the packages <b><i>with</i> Vendor Change</b>.</td>
</tr>
</tbody>
</table>
</div>

2) Afterwards make sure all your multimedia packages are coming from the Packman Repository:

<div class="path">Start YaST Software Management => Click on View => Click on Repositories => Select the Packman Repository => Click "Switch system packages" => Click "Accept"</div>

<center><a href="images/screenshots/packman-vendorchange.png" rel="thumbnail"><img src="images/screenshots/packman-vendorchangeb.png" alt="packman_vendor_change" class="pic" /></a></center>

## 13.2 Codec Installation in the Terminal

To install codecs using the terminal instead, do these steps:

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>Use Copy/Paste to avoid typos. To paste in Konsole right click mouse => Paste - or use <b>Ctrl+Shift+V</b>.</td>
</tr>
</tbody>
</table>
</div>

1) Add the needed repositories:

<div class="clroot">zypper addrepo -f http://ftp.gwdg.de/pub/linux/misc/packman/suse/openSUSE_Leap_15.3/ packman</div>
<div class="clroot">zypper addrepo -f http://opensuse-guide.org/repo/openSUSE_Leap_15.3/ dvd</div>

2) Then install the necessary packages:

<div class="clroot">zypper install --allow-vendor-change ffmpeg-3 lame gstreamer-plugins-bad gstreamer-plugins-ugly gstreamer-plugins-ugly-orig-addon gstreamer-plugins-libav libavdevice57 libdvdcss2 vlc-codecs</div>

3) Make sure all your multimedia packages are coming from the Packman Repository:

<div class="clroot">zypper dup --allow-vendor-change --from http://ftp.gwdg.de/pub/linux/misc/packman/suse/openSUSE_Leap_15.3/</div>
