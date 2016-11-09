<?php include 'header.php'; ?>
<title>15. Graphics Drivers - Install Nvidia or ATI/AMD 3D Driver</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 

<div class="heading1">15. Graphics Drivers</div>
Note that there's no need to install the below non-free video drivers, if the free drivers used by default work for your needs.<br /><br />



<!-- nvidia KMPs start -->



<div class="heading2">15.1 Nvidia</div>
This section describes two different ways of installing the proprietary Nvidia graphics driver, either using 1-click installation or using the terminal.<br /><br />

<div class="heading3">15.1.1 Install the Nvidia Driver with 1-Click Installation</div>
Click on the button corresponding to your Nvidia graphics card to install the driver with 1-click install.<br /><br />


This driver covers any Nvidia graphics card from Geforce 400 series and later.<br /><br />
<center><a href="http://opensuse-community.org/nvidia.ymp"><img src="images/oneclick/nvidia_gf400.png" alt="ymp" class="pic" /></a></center><br />

This driver covers any Nvidia graphics card newer than 2008 or so. Including GeForce 8, GeForce 100-, 200- and 300-series.<br /><br />

<center><a href="http://opensuse-community.org/nvidia_gf8.ymp"><img src="images/oneclick/nvidia-gf8.png" alt="ymp" class="pic" /></a></center><br />

This driver covers Nvidia graphics card roughly from 2007 or older. Including GeForce 6 and 7.<br /><br />

<center><a href="http://opensuse-community.org/nvidia-gf6_gf7.ymp"><img src="images/oneclick/nvidia-gf6.png" alt="ymp" class="pic" /></a></center><br />

Afterwards reboot the computer.<br /><br />



<div class="heading3">15.1.2 Install the Nvidia Driver in the Terminal</div>
You can install the Nvidia driver in the terminal. <u>By using this method you don't need to know your graphics card model or series</u>.<br /><br />

First add the repository:
<div class="clroot">zypper addrepo -f http://download.nvidia.com/opensuse/leap/42.2 nvidia</div><br />

The following command should automatically install the correct driver for your card:<br />

<div class="clroot">zypper install-new-recommends</div><br />

When installation is done reboot the computer.<br /><br />



<!-- nvidia KMP end -->
<!-- ati KMP start -->



<div class="heading2">15.2 ATI/AMD</div>
The free software drivers included by default should work pretty well for most. A proprietary driver does exist, but it is no longer being developed by AMD, instead they are working on improving the free drivers. Read more here:<br/>

<a href="https://lizards.opensuse.org/2016/10/15/proprietary-amdati-catalyst-fglrx-15-12-rpms-released-for-leap-42-2/" target="_blank">https://lizards.opensuse.org/2016/10/15/proprietary-amdati-catalyst-fglrx-15-12-rpms-released-for-leap-42-2/</a><br /><br />



<!-- ati KMP end -->



<div class="heading2">15.3 Intel</div>
The 3D drivers for Intel graphics cards are free software, and can therefore be included in openSUSE out of the box. No additional installation or configuration is needed.<br /><br />


<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="browserplugins.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="wlan.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>
