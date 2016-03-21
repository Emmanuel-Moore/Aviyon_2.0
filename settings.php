<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>Settings</title>
<?php include_once("php_includes/header/meta_tags.php"); ?>
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
function selPge() {
	$("#selPge_3x").css("color","#db46f2");
}
</script>
</head>
<body onload="selPge()">
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

<div class="bodyWpr">
	<!--- usrMnu module start -->
	<div class="lgsuxHlr fR">
		<div class="lgsuxFx2_5">
			<ul id="lgsuxWpr" class="lgsuxWpr pF dN">
				<li><i id="ntiIcn"></i>Notifications</li>
				<li><i id="ntiIcn"></i>Projects</li>
				<li><i class="setIcn"></i>Settings</li>
				<li><i id="logout"></i>Logout</li>
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
			    <ul class="lglxLiWpr setxul fL">
				<div class="lglTle">Settings</div>
				    <li id="st_1ax" class="selx1" onclick="st_1a()">Profile</li>
					    <ul id="st_1a" class="">
						    <li>Name</li>
						    <li>Date of Birth</li>
						    <li>About</li>
						    <li>Connection links</li>
					    </ul>
				    <li id="st_2ax" onclick="st_2a()">Account</li>
					    <ul id="st_2a" class="dN">
						    <li>Email accounts</li>
						    <li>Phone</li>
						    <li>Join date</li>
						    <li>Password</li>
						    <li>Deactivate</li>
					    </ul>
				    <li id="st_3ax" onclick="st_3a()">Projects</li>
					    <ul id="st_3a" class="dN">
						    <li>Name</li>
						    <li>Content</li>
						    <li>About</li>
						    <li>Admins</li>
					    </ul>
				    <li id="st_4ax" onclick="st_4a()">Save</li>
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
	                    <!-- package as a variable -->
					    <li id="selPge_3x"><a>Settings</a></li>
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
		</div>

		<div class="lglxWpr diB fR">
			<!--- lglxMd1 -->
			<div class="setxMd1">
					<!------------------------ mod st_1b -->
					<div id="st_1b" class="">
					    <!-- option -->
					    <div id="st_1c_1" class="setxBlk">
					        <header>Name</header>
					        <div class="setxInr">
					            <input id="" placeholder="First name" value="Emmanuel"/>
					            <input id="" placeholder="Last name" value="Moore"/>
					        </div>
					    </div>

					    <!-- option -->
					    <div id="st_1c_2" class="setxBlk">
					        <header>Date of Birth</header>
					        <div class="setxInr">
					            <input id="" placeholder="mm/dd/yyyy" value=""/>
					        </div>
					    </div>

					    <!-- option -->
					    <div id="st_1c_3" class="setxBlk">
					        <header>About</header>
					        <div class="setxInr">
					            <textarea placeholder="Something awesome about myself."></textarea>
					        </div>
					    </div>

					    <!-- option -->
					    <div id="st_1c_4" class="setxBlk">
					        <header>Connection links</header>
					        <div class="setxInr">
					            <input id="" placeholder="website" value=""/>
					            <input id="" placeholder="facebook" value=""/>
					            <input id="" placeholder="twitter" value=""/>
					            <div class="addxPls"><span>+</span>Add another</div>
					        </div>
					    </div>
					</div>

					<!------------------------ mod st_2b -->
					<div id="st_2b" class="dN">
					    <!-- option -->
					    <div id="st_2c_1" class="setxBlk">
					        <header>Email accounts</header>
					        <div class="setxInr">
					            <input id="" placeholder="Primary email" value="emmanuel.moore@live.com"/>
					            <input id="" placeholder="Alternative email" value="emmanuel.moore@aviyon.com"/>
					            <div class="addxPls"><span>+</span>Add another</div>
					        </div>
					    </div>

					    <!-- option -->
					    <div id="st_2c_2" class="setxBlk">
					        <header>Phone</header>
					        <div class="setxInr">
					            <input id="" placeholder="(---) --- ----" value=""/>
					            <div class="addxPls"><span>+</span>Add another</div>
					        </div>
					    </div>

					    <!-- option -->
					    <div id="st_2c_3" class="setxBlk">
					        <header>Join date</header>
					        <div class="setxInr">
					            <input id="" placeholder="mm/dd/yyyy" value="4/12/2015"/>
					        </div>
					    </div>

					    <!-- option -->
					    <div id="st_2c_4" class="setxBlk">
					        <header onclick="upTgle('setxPswd')" class="cP">Password</header>
					        <div id="setxPswd" class="setxInr dN">
					            <input id="" placeholder="Current Password" value=""/>
					            <input id="" placeholder="New Password" value=""/>
					            <input id="" placeholder="Re-type Password" value=""/>
					        </div>
					    </div>

					    <!-- option -->
					    <div id="st_2c_4" class="setxBlk">
					        <header onclick="upTgle('setxDect')" class="cP">Deactivate</header>
					        <div id="setxDect" class="setxInr dN">
					            <textarea id="" placeholder="Would you like to explain why your leaving?"></textarea>
					        </div>
					    </div>
					</div>

					<!------------------------ mod st_3b -->
					<div id="st_3b" class="dN">
					    <!-- option -->
					    <div id="st_3c_1" class="setxBlk">
					        <header>Projects</header>

                            <div class="prjVwxPsh">
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

					        <!----------- add project -->
					        <div class="addxPls"><span>+</span>Add another</div>

					    </div>

                        <div class="dN">
					        <!-- option -->
					        <div id="st_3c_2" class="setxBlk">
					            <header>Content</header>
					        </div>

					        <!-- option -->
					        <div id="st_3c_3" class="setxBlk">
					            <header>About</header>
					        </div>

					        <!-- option -->
					        <div id="st_3c_4" class="setxBlk">
					            <header>Admins</header>
					        </div>
					    </div>

					</div>

					<!------------------------ mod st_4b -->
					<div id="st_4b" class="dN">
					    st_4b
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

