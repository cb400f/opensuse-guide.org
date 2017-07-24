<?php include 'header.php'; ?>
<title>4. Installation - Howto Install openSUSE on Your Computer</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 



<div class="heading1">4. Installation</div>
This is just a brief description of openSUSE installation. For more thorough help see the official documentation.<br /><br />



<div class="heading2">4.1 Before Installation</div>
Before starting there are a few things you should be aware of.<br /><br />



<div class="heading3">4.1.1 System Minimum Requirements</div>
<ul>
    <li><b>CPU:</b> AMD64 or Intel64 processor</li>
    <li><b>RAM:</b> 1 GB physical RAM (2 GB recommended)</li>
    <li><b>Disk Space:</b> 5,0 GB for a normal installation (more recommended)</li>
    <li><b>Sound and Graphics Card:</b> Most modern cards are supported</li>
    </ul>

    
    
<div class="heading3">4.1.2a Burning the ISOs to a DVD</div>
When you burn the downloaded ISO files to a DVD it's important to remember to burn them as ISOs/images with your CD/DVD writer software, or the media won't be bootable.<br /><br /> 



<div class="heading3">4.1.2b Creating a USB stick</div>
The ISO can also be put on an USB stick, see instructions for this on these pages depending on which operating systems you have available:<br />

<ul>
<li> openSUSE or other Linux: <a href="http://en.opensuse.org/SDB:Live_USB_stick" target="_blank">http://en.opensuse.org/SDB:Live_USB_stick</a></li>
<li> Microsoft Windows: <a href="https://en.opensuse.org/SDB:Create_a_Live_USB_stick_using_Windows" target="_blank">https://en.opensuse.org/SDB:Create_a_Live_USB_stick_using_Windows</a></li>
<li> Mac OSX: <a href="https://en.opensuse.org/SDB:Create_a_Live_USB_stick_using_Mac_OS_x" target="_blank">https://en.opensuse.org/SDB:Create_a_Live_USB_stick_using_Mac_OS_x</a></li>
</ul>



<div class="heading3">4.1.3 BIOS Setup</div>
If your computer won't boot from the DVD or USB media, check that the computer BIOS is configured to boot from CD/DVD or USB.<br /><br />



<div class="heading3">4.1.4 Dual Boot (openSUSE and MS Windows on the same computer)</div>
Having openSUSE and MS Windows installed on the same computer is usually fairly simple if MS Windows was installed first. During installation openSUSE will detect MS Windows and the bootloader will display a menu on each startup letting you choose whether to boot openSUSE or MS Windows.<br /><br />

openSUSE needs to be installed on a separate partition/disk. It's recommended to free up space beforehand using a partitioning tool that you're familiar with. But you can also let the openSUSE installer resize your MS Windows partitions - it's strongly recommended to defragment the MS Windows partition before doing so.<br /><br />



<div class="heading3">4.1.5 Connect Network Cable and Turn on Peripherals</div>
If you connect your network cable and turn on your printer and other peripherals before commencing the installation, there's a good chance of them being autodetected and configured.<br /><br />



<div class="heading2">4.2 The Installation Process</div>
When you're ready, insert the DVD or USB stick and (re)start the computer.<br /><br /> 


<div class="heading3">Start Installation</div>
<table>
	<tr>
		<td width="205" valign="top"><a href="images/installation/dvd/grub.png" rel="thumbnail"><img src="images/installation/dvd/grubb.png" alt="grub" class="pic" /></a></td>
		<td valign="top">You're presented with a menu.<br /><br />
		Here you can select your desired language and a few other options, afterwards begin installation.</td>
	</tr>
</table><br />



<div class="heading3">Language, Keyboard and Licence</div>
<table>
	<tr>
		<td width="205" valign="top"><a href="images/installation/dvd/inst-welcome.png" rel="thumbnail"><img src="images/installation/dvd/inst-welcomeb.png" alt="welcome" class="pic" /></a></td>
		<td valign="top">The licence agreement is only to inform you of your rights. It doesn't require your acceptance, since it doesn't limit your use.<br /><br /> 
		Check that language and keyboard layout are as desired.</td>
	</tr>
</table><br />



<div class="heading3">Partitioning</div>
<table>
	<tr>
	  <td width="205" valign="top"><a href="images/installation/dvd/inst-disk.png" rel="thumbnail"><img src="images/installation/dvd/inst-diskb.png" alt="inst-disk" class="pic" /></a></td>
	  <td valign="top">By default openSUSE will propose to create three new partitions / (root) for system files, /home/ for personal files of users and swap which is used as a supplement for RAM, similar to the page file in MS Windows.<br /><br />

	  Don't worry about all the subvolumes created, these are just technicalities of the Btrfs filesystem, and not "real" partitions, that normal users should need to worry about.<br /><br />

	  Always check that the partitioning proposal is what you want, and if you're performing a dual boot installation, pay extra attention, to make sure everything is as desired.<br /><br />

	  Note that Linux labels disks/partitions using the following scheme - <i>sda1</i> is first partition on the first disk, <i>sdb3</i> is the third partition on the second disk, and so forth. Partitions that will be formatted are written in red text.</td>
	</tr>
</table><br />




<div class="heading3">Clock and Time Zone</div>
<table>
	<tr>
		<td width="205" valign="top"><a href="images/installation/dvd/inst-time.png" rel="thumbnail"><img src="images/installation/dvd/inst-timeb.png" alt="inst-time" class="pic" /></a></td>
		<td valign="top">Set the timezone here.<br /><br />If you have only GNU/Linux it's recommended to set the hardware clock to UTC, if you dual boot with MS Windows set it to local time.</td>
	</tr>
</table><br />



<div class="heading3">User Interface</div>
	<table>
	<tr>
		<td width="205" valign="top"><a href="images/installation/dvd/inst-desktop.png" rel="thumbnail"><img src="images/installation/dvd/inst-desktopb.png" alt="inst-desktop" class="pic" /></a></td>
		<td valign="top">Various different graphical user interfaces (desktop environments) exist for GNU/Linux. KDE is preselected and is preferred by about 70% of openSUSE users and is also the focus of this guide. But you can also choose the GNOME or a text based server installation.<br /><br />

		Under "Custom" you can manually select different patterns, including lightweight desktop environments Xfce and LXDE.
	</tr>
</table><br />



<div class="heading3">Create New User</div>
<table>
	<tr>
	<td width="205" valign="top"><a href="images/installation/dvd/inst-user.png" rel="thumbnail"><img src="images/installation/dvd/inst-userb.png" alt="inst-user" class="pic" /></a></td>
	<td valign="top">Now it's time to create your user. Note that by default the root user (administrator) password will be the same as the password for the normal user.<br /><br />

	If you want the added security of a separate root password, consider unchecking that checkbox. You may also want to consider disabling autologin to prevent people from easily accessing your system and data.</td>
	</tr>
</table><br />



<div class="heading3">Installation Settings</div>
<table>
	<tr>
		<td width="205" valign="top"><a href="images/installation/dvd/inst-overview.png" rel="thumbnail"><img src="images/installation/dvd/inst-overviewb.png" alt="inst-overview" class="pic" /></a></td>
		<td valign="top">Double check that everything is as desired - this is the point of no return!</td>
	</tr>
</table><br />



<div class="heading3">Actual Installation</div>
<table>
	<tr>
		<td width="205" valign="top"><a href="images/installation/dvd/inst-inst.png" rel="thumbnail"><img src="images/installation/dvd/inst-instb.png" alt="inst-inst" class="pic" /></a></td>
		<td valign="top">Now the actual installation is performed. When it's done the system will reboot and be ready to use.<br /><br />

Have a lot of fun with openSUSE!


		</td>
	</tr>
</table><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="acquisition.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="kde.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>
