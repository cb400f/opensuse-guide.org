<?php include 'header.php'; ?>
<title>Appendix D: History and Background - What is Free Software and Open Source and What is the History of openSUSE</title>
<?php include 'header2.php'; ?>
<?php include 'menu.php'; ?> 

<div class="os1">Appendix D: History and Background</div>
The purpose of this chapter is to give readers some insight into and background knowledge of the history and eco system of GNU/Linux and free/open source software in general.<br /><br />


<div class="os2">D.1 Source Code vs. Binary Machine Code</div>
Computer software is written in various different programming languages. This <i>source code</i> can be written and understood by anyone with the proper training:<br />

<div class="code">#include &lt;iostream.h&gt;<br /><br />

main()<br />
{<br />
    cout &lt;&lt; "Hello World!";<br />
    return 0;<br />
}
</div><br />

The human-readable source code is then compiled into <i>binary machine code</i> that computers can run:<br />

<div class="code">01001000 01100101 01101100 01101100 01101111 00100000 01010111 01101111 01110010 01101100 01100100 00100001 00100000</div><br />

Without access to the source code and permission to modify it, neither you as an individual, nor your community at large, can study how the software works and what it does - let alone change it and improve it - you are completely dependent on the whims of the company/person which does have the source code.<br /><br />


<div class="os2">D.2 Richard Stallman, GNU and Free Software</div>
In 1984 and 1985 respectively, system programmer Richard M. Stallman (RMS), who was increasingly frustrated by the technical and social restrictions proprietary software imposed on him, founded the <a href="http://www.gnu.org/">GNU</a> project (GNU's Not Unix) with the aim to create a free Unix like operating system, and the <a href="http://www.fsf.org" target="_blank">Free Software Foundation (FSF)</a> a foundation to promote free software.<br /><br />

<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><img style="width: 200px; height: 220px;" alt="rms" src="images/pics/rms.jpg" /></div></td>
	</tr>
      	<tr>
		<td class="billedtekst">Richard M. Stallman</td>
	</tr>
</tbody>
</table><br />


Free software doesn't mean free of charge, free software can be commercial. It refers to free as in freedom, specifically defined by the following four fundamental freedoms:<br />

<ul>
<li>(0) The freedom to run the program, for any purpose.</li>
<li>(1) The freedom to study how the program works, and change it to make it do what you wish.</li>
<li>(2) The freedom to redistribute copies so you can help your neighbor.</li>
<li>(3) The freedom to improve the program, and release your improvements (and modified versions in general) to the public, so that the whole community benefits.</li>
</ul>

The freedoms 1 and 3 require access to the source code of the program.<br /><br />


<div class="tip">
<table>
<tbody>
<tr>
<td><img src="images/pics/tip.png" alt="tip" /></td>
<td>If you want to know more about free software, consider downloading this 
<a href="http://audio-video.gnu.org/video/20090122_richard_stallman.ogv" target="_blank">video of Richard M. Stallman speaking</a> (550 MB, Ogg Theora format)</td>
</tr>
</tbody>
</table>
</div><br />

<div class="os3">D.2.1 GNU GPL, Copyleft and Other Free Software Licenses</div>
Any software licence that secures the above mentioned four fundamental freedoms, is considered a free software licence. Dozens and dozens of different free software licenses exist. Free software licences work by building on existing copyright laws to provide users with a lot more freedom and rights than you'd normally have.<br /><br />

The most widely used free software licence by far, is the GNU General Public License (GPL). One of the characteristics of the GNU GPL is that it applies a principle known as <i>copyleft</i>. This means that while you're allowed to modify and redistribute GPL'ed software - these derivative works <u>must</u> be distributed under similar terms - thus ensuring that GPL'ed programs will always remain free software. Non-copyleft licenses are also called <i>permissive</i> licenses, these types of free software licenses allow redistributing the software under different, incompatible licenses - even proprietary ones.<br /><br />


<div class="os2">D.3 Linux and Linus Torvalds</div>
By the late 1980s the GNU project had created an <a href="http://directory.fsf.org/GNU/" target="_blank">almost complete free Unix operating system</a>, but the kernel was causing problems.<br /><br />

In 1991, independentantly of the GNU project, then 22-year old Finnish university student Linus Torvalds decided to write a Unix kernel that he could use at home. Later that year he announced the first release on a newsgroup, using these now immortal words: <i>"...I'm doing a (free) operating system (just a hobby, won't be big and professional like gnu)..."</i>.<br /><br /> 

<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><img style="width: 200px; height: 207px;" alt="linus" src="images/pics/linus.jpg" /></div></td>
	</tr>
      	<tr>
		<td class="billedtekst">Linus Torvalds</td>
	</tr>
</tbody>
</table><br />

The kernel was named Linux and soon it was licenced under the GNU GPL, and people started combining it with the GNU tools. A fully functional, free Unix-like operating system consisting of GNU plus Linux was reality!<br /><br />

Today Linus Torvalds lives in the U.S. and continues to lead development of the Linux kernel - but he's no longer alone, today over a thousand developers contribute code to the kernel every year - some of which are volunteers contributing in their spare time, while others are employed by large corporations, such as IBM, Intel, Novell and Red Hat.<br /><br /> 


<div class="os2">D.4 Open Source</div>
The term <a href="http://opensource.org/" target="_blank">open source</a> was created in 1998, by a group of people who wanted to distance themselves somewhat from the ideological rhetoric of the free software movement for the purpose of making free software more appealing to commercial interests.<br /><br />

The software licences recognised by the Free Software Foundation and the Open Source Initiative are almost all the same, therefore there's very little difference between open source and free software in practice - the differences are almost exclusively on a philosophical and rhetorical level. To bridge the gap between the two camps the term "FOSS" (Free and Open Source Software) is often used.<br /><br />


<div class="os2">D.5 The History of openSUSE</div>
SUSE was founded on September 2, 1992 in Germany, under the name Gesellschaft f&uuml;r Software- und Systementwicklung mbH (S.u.S.E. GmbH), meaning: "Software and System Development, Inc.". The first GNU/Linux distribution (S.u.S.E. Linux 1.0) was released in 1994 - making SUSE one of the oldest existing GNU/Linux distributions. Originally it was merely a German version of an American distribution called Slackware, but later SUSE has become one of the leading distributions. In 2003 SUSE was acquired by Novell.<br /><br />

In 2005 the openSUSE project was started with the goal of opening up development and involve the community more.<br /><br />

In 2010 Novell was acquired by Attachmate. The deal was finalized in April 2011, and one of the first actions of Attachmate was to split SUSE into a separate business unit independant of Novell, and move SUSE headquarters back to Nuremberg, Germany. In 2014 Micro Focus merged with Attachmate, but this did not affect SUSE nor the openSUSE Project.<br /><br />

In 2014 the development branch openSUSE Factory was stabilized enough to become a usable rolling relese distribution, called openSUSE Tumbleweed. openSUSE Tumbleweed forms the base for SUSE Linux Enterprise Server and Desktop (SLES and SLED). This again lead to changes in the stable openSUSE releases and the creation of openSUSE Leap in 2015, which uses SUSE Linux Enterprise for the core system, and has a form of long term support with major yearly service packs and major releases only happening every 3-4 years.<br /><br />


<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
<tbody>
	<tr>
		<td style="width: 25%;"><div style="text-align: center;"><img style="border: 0px solid ; width: 148px; height: 140px;" alt="gnu" src="images/pics/gnu-head.jpg" /></div></td>
	
		<td style="width: 25%;"><div style="text-align: center;"><img style="width: 128px; height: 128px;" alt="tux" src="images/pics/linux.png" /></div></td>

		<td style="width: 25%"><div style="text-align: center;"><img style="width: 120px; height: 141px;" alt="konqui" src="images/pics/konqui.png" /></div></td>	

		<td style="width: 25%"><div style="text-align: center;"><img style="width: 150px; height: 150px;" alt="geeko" src="images/pics/opensuse.jpg" /></div></td>
	</tr>

      	<tr>
		<td class="billedtekst">The GNU project mascot</td>
		<td class="billedtekst">The official mascot of Linux - the penguin Tux</td>
		<td class="billedtekst">The KDE mascot - the dragon Konqui</td>
		<td class="billedtekst">The SUSE mascot - the chameleon named Geeko</td>
	</tr>
</tbody>
</table><br /><br />


<div class="os2">D.6 The GNU/Linux Ecosystem</div><br />

<div class="os3">D.6.1 Distributions</div>
When the Linux kernel and the GNU tools and other free software components from "upstream" are bundled together to form a complete contemporary operating system, it's called a  GNU/Linux <i>distribution</i>. Many distributions exist targetting different types of users and use cases - enterprises, home users, servers, desktops, multimedia centers etc. Some are commercial, others are fully based on the efforts of community volunteers. Besides bundling the software, distributors usually also integrate it, brand it, patch it, provide additional tools developed in-house and so forth. The existence of multiple distributions is only possible because the software components are free software of course.<br /><br />









<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
	
		<td style="width: 50%;"><center><a href="images/pics/ecosystem.png" rel="thumbnail"><img src="images/pics/ecosystemb.png" alt="ecosystem" class="pic" /></a></center><br /></td>			
	</tr>

      	<tr>
		<td class="billedtekst">This figure shows the ecosystem of upstream projects, distributors and end users.</td>
		
	</tr>
</tbody>
</table>
<br />




<div class="os3">D.6.2 Who Develops Free Software and Why?</div>
Many developers are employed by large companies such as IBM, Novell, Red Hat, Google, Mozilla Foundation, KDAB, Intel, AMD, Canonical, Oracle etc. These companies usually have a business model of selling services around free software or selling hardware with free software installed on it. By using free software companies can share the development costs with others.<br /><br />

Also many people are paid to develop free software in other ways, via university work, government sponsorships, donations, students can be paid via the <a href="http://code.google.com/soc" target="_blank">Google Summer of Code</a> project, etc.<br /><br />

However there are also many, many people working on free software in their spare time for nothing. They can have many different motivations.
	<ul>
		<li>They may need a feature or suffer a bug ("scratch your own itch").</li>
		<li>It builds their skills and network and creates job opportunities.</li>
		<li>Programming is fun and challenging.</li>
		<li>There's a lot of recognition and respect to be gained.</li>
		<li>You can work on projects of you own choosing, unlike at your day-job.</li>
		<li>They may think software freedom in itself is important enough to work for.</li>
		<li>They'll take part in an exciting worldwide community.</li>
		<li>Etc.</li>
	</ul>


<div class="os3">D.6.3 Who is Using GNU/Linux?</div>
Many people still perceive GNU/Linux as a small hobbyist operating system - and the marketshare on standard desktop PCs is quite small of course. Nevertheless a marketshare of about one percent, still adds up to millions and millions of people worldwide. No truly reliable measure of the marketshare or total number of users is possible, for something which is usually freely redistributable.<br /><br />

However GNU/Linux is very widespread in other areas. A very large share of web servers and other servers run GNU/Linux. Facebook, Google and Yahoo build their entire infrastructures on GNU/Linux. GNU/Linux has been used everywhere from Antarctica to NASA using it in outer space. GNU/Linux is the preferred operating system for most of the world's <a href="http://www.top500.org/stats" target="_blank">super computers</a>. And GNU/Linux is used <a href="http://linuxdevices.com/" target="_blank">embedded in devices</a> where people often don't even know it's there, such as mobile phones, TVs, e-book-readers, PDAs, routers, hard disk recorders, NAS devices, and more.<br /><br />




<table style="text-align: left; width: 100%;" border="0" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
		<td style="width: 50%;"><div style="text-align: center;"><a href="tweaks.php"><img class="pic" style="width: 32px; height: 32px;" alt="prev" src="images/pics/prev.png" /></a></div></td>
		<td style="width: 50%;"><div style="text-align: center;"><a href="contribute.php"><img class="pic" style="width: 32px; height: 32px;" alt="next" src="images/pics/next.png" /></a></div></td>
	</tr>
</tbody>
</table>

<?php include 'footer.php'; ?>
