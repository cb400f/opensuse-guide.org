---
layout: default
title: 12. MS Windows Interoperability - Using openSUSE With Windows Network, Documents and Running MS Windows
permalink: windows
---

# 12. MS Windows Interoperability

The PC world is dominated by Microsoft, and they're not exactly known for making interoperability easy. Despite this, it's possible to interoperate fairly seamlessly in most cases. This chapter addresses the most common issues.

## 12.1 Office Documents

LibreOffice defaults to the Open Document Format (*.odt, *.ods, *.odp, etc.) which is an open standard. This format is partially supported by Microsoft Office >= 2007 Service Pack 2. Or you can suggest to your MS Windows and Mac OSX using contacts to install LibreOffice, as it's freely available for those platforms too.

LibreOffice can also read and write the Microsoft Office formats (*.doc, *.xls, *.ppt, *.docx, *.xlsx, *.pptx etc.) quite well - as well as a wide range of other formats.

{% include tip.html tip="If you come across Microsoft documents that LibreOffice doesn't render well, consider trying if you have better luck with the Calligra suite." %}

## 12.2 Windows Network

For sharing resources on a local network with MS Windows machines the Samba service is used.

### 12.2.1 Accessing Shares

No configuration is needed to access files shared by others. Simply:

<div class="path">Launch the Dolphin file manager => Click the location bar or press Ctrl+L for an editable location bar => Enter 'smb://[ip-address]'</div>

{% include screenshot.html image="smb-dolph" %}

If you don't know the IP-address of the share you want to access, you can _browse_ the local network by simply entering _smb:/_ in the Dolphin location bar. However, this will only work if you configure or (temporarily) disable the firewall first. More instructions coming soon...

### 12.2.2 Sharing Your Files

To share _your_ files with MS Windows users, Mac OSX users or other GNU/Linux users on the local network you must configure the Samba Server (make sure the packages _yast2-samba-server_ and _samba_ are installed). You only need to perform the first three steps the first time you want share a folder.

**1)** Open the YaST Samba Server module.

<div class="path">YaST =&gt; Network Services  =&gt; Samba Server</div>

{% include screenshot.html image="samba-server" %}

**2)** In the tab _Start-Up_ select whether to autostart the Samba service during boot and whether to open the firewall ports required.

**3)** Go to the _Shares_ tab, check the options _Allow Users to Share Their Directories_ and _Allow Guest Access_. In the _Identity_ tab you can configure your workgroup and share name.

**4)** Add shares by clicking the "Add" button and specifying the directories you want to share.

## 12.3 Running MS Windows Applications

High quality, native GNU/Linux applications exist for almost any purpose, but it's possible that you're dependent on a MS Windows-only application for some job. These are your options in such a case.

{% include note.html note="You should only run non-native applications as a last resort. Apps work better in their native environment." %}

### 12.3.1 Wine

Wine (Wine Is Not an Emulator) is an application that enables you to run many MS Windows applications, you can install wine with YaST or zypper.

Wine is a command line application, the syntax is:

<div class="cl">wine /path/to/setup.exe</div>

{% include tip.html tip="The package [q4wine](http://sourceforge.net/projects/q4wine/) provides a graphical interface for some features of Wine." %}

The Wine project keeps a database for sharing experiences of running applications, see:

<http://appdb.winehq.org/appbrowse.php>

### 12.3.2 CrossOver

CrossOver is not gratis. It's specialised in running a select few of the major MS Windows applications - mostly office related.

<https://www.codeweavers.com/products/cxlinux/>

### 12.3.3 Dual Boot

As mentioned in the _Installation_ chapter, it's relatively simple to run GNU/Linux and MS Windows on the same computer. If you only need a few applications that you rarely use, maybe it's worth it to reboot into MS Windows now and then, when you need to use these particular apps.

### 12.3.4 Virtualisation

It's possible to run MS Windows on top of GNU/Linux inside a _virtual machine_, using software such as VirtualBox, KVM, Xen or VMware. This is somewhat advanced, and requires some computer power.
