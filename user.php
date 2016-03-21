<?php
include_once("php_includes/aviy_code.php");
include_once("php_includes/ch4l7s2.php");
error_reporting(-1);

$hdWpr1 = "";
$lgnSgn1 = "";
$hdWpr1 = 'mnHdr1AFx';
$lgnSgn1 = 'lgsuxfx1A';

//varablile presets
$u = "";
$bnrEdt = "";
$picEdt = "";
$uSerPic = "";
$banNer = "";
$imp_pic = "";
$imp_banner = "";
$vUp = "";
$imp_name = "";
$pGt1 = "";
$pGt2 = "";
$imp_CntUsr = "";
$tmIpt = "";
$prIpt = "";
$cnIpt = "";
$flIpt = "";
$CntCnPh = "";
$CntFlPh = "";
$uIf = "";
$uIc = "";
$uIj = "";
$imp_proj = "";
$error = "";
$error = 'Something went wrong';


//page credentials
$u = '@Aviyon';


//main picture data import
$bnrEdt = '<span id="uhdImgCh_1" class="imgUplIcn2 cP pA" info1="Edit Banner"></span>';
$picEdt = '<span id="uhdImgCh_2" class="imgUplIcn2 cP pA" info1="Edit Profile Pic"></span>';

$uSerPic = $row["userPic"];
$banNer = $row["banner"];

$imp_pic = '<img class="uHdImg2 pA" src="user/'.$u.'/'.$uSerPic.'" alt="'.$u.'"/>';
if($uSerPic == NULL || $uSerPic = ""){
$imp_pic = '<img class="uHdImg2 pA" src="img/temp/user-pic_1.0.png">';
}
$imp_banner = '<img class="uHdImg1" src="user/'.$u.'/'.$banNer.'" alt="'.$u.'">';
if($banNer == NULL || $banNer = ""){
$imp_banner = '<img class="uHdImg1" src=""/>';
}

$vUp = '<span id="verified" ver1="Verified">';
$imp_name = '<span>'.$u.''.$vUp.'</span>';


$pGt1 = '2';

if ($pGt1 == '1'){
    $pGt1 = 'User Page';
    $pGt2 = '';
} else if ($pGt1 == '2'){
    $pGt1 = 'Company Page';
    $pGt2 = '<li id="modTog_4a" onclick="modTog_4()">Forum</li>';
} else {
    $pGt1 = ''.$error.'';
}

$pGt = '<span class="uHdTil">'.$pGt1.'</span>';
$imp_CntUsr = '
<a href="user.php?u=">
	<div class="prjxUsr">
		<img src="img/temp/usr2.jpg"/>
		<a href="user.php?u=" class="prjxUsr1a diB fL">Emmanuel Moore</a><span id="verified" ver1="Verified"></span>
	</div>
</a>';


$tmIpt = $query_count[0];
$prIpt = $query_count[0];
$cnIpt = $query_count[0];
$flIpt = $query_count[0];

$CntCnPh = '<a href="user.php?="><img src=""/></a>';
$CntFlPh = '<a href="user.php?="><img src=""/></a>';

//user connect buttons
$isFriend = false;
$ownerBlockViewer = false;
$viewerBlockOwner = false;
if($u != $log_username && $user_ok == true){
    $friend_check = "SELECT id FROM friends WHERE user1='$log_username' AND user2='$u' AND accepted='1' OR user1='$u' AND user2='$log_username' AND accepted='1' LIMIT 1";
    if(mysqli_num_rows(mysqli_query($db_conx, $friend_check)) > 0){
            $isFriend = true;
    }

    $follow_check = "SELECT id FROM follow WHERE user1='$log_username' AND user2='$u' OR user1='$u' AND user2='$log_username' LIMIT 1";
    if(mysqli_num_rows(mysqli_query($db_conx, $follow_check)) > 0){
            $isfollow = true;
    }

    $join_check = "SELECT id FROM follow WHERE user1='$log_username' AND user2='$u' OR user1='$u' AND user2='$log_username' LIMIT 1";
    if(mysqli_num_rows(mysqli_query($db_conx, $join_check)) > 0){
            $isjoin = true;
    }

    $block_check1 = "SELECT id FROM blockedusers WHERE blocker='$u' AND blockee='$log_username' LIMIT 1";
    if(mysqli_num_rows(mysqli_query($db_conx, $block_check1)) > 0){
            $ownerBlockViewer = true;
    }
    $block_check2 = "SELECT id FROM blockedusers WHERE blocker='$log_username' AND blockee='$u' LIMIT 1";
    if(mysqli_num_rows(mysqli_query($db_conx, $block_check2)) > 0){
            $viewerBlockOwner = true;
    }
}

$cnBtn = '';
$flBtn = '';
$block_button = '';
if($isFriend == true){
$uIc = '<span id="cnbtn" class="cnt-btn" onclick="cnTg(\'uncnct\',\''.$u.'\',\'cnbtn\')">Connected</span>';
} else if($user_ok == true && $u != $log_username && $ownerBlockViewer == false){
$uIc = '<span id="cnbtn" class="cnt-btn" onclick="cnTg(\'cnct\',\''.$u.'\',\'cnbtn\')">Connect</span>';
}

if($isfollow == true){
$uIf = '<span id="flbtn" class="cnnnct-btn-b" onclick="flTg(\'unfllw\',\''.$u.'\',\'flbtn\')">Following</span>';
} else if($user_ok == true && $u != $log_username && $ownerBlockViewer == false){
$uIf = '<span id="flbtn" class="cnnnct-btn-a" onclick="flTg(\'fllw\',\''.$u.'\',\'flbtn\')">Follow</span>';
}

if($isjoined == true){
$uIj = '<span id="jnbtn" class="joinIcn hdrSet cP" info2="Join Team" onclick="flTg(\'unjnb\',\''.$u.'\',\'jnbtn\')"></span>';
} else if($user_ok == true && $u != $log_username && $ownerBlockViewer == false){
$uIj = '<span id="jnbtn" class="joinIcn hdrSet cP" info2="Join Team" onclick="flTg(\'jnb\',\''.$u.'\',\'jnbtn\')"></span>';
}

if($viewerBlockOwner == true){
$uIb = '<span class="block_btn" onclick="confd.render(\'unblock\',\''.$u.'\',\'blockBtn\')">Unblock User</span>';
} else if($user_ok == true && $u != $log_username){
$uIb = '<span class="block_btn" onclick="confd.render(\'This user will not be able to interact with you.\',\''.$u.'\',\'blockBtn\')">Block User</span>';
}




//projects
$prjIpt = $row["projects"];

if($prjIpt < 1) {
    $imp_proj = '<li>'.$u.' hasn\'t any projects yet.</li>';
} else if($prjIpt == NULL) {
    $imp_proj = '<a href="project.php?p='.$prjNme.'"><li>'.$prjNme.'</li></a>';
} else {
    $imp_proj = ''.$error.'';
}


?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title><?php echo $u; ?></title>
<?php include_once("php_includes/header/meta_tags.php"); ?>
<link href="css/master_stylesheet.css" rel="stylesheet">
<script type="text/javascript">
<!--
document.write('<script type=\"text/javascript" src=\"js\/master_javascript_header.js"><\/script>');
//-->
</script>
</head>
<body>
<?php
include_once("php_includes/header.php");
include_once("php_includes/trendCnt.php");
include_once("php_includes/user/fdCnt.php");
include_once("php_includes/user/phCnt.php");
include_once("php_includes/user/vdCnt.php");
include_once("php_includes/user/fmCnt.php");
include_once("php_includes/user/abCnt.php");

echo ''.$mnHdr.''.$lgSnMd.''.$plcyMd.'';
?>

<div class="uHdInr">
    <?php echo ''.$mnHdr.''.$lgSnMd.''.$plcyMd.''; ?>
</div>

<!------ user header start -->
<div class="uHdWpr">
	<div class="uHdInr">
		<?php echo ''.$bnrEdt.''.$picEdt.''.$imp_pic.''; ?>
		<div class="uHdNme diB pA">
			<?php echo ''.$imp_name.''.$pGt.''; ?>
		</div>
	</div>
	<?php echo $imp_banner; ?>
</div>
<!------ user header end -->
<!----------- follow connect links -->
<div class="lpeWpr">
	<div class="lpeBtn pR">
		<?php echo ''.$uIf.''.$uIc.''.$uIb.''; ?>
	</div>
</div>
<!-- main nav start -->
<div class="uHdWpr2">
	<div class="uHdInr">
		<ul class="uHdLi1 diB">
			<li id="modTog_1a" class="uHdAct" onclick="modTog_1()">Post</li>
			<li id="modTog_2a" onclick="modTog_2()">Photos</li>
			<li id="modTog_3a" onclick="modTog_3()">Videos</li>
			<?php echo $pGt2; ?>
			<li id="modTog_5a" onclick="modTog_5()">About</li>
		</ul>
	</div>
</div>
<!-- main nav end -->
<!-- main nav2 start -->
<div class="uHdWpr3">
	<div class="uHdInr">
		<div class="uSpla">
			<span>The Team &#8226; <?php echo $tmIpt; ?></span>
			<div class="diB fR">
			    <?php echo $uIj; ?>
			</div>
		</div>
		<div class="uSplb diB">
            <?php echo ''.$fdCntr.''.$phCntr.''.$vdCntr.''.$fmCntr.''.$abCntr.'' ?>
		</div>
		<div class="uSpla lnk2">
		    <!-- make this tab content -->
			<a href="#"><span>Projects &#8226; <?php echo $prIpt; ?></span></a>
		</div>
	</div>
</div>
<!-- main nav2 start -->

<div class="bodyWpr2">
	<!-- main content start -->
	<div class="diB">
		<!-- left -->
		<div class="uSpla fL">
			<!-- team users -->
			<?php echo $imp_CntUsr; ?>
			<!-- connections -->
			<div class="uSplHdr cP">Connections &#8226; <?php echo $cnIpt; ?></div>
			<div class="prjxUsr">
			    <?php echo $CntCnPh; ?>
			</div>
			<!-- followers -->
			<div class="uSplHdr cP">Followers &#8226; <?php echo $flIpt; ?></div>
			<div class="prjxUsr">
				<?php echo $CntFlPh; ?>
			</div>
            <?php
            include_once("php_includes/footer.php");
            ?>
		</div>

		<!-- center -->
		<div class="uSplc fL">
			<?php echo ''.$fdVw.''.$phVw.''.$vdVw.''.$fmVw.''.$abVw.''; ?>
		</div>

		<!-- rigt -->
		<div class="uSpla diB fR">
		    <ul class="prjLst">
		        <?php echo $imp_proj; ?>
		    </ul>
			<!-- trending -->
			<a href="search.php?s=">
				<div class="uSplHdr">Trending</div>
			</a>
			<?php echo $imp_trend; ?>
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

