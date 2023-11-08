---
layout: default
title: 13. Multimedia Codecs - Install Support for restricted codecs including MP3, DVD, WMA, WMV, MOV etc.
permalink: codecs
---

# 13. Multimedia Codecs

This chapter describes two different methods for installing the packages needed to playback most multimedia formats - including MP3, DVDs etc., with the default media player VLC as well as playing online videos in Firefox. You can use manual 1-click installation or use the command line - whichever method you prefer.

By default only free, open, non-patent encumbered formats such as Ogg Theora, Ogg Vorbis and Flac are supported for legal reasons (US software patents and Digital Millennium Copyright Act (DMCA)).

## 13.2 Codec Installation in the Terminal

To install codecs using the terminal instead, do these steps:

{% include tip.html tip="Use Copy/Paste to avoid typos. To paste in Konsole right click mouse => Paste - or use **Ctrl+Shift+V**." %}

1) Add the needed repositories:

<div class="clroot">zypper addrepo -f http://ftp.gwdg.de/pub/linux/misc/packman/suse/openSUSE_Leap_15.5/ packman</div>

<div class="clroot">zypper addrepo -f http://opensuse-guide.org/repo/openSUSE_Leap_15.5/ dvd</div>

2) Then install the necessary packages:

<div class="clroot">zypper install --allow-vendor-change ffmpeg-4 lame gstreamer-plugins-bad gstreamer-plugins-ugly gstreamer-plugins-ugly-orig-addon gstreamer-plugins-libav libavdevice57 libdvdcss2 vlc-codecs</div>

3) Make sure all your multimedia packages are coming from the Packman Repository:

<div class="clroot">zypper dup --allow-vendor-change --from http://ftp.gwdg.de/pub/linux/misc/packman/suse/openSUSE_Leap_15.5/</div>
