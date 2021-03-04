<?php include 'header.php'; ?>
<title>11. Software Repositories - Adding and Managing Package Repositories</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 



<div class="heading1">11. Software Repositories</div>
As mentioned in the previous chapter, the package manager installs software by fetching packages from software repositories, therefore the software available for easy installation via the package manager depends on the configured repositories.<br /><br /> 

A software repository is a collection of RPM packages (the openSUSE packaging format) and metadata for the available packages. Usually repositories are on online servers, but it can also be on a CD/DVD or on other media.<br /><br />



<div class="heading2">11.1 Managing Repositories</div>
Respositories can be added, removed and configured via YaST, in the module called Software Repositories.<br /><br />

<center><a href="images/screenshots/yast-repos.png" rel="thumbnail"><img src="images/screenshots/yast-reposb.png" alt="repos" class="pic" /></a></center><br />



<div class="heading3">11.1.1 Adding Repositories</div>
The official repositories are pre-configured, but many unofficial repositories exist and can be added too.<br /><br /> 

<div class="note">
<table>
<tbody>
<tr>
<td><img src="images/pics/obs.png" alt="obs" /></td>
<td>Add repositories with care.
<ul>
<li>Unofficial repositories might include experimental packages</li>
<li>Not all repositories are mutually compatible</li>
<li>The risk level of a repository can change over time</li>
<li>Too many repositories makes the package manager slower</li>
</ul>
</td>
</tr>
</tbody>
</table>
</div><br />

The easiest and safest way to add repositories is using the list of online community repositories in YaST. This provides you with a selection of popular and quite safe repositories to choose from:
<div class="path">YaST => Software => Software Repositories => Click on "Add" => Select "Community Repositories" and click "Next"</div><br />

<center><video src="video/repos114.ogv" controls>  

<center><a href="images/screenshots/community-repos.png" rel="thumbnail"><img src="images/screenshots/community-reposb.png" alt="repos" class="pic" /></a></center><br />

<b>Your web browser does not support the HTML5 video element and/or Ogg Theora format.<br />
Try Firefox, Konqueror or Opera.</b><br /><br />

<a href="video/repos-full.ogv">Download video for local viewing (4.3 MB)</a>
</video></center>  <br /><br />

Note that the <i>openSUSE BuildService</i> is a service for the community to build and share packages. <i>openSUSE BuildService repositories are unofficial and unsupported</i>. Use at your own risk.<br /><br />



<div class="heading3">11.1.2 Recommended Repositories</div>
You should always have the four <i>official</i> repositories (which are configured out of the box).<br/>

<ul>
	<li><b>Main Repository (OSS)</b></li>
	<li><b>Main Repository (NON-OSS)</b></li>
	<li><b>Main Update Repository</b></li>
	<li><b>Main Update Repository (NON-OSS)</b></li>
</ul>

Additionally I recommend adding the following <i>unofficial</i> repositories from the Community Repositories list, for having a good balance of software supply and stability for most users.<br />


<ul>
	<li><b>Packman Repository</b></li>
	<!--<li><b>openSUSE BuildService - KDE:Extra</b></li>-->
</ul>

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>Still missing a package?<br /><br />You can search for packages/repositories on the openSUSE BuildService here:<br />
<a href="http://software.opensuse.org/search" target="_blank">http://software.opensuse.org/search</a><br /><br />This package search engine also includes the Packman repository:<br /><a href="http://webpinstant.com" target="_blank">http://webpinstant.com</a><br /><br />Remember to add unofficial repositories with care!</td>
</tr>
</tbody>
</table>
</div><br />



<div class="heading3">11.1.3 Vendor Change Updates</div>
Updating installed packages from one repository to versions from a different repository with a different <i>vendor</i>, is a little bit complicated. Read about it here:<br />
<a href="http://en.opensuse.org/SDB:Vendor_change_update" target="_blank">http://en.opensuse.org/SDB:Vendor_change_update</a><br /><br />

<div class="heading2">11.2 Repository Management in the Terminal</div>
If you wish, you can manage your repositories via a terminal too.<br /><br />

Add a repository with auto-refresh enabled <i>zypper addrepo -f [URL] [Alias]</i>. Example:
<div class="clroot">zypper addrepo -f http://ftp.gwdg.de/pub/linux/misc/packman/suse/openSUSE_Leap_15.2/ packman</div><br />

Disable a repository <i>zypper modifyrepo -d [URL|Alias]</i>. Example:
<div class="clroot">zypper modifyrepo -d Packman</div><br />

Remove a repository <i>zypper removerepo [URL|Alias]</i>. Example:
<div class="clroot">zypper removerepo http://ftp.gwdg.de/pub/linux/misc/packman/suse/openSUSE_Leap_15.2/</div><br />

List configured repositories, showing  details (priorities, URL, etc.):
<div class="cl">zypper repos -d</div><br />

See <i>man zypper</i> for more.
<div class="cl">man zypper</div><br />

Or for help on indvidual commands use for example:
<div class="cl">zypper addrepo --help</div><br />


<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="installpackage.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="windows.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>
