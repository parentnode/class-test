<!DOCTYPE html>
<html>
<head>
	<title>Software Licenses</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div id="page">
	<div id="header">
		<h2>Guide to KBHff Digital</h2>
	</div>
	<div id="content">

		<div class="section">
			<h1>Software license</h1>
		</div>

		<div class="section">
			<h2>Introduction</h2>
			<p>In the first week of the Holistic Web Development Course, we discussed software licenses: what open- and closed-source means, what the pros and cons of different license types are and what license type we should recommend for the KBHFF project. This page outlines our findings.</p>
		</div>

		<div class="section">
			<h2>Understanding license types</h2>
			<h3>What is opensource?</h3>
			<p>"Open Source Software is software that can be freely used, changed, and shared (in modified or unmodified form) by anyone." The Open Source Software term was coined by <a href="https://opensource.com/article/18/2/coining-term-open-source-software">Christine Peterson</a> in 1998.</p>
			<p>Closed source is the opposite: software whose code is not published or otherwise made publicly available.</p>
			<img src="opensource.jpg" class="fullwidth">
			<h3>Examples of open source licenses</h3>
			<p>We looked at a number of different open source licenses. You can read further about them here:</p>
			<ul>
				<li><a href="https://www.gnu.org/licenses/gpl.html">The GNU General Public License (GPL)</a> is a "copyleft" form of opensource licence which allows anyone to access and modify source code and use the (modified or otherwise) source code for either commercial or non-commercial purposes. Any uses of the software/code must also be put into the public domain under the same conditions (i.e. they must also allow further modification).</li>
				<li> <a href="https://www.gnu.org/licenses/lgpl.html">The GNU Lesser General Public License (LGPL)</a> is less restrictive than the GPL license because it allows software licensed under LGPL to be used in or by closed source software, as long as the original LGPL-licensed software remains in the public domain. Unlike in the GPL, the closed source software will not need to be made open source, even though it utilises some software licensed under LGPL.</li>
				<li> <a href=https://en.wikipedia.org/wiki/Permissive_software_licence>Permissive Licenses</a>, such as the MIT license, Apache license and Apple Public Source Licence, allow any use of the software and source code, including modifying the original source code and releasing the result under a closed source licence.</li>
			</ul>
			<p>Looking for different kinds of open source software on your computers showed that most of the open source software had been installed by the user. However, it was interesting to find that notepad.exe is in fact open source. There are more examples deeper in the operating systems, but we also see that the adoption of open source projects is done when it is in the interest of the software producer and less so as an act of idealism. We won’t find any GPL licensed software embedded in the operating system, as this would then require the whole operating system to be GPL’d. The exercise also showed that it can sometimes be very hard to identify the license of an application.</p>
			<p>A good example of open source software is the Adblock browser extension. In particular when it comes to browser extensions, which essentially have the power to monitor every move you make on the internet and sell your private data, the open source aspect is important, as that is the only way to scrutinise the source code and ensure your privacy.</p>
			<h3>Further reading</h3>
			<p>In addition to the links already provided, we have collated some relevant links where you can read more about different license types:</p>
				<ul>
					<li><a href="https://opensource.org/">Open Source Initiative (OSI)</a>
						<blockquote cite="https://opensource.org/">
							"As a global non-profit, the OSI protects and promotes open source software, development and communities, championing software freedom in society through education, collaboration, and infrastructure, stewarding the Open Source Definition (OSD), and preventing abuse of the ideals and ethos inherent to the open source movement."
						</blockquote></li>
					<li><a href="https://creativecommons.org/">Creative Commons</a>
						<blockquote cite="https://creativecommons.org/about/">
							"Creative Commons provides free, easy-to-use copyright licenses to make a simple and standardized way to give the public permission to share and use [others'] creative work – on conditions of the [author's] choice."
						</blockquote></li>
					<li><a href="https://www.fsf.org/">Free Software Foundation</a>
						<blockquote cite="https://www.fsf.org/about/">
							"The Free Software Foundation (FSF) is a nonprofit with a worldwide mission to promote computer user freedom. We defend the rights of all software users."
						</blockquote></li>
					<li><a href="https://tldrlegal.com/">Software Licenses in Plain English</a>: Summarises popular software license "at-a-glance".</li>
				</ul>
		</div>

		<div class="section">
			<h2>License for KBHFF</h2>
			<p>The <strong>Open Source GPLv3 license</strong> has been chosen for the KBHFF-IT project for the following reasons:</p>
			<ul>
				<li>The GPLv3 license is in alignment with the core values of KBHFF, e.g. transparency, support a working community, sharing and collaborating.</li>
				<li>KBHFF makes a clear statement using this license. Other Open source licenses, such as the MIT license are easier to use for others, but don’t enforce transparency and sharing source code and thereby giving back to the community.</li>
				<li>KBHFF cannot control what others use the code developed in KBHFF-IT for, but with the GPLv3 license ensures modifications to the code are shared and freely available for others to use under the same license.</li>
				<li>The GPLv3 limits the KBHFF-IT project (and future modifications made by KBHFF or others) in that “closed” source code cannot be used as part of the project. The project can for example not use a sms plugin unless it is licensed under MIT, GPLv3 or other Open Source license variants.</li>
			</ul>
		</div>

	</div>
	<div id="navigation">
		<ul class="navigation">
			<li class="active"><a href="#">Software license summary</a></li>
			<li><a href="#">Choosing an Editor</a></li>
			<li><a href="#">Setting up the development environment</a></li>
			<li><a href="#">Before you start coding</a></li>
			<li><a href="#">Set up playground</a></li>
		</ul>
	</div>
	<div id="footer"></div>
</div>

</body>
</html>
