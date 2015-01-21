<?php
session_start();
//var_dump($_SESSION);
if(isset($_SESSION["user"])){
	$str = "<a href='mySpace.php'><span style='color:#0099FF;font-weight:bold;font-size:14px;'>".$_SESSION["user"]."</span></a>&nbsp;&nbsp;<a href='logout.php' style='color:#999999;font-size:14px;'>退出</a>";
}
else{
	$str = '<a href="login.php" style="color:#666666;font-size:14px;">登录</a>&nbsp;&nbsp;<a href="register.php" style="color:#666666;font-size:14px;">注册</a>';
}

$nav = array(
			array('href'=>'index.php','label'=>'首页','links'=>array('index.php')),
			array('href'=>'study.php','label'=>'种子课程','links'=>array('study.php','website.php','database.php')),
			//array('href'=>'project.php','label'=>'萌芽项目','links'=>array('project.php')),
			array('href'=>'team.php','label'=>'梦想团队','links'=>array('team.php')),
			array('href'=>'mySpace.php','label'=>'我的空间','links'=>array('mySpace.php','myStudy.php','myCourse.php','createTeam.php','createProject.php')),
			array('href'=>'discuss.php','label'=>'讨论','links'=>array('discuss.php')),
			array('href'=>'about.php','label'=>'关于','links'=>array('about.php'))
		);
$current_page = $_SERVER["REQUEST_URI"];
$current_page = preg_replace("/\?.*/","",$current_page);
$current_page = preg_replace("/\/sgfw\//","",$current_page);
$current_page = trim($current_page,"\/");
$nav_str = "";
foreach($nav as $key=>$nav_item){
	$nav_str .='
	  <a href="'.$nav_item["href"].'">
		<div style="text-align:center;float:left;" class="nav_item'.(in_array($current_page,$nav[$key]["links"])?" selected":"").'">
		  '.$nav_item["label"].'
		</div>
	  </a>
	';
}
$header = <<<EOF
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {text-decoration:none;color:#5D5D5D;font-weight:bold;}
	  .nav_item {padding:0 16px;}
	  .selected,.nav_item:hover{height:40px;color:#FF9900;border-bottom:2px solid #FF9900;}
	</style>
	<div id="logo" style="margin-top:-30px;overflow:hidden;background-color:#F3F3F3;width:100%;position:fixed;z-index:9999;">
	  <div style="margin:0px 0px 0 0;float:right;font-weight:bold;position:fixed;right:238px;top:4px;">
	    $str
	  </div>
	  <div style="height:80px;border-bottom:2px solid #0099FF;">
	  <div style="margin:14px 0 0 200px;float:left;width:238px;">
	    <span style="font-size:28px;font-weight:bold;color:#FF9900;">梦&nbsp;&nbsp;想&nbsp;&nbsp;学&nbsp;&nbsp;院</span><br />
		<!--<span style="color:#FF9900;font-size:14px;">让&nbsp;&nbsp;梦&nbsp;&nbsp;想&nbsp;&nbsp;在&nbsp;&nbsp;时&nbsp;&nbsp;光&nbsp;&nbsp;中&nbsp;&nbsp;飞&nbsp;&nbsp;舞</span><br />-->
		<span style="color:#FF6600;font-size:14px;">梦想科技 | I Dream, I Do, I Succeed!</span>
	  </div>
	  <div id="intro" name="intro" style="width:680px;font-size:20px;float:left;margin:40px 0 0 140px;">
	    $nav_str
	  </div>
	  </div>
	  <div style="clear:float;clear:both;"></div>
	</div>
EOF;
	echo $header;