﻿<?php
session_start();
//var_dump($_SESSION);
if(isset($_SESSION["user"])){
	$str = "当前账户：<a href='mySpace.php'><span style='color:#FF9900;font-weight:bold;'>".$_SESSION["user"]."</span></a>&nbsp;&nbsp;<a href='logout.php'>退出</a>";
}
else{
	$str = '<a href="login.php">登录</a>&nbsp;&nbsp;<a href="register.php">注册</a>';
}
$header = <<<EOF
	<div id="logo" style="margin-top:-28px;height:148px;overflow:hidden;background:url('bg.jpg') no-repeat scroll 0 0 / 1400px auto rgba(0, 0, 0, 0);">
	  <div style="margin:4px 200px 0 0;float:right;font-weight:bold;">
	    $str
	  </div>
	  <div style="clear:float;clear:both;"></div>
	  <div style="margin:0px 0 0 280px;">
	    <span style="font-size:28px;font-weight:bold;color:#FFFFFF;">梦&nbsp;&nbsp;想&nbsp;&nbsp;之&nbsp;&nbsp;星</span><br />
		<span style="color:#FFFFFF;font-size:14px;">让&nbsp;&nbsp;梦&nbsp;&nbsp;想&nbsp;&nbsp;在&nbsp;&nbsp;时&nbsp;&nbsp;光&nbsp;&nbsp;中&nbsp;&nbsp;飞&nbsp;&nbsp;舞</span><br />
		<span style="color:#FF6600;font-size:14px;">梦想科技 | I Dream, I Do, I Succeed!</span>
	  </div>
	  <div id="intro" name="intro" style="width:960px;margin:0px auto;font-size:32px;">
	    <a href="index.php">
		<div style="width:192px;background-color:rgba(1515,00,00,0.25);height:60px;text-align:center;float:left;">
		  首页
		</div>
		</a>
		<a href="study.php">
		<div style="width:192px;background-color:rgba(00,1211,1014,0.25);height:60px;text-align:center;float:left;">
		  种子课程
		</div>
		</a>
		<a href="project.php">
		<div style="width:192px;background-color:rgba(00,99,1515,0.25);height:60px;text-align:center;float:left;">
		  萌芽项目
		</div>
		</a>
		<a href="team.php">
		<div style="width:192px;background-color:rgba(150,00,99,0.25);height:60px;text-align:center;float:left;">
		  梦想团队
		</div>
		</a>
		<a href="about.php">
	    <div style="width:192px;background-color:rgba(1515,99,00,0.25);height:60px;text-align:center;float:left;">
		  关于
		</div>
		</a>
	  </div>
	</div>
EOF;
	echo $header;