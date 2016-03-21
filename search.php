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
<title>Search</title>
<?php include_once("php_includes/header/meta_tags.php"); ?>
<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
function selPge() {
	$("#selPge_1x").css("color","#db46f2");
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
				    <div class="lglTle">Filter</div>
				    <li class="selx1">Everything</li>
				    <li>Projects</li>
				    <li>Post</li>
				    <li>Photos</li>
				    <li>Videos</li>
			    </ul>
			    &nbsp;
			    <!-- trending -->
			    <a href="search.php?s=">
				    <div class="uSplHdr">Trending</div>
			    </a>
			    <ul class="prjLst">
				    <a href="search.php?s="><li>@VGS</li></a>
				    <a href="search.php?s="><li>Emmanuel Moore</li></a>
				    <a href="search.php?s="><li>Social</li></a>
				    <a href="search.php?s="><li>#freesoftware</li></a>
				    <a href="search.php?s="><li>#opensource</li></a>
			    </ul>
			    <?php echo $imp_trend;
                include_once("php_includes/footer.php");
                ?>
			 </div>
		</div>

		<div class="lglxWpr diB fR">
			<!--- lglxMd1 -->
			<div class="lglxMd1">

				<!-- option -->
			    <div id="st_1c_1" class="setxBlk">
			        <header>Projects (4)</header>
			        <div class="setxInr">

			            <!---------- prjvw -->
					    <div class="prjvw diB">
						    <a href="project.php?p="><img src="img/temp/prjTemp.png"/></a>
						    <div class="prjLst diB">
							    <a href="project.php?p="><span>@GreenHeartPT</span></a>
							    <span class="small1">Created By: <a href="project.php?p=">Aviyon</a></span>
							    <span class="small1">Last Updated: 1/02/2015</span>
						    </div>
					    </div>

					    <!---------- prjvw -->
					    <div class="prjvw diB">
						    <a href="project.php?p="><img src="img/temp/prjTemp.png"/></a>
						    <div class="prjLst diB">
							    <a href="project.php?p="><span>@VGS</span></a>
							    <span class="small1">Created By: <a href="project.php?p=">Aviyon</a></span>
							    <span class="small1">Last Updated: 1/02/2015</span>
						    </div>
					    </div>

					    <!---------- prjvw -->
					    <div class="prjvw diB">
						    <a href="project.php?p="><img src="img/temp/prjTemp.png"/></a>
						    <div class="prjLst diB">
							    <a href="project.php?p="><span>@PGR</span></a>
							    <span class="small1">Created By: <a href="project.php?p=">Aviyon</a></span>
							    <span class="small1">Last Updated: 1/02/2015</span>
						    </div>
					    </div>

					    <!---------- prjvw -->
					    <div class="prjvw diB">
						    <a href="project.php?p="><img src="img/temp/prjTemp.png"/></a>
						    <div class="prjLst diB">
							    <a href="project.php?p="><span>@Merra</span></a>
							    <span class="small1">Created By: <a href="project.php?p=">Aviyon</a></span>
							    <span class="small1">Last Updated: 1/02/2015</span>
						    </div>
					    </div>

			        </div>
			    </div>

			     <!-- option -->
			    <div id="st_1c_1" class="setxBlk">
			        <header>Post (1)</header>

			            				<!-- user post -->
				<div id="upst_1" class="upstWpr">
					<div class="upstHdr">
						<a href="user.php?="><img src="img/temp/usr2.jpg" /></a>
						<div class="upstInf diB">
							<a href="user2.php?u=Emmanuel.Moore"><span class="upstNme fL">Emmanuel Moore</span></a>
							<span id="verified" ver1="Verified"></span><br>
							<span class="tmeStmp">7 mins ago</span>
						</div>
					</div>
					<div class="upstBdy">Just added a few updates to VGS's user page for mobile. <img src="img/temp/post1.png"/></div>
					<div class="upstFtrWpr">
						<!---- footer icons -->
						<div class="upstIco">
							<div><span id="favIcn" class="favIcn cP" info1="Favorite"></span> &#8226; 5</div>
							<div><span id="cmtIcn" class="cmtIcn cP" info1="Comment" onclick="upTgle('ucmta_1')"></span> &#8226; 2</div>
							<div>
								<ul id="pstSet_1" class="pstSet psFx1 pA dN">
									<li id="">update</li>
									<li id="" onclick="upTgle('upst_1')">hide</li>
									<li id="">delete</li>
									<li id="">report</li>
								</ul>
								<span id="setIcn_!" class="setIcn cP" info1="Settings" onclick="upTgle('pstSet_1')"></span>
							</div>
						</div>
						<div id="ucmta_1" class="dN">

							<!-- user comment -->
							<div id="ucmt_1" class="ucmtWpr dB">
								<a href="user.php?=" class="ucmtImg"><img src="img/temp/usr2.jpg" /></a>
								<div class="ucmtIfo diB">
									<span class="sm2">
										<a href="user2.php?u=Emmanuel.Moore">Emmanuel Moore</a><span id="verified" ver1="Verified"></span>
										12 mins ago
										<div><span id="favIcn" class="favIcn cP" info1="Favorite"></span> &#8226; 5</div>
										<div>
											<ul id="pstCmt_1" class="pstSet psFx2 pA dN">
												<li id="">update</li>
												<li id="" onclick="upTgle('ucmt_1')">hide</li>
												<li id="">delete</li>
												<li id="">report</li>
											</ul>
											<span id="setIcn" class="setIcn cP" info1="Settings" onclick="upTgle('pstCmt_1')"></span>
										</div>
									</span>
									<span>Yes! we're doing amazing no day for complaining.</span>
								</div>
							</div>

							<!-- user comment -->
							<div id="ucmt_2" class="ucmtWpr dB">
								<a href="user.php?=" class="ucmtImg"><img src="img/temp/usr3.png" /></a>
								<div class="ucmtIfo diB">
									<span class="sm2">
										<a href="user.php?=">Aviyon</a><span id="verified" ver1="Verified"></span>
										12 mins ago
										<div><span id="favIcn" class="favIcn cP" info1="Favorite"></span> &#8226; 5</div>
										<div>
											<ul id="pstCmt_2" class="pstSet psFx2 pA dN">
												<li id="">update</li>
												<li id="" onclick="upTgle('ucmt_2')">hide</li>
												<li id="">delete</li>
												<li id="">report</li>
											</ul>
											<span id="setIcn" class="setIcn cP" info1="Settings" onclick="upTgle('pstCmt_2')"></span>
										</div>
									</span>
									<span>So glad to here that <a href="user.php?=">Emmanuel</a>, keep up the great work.</span>
								</div>
							</div>

							<!---- footer post logic -->
							<div class="fplWpr">
								<img src="img/temp/usr2.jpg"/>
								<textarea placeholder="Would you like to comment?"></textarea>
							</div>

						</div>

					</div>
				</div>



			    </div>

			     <!-- option -->
			    <div id="st_1c_1" class="setxBlk">
			        <header>Photos (6)</header>
			        <!-- content view -->
				<div class="usPhmWpr diB cP">
					<img class="usPhVw diB uvwPh1a" src=""/>
					<div class="usPhm_1 pA dN">
						<div class="usPhm_2 pA">scascasc</div>
						<div class="usPhm_3 pA">sacasc</div>
					</div>
				</div>
				<!-- content view -->
				<img class="usPhVw diB uvwPh1a" src=""/>
				<!-- content view -->
				<img class="usPhVw diB uvwPh1a" src=""/>
				<!-- content view -->
				<img class="usPhVw diB uvwPh1a" src=""/>
				<!-- content view -->
				<img class="usPhVw diB uvwPh1a" src=""/>
				<!-- content view -->
				<img class="usPhVw diB uvwPh1a" src=""/>

			    </div>

			     <!-- option -->
			    <div id="st_1c_1" class="setxBlk">
			        <header>Videos (6)
			        <div class="dI fR">
						<ul id="usrSet3_1" class="pstSet psFx2x pA dN">
							<li id="">edit</li>
							<li id="">delete</li>
						</ul>
						<span id="setCnt_3a" class="setIcn hdrSet cP" info2="Settings" onclick="upTgle('usrSet3_1')"></span>
					</div>
					</header>
			        <div class="setxInr">
			            <!-- content view -->
				        <a class="usVdVw diB uvwVd1a" href="view.php?via='.$viid.'">
				            <div class="plyBtn1a cP pR">
				                <div class="plyBtn1b pA"></div>
				            </div>
				        </a>
				        <!-- content view -->
				        <a class="usVdVw diB uvwVd1a" href="view.php?via='.$viid.'">
				            <div class="plyBtn1a cP pR">
				                <div class="plyBtn1b pA"></div>
				            </div>
				        </a>
				        <!-- content view -->
				        <a class="usVdVw diB uvwVd1a" href="view.php?via='.$viid.'">
				            <div class="plyBtn1a cP pR">
				                <div class="plyBtn1b pA"></div>
				            </div>
				        </a>
				        <!-- content view -->
				        <a class="usVdVw diB uvwVd1a" href="view.php?via='.$viid.'">
				            <div class="plyBtn1a cP pR">
				                <div class="plyBtn1b pA"></div>
				            </div>
				        </a>
				        <!-- content view -->
				        <a class="usVdVw diB uvwVd1a" href="view.php?via='.$viid.'">
				            <div class="plyBtn1a cP pR">
				                <div class="plyBtn1b pA"></div>
				            </div>
				        </a>
				        <!-- content view -->
				        <a class="usVdVw diB uvwVd1a" href="view.php?via='.$viid.'">
				            <div class="plyBtn1a cP pR">
				                <div class="plyBtn1b pA"></div>
				            </div>
				        </a>

			    </div>


			</div></div>




		</div>
	</div>
	<!-- main content end -->






</div>
<! footer moudle 1 start -->
<div class="ftrWpr">
	<footer class="ftrx2">
		<div class="ftrx2a">
			<div class="fL diB">
				<ul class="ftNav dB">
					<a href="index.php"><li id="selPge_1">Home</li></a>
					<a href="projects.php"><li id="selPge_2">Projects</li></a>
					<a href="developer.php"><li id="selPge_3">Developer</li></a>
					<a href="services.php"><li id="selPge_4">Services</li></a>
					<a href="support.php"><li id="selPge_5">Support</li></a>
					<a href="legal.php"><li id="selPge_6">legal</li></a>
					<a onclick="indxPlcy1()"><li id="selPge_7">Policy</li></a>
					<!-- package as a variable -->
					<li id="selPge_1x">Search</li>
				</ul>
				<span>&#169; aviyon.com 2015 <b>Beta</b> 2.0001 testing in progress!</span>
			</div>
			<div class="ftrxScl fR diB">
				<a href="https://www.facebook.com/aviyon" target="_blank" id="ftrxfb"></a>
				<a href="https://twitter.com/Aviyon_com" target="_blank" id="ftrxtw"></a>
				<a href="https://plus.google.com/+Aviyon" target="_blank" id="ftrxgp"></a>
				<a href="http://www.youtube.com/aviyon365" target="_blank" id="ftrxyt"></a>
			</div>
		</div>
	</footer>
</div>
<! footer moudle 1 end -->

<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_footer.js"><\/script>');
// -->
</script>
</body>
</html>

