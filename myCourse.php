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
	<div>
	  <div class="main index" style="padding-top:30px;min-width:960px;margin:0 auto;font-size:14px;min-height:400px;">
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
			<!--<div>
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
			</div>-->
			<!--<div style="color:#888888;">
			  仅在本周任务基础上多显示一周任务。
			</div>-->
			<div style="width:220px;padding:10px;border:1px solid #CCCCCC;height:32px;">
			  <form action="src/upload.php" method="post" enctype="multipart/form-data">
			    <input type="file" name="file" style="width:140px;" />
			    <button type="submit" style="margin:0 0 0 0px;font-weight:bold;width:60px;height:32px;background-color:#0099FF;border:2px solid #CCCCCC;">上传</button>
			  </form>
			</div>
		  </fieldset>
		  <div style="line-height:24px;margin:20px 0;">
		    <div style="font-size:24px;font-weight:bold;color:#333333;margin:10px 0;">
			  工具准备
			</div>
			<div style="">
			  <ul>
				<li>使用Notepad++编写代码，也可以使用文本编辑器或其他的编辑器。Notepad++下载地址：<a href="http://www.baidu.com/s?wd=notepad%2B%2B&rsv_spt=1&issp=1&f=8&rsv_bp=0&ie=utf-8&tn=baiduhome_pg&rsv_enter=1&inputT=2395">NotePad++下载</a>
				<li>使用火狐（Firefox）浏览器或谷歌（Chrome）浏览器，不要使用IE、360等
				<li>在桌面或D盘或E盘等任意一个地方建立一个文件，命名为“my.html”（要求后缀名为html，文件名可以为“my”或其他）
				<li>在火狐/谷歌浏览器中打开my.html可以查看效果，刷新会立即更新代码改动效果。使用Notepad++打开my.html可以编辑代码。
			  </ul>
			</div>
		  </div>
		  <hr style="color:#F4F4F4;" />
		  <div style="line-height:24px;margin:20px 0;">
		    <div style="font-size:24px;font-weight:bold;color:#333333;margin:10px 0;">
			任务要求
			</div>
			<div style="">
			  <img src="week1-1.jpg" style="width:720px;border:2px solid #CCCCCC;border-radius:0.5em;" />
			  <ul style="">
				<li>html页面中要包含head和body。在head中设置网页的title，如图中左上角的名字。</li>
				<li>一般在body中编写html代码，整体上设置宽度为960像素，居中显示。</li>
				<li>Part 1，使用h1和h4。</li>
				<li>Part 2，包括标题和表格，建议使用table。标题高28像素，背景颜色为#FF9900;。表格有两行（tr），四列（分别是th、td、th、td）。表格中所有字体靠右显示，边框（border）为1像素。</li>
				<li>Part 3，标题和Part 2一样，颜色进行修改（自己喜欢的任意颜色即可）。表格中有两行，如Part2，没有边框，其中th的列字体靠右显示，td中的字体不做修改。</li>
				<li>Part 4，不要使用table，使用div。标题样式如上。评价中有两行，中间需要换行。第一行“勤奋好学”设置为段落。“橙色”字体使用span，且字体颜色需要修改。第二行字体大小设置为28像素，加粗显示。</li>
				<li>Part 5，标题如上。添加链接，字样显示为“梦想之星英语社”，链接地址为：http://i.my-dreamstar.com，设置链接颜色为#000000;，取消下划线。加一条横线。添加图片，图片来源：http://i.my-dreamstar.com/images/logo.jpg，图片宽度设置为100像素。</li>
			  </ul>
			</div>
		  </div>
		  <hr style="color:#F4F4F4;" />
		  <div style="line-height:24px;margin:20px 0;">
		    <div style="font-size:24px;font-weight:bold;color:#333333;margin:10px 0;">
			  技巧
			</div>
			<div style="">
			  <ul style="">
				<li>不需要一次性完成，每次编写一块代码，立刻查看效果，进行修改。</li>
				<li>如有疑难点，可以先跳过，等一块内容完成后可以再去搜索查找解决办法。</li>
				<li>以上说的效果（如字体大小、颜色、靠右显示等）是附加的，如果没有这些效果，内容也可以显示，只是没有那么好看。这些效果一般是写在style中的（如<div style=””></div>）。这些效果是依靠CSS来实现的，其他部分即为HTML。</li>
				<li>如有时间，可以在火狐浏览器中安装插件firebug，安装后重启火狐浏览器，按F12打开/关闭。在谷歌浏览器中默认已安装，可直接使用。</li>
				<li>和同学保持沟通、交流，可以方便的完成自己的任务，也可以帮助对方完成任务。</li>
			  </ul>
			</div>
		  </div>
		  <hr style="color:#F4F4F4;" />
		</div>
		<div class="project_item" style="width:280px;float:left;margin:10px;">
		  <div style="font-size:20px;margin:10px 40px;color:#333333;font-weight:bold;">
		    网站设计
		  </div>
		  <div class="intro_title">
		    学习目标：
		  </div>
		  <div class="intro_content">
		    完成自己的静态网站设计和开发，在第六周进行DEMO。
		  </div>
		  <div class="intro_title">
		    学习知识：
		  </div>
		  <div class="intro_content">
		    HTML、CSS、原型设计
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
		    ①开发个人博客网站；②为学校社团开发网站；③为学校周边商店、书店等开发网站
		  </div>
		</div>
		<div class="project_item" style="width:280px;float:left;margin:10px;">
		  <div style="font-size:20px;margin:10px 40px;color:#333333;font-weight:bold;">
		    学习周期
		  </div>
		  <div class="intro_title current">
		    第一周：基础准备、简历制作
		  </div>
		  <div class="intro_content">
		    建立项目，了解HTML基本语法和标签、CSS样式，完成个人简历网页。
		  </div>
		  <div class="intro_title">
		    第二周：网站原形分析设计
		  </div>
		  <div class="intro_content">
		    学习文档，分析网站基本结构，完成个人网站（自己感兴趣的网站）原型初步设计。
		  </div>
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