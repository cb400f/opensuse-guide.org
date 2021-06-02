<?php include 'header.php'; ?>
<title>10. Installing Software - Install Programs With the Package Manager</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 



<div class="heading1">10. Installing Software</div>
Software installation is generally incredibly easy on openSUSE. There's a package manager, which lets you install and remove packages very easily - it's comparable to the app stores found on many modern smart phones.<br /><br />



<div class="heading2">10.1 Using the package manager</div>
Simply open YaST Software Management.<br /><br />

<center><video src="video/installpackage114.ogv" controls>  

<center><a href="images/screenshots/sw-single.png" rel="thumbnail"><img src="images/screenshots/sw-singleb.png" alt="sw-single" class="pic" /></a></center><br />

<b>Your web browser does not support the HTML5 video element and/or Ogg Theora format.<br />
Try Firefox, Konqueror or Opera.</b><br /><br />

<a href="video/installpackage-full.ogv">Download video for local viewing (3.0 MB)</a>
</video></center>  <br /><br />

Now search for the package you want, select it for installation and click Accept. The package manager will then fetch the RPM package from your configured software repositories - and install it including any dependencies. After installation is complete the application should appear in the launch menu (unless it's a command line program).<br /><br />

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>The availability of software packages in the package manager depends on the configured <i>software repositories</i>. Read about software repositories in the next chapter.</td>
</tr>
</tbody>
</table>
</div><br />



<div class="heading3">10.1.1 Using 1-click Installation</div>
When browsing openSUSE related websites, you're likely to come across buttons such as this one:<br /><br />

<center><img class="pic" alt="oneclick" src="images/pics/oneclick.png" /></center><br />

1-click installation (also referred to as "Direct Install") simply automates the process of adding one or more software repositories to the package manager and installing one or more RPM packages. Therefore 1-click installation <i>should be used with the same care</i> as manually adding unofficial repositories (see the next chapter for more on software repositories).<br/><br />



<div class="heading2">10.2 Other Installation Methods</div>
Most users will find everything they need and more in the package manager - especially if a few additional software repositories are added (see next chapter). But not all software is packaged and provided via repositories, and non-free software usually can't be legally redistributed via the package manager because of license restrictions.<br /><br /> 

In these cases you'll need to go to the developer/vendor website and download and install the software manually - but <b>always</b> look for an openSUSE package in repositories first - and make sure you only download and install software from trusted sources.<br /><br />



<div class="heading3">10.2.1 RPM file</div>
With a bit of luck the developer/vendor website will have an RPM file for openSUSE. To install a single, downloaded RPM file:
<div class="path">Open the Dolphin file manager =&gt; Navigate to the RPM file =&gt; Right Click it => Open With... => Install/Remove Software</div><br />

<div class="note">
<table>
<tbody>
<tr>
<td><img src="images/pics/obs.png" alt="obs" /></td>
<td>Only install RPM files that are built specifically for (your version of) openSUSE.</td>
</tr>
</tbody>
</table>
</div><br />



<div class="heading3">10.2.2 Tarball</div>
If the website doesn't have an RPM for openSUSE, it will most likely have a so-called <i>tarball</i>. Tarballs (*.tar.gz, *.tar.bz2) are simply compressed archives similar to ZIP and RAR files. To uncompress a tarball:
<div class="path">Open the Dolphin file manager =&gt; Navigate to the tarball =&gt; Right click =&gt; Extract Archive</div><br />

The tarball might contain binaries that just need to be run, or it might contain source code which needs to be compiled to run on your system - this can be very complicated, and requires you to first install various developer tools. There's no one standard way to install tarball content, but instructions should always be included in the tarball in files called INSTALL, README or similar - or you should be able to find installation instructions on the website where you downloaded the tarball.<br /><br />



<div class="heading2">10.3 Package Management in the Terminal</div>
If you wish, you can install and remove packages via a terminal too.<br /><br />

To search for a package run <i>zypper search [search term]</i>. Example:
<div class="cl">zypper search thunder</div><br />

To install a package run <i>zypper install [package name]</i>. Example:
<div class="clroot">zypper install MozillaThunderbird</div><br />

To remove a package run <i>zypper remove [package name]</i>. Example:
<div class="clroot">zypper remove PackageKit</div><br />

See <i>man zypper</i> for more.
<div class="cl">man zypper</div><br />

Or for help on indvidual commands use for example:
<div class="cl">zypper install --help</div><br />



<div class="heading3">10.3.1 Using 1-click in the Terminal</div>
You can actually use 1-click installation in the terminal too, the syntax is <i>OCICLI [URL]</i>, Example:
<div class="clroot">OCICLI http://opensuse-community.org/nvidia.ymp</div><br />



<div class="heading3">10.3.2 Manually downloaded RPM file</div>
To install a manually downloaded RPM file, run:
<div class="clroot">zypper install /path/to/manually/downloaded.rpm</div><br />



<div class="heading3">10.3.3 RPM Queries</div>
You can get a lot of useful information about installed packages from the RPM database very easily.<br /><br />

Check which version is installed. Example:
<div class="cl">rpm -q MozillaFirefox</div><br />

List the files which are installed by a package, and where. Example:
<div class="cl">rpm -ql amarok</div><br />

Find out which package a certain file belongs to. Example:
<div class="cl">rpm -qf /usr/bin/firefox</div><br />

Get various information about a package, including changelog. Example:
<div class="cl">rpm -qi --changelog MozillaFirefox</div><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="yast.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="repositories.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>
