<?php
include_once("php_includes/aviy_code.php");
include_once("php_includes/ch4l7s2.php");
$hdWpr1 = "";
$lgnSgn1 = "";
$hdWpr1 = 'mnHdr2Fx';
$lgnSgn1 = 'lgsuxfx2';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>Developer</title>
<?php include_once("php_includes/header/meta_tags.php"); ?>
<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
function selPge() {
	$("#selPge_3").css("color","#db46f2");
}
</script>
</head>
<body onload="selPge()">
<?php
include_once("php_includes/header.php");
include_once("php_includes/trendCnt.php");
?>
<div class="bodyWpr">
	<?php echo ''.$mnHdr.''.$lgSnMd.''.$plcyMd.''; ?>
	<!-- main content start -->
	<div class="diB">
		<div class="mnu1Wpr fL">
			<a id="lglxmn1a" mnu1="close menu" class="mnu1 fL">
				<div id="lglxmn1" class="lglxLiMnu" onclick="lglxmn1()">
					<span></span><span></span><span></span>
				</div>
			</a>
			<a id="lglxmn2a" mnu1="open menu" class="mnu1 fL">
				<div id="lglxmn2" class="lglxLiMnu dN" onclick="lglxmn2()">
					<span></span><span></span><span></span>
				</div>
			</a>
			<div id="lglxLiWpr">
			    <ul class="lglxLiWpr fL">
				    <li class="lgaTle">The team</li>
				    <div class="lglTle">Creation process</div>
				    <a href="#sNav_1a"><li>1. Outline</li></a>
				    <a href="#sNav_1b"><li>2. Design</li></a>
				    <a href="#sNav_1c"><li>3. Build</li></a>
				    <a href="#sNav_1d"><li>4. Temp site/app</li></a>
				    <a href="#sNav_1e"><li>5. Online/Live</li></a>
			    </ul>
			    &nbsp;
			    <!-- trending -->
			    <a href="search.php?s=">
				    <div class="uSplHdr">Trending</div>
			    </a>
			    <?php echo $imp_trend;
                include_once("php_includes/footer.php");
                ?>
			 </div>
		</div>

		<div class="lglxWpr diB fR">
			<!--- lglxMd1 -->
			<a name="sNav_1a"></a>
			<div class="lglxMd1">
				<h3>The Team</h3>
				<p>Our team of developers and programmers are dedicated individuals who develop and code on there free time. They are extremely knowledgeable individuals who are constantly learning and challenging there skills everyday. Creations built with passion and experience not specifically for making an attempt to make money. We love what we create projects, taking great pride in it. So we expect to do our best and put our talent and experience into every element. </p>
			</div>

			<!--- lglxMd2 -->
			<a name="sNav_1b"></a>
			<div class="lglxMd2">
				<h3>1. Outline</h3>
				<p>We always start of with paper, pencil and a eraser. Raw sketches, diagram and logic building really allow us to dig deep in our design planning. After all without a proper blueprint; programs and logic coding will always run into errors.</p>
			</div>

			<!--- lglxMd3 -->
			<a name="sNav_1c"></a>
			<div class="lglxMd3">
				<h3>2. Design</h3>
				<p>After a bit of finalization is done to the sketches and diagrams, we then move to programs like Inkskape to create a detailed outline of how the creation will look like. Colors, size, navigation, and functionality is made with the rough blueprints created before. Every page, every detail is scaled in a vector art that is constantly updated and used for coding.</p>
			</div>

			<!--- lglxMd4 -->
			<a name="sNav_1d"></a>
			<div class="lglxMd4">
				<h3>3. Build</h3>
				<p>Coded from the designs previously created; we then turn to editors like gedit and Vim to build how the creation will be seen live by everyone. Every page, look, function, navigation, detail, height, width, and pixel is all done from code, icons, temp images such as notification, logos and placeholders are made with Inkskape, then included into the code. This step only entails front end scripting and programming to diminish bugs normally created later on. </p>
			</div>

			<!--- lglxMd5 -->
			<a name="sNav_1e"></a>
			<div class="lglxMd5">
				<h3>4. Temp site/app</h3>
				<p>Once everything is created, and functioning efficiently, we bring in programs like Code::Blocks and Emacs to polish up, catch bugs and implement algorithms. At this point we are somewhat live. We allow alpha, and beta downloads/versions to be tested live so that neighboring programmers/developers can catch further bugs; seeing how well the creation functions for them. Logins are now created and connected to its database to get real world feedback for better and more efficient functioning.</p>
			</div>

			<!--- lglxMd6 -->
			<a name="sNav_1f"></a>
			<div class="lglxMd6">
				<h3>5. Online/Live</h3>
				<p>Our temp building process is the longest and the most crucial. After many checks are done we put the creation live as in online or in the app markets. We create a unique feedback system for every project so that even in the live beta to final stages we can constantly receive feedback and immediately address the concern. We do not abandon any project, if one is not tracking well we will do our best to get move downloads and traffic towards it. Updates and add ons happen periodically to maintain up time, function, design, and smooth user interactions. Our job is never done. </p>
			</div>


		</div>
	</div>
	<!-- main content end -->






</div>

<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_footer.js"><\/script>');
// -->
</script>
</body>
</html>

