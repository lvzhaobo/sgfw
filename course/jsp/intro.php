<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {color:#FFFFFF;text-decoration:none;}
	  .team a {color:#FF9900;text-decoration:none;margin:10px;}
	  table {font-size:13px;}
	  ul {margin:0 0 0 -20px;}
	  .project_item {background-color:#F2F2F2;padding:0 10px 10px 10px;;line-height:20px;font-size:13px;}
	  .project_item:hover{background-color:#EEEEEE;}
	  .intro_title {color:#666666;font-weight:bold;margin:5px 0 0 0;}
	  .intro_content {color:#999999;}
	  .current {color:#FF9900;}
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;font-size:14px;">
	<div style="border-bottom:2px solid #FFFFFF;padding:0 0 10px 0;">
		  <div style="font-size:18px;margin:10px 0px;color:#333333;font-weight:bold;">
		    网站设计
		  </div>
		  <div class="intro_title">
		    指导老师：
		  </div>
		  <div class="intro_content">
		    吕昭波&nbsp;&nbsp;lvzhaobo@dreamcollege.cn
		  </div>
		  <div class="intro_title">
		    学习目标：
		  </div>
		  <div class="intro_content">
		    团队一起完成论坛开发，第八周进行DEMO。
		  </div>
		  <div class="intro_title">
		    学习知识：
		  </div>
		  <div class="intro_content">
		    JSP常用技术、MySQL基础知识、项目设计、团队协作
		  </div>
		  <div class="intro_title">
		    后续课程：
		  </div>
		  <div class="intro_content">
		    ①PHP、JSP、C++等语言；②MySQL、SQL Server等数据库；③JavaScript
		  </div>
		  <div class="intro_title">
		    兴趣建议：
		  </div>
		  <div class="intro_content">
		    ①开发学校/学院论坛；②内容管理系统；③音乐播放器
		  </div>
		  </div>
		  <div>
		  <div style="font-size:18px;margin:10px 0px;color:#333333;font-weight:bold;">
		    学习周期<span style="color:#999999;font-size:14px;">（共8周）</span>
		  </div>
		  <?php 
			$host = $_SERVER["HTTP_HOST"];
			$uri = $_SERVER["REQUEST_URI"];
			$uri = preg_replace("/\?.*/","",$uri);
			$uri = "/sgfw";
			//$uri = preg_replace("/\/sgfw\//","",$uri);
			//$uri = trim($uri,"\/");
		  ?>
		  <div onclick='top.location="<?php echo "http://".$host.$uri."/myCourse.php?course=php"."&process=week1"?>"'>
		    <div class="intro_title<?php echo (!preg_match("/week1/",$_SERVER["REQUEST_URI"]) && !empty($_GET["process"]))?"":" current"?>">
		      第一周：环境准备、运行PHP程序
		    </div>
		  </div>
		  <div class="intro_content">
		    建立项目，安装XAMPP工具，PHP和HTML结合、交互，PHP计算器。
		  </div>
		  <div onclick='top.location="<?php echo "http://".$host.$uri."/myCourse.php?course=php"."&process=week2"?>"'>
		    <div class="intro_title<?php echo preg_match("/week2/",$_SERVER["REQUEST_URI"])?" current":""?>">
		      第二周：论坛架构设计，初步编写网站界面。
		    </div>
		  </div>
		  <div class="intro_content">
		    学习文档，分析并设计论坛网站基本结构，编写论坛界面（不要求美观）
		  </div>
		  </div>
  </body>
</html>