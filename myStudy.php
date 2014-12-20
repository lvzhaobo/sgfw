<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {color:#FFFFFF;text-decoration:none;}
	  .team a {color:#FF9900;text-decoration:none;margin:10px;}
	  table {font-size:13px;}
	  ul {margin:0 0 0 -20px;}
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include 'src/header.php'?>
	<div>
	  <div class="main index" style="padding-top:30px;width:960px;margin:0 auto;font-size:14px;min-height:400px;">
	    <div style="width:192px;float:left;position:fixed;font-weight:bold;font-size:16px;">
		  <a href="mySpace.php">
		  <div style="width:100%;height:40px;color:#000000;">
		    <span style="margin:0 0 0 20px;">基本信息</span>
		  </div>
		  </a>
		  <a href="myStudy.php">
		  <div style="width:100%;height:40px;color:#FF9900;">
		    <span style="margin:0 0 0 20px;">我的课程</span>
		  </div>
		  </a>
		  <a href="myDiscuss.php">
		  <div style="width:100%;height:40px;color:#000000;">
		    <span style="margin:0 0 0 20px;">学习讨论</span>
		  </div>
		  </a>
		</div>
		
		<div class="content" style="width:760px;float:left;margin:0 0 40px 200px;min-height:320px;">
		  <?php
			include 'db.php';
			//session_start();
			//var_dump($_SESSION);
			//$conn = mysql_connect("127.0.0.1","root");
			//mysql_select_db("sgfw");
			//var_dump("select * from sgfw_user where username='".$_SESSION["user"]."';");
			$data = array();
			if(isset($_SESSION["user"])){
				$result = mysql_query("select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'");
				//var_dump(mysql_error());
				$data = mysql_fetch_array($result);
			}
			if(!isset($data["id"]) or empty($data["id"])){
				echo "<script>alert('请先登录');window.location.href='login.php'</script>";
			}
			//var_dump($data);
		  ?>
		  <fieldset style="border:2px solid #FF0099;padding:0 10px;line-height:28px;">
		  <legend>我的课程</legend>
			<div>
			  <div style="width:480px;float:left;">
			  <div style="font-weight:bold;font-size:24px;color:#FF9900;float:left;width:360px;">
			  <?php $project = array("website"=>"网站设计",
										"database"=>"数据库",
										"php"=>"PHP");
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
		  </fieldset>
		  <fieldset style="border:2px solid #0099FF;padding:10px;line-height:22px;">
		    <legend>学习任务</legend>
			<div>
			  <span style="font-weight:bold;">第一周：建立项目，了解HTML基本语法和标签、CSS样式，完成个人简历网页。</span><a href="study/website/week1.php">学习要求</a>
			  <div>
			    <table>
				  <tr>
				    <th width="100px;">学习内容：</th>
					<td><ul>
					  <li>Notepad++使用</li>
					  <li>HTML元素（h1、table、a、hr、br、div等标签）</li>
					  <li>CSS样式（font-size、font-weight、color、background-color、width、height等）</li>
					  </ul></td>
				  </tr>
				</table>
			  </div>
			</div>
			<div>
			  <span style="font-weight:bold;">第二周：学习文档，分析网站基本结构，完成个人网站（自己感兴趣的网站）原型初步设计。</span>
			  <div>
			    <table>
				  <tr>
				    <th width="100px;">学习内容：</th>
					<td><ul>
					  <li>经典网页结构、布局分析</li>
					  <li>网站设计</li>
					  <li>软件开发流程文档</li>
					  </ul></td>
				  </tr>
				</table>
			  </div>
			</div>
			<div style="color:#888888;">
			  仅在本周任务基础上多显示一周任务。
			</div>
			<div style="border:1px solid #CCCCCC;height:40px;">
			  <form action="src/upload.php" method="post" enctype="multipart/form-data">
			    <input type="file" name="file" style="width:140px;" />
			    <button type="submit" style="margin:0 0 0 0px;font-weight:bold;width:60px;height:32px;background-color:#0099FF;border:2px solid #CCCCCC;">确定</button>
			  </form>
			</div>
		  </fieldset>
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
	<div id="footer" style="height:80px;background-color:#99FF00;padding:20px;">
	  <div style="text-align:center;">
	    @版权所有  2014·时光飞舞·梦想之星
	  </div>
	</div>
  </body>
</html>
<script>
<?php if(!empty($_GET["info"])){?>
alert("<?php echo $_GET["info"]?>");
window.location.href="myStudy.php";
<?php }?>
</script>