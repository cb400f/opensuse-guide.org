<?php include 'header.php'; ?>
<title>5. KDE Workspace - Use and Configure KDE on Desktop or Netbook</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 

<div class="os1">5. KDE Plasma Workspace</div>
The KDE Plasma workspace is one of the first things you'll see when you boot openSUSE Leap for the first time. The desktop workspace consists of the desktop itself, menus, panels, file management and window management.<br /><br />


<div class="os2">5.1 The Desktop</div>
The desktop is not very different from other desktop environments you may be familiar with - you have a panel on the bottom, a launch menu which is opened in the lower left corner.<br /><br />

However, a few things differ significantly from most other desktop environments:
<ul>
<li>KDE uses <i>single click</i> to open and launch things by default</li>
<li>The content of the <i>~/Desktop/</i> folder is not scattered all over the desktop itself, but is instead organized inside a widget called Folder View</li>
<li>By default the applications you have running when you shutdown will be started again in the next session</li>
</ul>


<center><a href="images/screenshots/desktop.png" rel="thumbnail"><img src="images/screenshots/desktopb.png" alt="desktop" class="pic" /></a></center><br />


<div class="os3">5.1.1 The Launch Menu</div>
The launch menu is opened by clicking the icon in the bottom left corner of the screen or pressing Alt+F1. On the bottom there's a search box and at the top left are your favourite applications. You can add and remove applications from favourites by right clicking them.<br /><br />


<center><a href="images/screenshots/launchmenu.png" rel="thumbnail"><img src="images/screenshots/launchmenub.png" alt="launchmenuç" class="pic" /></a></center><br />


You can edit menu entries or add new ones like this:
<div class="sti">Right click the menu icon =&gt; Menu Editor</div><br />

To add a shortcut for an application on the desktop or in the panel you can do this (requires widgets to be unlocked):
<div class="sti">Find the application in the menu => Right click the entry => Click "Add to panel" or "Add to desktop"</div><br />


<div class="os3">5.1.2 Widgets</div>
The KDE Plasma Desktop is centered around widgets and containments. The desktop and the panel are containments in which widgets can be placed. The menu, the system tray, the folderview on the desktop are simply widgets. Lots and lots of other widgets are available.<br /><br />

To manipulate widgets the widgets need to be unlocked.
<div class="sti">Right click the desktop => Either "Lock Widgets" or "Unlock Widgets".</div><br />

It's very useful to keep the widgets locked when you are not configuring your desktop, this way you don't get things popping up when you hover over them and you don't risk accidentally moving or removing widgets.<br /><br />

To add widgets:
<div class="sti">Right click the desktop => Add widgets</div><br />


<center><a href="images/screenshots/widgets.png" rel="thumbnail"><img src="images/screenshots/widgetsb.png" alt="widgets" class="pic" /></a></center><br />


To add widgets to the panel, drag them from widget browser to the panel.<br /><br />

When your widgets are covered by windows you can view them by pressing <i>Ctrl+F12</i> to open the widget dashboard.<br /><br />


<div class="os3">5.1.3 Virtual Desktops</div>
To avoid your desktop getting cluttered with windows you can use virtual desktops to organize your applications and be more productive. In the panel you'll find a small grid, this is the desktop pager, use it to switch between your virtual desktops.<br /><br />


<center><img src="images/screenshots/pager.png" alt="pager" class="pic" /></center><br />

You can also use the desktop grid effect to get a big overview of your virtual desktops, try pressing <i>Ctrl+F8</i> (requires desktop effects support, see the paragraph on this topic below).<br /><br />

<!--
<div class="os3">5.1.4 Activities</div>
Next to the virtual desktop pager is a cube with three little circles, clicking here opens the Activity Manager. Activities are different desktops which can be configured for specific tasks/activities with different widgets, different wallpapers and automatically starting certain applications.<br /><br />

This enables you to quickly and easily switch between desktops (activities) configured for different situations, for example you might set up one activity for when you're at work, a different one for when you're at home, a third one for when you're doing photo editing and a fourth one for when you're doing public presentations and so forth, and you can switch between these completely different desktops with just a click or two. The toolbox in the top right corner of the screen displays the name of the currently used activity.<br /><br />

The Activity Manager lets you create activities and switch between them. Additionally you can perform various tasks by clicking the little overlay icons on each activity to start or stop the activities, delete them or configure them.<br /><br />


<center><a href="images/screenshots/activities.png" rel="thumbnail"><img src="images/screenshots/activitiesb.png" alt="widgets" class="pic" /></a></center><br />
-->


<div class="os2">5.2 File Management</div>
The default file manager is Dolphin.You can find it as one of the favourites in the launch menu or in the "System" category. It should be very intuitive. USB sticks and other removable media will automatically appear in the left pane of Dolphin.<br /><br />


<center><a href="images/screenshots/dolphin.png" rel="thumbnail"><img src="images/screenshots/dolphinb.png" alt="dolphin" class="pic" /></a></center><br />


<div class="os2">5.3 KDE Systemsettings</div>
The global KDE settings are gathered conveniently in one place. Here you can configure almost anything related to the KDE workspace including mouse behaviour, default applications, file associations etc. You can also find Systemsettings as one of the favourites in the launch menu.<br /><br /> 


<center><a href="images/screenshots/systemsettings.png" rel="thumbnail"><img src="images/screenshots/systemsettingsb.png" alt="systemsettings" class="pic" /></a></center><br />


<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>Don't confuse the KDE control center used for personal configuration of the KDE Workspace and KDE applications with the YaST control center used for administrator settings on a deeper level of the system (See later chapter about YaST).</td>
</tr>
</tbody>
</table>
</div><br />


<div class="os2">5.4 System Activity / Task List</div>
Naturally KDE also has a tool to watch running processes and usage of system ressources. Simply press <i>Ctrl+Esc</i> to bring up the system activity window.<br /><br />

<center><a href="images/screenshots/systemactivity.png" rel="thumbnail"><img src="images/screenshots/systemactivityb.png" alt="systemactivity" class="pic" /></a></center><br />

For an advanced and customizable system monitor, including network graphs etc. run the program <i>ksysguard</i><br /><br />


<div class="os2">5.5 Desktop Effects</div>
The KDE window manager has built-in support for 3D desktop effects. A basic, unobtrusive selection of effects will be enabled out of the box if you have the proper hardware and driver support in place. Try pressing <i>Ctrl+F8</i> or <i>Ctrl+F9</i> for example.<br /><br />

You can disable or enable other/more effects in Systemsettings.<br /><br />

<center><a href="images/screenshots/effects.png" rel="thumbnail"><img src="images/screenshots/effectsb.png" alt="effects" class="pic" /></a></center><br />

The keyboard shortcut to temporarily toggle desktop effects on/off is <i>Alt+Shift+F12</i>.<br /><br />


<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="installation.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="apps.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>