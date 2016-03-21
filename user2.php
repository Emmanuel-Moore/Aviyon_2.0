<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>Emmanuel Moore</title>
<?php include_once("php_includes/header/meta_tags.php"); ?>
<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
</script>
</head>
<body>
<!------ include header start -->
<div class="mnHdr pF">
    <div class="inrWrp1">
	    <div class="mnInr">
		    <div onmouseover="upHver('hdr_1a')" onclick="upTgle('hdr_1a')" class="mnLgo fL"><span id="icnx1"></span><span class="mnLgoTxt diB fR">Aviyon</span></div>

		    <div class="m_search diB">
			    <form action="search.php" method="get">
				    <div class="fL dbsBtn">
					    <span><span></span></span>
		       			<input type="submit" value='s'>
		       		</div>
		       		<div class="dbsWpr">
					    <input id="dbS" name="s" type="text" autocomplete="off" onKeyUp="dbSm(this.value)" placeholder="Search" >
				    </div>
			    </form>
		      <div id="dbSr"></div>
		    </div>


		    <div class="hdrxWpr fR" onclick="upTgle('lgsuxWpr')">
			    <a id="hdrx1a" href="user2.php">Emmanuel</a>
			    <img id="hdrx1b" src="img/temp/usr2.jpg">
		    </div>
	    </div>
    </div>
</div>
<!------ include header end -->

<!------ 2nd header nav start -->
<header id="hdr_1a" class="mnHdr2 dN pF">
    <ul id="hdr_2a" class="ftNav dB">
		<a href="index.php"><li id="selPge_1">Home</li></a>
		<a href="projects.php"><li id="selPge_2">Projects</li></a>
		<a href="developer.php"><li id="selPge_3">Developer</li></a>
		<a href="services.php"><li id="selPge_4">Services</li></a>
		<a href="support.php"><li id="selPge_5">Support</li></a>
		<a href="legal.php"><li id="selPge_6">legal</li></a>
		<a onclick="indxPlcy1()"><li id="selPge_7">Policy</li></a>
	</ul>
</header>
<!------ 2nd header nav end -->

<div class="uHdInr">
	<!--- usrMnu module start -->
	<div class="lgsuxHlr fR">
		<div class="lgsuxFx2_5">
			<ul id="lgsuxWpr" class="lgsuxWpr pF dN">
				<a href="notifications.php"><li><i id="ntiIcn"></i>Notifications</li></a>
				<li><i id="ntiIcn"></i>Projects</li>
				<a href="settings.php"><li><i class="setIcn"></i>Settings</li></a>
				<a href="logout.php"><li><i id="logout"></i>Logout</li></a>
			</ul>
		</div>
	</div>
	<!--- usrMnu module end -->

	<!----- policy module start -->
	<div class="indxPlcy ipxF3 dN pF">
		<div class="indxHdr">
			<span class="">Policy</span>
			<span class="fR cP" onclick="indxPlcy2()">X</span>
		</div>
		<div class="indxBdy">
			<p>Policy: This was written and intended for any persons going to aviyon.com or traveling to an app, website with the stamp (An Aviyon Creation). We wrote this for everyone to understand not limited to legal persons. </p>
			<p>Data use policy: We do not collect your information for third party selling, trading nor research. Aviyon uses this to better understand our target market and information we display. We collect cookies, and your IP for login, signup purposes. We will also use your IP and cookies for in house research only.</p>
			<p>Terms:
			<ol>
				<li>You agree to have fun.</li>
				<li>You will never take credit for any work.</li>
				<li>You will not use racial discrimination, assumptions, or any terms not acceptable in a work environment. </li>
				<li>You will not recreate any projects, designs, or post created by Avion nor any other persons on aviyon.com or with the stamp (An Aviyon Creation). </li>
			</ol></p>
		</div>
	</div>
	<!----- policy module end -->
</div>

<!------ user header start -->
<div class="uHdWpr">
	<div class="uHdInr">
		<span id="uhdImgCh_1" class="imgUplIcn2 cP pA" info1="Edit Banner"></span>
		<span id="uhdImgCh_2" class="imgUplIcn2 cP pA" info1="Edit Profile Pic"></span>
		<img class="uHdImg2 pA" src="img/temp/usr2.jpg"/>
		<div class="uHdNme diB pA">
			<span>Emmanuel Moore<span id="verified" ver1="Verified"></span>
			<span class="uHdTil">User Page</span>
		</div>
	</div>
	<img class="uHdImg1" src="img/temp/tempBnr3.jpg"/>
</div>
<!------ user header end -->
<!----------- follow connect links -->
<div class="lpeWpr">
	<div class="lpeBtn pR">
		<span id="" class="cP">Follow</span>
		<span id="" class="cP">Connect</span>
	</div>
</div>
<!-- main nav start -->
<div class="uHdWpr2">
	<div class="uHdInr">
		<ul class="uHdLi1 diB">
			<li id="modTog_1a" class="uHdAct" onclick="modTog_1()">Post</li>
			<li id="modTog_2a" onclick="modTog_2()">Photos</li>
			<li id="modTog_3a" onclick="modTog_3()">Videos</li>
			<li id="modTog_5a" onclick="modTog_5()">About</li>
		</ul>
	</div>
</div>
<!-- main nav end -->
<!-- main nav2 start -->
<div class="uHdWpr3">
	<div class="uHdInr">
		<div class="uSpla">
			<span>The Team &#8226; 1</span>
			<div class="diB fR">
				<span id="" class="joinIcn hdrSet cP" info2="Join Team"></span>
			</div>
		</div>
		<div class="uSplb diB">


			<!-- modCnt_1 -->
			<div class="modCnt_1a">
				<div class="fL">
					<span>Most Recent</span>
				</div>
				<div class="fR">
					<span id="pstUsr_1" class="cmtIcn hdrSet diB  cP" info2="Post" onclick="prjxMt1b()"></span>
					<div class="dI">
						<ul id="usrSet_1" class="pstSet psFx1x pA dN">
							<li id="">Top Post</li>
							<li id="">Most Recent</li>
						</ul>
						<span id="setCnt_1a" class="setIcn hdrSet cP" info2="Settings" onclick="upTgle('usrSet_1')"></span>
					</div>
				</div>
			</div>

			<!-- modCnt_2 -->
			<div class="modCnt_2a dN">
				<div class="fL diB">May &#8226; 2015</div>
				<div class="fR">
					<div class="modTog_1c dN">
						<span id="uvwPh1a" class="uvwIcn1a hdrSet cP" info2="Stacked" onclick="uvwPh1a()"></span>
						<span id="uvwPh1b" class="uvwIcn1b hdrSet cP" info2="Stacked" onclick="uvwPh1a()"></span>
						<span id="uvwPh2a" class="uvwIcn2a hdrSet cP" info2="Grid" onclick="uvwPh1b()"></span>
						<span id="uvwPh2b" class="uvwIcn2b hdrSet cP" info2="Grid" onclick="uvwPh1b()"></span>
					</div>
					<div class="dI">
						<ul id="usrSet2_1" class="pstSet psFx2x pA dN">
							<li id="">edit</li>
							<li id="">delete</li>
						</ul>
						<span id="setCnt_2a" class="setIcn hdrSet cP" info2="Settings" onclick="upTgle('usrSet2_1')"></span>
					</div>
				</div>
			</div>

			<!-- modCnt_3 -->
			<div class="modCnt_3a dN">
				<div class="fL diB">May &#8226; 2015</div>
				<div class="fR">
					<div class="modTog_2c dN">
						<span id="uvwVd1a" class="uvwIcn1a hdrSet cP" info2="Stacked" onclick="uvwVd1a()"></span>
						<span id="uvwVd1b" class="uvwIcn1b hdrSet cP" info2="Stacked" onclick="uvwVd1a()"></span>
						<span id="uvwVd2a" class="uvwIcn2a hdrSet cP" info2="Grid" onclick="uvwVd1b()"></span>
						<span id="uvwVd2b" class="uvwIcn2b hdrSet cP" info2="Grid" onclick="uvwVd1b()"></span>
					</div>
					<div class="dI">
						<ul id="usrSet3_1" class="pstSet psFx2x pA dN">
							<li id="">edit</li>
							<li id="">delete</li>
						</ul>
						<span id="setCnt_3a" class="setIcn hdrSet cP" info2="Settings" onclick="upTgle('usrSet3_1')"></span>
					</div>
				</div>
			</div>

			<!-- modCnt_4 -->
			<div class="modCnt_4a dN">
				<div class="fL">
					<span>Most Recent</span>
				</div>
				<div class="fR">
					<span id="pstUsr_2" class="cmtIcn hdrSet diB cP" info2="Post" onclick="prjxMt2b()"></span>
					<div class="dI">
						<ul id="usrSet4_1" class="pstSet psFx1x pA dN">
							<li id="">Top Post</li>
							<li id="">Most Recent</li>
						</ul>
						<span id="setCnt_4a" class="setIcn hdrSet cP" info2="Settings" onclick="upTgle('usrSet4_1')"></span>
					</div>
				</div>
			</div>

			<!-- modCnt_5 -->
			<div class="modCnt_5a dN">
				<div class="fR">
					<div class="dI">
						<ul id="usrSet5_1" class="pstSet psFx3x pA dN">
							<li id="">Update something</li>
							<li id="">Add something</li>
						</ul>
						<span id="setCnt_5a" class="setIcn hdrSet cP" info2="Settings" onclick="upTgle('usrSet5_1')"></span>
					</div>
				</div>
			</div>


		</div>
		<div class="uSpla lnk2">
			<a href="projects.php"><span>Projects &#8226; 4</span></a>
		</div>
	</div>
</div>
<!-- main nav2 start -->


<div class="bodyWpr2">




	<!-- main content start -->
	<div class="diB">
		<!-- left -->
		<div class="uSpla fL">
			<!-- team user -->
			<a href="user.php?u=">
				<div class="prjxUsr">
					<img src="img/temp/usr2.jpg"/>
					<a  href="user.php?=" class="prjxUsr1a diB fL">Emmanuel Moore</a><span id="verified" ver1="Verified"></span>
				</div>
			</a>

			<!-- connections -->
			<div class="uSplHdr cP">Connections &#8226; 6</div>
			<div class="prjxUsr imgGrid1 ">
				<a href="user.php?="><img src=""/></a>
				<a href="user.php?="><img src=""/></a>
				<a href="user.php?="><img src=""/></a>
				<a href="user.php?="><img src=""/></a>
				<a href="user.php?="><img src=""/></a>
				<a href="user.php?="><img src=""/></a>
			</div>

			<!-- followers -->
			<div class="uSplHdr cP">Followers &#8226; 6</div>
			<div class="prjxUsr imgGrid1">
				<a href="user.php?="><img src=""/></a>
				<a href="user.php?="><img src=""/></a>
				<a href="user.php?="><img src=""/></a>
				<a href="user.php?="><img src=""/></a>
				<a href="user.php?="><img src=""/></a>
				<a href="user.php?="><img src=""/></a>
			</div>

			<! footer moudle 1 start -->
            <footer class="ftrMn">
                <!------------------------------ first level -->
                <!-- icon logic -->
                <div class="icnxf diB">
                    <i id="icnx2"></i>
                    <span class="">Aviyon</span>
                </div>
                <!-- footer switch -->
                <ul onclick="ftrNvx()" class="ftrMu diB">
                    <li id="nB1" onclick="nL1()"><i id="nL1"></i>Navigation</li>
                    <li id="nB2" onclick="nL2()" class="dN"><i id="nL2"></i>Social</li>
                </ul>
                <!-- footer menu toggle -->
                <i id="nLp" onclick="nLx()">
                    <span></span><span></span><span></span>
                </i>
                <!------------------------------ second level -->
            <div class="dB">
                <ul id="ftr_1" class="ftNav dB">
	                <a href="index.php"><li id="selPge_1">Home</li></a>
	                <a href="projects.php"><li id="selPge_2">Projects</li></a>
	                <a href="developer.php"><li id="selPge_3">Developer</li></a>
	                <a href="services.php"><li id="selPge_4">Services</li></a>
	                <a href="support.php"><li id="selPge_5">Support</li></a>
	                <a href="legal.php"><li id="selPge_6">legal</li></a>
	                <a onclick="indxPlcy1()"><li id="selPge_7">Policy</li></a>
                </ul>
                <ul id="ftr_2" class="ftNav dN">
                    <a href="https://www.facebook.com/aviyon" target="_blank"><li><i id=""></i>Facebook</li></a>
	                <a href="https://twitter.com/Aviyon_com" target="_blank"><li><i id=""></i>Twitter</li></a>
	                <a href="https://plus.google.com/+Aviyon" target="_blank"><li><i id=""></i>Google+</li></a>
	                <a href="http://www.youtube.com/aviyon365" target="_blank"><li><i id=""></i>Youtube</li></a>
                </ul>
                <small class="ftrB">
                    Founded & Created by <a href="https://www.facebook.com/Emmanuel.Moore" target="_blank">Emmanuel Moore</a></br>
                    &#169; aviyon.com 2015 <b>Beta</b>
                </small>
            </div>
        </footer>
        <! footer moudle 1 end -->
		</div>

		<!-- center -->
		<div class="uSplc fL">

			<!-- modTog_1 -->
			<div class="modTog_1">

				<!-- pstUsr_1b module -->
				<div id="pstUsr_1b" class="upstWprx upwr1 dN">
					<div class="upstHlrx">
						<textarea id="pst1ax" placeholder="Hello there, would you like to post something?" onfocus="prjxMt1c()"></textarea>
					</div>
					<div id="pst1bx" class="upstFtrx dN">
						<span id="" class="imgUplIcn1 cP" info1="photo upload"></span>
						<span id="" class="pstBtn1 cP fR">post</span>
					</div>
				</div>

				<!-- user post -->
				<div id="upst_1" class="upstWpr">
					<div class="upstHdr">
						<a href="user.php?="><img src="img/temp/usr2.jpg" /></a>
						<div class="upstInf diB">
							<a href="user.php?="><span class="upstNme fL">Emmanuel Moore</span></a>
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
										<a href="user.php?=">Emmanuel Moore</a><span id="verified" ver1="Verified"></span>
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


				<!-- user post -->
				<div id="upst_2" class="upstWpr">
					<div class="upstHdr">
						<a href="user.php?="><img src="img/temp/usr3.png" /></a>
						<div class="upstInf diB">
							<a href="user.php?="><span class="upstNme fL">Aviyon</span></a>
							<span id="verified" ver1="Verified"></span><br>
							<span class="tmeStmp">7 mins ago</span>
						</div>
					</div>
					<div class="upstBdy">Hello everyone how's it going this awesome work day.</div>
					<div class="upstFtrWpr">
						<!---- footer icons -->
						<div class="upstIco">
							<div><span id="favIcn" class="favIcn cP" info1="Favorite"></span> &#8226; 5</div>
							<div><span id="cmtIcn" class="cmtIcn cP" info1="Comment" onclick="upTgle('ucmta_2')"></span> &#8226; 2</div>
							<div>
								<ul id="pstSet_2" class="pstSet psFx1 pA dN">
									<li id="">update</li>
									<li id="" onclick="upTgle('upst_2')">hide</li>
									<li id="">delete</li>
									<li id="">report</li>
								</ul>
								<span id="setIcn_!" class="setIcn cP" info1="Settings" onclick="upTgle('pstSet_2')"></span>
							</div>
						</div>
						<div id="ucmta_2" class="dN">

							<!-- user comment -->
							<div id="ucmt_3" class="ucmtWpr dB">
								<a href="user.php?=" class="ucmtImg"><img src="img/temp/usr2.jpg" /></a>
								<div class="ucmtIfo diB">
									<span class="sm2">
										<a href="user.php?=">Emmanuel Moore</a><span id="verified" ver1="Verified"></span>
										12 mins ago
										<div><span id="favIcn" class="favIcn cP" info1="Favorite"></span> &#8226; 5</div>
										<div>
											<ul id="pstCmt_3" class="pstSet psFx2 pA dN">
												<li id="">update</li>
												<li id="" onclick="upTgle('ucmt_3')">hide</li>
												<li id="">delete</li>
												<li id="">report</li>
											</ul>
											<span id="setIcn" class="setIcn cP" info1="Settings" onclick="upTgle('pstCmt_3')"></span>
										</div>
									</span>
									<span>Yes! we're doing amazing no day for complaining.</span>
								</div>
							</div>

							<!-- user comment -->
							<div id="ucmt_4" class="ucmtWpr dB">
								<a href="user.php?=" class="ucmtImg"><img src="img/temp/usr3.png" /></a>
								<div class="ucmtIfo diB">
									<span class="sm2">
										<a href="user.php?=">Aviyon</a><span id="verified" ver1="Verified"></span>
										12 mins ago
										<div><span id="favIcn" class="favIcn cP" info1="Favorite"></span> &#8226; 5</div>
										<div>
											<ul id="pstCmt_4" class="pstSet psFx2 pA dN">
												<li id="">update</li>
												<li id="" onclick="upTgle('ucmt_4')">hide</li>
												<li id="">delete</li>
												<li id="">report</li>
											</ul>
											<span id="setIcn" class="setIcn cP" info1="Settings" onclick="upTgle('pstCmt_4')"></span>
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

			<!-- modTog_2 -->
			<div class="modTog_2 dN">

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
				<!-- content view -->
				<img class="usPhVw diB uvwPh1a" src=""/>

				<div class="uSplHdr mgPsh1">
					<div class="diB">April &#8226; 2015</div>
					<div class="fR">
						<div class="modTog_1c dN">
							<span id="uvwPh1a" class="uvwIcn1a hdrSet cP" info2="Stacked" onclick="uvwPh1a()"></span>
							<span id="uvwPh1b" class="uvwIcn1b hdrSet cP" info2="Stacked" onclick="uvwPh1a()"></span>
							<span id="uvwPh2a" class="uvwIcn2a hdrSet cP" info2="Grid" onclick="uvwPh1b()"></span>
							<span id="uvwPh2b" class="uvwIcn2b hdrSet cP" info2="Grid" onclick="uvwPh1b()"></span>
						</div>
						<div class="dI">
							<ul id="usrSet2_1" class="pstSet psFx2x pA dN">
								<li id="">edit</li>
								<li id="">delete</li>
							</ul>
							<span id="setCnt_2a" class="setIcn hdrSet cP" info2="Settings" onclick="upTgle('usrSet2_1')"></span>
						</div>
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


			</div>

			<!-- modTog_2 -->
			<div class="modTog_3 dN">

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

				<div class="uSplHdr mgPsh1">
					<div class="diB">April &#8226; 2015</div>
					<div class="fR">
						<div class="modTog_2c dN">
							<span id="uvwVd1a" class="uvwIcn1a hdrSet cP" info2="Stacked" onclick="uvwVd1a()"></span>
							<span id="uvwVd1b" class="uvwIcn1b hdrSet cP" info2="Stacked" onclick="uvwVd1a()"></span>
							<span id="uvwVd2a" class="uvwIcn2a hdrSet cP" info2="Grid" onclick="uvwVd1b()"></span>
							<span id="uvwVd2b" class="uvwIcn2b hdrSet cP" info2="Grid" onclick="uvwVd1b()"></span>
						</div>
						<div class="dI">
							<ul id="usrSet3_1" class="pstSet psFx2x pA dN">
								<li id="">edit</li>
								<li id="">delete</li>
							</ul>
							<span id="setCnt_3a" class="setIcn hdrSet cP" info2="Settings" onclick="upTgle('usrSet3_1')"></span>
						</div>
					</div>
				</div>
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


			<!-- modTog_2 -->
			<div class="modTog_5 dN">Aviyon believes in creating each & every project from scratch. Our projects are completely unique, implementing various new concepts & logic based strategies. We take great pride and creating software that's easily identifiable and noticeable with our brand. Many hours of research is taken before each & every creation. Our design, logic, minor detailing, front & back end engineering or all taken very seriously, which can be seen in anything we create.</div>

		</div>

			<!-- rigt -->
			<div class="uSpla diB fR">
				<ul class="prjLst">
					<a href="project.php?p="><li>@VGS</li></a>
					<a href="project.php?p="><li>@PGR</li></a>
					<a href="project.php?p="><li>@Merra</li></a>
					<a href="project.php?p="><li>@GreenHeartPT</li></a>
				</ul>

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

