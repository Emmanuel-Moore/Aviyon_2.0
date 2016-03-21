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
<title>Services</title>
<?php include_once("php_includes/header/meta_tags.php"); ?>
<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
function selPge() {
	$("#selPge_4").css("color","#db46f2");
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
				    <li class="lgaTle">Primary focus</li>
				    <div class="lglTle">Creating</div>
				    <li>Plans</li>
				    <li>Pricing</li>
				    <li class="lgaTle">Secondary focus</li>
				    <div class="lglTle">Tutorials (coming soon)</div>
				    <li>Users</li>
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
			<div class="lglxMd1">
				<small>primary focus</small>
				<h3>Creating</h3>
				<p>We create complex, and simple social driven apps and websites (web-os) that can be viewed across all major platforms: Linux, Windows, OSX. And all major browsers and mobile devices.</p>
			</div>

			<!--- lglxMd2 -->
			<div class="lglxMd2">
				<h3>Plans</h3>
				<p>Prices may vary upon features, and depth of creation. We have 3 plans; simple, premium and ultimate. If some features are not available for the plan you want; you may request the ones you want for additional cost.</p>
				<p>Having an Aviyon creation on your app or web-os will result in a monthly price reduction. The tag-line will be added by default. If people do not wish to have the tag-line additional cost will be charged. </p>
			</div>

			<!--- lglxMd3 -->
			<div class="lglxMd3">
				<h3>Pricing</h3>
				<p>Simple: Set rate at $10.95/hr</p>
				<p>Premium: Rates start at $89.95/hr</p>
				<p>Ultimate: Rates start at $102.95/hr</p>
				<p>Click on any item below to find out more information about them.</p>

				<div class="gridWpr">
					<div class="gridHdr1a tR">
						<span>Simple</span>
						<span>Premium</span>
						<span>Ultimate</span>
					</div>
					<div class="gridHdr1b">General</div>
					<div class="gridSep diB">
						<span class="fL">Weekly maintenance</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Feedback system</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridHdr1b">Database</div>
					<div class="gridSep diB">
						<span class="fL">Setup</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Weekly maintenance</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Weekly backup</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridHdr1b">Search</div>
					<div class="gridSep diB">
						<span class="fL">Simple</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Entire Site/App</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Global</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridHdr1b">Login</div>
					<div class="gridSep diB">
						<span class="fL">Simple</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Crypt/Bycrypt- Advanced</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridHdr1b">Login</div>
					<div class="gridHdr1c">General</div>
					<div class="gridSep diB">
						<span class="fL">Profile page</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Settings</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Post, & Comment</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Like, & Share</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridHdr1c">Uploads (optional/choose)</div>
					<div class="gridSep diB">
						<span class="fL">Text</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Photos</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Videos</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Other</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridHdr1c">Customization</div>
					<div class="gridSep diB">
						<span class="fL">Userpic</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Banner</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Profile Page</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridHdr1c">Privacy</div>
					<div class="gridSep diB">
						<span class="fL">Post, & Comments</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Alerts (text, notifications)</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
						</div>
					</div>
					<div class="gridSep diB">
						<span class="fL">Anonymous</span>
						<div class="gridChkVw">
							<span id="gridChk"></span>
						</div>
					</div>

				</div>

			</div>

			<!--- lglxMd4 -->
			<div class="lglxMd4">
				<small>secondary focus</small>
				<h3>Tutorials (coming soon)</h3>
				<p>We will make full length free, and paid lessons/tutorials on programming & logic based OO, OOP, P.P., & EDP. Offering free code, downloads, tips etc. on <a>http://www.aviyon.com</a> via YouTube.</p>
				<p>Lessons will entail tips, crypting, sever, logic, algorithms, structure, sketching, planning, & design. Beginner, intermediate, and advanced levels of Perl, Java, C, C++, C#, Objective-C, HTML, CSS, PHP, Python, AJAX, Ruby, JS, SQL, MySql...</p>
			</div>

			<!--- lglxMd5 -->
			<div class="lglxMd5">
				<h3>Users</h3>
				<p>Logged in users can not only watch tutorials but take quizzes, test to earn points.   </p>
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

