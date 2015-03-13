<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {color:#FFFFFF;text-decoration:none;}
	  .team a {color:#FF9900;text-decoration:none;margin:10px;}
	  table {font-size:13px;}
	  ul {margin:0 0 0 -20px;}
	  .btn,button{font-weight: bold; text-align:center;line-height: 26px; box-shadow: 0px 0px 2px rgb(220, 220, 220); width: 60px; font-size: 16px; border-radius: 0.5em; border: 2px solid #FF9900; color:#0099FF; background-color: rgb(255, 255, 255);}
	  .btn:hover,button:hover{border:2px solid #0099FF;color:#FF9900;}
	  .btn a {color:#0099FF;}
	  .btn a:hover {color:#FF9900;}
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include '../../src/header.php'?>
	<?php
			include '../../lib/db.php';
			$data = array();
			if(isset($_SESSION["user"])){
				$result = mysql_query("select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'");
				//var_dump(mysql_error());
				$data = mysql_fetch_array($result);
			}
			if(!isset($data["id"]) or empty($data["id"])){
				echo "<script>alert('请先登录');window.location.href='../login.php'</script>";
			}
		  ?>
	<div>
	  <div class="main index" style="padding-top:32px;min-width:960px;margin:0 auto;font-size:14px;min-height:400px;">
	    
	    <div style="width:200px;height:100%;z-index:0;float:left;position:fixed;font-weight:bold;font-size:16px;background-color:#F3F3F3;padding:10px 0;line-height:40px;border-right:2px solid #CCCCCC;">
		<div style="margin:10px 0;text-align:center;border-bottom:2px solid #FFFFFF;">
		  <div><img src="<?php echo $workspace."/data/upload/".str_replace("upload","",$data["img"])?>" style="width:80px;height:80px;border-radius:3em;" /></div>
		  <div style="line-height:28px;color:#666666;margin:5px 0;"><?php echo base64_decode($data["username"]);?></div>
		  <div style="color:#999999;font-size:13px;"><?php $time = $data["create_time"];$date = $time==0?"2014-10-24":date("Y-m-d H:i:s");echo "注册时间：".$date?></div>
		</div>
		<div style="text-align:center;">
		  <a href="index.php">
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
		<div class="content" style="width:600px;float:left;margin:0 0 40px 200px;padding:20px;min-height:320px;">
		  <fieldset style="border:2px solid #FF9900;padding:0 10px;line-height:28px;">
		  <legend><div style="font-weight:bold;font-size:16px;color:#0099FF;float:left;">
			  <?php $project = array("website"=>"网站设计",
										"database"=>"数据库",
										"php"=>"PHP",
										"jsp"=>"JSP",
										"c"=>"C语言基础",
										""=>"无课程");
							echo $project[$data["project"]];
					?>
			</div></legend>
			
			<?php if($data["project"]=="website"){?>
			<a href="myCourse.php?course=website">
			  <div style="border:2px solid #0099FF;font-size:20px;font-weight:bold;color:#FF9900;height:32px;padding:5px;margin:5px;text-align:center;width:100px;float:left;">开始学习</div>
			</a>
			<div style="border:2px solid #CCCCCC;font-size:20px;font-weight:bold;color:#00AAFF;height:32px;padding:5px;margin:5px;text-align:center;width:100px;float:left;">第一周</div>
			<div style="clear:float;clear:both;"></div>
			  <table style="font-size:14px;line-height:22px;">
			    <tr>
				  <th style="width:80px;">学习目标：</th>
				  <td>完成自己的静态网站设计和开发，在第六周进行DEMO。</td>
				</tr>
				<tr>
				  <th style="width:80px;">后续课程：</th>
				  <td>①PHP、JSP、C++等语言；②MySQL、SQL Server等数据库；③JavaScript</td>
				</tr>
				<tr>
				  <th>学习知识：</th>
				  <td>HTML、CSS、原型设计</td>
				</tr>
				<tr>
				  <th>兴趣建议：</th>
				  <td>①开发个人博客网站；②为学校社团开发网站；③为学校周边商店、书店等开发网站</td>
				</tr>
			  </table>
			  <?php }
				else if($data["project"]=="php"){
			  ?>
			  <a href="myCourse.php?course=php">
			  <div style="border:2px solid #0099FF;font-size:20px;font-weight:bold;color:#FF9900;height:32px;padding:5px;margin:5px;text-align:center;width:100px;float:left;">开始学习</div>
			</a>
			<div style="border:2px solid #CCCCCC;font-size:20px;font-weight:bold;color:#00AAFF;height:32px;padding:5px;margin:5px;text-align:center;width:100px;float:left;">第一周</div>
			<div style="clear:float;clear:both;"></div>
			  <table style="font-size:14px;line-height:22px;">
			    <tr>
				  <th style="width:80px;">学习目标：</th>
				  <td>完成论坛/团购网开发，在第八周进行DEMO。</td>
				</tr>
				<tr>
				  <th style="width:80px;">后续课程：</th>
				  <td>①PHP语言高级；②MySQL等数据库高级；③Linux服务器；④JavaScript</td>
				</tr>
				<tr>
				  <th>学习知识：</th>
				  <td>PHP基础使用、MySQL等数据库基础、产品设计、团队协作</td>
				</tr>
				<tr>
				  <th>兴趣建议：</th>
				  <td>①CMS类网站；②情侣空间；③音乐播放器</td>
				</tr>
			  </table>
			  <?php }
				else if($data["project"]=="jsp"){
			  ?>
			  <a href="myCourse.php?course=jsp">
			  <div style="border:2px solid #0099FF;font-size:20px;font-weight:bold;color:#FF9900;height:32px;padding:5px;margin:5px;text-align:center;width:100px;float:left;">开始学习</div>
			</a>
			<div style="border:2px solid #CCCCCC;font-size:20px;font-weight:bold;color:#00AAFF;height:32px;padding:5px;margin:5px;text-align:center;width:100px;float:left;">第一周</div>
			<div style="clear:float;clear:both;"></div>
			  <table style="font-size:14px;line-height:28px;">
			    <tr>
				  <th style="width:80px;">学习目标：</th>
				  <td>完成论坛/团购网开发，在第八周进行DEMO。</td>
				</tr>
				<tr>
				  <th style="width:80px;">后续课程：</th>
				  <td>①Java语言；②MySQL等数据库高级；③Linux服务器；④JavaScript</td>
				</tr>
				<tr>
				  <th>学习知识：</th>
				  <td>JSP基础使用、MySQL等数据库基础、产品设计、团队协作</td>
				</tr>
				<tr>
				  <th>兴趣建议：</th>
				  <td>①CMS类网站；②情侣空间；③音乐播放器</td>
				</tr>
			  </table>
			  <?php }
			  else if($data["project"]=="database"){?>
			  <a href="myCourse.php?course=database">
			  <div style="border:2px solid #0099FF;font-size:20px;font-weight:bold;color:#FF9900;height:32px;padding:5px;margin:5px;text-align:center;width:100px;float:left;">开始学习</div>
			</a>
			<div style="border:2px solid #CCCCCC;font-size:20px;font-weight:bold;color:#00AAFF;height:32px;padding:5px;margin:5px;text-align:center;width:100px;float:left;">第一周</div>
			<div style="clear:float;clear:both;"></div>
			    <table style="font-size:14px;line-height:22px;">
			    <tr>
				  <th style="width:80px;">学习目标：</th>
				  <td>学习数据库知识并使用MySQL完成论坛类项目，在第六周进行DEMO。</td>
				</tr>
				<tr>
				  <th style="width:80px;">后续课程：</th>
				  <td>①PHP、JSP、C++等语言；②MySQL、SQL Server等数据库；③JavaScript</td>
				</tr>
				<tr>
				  <th>学习知识：</th>
				  <td>SQL语句、MySQL安装、MySQL增删改查、MySQL和PHP/JSP交互、数据库设计</td>
				</tr>
				<tr>
				  <th>兴趣建议：</th>
				  <td>①开发个人博客网站；②开发小型论坛；③为学校周边商店、书店等开发网站</td>
				</tr>
			  </table>
			  <?php }
			  else if($data["project"]=="c"){?>
			  <a href="myCourse.php?course=c">
			  <div style="border:2px solid #0099FF;font-size:20px;font-weight:bold;color:#FF9900;height:32px;padding:5px;margin:5px;text-align:center;width:100px;float:left;">开始学习</div>
			</a>
			<div style="border:2px solid #0099FF;font-size:20px;font-weight:bold;color:#FF9900;height:32px;padding:5px;margin:5px;text-align:center;width:100px;float:left;">第一周</div>
			<div style="clear:float;clear:both;"></div>
			<div>
			  <img src="../../src/images/c.jpg" style="width:200px;height:140px;"/>
			</div>
			  <?php }
			  else{?>
			    <?php if(empty($data["project"])){?>
			    <div>还没有课程，去选择课程......</div>
			    <div class="btn" style="margin:10px;">
				  <a href="../study.php">
				  GO
				  </a>
				</div>
			  <?php }
			  }?>
			  </div>
			</div>
		  </fieldset>
		</div>
		<div class="project_item" style="width:300px;float:right;padding:10px 20px 10px 20px;border-left:2px solid #CCCCCC;">
		
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
  </body>
</html>
<script>
<?php if(!empty($_GET["info"])){?>
alert("<?php echo $_GET["info"]?>");
window.location.href="myStudy.php";
<?php }?>
</script>