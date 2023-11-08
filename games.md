---
layout: default
title: "Appendix B: Games - Playing Games on openSUSE"
permalink: games
---

# Appendix B: Games

Not all major, mainstream games run natively on GNU/Linux, but there are still plenty of gaming options.

{% include pic.html src="spil.jpg" %}

## B.1 Native GNU/Linux Games

### B.1.1 openSUSE Build Service Games Repository

Some games are included in the official openSUSE repositories, but the Games repository on the openSUSE Build Service includes a lot more games. You can easily add this repository via the list of Community Repositories as described in the chapter about [Software Repositories](repositories).

Or add the games repository using the command line:

<div class="clroot">zypper addrepo -f http://download.opensuse.org/repositories/games/openSUSE_Leap_15.5/ games</div>

### B.1.2 Steam Gaming Platform and Store

The [Steam gaming platform and store](http://store.steampowered.com/browse/linux/) is available for GNU/Linux. You can find packages of it [here](http://software.opensuse.org/package/steam).

### B.1.3 Desura

The Desura distribution service for gamers provides easy access to non-free indie games, see:

<http://www.desura.com>

### B.1.4 Other GNU/Linux Gaming Resources

Linux Game Publishing buy titles and port them to GNU/Linux, see:

<http://www.linuxgamepublishing.com>

Lots and lots more of free and non-free games exist - some small and simple, others quite big, and many very good. Check out some of these sites:

<http://www.tuxgames.com/>

<http://www.penguspy.com/>

<http://www.lgdb.org/>

<http://www.linuxgamingworld.com/>

## B.2 Running MS Windows Games

Some software available for GNU/Linux allows you to run games developed for MS Windows on GNU/Linux - ease of use and success rate may vary - however, the more popular the game, the more likely it is to be supported.

### B.2.1 Wine

Wine (Wine Is Not an Emulator) is the first option, it's free software installable via the package manager. See the Wine app database for information on running individual games:

<http://appdb.winehq.org/appbrowse.php?iCatId=2>

Wine is a command line application, the syntax is:

<div class="cl">wine /path/to/setup.exe</div>

### B.2.2 PlayOnLinux

[PlayOnLinux](http://www.playonlinux.com/) is based on Wine and lets you easily install and use (some) MS Windows Games. You can find packages of PlayOnLinux in the above mentioned Games repository.

### B.2.3 CrossOver Games

A second option is CrossOver Games which is an effort based on Wine. See:

<https://www.codeweavers.com/products/cxgames/>

## B.3 Emulators

Numerous emulators exist, making it possible to run many old classic games of other platforms on GNU/Linux. For example:

- Amiga (UAE)
- Arcade (MAME)
- Atari (Stella, Steem)
- Commodore 64/128 (VICE)
- MS DOS (DOSBox, DOSEMU)
- Nintendo (infones, bsnes, nestopia)
- Play Station (pcsx, pcsx2)

{% include tip.html tip="Usually you can only do this legally, if you own the original hardware/have a licence for it." %}
