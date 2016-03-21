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
<title>Projects</title>
<?php include_once("php_includes/header/meta_tags.php"); ?>
<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
function selPge() {
	$("#selPge_2").css("color","#db46f2");
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
				    <li class="sel2"><div class="lglxInp"><input type="text" placeholder="Search"></div></li>
				    <div class="lglTle">Sort Projects</div>
				    <li class="selx1">All Projects</li>
				    <li>Aviyon</li>
				    <li>Project logo</li>
				    <li>Last Updated</li>
				    <li>Following</li>
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
				<h3 class="prjhv1">All Projects</h3>

				<div class="prjvwBck">

					<!---------- prjvw -->
					<div class="prjvw diB">
						<a href="#"><img src="img/temp/prjTemp.png"/></a>
						<div class="prjLst diB">
							<a href="#"><span>@GreenHeartPT</span></a>
							<span class="small1">Created By: <a href="#">Aviyon</a></span>
							<span class="small1">Last Updated: 1/02/2015</span>
						</div>
					</div>

					<!---------- prjvw -->
					<div class="prjvw diB">
						<a href="#"><img src="img/temp/prjTemp.png"/></a>
						<div class="prjLst diB">
							<a href="#"><span>@Core</span></a>
							<span class="small1">Created By: <a href="#">Aviyon</a></span>
							<span class="small1">Last Updated: 1/02/2015</span>
						</div>
					</div>

					<!---------- prjvw -->
					<div class="prjvw diB">
						<a href="project.php?p="><img src="img/temp/prjTemp.png"/></a>
						<div class="prjLst diB">
							<a href="#"><span>@VGS</span></a>
							<span class="small1">Created By: <a href="#">Aviyon</a></span>
							<span class="small1">Last Updated: 1/02/2015</span>
						</div>
					</div>

					<!---------- prjvw -->
					<div class="prjvw diB">
						<a href="#"><img src="img/temp/prjTemp.png"/></a>
						<div class="prjLst diB">
							<a href="#"><span>@PGR</span></a>
							<span class="small1">Created By: <a href="#">Aviyon</a></span>
							<span class="small1">Last Updated: 1/02/2015</span>
						</div>
					</div>

					<!---------- prjvw -->
					<div class="prjvw diB">
						<a href="#"><img src="img/temp/prjTemp.png"/></a>
						<div class="prjLst diB">
							<a href="#"><span>@Merra</span></a>
							<span class="small1">Created By: <a href="#">Aviyon</a></span>
							<span class="small1">Last Updated: 1/02/2015</span>
						</div>
					</div>


				</div>

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

