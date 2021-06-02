<?php include 'header.php'; ?>
<title>12. MS Windows Interoperability - Using openSUSE With Windows Network, Documents and Running MS Windows Applications</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 



<div class="heading1">12. MS Windows Interoperability</div>
The PC world is dominated by Microsoft, and they're not exactly known for making interoperability easy. Despite this, it's possible to interoperate fairly seamlessly in most cases. This chapter addresses the most common issues.<br /><br />



<div class="heading2">12.1 Office Documents</div>
LibreOffice defaults to the Open Document Format (*.odt, *.ods, *.odp, etc.) which is an open standard. This format is partially supported by Microsoft Office >= 2007 Service Pack 2. Or you can suggest to your MS Windows and Mac OSX using contacts to install LibreOffice, as it's freely available for those platforms too.<br /><br />

LibreOffice can also read and write the Microsoft Office formats (*.doc, *.xls,*.ppt, *.docx, *.xlsx, *.pptx etc.) quite well - as well as a wide range of other formats.<br /><br />

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>If you come across Microsoft documents that LibreOffice doesn't render well, consider trying if you have better luck with the Calligra suite.</td>
</tr>
</tbody>
</table>
</div><br />



<div class="heading2">12.2 Windows Network</div>
For sharing resources on a local network with MS Windows machines the Samba service is used.<br /><br />



<div class="heading3">12.2.1 Accessing Shares</div>
No configuration is needed to access files shared by others. Simply:
<div class="path">Launch the Dolphin file manager => Click the location bar or press Ctrl+L for an editable location bar => Enter 'smb://[ip-address]'</div><br />

<center><a href="images/screenshots/smb-dolph.png" rel="thumbnail"><img src="images/screenshots/smb-dolphb.png" alt="smb-dolphin" class="pic" /></a></center><br />

If you don't know the IP-address of the share you want to access, you can <i>browse</i> the local network by simply entering <i>smb:/</i> in the Dolphin location bar. However, this will only work if you configure or (temporarily) disable the firewall first. More instructions coming soon...<br /><br />


<div class="heading3">12.2.2 Sharing Your Files</div>
To share <i>your</i> files with MS Windows users, Mac OSX users or other GNU/Linux users on the local network you must configure the Samba Server (make sure the packages <i>yast2-samba-server</i> and <i>samba</i> are installed). You only need to perform the first three steps the first time you want share a folder.<br /><br />

<b>1) </b><br />
Open the YaST Samba Server module.
<div class="path">YaST =&gt; Network Services  =&gt; Samba Server</div><br />

<center><a href="images/screenshots/samba-server.png" rel="thumbnail"><img src="images/screenshots/samba-serverb.png" alt="samba" class="pic" /></a></center><br />

<b>2) </b><br />
In the tab <i>Start-Up</i> select whether to autostart the Samba service during boot and whether to open the firewall ports required.<br /><br />

<b>3) </b><br />
Go to the <i>Shares</i> tab, check the options <i>Allow Users to Share Their Directories</i> and <i>Allow Guest Access</i>. In the <i>Identity</i> tab you can configure your workgroup and share name.<br /><br />

<b>4) </b><br />
Add shares by clicking the "Add" button and specifying the directories you want to share.<br /><br />



<div class="heading2">12.3 Running MS Windows Applications</div>
High quality, native GNU/Linux applications exist for almost any purpose, but it's possible that you're dependent on a MS Windows-only application for some job. These are your options in such a case.<br /><br />

<div class="note">
<table>
<tbody>
<tr>
<td><img src="images/pics/obs.png" alt="obs" /></td>
<td>You should only run non-native applications as a last resort. Apps work better in their native environment.</td>
</tr>
</tbody>
</table>
</div><br />



<div class="heading3">12.3.1 Wine</div>
Wine (Wine Is Not an Emulator) is an application that enables you to run many MS Windows applications, you can install wine with YaST or zypper.

Wine is a command line application, the syntax is:
<div class="cl">wine /path/to/setup.exe</div><br />

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>The package <a href="http://sourceforge.net/projects/q4wine/" target="_blank">q4wine</a> provides a graphical interface for some features of Wine.</td>
</tr>
</tbody>
</table>
</div><br />

The Wine project keeps a database for sharing experiences of running applications, see:<br />
<a href="http://appdb.winehq.org/appbrowse.php" target="_blank">http://appdb.winehq.org/appbrowse.php</a><br /><br />



<div class="heading3">12.3.2 CrossOver</div>
CrossOver is not gratis. It's specialised in running a select few of the major MS Windows applications - mostly office related.<br />
<a href="https://www.codeweavers.com/products/cxlinux/" target="_blank">https://www.codeweavers.com/products/cxlinux/</a><br /><br />



<div class="heading3">12.3.3 Dual Boot</div>
As mentioned in the <i>Installation</i> chapter, it's relatively simple to run GNU/Linux and MS Windows on the same computer. If you only need a few applications that you rarely use, maybe it's worth it to reboot into MS Windows now and then, when you need to use these particular apps.<br /><br />


<div class="heading3">12.3.4 Virtualisation</div>
It's possible to run MS Windows on top of GNU/Linux inside a <i>virtual machine</i>, using software such as VirtualBox, KVM, Xen or VMware. This is somewhat advanced, and requires some computer power.<br /><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="repositories.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="codecs.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>
