<?php include 'header.php'; ?>
<title>Appendix B: Games - Playing Games on openSUSE</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 



<div class="heading1">Appendix B: Games</div>
Not all major, mainstream games run natively on GNU/Linux, but there are still plenty of gaming options.<br /><br />

<center><img src="images/pics/spil.jpg" alt="spil" class="pic" /></center>



<div class="heading2">B.1 Native GNU/Linux Games</div><br />



<div class="heading3">B.1.1 openSUSE Build Service Games Repository</div>
Some games are included in the official openSUSE repositories, but the Games repository on the openSUSE Build Service includes a lot more games. You can easily add this repository via the list of Community Repositories as described in the chapter about <a href="repositories.php">Software Repositories</a><br /><br />

Or add the games repository using the command line:
<div class="clroot">zypper addrepo -f http://download.opensuse.org/repositories/games/openSUSE_Leap_15.0/ games</div><br />



<div class="heading3">B.1.2 Steam Gaming Platform and Store</div>
The <a href="http://store.steampowered.com/browse/linux/" target="_blank">Steam gaming platform and store</a> is available for GNU/Linux.You can find packages of it <a href="http://software.opensuse.org/package/steam" target="_blank">here</a><br /><br />



<div class="heading3">B.1.3 Desura</div>
The Desura distribution service for gamers provides easy access to non-free indie games, see:<br />
<a href="http://www.desura.com" target="_blank">http://www.desura.com</a><br /><br />



<div class="heading3">B.1.4 Other GNU/Linux Gaming Resources</div>
Linux Game Publishing buy titles and port them to GNU/Linux, see:<br />
<a href="http://www.linuxgamepublishing.com" target="_blank">http://www.linuxgamepublishing.com</a><br /><br />

Lots and lots more of free and non-free games exist - some small and simple, others quite big, and many very good. Check out some of these sites:<br />

<a href="http://www.tuxgames.com/" target="_blank">http://www.tuxgames.com/</a><br />
<a href="http://www.penguspy.com/" target="_blank">http://www.penguspy.com/</a><br />
<a href="http://www.lgdb.org/" target="_blank">http://www.lgdb.org/</a><br />
<a href="http://www.linuxgamingworld.com/" target="_blank">http://www.linuxgamingworld.com/</a><br /><br />



<div class="heading2">B.2 Running MS Windows Games</div>
Some software available for GNU/Linux allows you to run games developed for MS Windows on GNU/Linux - ease of use and success rate may vary - however, the more popular the game, the more likely it is to be supported.<br /><br />



<div class="heading3">B.2.1 Wine</div>
Wine (Wine Is Not an Emulator) is the first option, it's free software installable via the package manager. See the Wine app database for information on running individual games:<br />
<a href="http://appdb.winehq.org/appbrowse.php?iCatId=2" target="_blank">http://appdb.winehq.org/appbrowse.php?iCatId=2</a><br /><br />

Wine is a command line application, the syntax is:
<div class="cl">wine /path/to/setup.exe</div><br />



<div class="heading3">B.2.2 PlayOnLinux</div>
<a href="http://www.playonlinux.com/" target="_blank">PlayOnLinux</a> is based on Wine and lets you easily install and use (some) MS Windows Games. You can find packages of PlayOnLinux in the above mentioned Games repository.<br /><br />



<div class="heading3">B.2.3 CrossOver Games</div>
A second option is CrossOver Games which is an effort based on Wine. See:<br />
<a href="https://www.codeweavers.com/products/cxgames/" target="_blank">https://www.codeweavers.com/products/cxgames/</a><br /><br />



<div class="heading2">B.3 Emulators</div>
Numerous emulators exist, making it possible to run many old classic games of other platforms on GNU/Linux. For example:<br />

<ul>
  <li>Amiga (UAE)</li>
  <li>Arcade (MAME)</li>
  <li>Atari (Stella, Steem)</li>
  <li>Commodore 64/128 (VICE)</li>
  <li>MS DOS (DOSBox, DOSEMU)</li>
  <li>Nintendo (infones, bsnes, nestopia)</li>
  <li>Play Station (pcsx, pcsx2)</li>
  
</ul>

<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>Usually you can only do this legally, if you own the original hardware/have a licence for it.</td>
</tr>
</tbody>
</table>
</div><br />



<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="help.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="under.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>
