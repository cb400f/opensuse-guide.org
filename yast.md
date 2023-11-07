---
layout: default
title: 9. Administrator Settings (YaST) - Introduction to the YaST Setup Tool
permalink: yast
---

# 9. Administrator Settings (YaST)

YaST (Yet another Setup Tool) is the central tool for system administration. You find YaST in the launch menu in the System category.

{% include screenshot.html image="yast-controlcenter" %}

**Default YaST modules**

In YaST you can perform almost any system task, with powerful graphical modules, e.g.:

- Install and remove software (see next chapter)
- Set up your printer
- Configure the firewall
- Enable and disable system services
- Configure network sharing (samba)
- Format and partition your drives
- Enable NTP daemon
- And much, much more...

**Additional YaST modules**

A lot more YaST modules are available than the ones included in the default installation (read about installing packages in the next chapter). Some notable modules not installed by default are:

- Apache web server (package: yast2-http-server)
- SSH daemon (package: yast2-sshd)
- FTP server (package: yast2-ftp-server)
- NFS server (package: yast2-nfs-server)
- And many more...

{% include tip.html tip="You don't have to use YaST if you don't want to. You can achieve the same things and more using command line tools and manually editing configuration files." %}

## 9.1 YaST in the Terminal

The YaST modules can also be used in a terminal (ncurses mode) - this is very useful for servers with no graphical environment running, for remote access via SSH, or in case your graphical environment fails.

Simply run _yast_ as root in a terminal.

<div class="clroot">yast</div>

{% include screenshot.html image="yast-ncurses" %}

Navigate using arrow keys, Enter and Alt+[highlighted letters] (e.g. Alt+Q to quit).
