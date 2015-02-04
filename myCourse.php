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
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include 'src/header.php'?>
	<?php
			include 'db.php';
			$data = array();
			if(isset($_SESSION["user"])){
				$result = mysql_query("select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'");
				$data = mysql_fetch_array($result);
			}
			if(!isset($data["id"]) or empty($data["id"])){
				echo "<script>alert('请先登录');window.location.href='login.php'</script>";
			}
		  ?>
	<div>
	  <div class="main index" style="padding-top:32px;min-width:960px;margin:0 auto;font-size:14px;min-height:400px;">
	    
	    <div style="width:200px;height:100%;z-index:0;float:left;position:fixed;font-weight:bold;font-size:16px;background-color:#F3F3F3;padding:10px 0;line-height:40px;border-right:2px solid #CCCCCC;">
		<div style="margin:10px 0;text-align:center;border-bottom:2px solid #FFFFFF;">
		  <div><img src="<?php echo $data["img"]?>" style="width:80px;height:80px;border-radius:3em;" /></div>
		  <div style="line-height:28px;color:#666666;margin:5px 0;"><?php echo base64_decode($data["username"]);?></div>
		  <div style="color:#999999;font-size:13px;"><?php $time = $data["create_time"];$date = $time==0?"2014-10-24":date("Y-m-d H:i:s");echo "注册时间：".$date?></div>
		</div>
		<div style="text-align:center;">
		  <a href="mySpace.php">
		  <div style="color:#000000;">
		    <span>基本信息</span>
		  </div>
		  </a>
		  <a href="myStudy.php">
		  <div style="color:#FF9900;">
		    <span>我的课程</span>
		  </div>
		  </a>
		  <a href="#">
		  <div style="color:#CCCCCC;">
		    <span>我的作业</span>
		  </div>
		  </a>
		  <a href="myResource.php">
		  <div style="color:#000000;">
		    <span>学习资源</span>
		  </div>
		  </a>
		</div>
		</div>
		
		<div class="content" style="width:800px;float:left;margin:0 0 40px 200px;min-height:320px;">
		  
		  <!--<fieldset style="border:2px solid #FF0099;padding:0 10px;line-height:28px;">
		  <legend>我的课程</legend>
			<div>
			  <div style="width:480px;float:left;">
			  <div style="font-weight:bold;font-size:24px;color:#FF9900;float:left;width:360px;">
			  <?php $project = array("website"=>"网站设计",
										"database"=>"数据库",
										"php"=>"PHP",
										""=>"网页设计");
							echo $project[$data["project"]];
					?>
			</div>
			<div style="background-color:#FF9900;font-size:24px;font-weight:bold;color:#FFFFFF;height:32px;padding:5px;text-align:center;float:left;width:100px;">第一周</div>
			<div style="clear:float;clear:both;"></div>
			  <table style="font-size:14px;line-height:22px;">
			    <tr>
				  <th style="width:80px;">学习目标：</th>
				  <td>完成自己的静态网站设计和开发，在第六周进行DEMO。</td>
				</tr>
				<tr>
				  <th>学习知识：</th>
				  <td>HTML、CSS、原型设计</td>
				</tr>
				<tr>
				  <th>后续课程：</th>
				  <td>①PHP、JSP、C++等语言；②MySQL、SQL Server等数据库；③JavaScript</td>
				</tr>
				<tr>
				  <th>兴趣建议：</th>
				  <td>①开发个人博客网站；②为学校社团开发网站；③为学校周边商店、书店等开发网站</td>
				</tr>
			  </table>
			  </div>
			  <div style="float:left;">
			    
			    <div style="font-size:20px;color:0099FF;margin:10px 0;">梦想科技</div>
				<div style="font-weight:bold;">实现自己的梦想，帮助你实现梦想</div>
				<div style="" class="team"><a href="mySpace.php?user=burning">burning</a></div>
			  </div>
			</div>
		  </fieldset>-->
		  <iframe src="course/<?php echo empty($_GET["course"])?"website":$_GET["course"]?>/<?php echo empty($_GET["process"])?"week1":$_GET["process"]?>.php" style="border:0px;width:100%;height:800px;"></iframe>
		  
		</div>
		<div class="project_item" style="width:300px;float:right;padding:10px 20px 10px 20px;border-left:2px solid #CCCCCC;">
		<iframe src="course/<?php echo empty($_GET["course"])?"website":$_GET["course"]?>/intro.php?course=<?php echo $_GET["course"]."&process=".$_GET["process"]?>" style="border:0px;width:100%;height:800px;"></iframe>
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
  </body>
</html>
<script>
alert("测试阶段，以网站设计或PHP为例");
<?php if(!empty($_GET["info"])){?>
alert("<?php echo $_GET["info"]?>");
window.location.href="myStudy.php";
<?php }?>
</script>