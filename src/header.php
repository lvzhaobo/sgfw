<?php
session_start();
//var_dump($_SESSION);
$workspace = "http://".$_SERVER["HTTP_HOST"]."/";

if((time()-$_SESSION["login_start"])>=1800){
	unset($_SESSION["user"]);
	unset($_SESSION["login_start"]);
}

$_SESSION["login_start"] = time();

if(isset($_SESSION["user"]) && $_SESSION["user"]!=""){
	$str = "<a href='".$workspace."modules/myspace/index.php'><span style='color:#0099FF;font-weight:bold;font-size:14px;'>".$_SESSION["user"]."</span></a>&nbsp;&nbsp;<a href='".$workspace."modules/logout.php' style='color:#999999;font-size:14px;'>退出</a>";
}
else{
	$str = '<a href="'.$workspace.'modules/login.php" style="color:#666666;font-size:14px;">登录</a>&nbsp;&nbsp;<a href="'.$workspace.'modules/register.php" style="color:#666666;font-size:14px;">注册</a>';
}
$nav = array(
			array('href'=>$workspace.'index.php','label'=>'首页','links'=>array('index.php')),
			array('href'=>$workspace.'modules/study.php','label'=>'种子课程','links'=>array('modules/study.php','course/website.php','course/database.php','course/php.php','course/c.php','course/jsp.php')),
			//array('href'=>'project.php','label'=>'萌芽项目','links'=>array('project.php')),
			array('href'=>$workspace.'modules/team.php','label'=>'梦想团队','links'=>array('modules/team.php')),
			array('href'=>$workspace.'modules/myspace/index.php','label'=>'我的空间','links'=>array('modules/myspace/index.php','modules/myspace/myStudy.php','modules/myspace/myCourse.php','modules/createTeam.php','modules/createProject.php')),
			array('href'=>$workspace.'modules/discuss.php','label'=>'讨论','links'=>array('modules/discuss.php')),
			array('href'=>$workspace.'modules/about.php','label'=>'关于','links'=>array('modules/about.php'))
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
	  .selected,.nav_item:hover{height:28px;color:#FF9900;#border-bottom:2px solid #FF9900;}
	</style>
	<div id="logo" style="height:68px;margin-top:-30px;background-color:#FEFEFE;width:100%;position:fixed;z-index:9999;box-shadow:0 1px 5px #999999;">
	  <div style="margin:0px 0px 0 0;float:right;font-weight:bold;position:fixed;right:238px;top:4px;">
	    $str
	  </div>
	  <div style="height:60px;">
	    <div style="margin:8px 0 14px 200px;float:left;width:238px;">
	      <span style="font-size:26px;font-weight:bold;color:#FF9900;">梦&nbsp;想&nbsp;学&nbsp;院</span><br />
		  <!--<span style="color:#FF9900;font-size:14px;">让&nbsp;&nbsp;梦&nbsp;&nbsp;想&nbsp;&nbsp;在&nbsp;&nbsp;时&nbsp;&nbsp;光&nbsp;&nbsp;中&nbsp;&nbsp;飞&nbsp;&nbsp;舞</span><br />-->
		  <span style="color:#0099FF;font-size:11px;">I Dream, I Do, I Succeed!</span><br />
		  <!--<div style="color:#CCCCCC;font-size:13px;border-top:1px solid #CCCCCC;width:128px;margin:2px 0 0 0;">my.dreamcollege.cn</div>-->
	    </div>
	    <div id="intro" name="intro" style="font-size:16px;right:17%;top:32px;position:fixed;overflow:auto;">
	      $nav_str
	    </div>
	  </div>
	  <div style="clear:float;clear:both;"></div>
	</div>
EOF;
	echo $header;