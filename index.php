<?php
include_once("php_includes/aviy_code.php");
include_once("php_includes/ch4l7s2.php");
$hdWpr1 = "";
$lgnSgn1 = "";
$hdWpr1 = 'mnHdr1AFx';
$lgnSgn1 = 'lgsuxfx1A';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>Aviyon | We can handle it.</title>
<?php include_once("php_includes/header/meta_tags.php"); ?>
<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
function selPge() {
	$("#selPge_1").css("color","#db46f2");
}
</script>
</head>
<body onload="selPge()">
<?php include_once("php_includes/header.php");
include_once("php_includes/trendCnt.php");
echo ''.$mnHdr.''.$lgSnMd.''.$plcyMd.'';
?>
<!--- body header start -->
<div class="topHdr_wrp">
    <div class="inrWrp1">
        <div class="topHdr_Inr">
		    <span id="tfn1">Designs that count.</span>
		    <div class="hdr-btn_hdlr fL diB">
			    <span onclick="tBtn1()">Designs</span>
			    <span onclick="tBtn2()">Projects</span>
		    </div>
		    <div class="hdrTxt-wrp diB fL">
			    <span id="tfn2">Get amazing designs that or popular and trending.</span>
			    <a href="projects.php"><span id="hdrBtn1">Browse all projects</span></a>
		    </div>

		    <a id="sr_vw" href="projects.php">
			    <div id="sr_1" class="topHdr_rgt fR">
				    <span class="frntImg pA"><img src="img/design/aty-1a.png"/></span>
				    <span class="backImg"><img src="img/design/vgs-1b.png"/></span>
			    </div>
			    <div id="sr_2" class="topHdr_rgt fR dN">
				    <span class="frntImg pA"><img src="img/design/pgr-1a.png"/></span>
				    <span class="backImg"><img src="img/design/vgs-1a.png"/></span>
			    </div>
		    </a>
	    </div>
    </div>
<div>
<!--- body header end -->
<!-- main nav start -->
<div class="uHdWpr1x">
    <div class="inrWrp2">
	    <div class="uHdInr">
		    <ul class="uHdLi1 diB">
			    <a href="#sNav_1a"><li id="modTog_1a" class="uHdAct" onclick="modTog_1()">Our Brand</li></a>
			    <a href="#sNav_2a"><li id="modTog_2a" onclick="modTog_2()">Web-OS</li></a>
			    <a href="#sNav_3a"><li id="modTog_3a" onclick="modTog_3()">Mobile/Apps</li></a>
			    <a href="#sNav_3a"><li id="modTog_4a" onclick="modTog_4()">Open-source</li></a>
		    </ul>
		    <div class="uHdScl diB fR">
			    <div class="diB">
				    <a href="https://www.facebook.com/aviyon" target="_blank" id="ftrxfb"></a>
				    <a href="https://twitter.com/Aviyon_com" target="_blank" id="ftrxtw"></a>
				    <a href="https://plus.google.com/+Aviyon" target="_blank" id="ftrxgp"></a>
				    <a href="http://www.youtube.com/aviyon365" target="_blank" id="ftrxyt"></a>
			    </div>
		    </div>
	    </div>
	</div>
</div>
<!-- main nav end -->

<div class="bodyWpr2">

	<!------- hmeModWpr1 ------->
	<a name="sNav_1a"></a>
	<div class="hmeModWpr">
		<div class="hmeModHdr">Our Brand</div>
		<div class="hmeModBdy">Aviyon believes in creating each & every project from scratch. Our projects are completely unique,  implementing various new concepts & logic based strategies. We take great pride and creating software that's easily identifiable and noticeable with our brand. Many hours of research is taken before each & every creation. Our design, logic, minor detailing, front & back end engineering or all taken very seriously, which can be seen in anything we create.</div>
	</div>

	<!------- hmeModWpr1 ------->
	<a name="sNav_2a"></a>
	<div id="rmVw1a" class="hmeModWpr hmFx1 diB">
		<div class="hmeModHdr2">
			<ul>
				<li id="hmeMod1a" class="uHdAct" onclick="hmeMod1a()">Web-OS</li>
				<li id="hmeMod2a" onclick="hmeMod2a()">Mobile/Apps</li>
			</ul>
		</div>
		<div class="hmeModBdy">
			<div id="hmeMod1b">Speed, simplicity, efficiency, light weight & precise coding techniques or some of many techniques put into a single Aviyon creation. We believe in creating an single OS based platform that can easily be downloaded, accessed, and seen across all browsers, and operating systems. Cloud storage, database manipulation, fast & consistent up time, multiple servers, low cost, user control, customization, and dynamic output, are all programmed with the intention of taking in large traffic.</div>
			<div id="hmeMod2b" class="dN">We aren't afraid to break the traditional design patterns, and try something different. Our creations are constantly updated and implementing new research in user interaction and programming. Fluid mobile layouts, and light weight modular coding allows for more and faster user interacting. Headers, menus, notifications, buttons, navigation, sliding left, right up and down can all be seen in some unique way. OS based logic allows for more complex mobile transitions, and more legs to stand on for keeping stability.  </div>
		</div>
	</div>

	<div id="rmVw1b" class="hmeModImg1 hmFx2 diB fR">
		<div id="hmeMod1c">
			<img src="img/home/web/hmeimg1_1.png"/>
			<img src="img/home/web/hmeimg1_2.png"/>
			<img src="img/home/web/hmeimg1_3.png"/>
			<img src="img/home/web/hmeimg1_4.png"/>
			<img src="img/home/web/hmeimg1_5.jpg"/>
			<img src="img/home/web/hmeimg1_6.jpg"/>
		</div>
		<div id="hmeMod2c" class="dN">
			<img src="img/home/mobile/hmeimg2_1.png"/>
			<img src="img/home/mobile/hmeimg2_2.png"/>
			<img src="img/home/mobile/hmeimg2_3.png"/>
			<img src="img/home/mobile/hmeimg2_4.png"/>
			<img src="img/home/mobile/hmeimg2_5.png"/>
			<img src="img/home/mobile/hmeimg2_6.png"/>
		</div>
	</div>

	<!------- hmeModWpr1 ------->
	<a name="sNav_3a"></a>
	<div class="hmeModWpr">
		<div class="hmeModHdr3">
			<span id="ops_1a" class="uHdAct diB" onclick="ops_1()">Open-source</span>
			<ul class="opsImg fR">
				<li id="ops_2a" onclick="ops_2()"><img src="img/software/firefox-logo.png"/></li>
				<li id="ops_3a" onclick="ops_3()"><img src="img/software/emacs24.svg"/></li>
				<li id="ops_4a" onclick="ops_4()"><img src="img/software/codeblocks.png"/></li>
				<li id="ops_5a" onclick="ops_5()"><img src="img/software/vim.svg"/></li>
				<li id="ops_6a" onclick="ops_6()"><img src="img/software/notepad-plus-plus-logo.png"/></li>
				<li id="ops_7a" onclick="ops_7()"><img src="img/software/Gedit-logo.png"/></li>
				<li id="ops_8a" onclick="ops_8()"><img src="img/software/inkscape-logo.png"/></li>
				<li id="ops_9a" onclick="ops_9()"><img src="img/software/krita-logo.png"/></li>
				<li id="ops_10a" onclick="ops_10()"><img src="img/software/gimp-logo.png"/></li>
			</ul>
		</div>
		<div class="hmeModBdy">
		    <!-- intro -->
			<div class="ops_1b">Aviyon takes great pride in the use of open-source software. No handicaps, just simple text editors like gedit for most coding, and programs like Vim, Code::Blocks, and Emacs to beef up to the Algorithms, and bug catching. We love freedom, and we love building from scratch making everything, every detail vectorized and dynamic. Open-source is the future, we make our code visible for everyone, although file, folder paths, security etc. are always left mysterious. Icons are built and edited in house using Inkscape, Krita, and Gimp.</div>
			<!-- Firefox -->
			<div class="ops_2b dN">We use Firefox and Firefox Developer Edition as our primary browser for creating, testing and debugging web/mobile/app software. The freedom, stability and flexibility of Firefox is influential in our designs and debugging tactics. Various other browsers are used to further test the functionality of the creations including; Safari, Chrome, Internet Explore, Opera and many others. </div>
			<!-- Emacs -->
			<div class="ops_3b dN">For lightweight compiling, speed, keyboard shortcuts and ease of use, we tend to aim for Emacs. We use this to quickly debug our OOP languages.</div>
			<!-- Code::Blocks -->
			<div class="ops_4b dN">Much like Emacs and Vim we use Code::Blocks for compiling large programs, and projects. We use its vast library of compilers and navigation tools to navigate through projects, and hundreds of lines of code. This is our number one choice for debugging, running, and fixing continuity issues among static and dynamic languages.</div>
			<!-- Vim -->
			<div class="ops_5b dN">Like Emacs we use this as another alternative for code creating and manipulation.</div>
			<!-- Notepad++ -->
			<div class="ops_6b dN">Like Gedit we use these powerhouse lightweight editors to start writing code on any of our projects. The clever use of their syntax highlighting, build in xml, html, python, php, perl, ruby... extensions make writing code a breeze. Navigation through code folders, renaming, editing, you name it these editors have it. It makes building massive amounts of code from scratch easier for the entire team with their many addons and freedom. </div>
			<!-- Gedit -->
			<div class="ops_7b dN">Since we primary build our code in Linux, this is our first choice to create our code of all languages. We use this 94% of the time and with the added boost of gmate master, it takes compiling and creating code to a more fun and cohesive experience.</div>
			<!-- Inkscape -->
			<div class="ops_8b dN">We use this as our all purpose vector creator and editor. We do not believe in commercial software therefore we do not use any adobe or other software. We sketch our web/apps/mobile on paper then we recreate a representation of how they will look in the real world. The use of lines drawing, and color picking make the creation process much more comprehensive, and realistic for the projects to be coded. We also use this program for all of our icon creating and pixel counting.</div>
			<!-- Krita -->
			<div class="ops_9b dN">This program is used for us to get a more detailed and comprehensive look from our vector creating.</div>
			<!-- Gimp -->
			<div class="ops_10b dN">We use Gimp for image manipulation and making updates to our sketches.</div>
			</div>
	</div>





</div>
<?php
include_once("php_includes/footer.php");
?>

<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_footer.js"><\/script>');
// -->
</script>
</body>
</html>

