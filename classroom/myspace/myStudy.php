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
	  textarea {width:280px;height:60px;border:1px solid #FF9900;box-shadow:0 0 3px #FF9900;color:#0099FF;padding:2px 5px;border-radius:0.5em;margin:0 10px -22px 0;}
	  textarea:hover {border:1px solid #0099FF;box-shadow:0 0 3px #0099FF;}
	  .item {padding:10px 20px;border-left:2px solid #00AAFF;margin:20px 0px;background-color:#FFFFFF;}
	  .item_title {font-weight:bold;font-size:18px;line-height:28px;margin:0 0 5px 0;}
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;background-color:#F7F6F2;">
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
			
			$result = mysql_query("select * from sgfw_homework where user_id='".$data["id"]."'");
			//var_dump(mysql_error());
			$data = mysql_fetch_array($result);
			if(!isset($data["id"]) or empty($data["id"])){
				$week = 1;
			}
			else{
				$week = 2;
			}
		  ?>
	<div>
	  <div class="main index" style="padding-top:32px;min-width:960px;margin:0 auto;font-size:14px;min-height:400px;background-color:#F7F6F2;">
	    <?php include '../../src/classroom_index.php'?>
		<div class="content" style="width:678px;float:left;margin:0 0 40px 200px;padding:20px;min-height:320px;">
		1.课程介绍
		2.老师介绍、所属学校
		3.课程周期
		4.课程作业要求及提交
		5.学生成员、旁听学生，加入小组
		6.作业共享、学生交流，分享笔记、心得、视频
		7.学习笔记
		8.学习资源共享
		9.作业完成情况、答题数目、解答问题    进行积分
		10.在线编程
		<br />
		发送作业到自己的邮箱<br />
		显示班级中下一个节点内容及时间，整体状态等，如多少人完成作业
		显示自己和团队当前任务，新手任务指引等
		<?php $project = array("website"=>"网站设计",
										"database"=>"数据库",
										"php"=>"PHP",
										"jsp"=>"JSP",
										"c"=>"C语言基础",
										""=>"无课程");
			if(isset($project[$data["project"]])){
		?>
		  <fieldset style="border:2px solid #FF9900;padding:0 10px;line-height:28px;background-color:#FFFFFF;">
		  <legend>
		    <div style="font-weight:bold;font-size:16px;color:#0099FF;float:left;">
			  <?php echo $project[$data["project"]];?>
			</div>
			</legend>
			<?php if($data["project"]=="website"){
				$week_str = "";
				if($week == 2)
					$week_str = "&process=week2";
			?>
			<a href="myCourse.php?course=website<?php echo $week_str?>">
			  <div style="border:2px solid #0099FF;font-size:20px;font-weight:bold;color:#FF9900;height:32px;padding:5px;margin:5px;text-align:center;width:100px;float:left;">开始学习</div>
			</a>
			<div style="border:2px solid #CCCCCC;font-size:20px;font-weight:bold;color:#00AAFF;height:32px;padding:5px;margin:5px;text-align:center;width:100px;float:left;"><?php echo ($week==1)?"第一周":"第二周"?></div>
			<div style="clear:float;clear:both;"></div>
			  <table style="font-size:13px;line-height:22px;">
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
		  </fieldset>
		  <?php }?>
		  <!--<div style="" class="item">
		  <div style="" class="item_title">
			第二周学习目标
		  </div>
		  <ul>
			<li>学习网站基本布局</li>
			<li>选择自己感兴趣的网站类型并能进行分析</li>
			<li>学习界面调试工具</li>
			<li>学习网站设计报告</li>
		  </ul>
		</div>-->
		<?php
		  $course = isset($data["project"])&&!empty($data["project"]) ? $data["project"] : "website";
		?>
		<div id="content_intro" style="margin:20px 0 0 0;">
		    <iframe src="../../course/<?php echo $course?>/intro.php?course=<?php echo $course?>" style="border:0px;width:100%;height:800px;"></iframe>
		  </div>
		</div>
		<div class="project_item" style="width:400px;float:right;padding:0px 20px 20px 20px;position:absolute;right:0px;background-color:#F7F6F2;display:none;">
		  <div style="margin:0px 0 22px 0;text-align:center;">
			    <form action="../../lib/saveDiscuss.php?referer=mystudy" method="post" id="discuss">
				  <?php 
				  if(array_key_exists("user",$_SESSION) && isset($_SESSION["user"]) && $_SESSION["user"]!=""){?>
				  <textarea name="content" style="" id="discuss_content"></textarea>
				  <span id="msg_content" class="message"></span>
				  <?php }
				  else{?>
				  <textarea name="content" style="text-align:center;" disabled="disabled">请先登录</textarea>
				  <?php }?>
				  <button type="submit" style="margin:5px 0 10px 0;">发表</button>
				</form>
			  </div>
		  <?php
			$color = array("#FFAA00","#0099FF","#AAFF00","#FF00AA","#AA00FF","#00FFAA");
			
		    //include '../../lib/db.php';
			$data = array();
			if(isset($_SESSION["user"])){
				$result = mysql_query("select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'");
				//var_dump(mysql_error());
				$data = mysql_fetch_array($result);
			}
			if(!isset($data["id"]) or empty($data["id"])){
				echo "<script>alert('请先登录');window.location.href='../login.php'</script>";
			}
			
			//include '../../lib/db.php';
			$sql = "SELECT * FROM sgfw_discuss ORDER BY create_time DESC;";
			$result = mysql_query($sql,$conn);
			$i = 0;
			while($item = @mysql_fetch_array($result)){
				$user_result = mysql_query("select * from sgfw_user where username='".$item["username"]."'");
				$user = mysql_fetch_array($user_result);
				
				$img_path = $workspace."/data/upload/".str_replace("upload","",$user["img"]);
				if(!file_exists("../../data/upload/".str_replace("upload","",$user["img"])))
					$img_path = $workspace."/src/images/dream.jpg";
		  ?>
		  <div style="width:60px;float:left;">
		    <img src="<?php echo $img_path?>" style="width:40px;height:40px;border-radius:3em;border:1px solid #EEEEEE;" title=""/>
		  </div>
		  <div style="min-height:40px;background-color:#FFFFFF;border-left:2px solid <?php echo $color[$i++%6]?>;margin:0px 0 10px 60px;padding:8px;font-size:12px;">
		    <div style="font-size:12px;border-bottom:1px solid #F3F3F3;padding-bottom:4px;"><?php echo base64_decode($item["username"])?>&nbsp;&nbsp;<?php echo date("Y-m-d H:i:s",$item["create_time"])?></div>
			<div style="margin-top:2px;"><?php 
				if($item["id"]<=41)
					echo $item["content"];
				else
					echo htmlentities(base64_decode($item["content"]),ENT_QUOTES);
			?>
			</div>
		  </div>
		  <?php }?>
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