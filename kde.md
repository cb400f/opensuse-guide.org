---
layout: default
title: 5. KDE Workspace - Use and Configure KDE on Desktop or Netbook
permalink: kde
---

# 5. KDE Plasma Workspace

The KDE Plasma workspace is one of the first things you'll see when you boot openSUSE Leap for the first time. The desktop workspace consists of the desktop itself, menus, panels, file management and window management.

The KDE Plasma Workspace is very highly configurable. If there is something you don't like, you can almost certainly configure it to your liking. It is also extremely feature rich, mentioned below are just the most basic features.

## 5.1 The Desktop

The desktop is not very different from other desktop environments you may be familiar with - you have a panel on the bottom, a launch menu which is opened in the lower left corner.

However, a few things differ significantly from most other desktop environments:

- KDE uses _single click_ to open and launch things by default
- By default the applications you have running when you shutdown will be started again in the next session

{% include screenshot.html image="desktop" %}

### 5.1.1 The Launch Menu

The launch menu is opened by clicking the icon in the bottom left corner of the screen or pressing the Super key or Alt+F1. If you start typing a search field will appear on the top. You can add and remove applications to/from favourites by right clicking items in the menu.

{% include screenshot.html image="launchmenu" %}

You can edit menu entries or add new ones like this:

<div class="path">Right click the menu icon =&gt; Edit Applications...</div>

To add a shortcut for an application on the desktop or in the panel you can do this (requires widgets to be unlocked):

<div class="path">Find the application in the menu => Right click the entry => Click "Add to panel" or "Add to desktop"</div>

### 5.1.2 Virtual Desktops

To avoid your desktop getting cluttered with windows you can use virtual desktops to organize your applications and be more productive. In the panel you'll find a small grid, this is the desktop pager, use it to switch between your virtual desktops.

<center><img src="images/screenshots/pager.png" alt="pager" class="pic" /></center>

You can also use the desktop grid effect to get a big overview of your virtual desktops, try pressing _Ctrl+F8_ (requires desktop effects support, see the paragraph on this topic below).

## 5.2 File Management

The default file manager is Dolphin.You can find it as one of the favourites in the launch menu or in the "System" category. It should be very intuitive. USB sticks and other removable media will automatically appear in the left pane of Dolphin.

<div class="path">Launch Menu => System => Dolphin</div>

{% include screenshot.html image="dolphin" %}

## 5.3 Configure Desktop (KDE Systemsettings)

The global KDE settings are gathered conveniently in one place. Here you can configure almost anything related to the KDE Plasma workspace including mouse behaviour, default applications, file associations etc.

<div class="path">Launch Menu => Settings => Configure Desktop</div>

You can also find Configure Desktop (systemsettings) as one of the favourites in the launch menu.

{% include screenshot.html image="systemsettings" %}

{% include tip.html tip="Don't confuse the KDE control center used for personal configuration of the KDE Workspace and KDE applications with the YaST control center used for administrator settings on a deeper level of the system (See later chapter about YaST)." %}

## 5.4 System Activity / Task List

Naturally KDE also has a tool to watch running processes and usage of system ressources. Simply press _Ctrl+Esc_ to bring up the system activity window.

{% include screenshot.html image="systemactivity" %}

For an advanced and customizable system monitor, including network graphs etc. run the program _ksysguard_

## 5.5 Widgets

The KDE Plasma Desktop is centered around widgets and containments. The desktop and the panel are containments in which widgets can be placed. The menu, the system tray etc. are simply widgets. Lots and lots of other widgets are available.

To add widgets:

<div class="path">Right click the desktop => Add widgets => Drag widgets to the desktop or panel</div>

To configure, move, resize widgets etc., click to open the toolbox in the top right corner of the desktop. This requires widgets to be unlocked.

<div class="path">Right click the desktop => Either "Lock Widgets" or "Unlock Widgets".</div>

{% include screenshot.html image="widgets" %}

## 5.6 Desktop Effects

The KDE window manager has built-in support for 3D desktop effects. A basic, unobtrusive selection of effects will be enabled out of the box if you have the proper hardware and driver support in place. Try pressing _Ctrl+F8_ or _Ctrl+F9_ for example.

You can disable or enable other/more effects in Systemsettings.

{% include screenshot.html image="effects" %}

The keyboard shortcut to temporarily toggle desktop effects on/off is _Alt+Shift+F12_.
