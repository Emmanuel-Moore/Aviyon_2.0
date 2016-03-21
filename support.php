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
<title>Support</title>
<?php include_once("php_includes/header/meta_tags.php"); ?>
<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
function selPge() {
	$("#selPge_5").css("color","#db46f2");
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

            <div id="pstUsr_3b">
			    <!-- pstUsr_1b module -->
			    <div class="upstWprx upwr2 dB">
				    <div class="upstHlrx2">
					    <textarea id="pst3ax" placeholder="Post to our forum?" onfocus="prjxMt3()"></textarea>
				    </div>
				    <div id="pst3bx" class="upstFtrx dN">
					    <span id="" class="imgUplIcn1 cP" info1="photo upload"></span>
					    <span id="" class="pstBtn1 cP fR">post</span>
				    </div>
			    </div>

			    <script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
			    <div id="SkypeButton_Call_emmanuelphp_1" style="margin-bottom:-55px;">
			      <script type="text/javascript">
				    Skype.ui({
				      "name": "dropdown",
				      "element": "SkypeButton_Call_emmanuelphp_1",
				      "participants": ["aviyon"],
				      "imageSize": 32
				    });
			      </script>
			    </div>

			    <p>&nbsp;</p>
			    <div>&nbsp;</div>
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
				<h3>Our Promise</h3>
				<p>If there is an inquiry regarding software we have created, or edited please contact us immediately. We may also be contacted through social media. If you have a design or wanting something created, please email the contents to us. </p>
				<p>We take great pride and the creations we create or stamp of approval (An Aviyon Creation) is our official stamp of quality. If you have any advice, suggestions or complaints regarding anything please fell free to share them through our social media, email, our social mode forums.</p>
				<p>
				We Promise:
				<ul class="lix2">
					<li><span>To be accessible, friendly, and helpful at all times.</span></li>
					<li><span>Reply to your questions, advice or complaints via social media, forums in a timely matter.</span></li>
					<li><span>Reply to your emails and support tickets in a timley matter.</span></li>
					<li><span>To provide timely information regarding System Incidents.</span></li>
					<li><span>And lastly, we promise to listen.</span></li>
				</ul>
				</p>
				<p>We believe every customer deserves a high quality experience. If you feel you have been neglected of that please contact us.</p>

				<p>Need Help? Please email us at <a href="mailto:support@aviyon.com">support@aviyon.com</a> & <a href="mailto:aviyon.com@gmail.com">aviyon.com@gmail.com</a>, or Skype Aviyon.</p>

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

