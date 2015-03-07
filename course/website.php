<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {color:#FFFFFF;text-decoration:none;}
	  .main_index a {color:#000000;font-weight:bold;}
	</style>
	<script src="../src/js/account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include '../src/header.php'?>
	<div>
	  <div class="main_index" style="padding-top:60px;width:960px;margin:0 auto;font-size:14px;">
	    <!--<div>
		  <a href="register.php">
		    <div style="margin:0 0 0 0;width:100%;height:40px;background-color:#0099FF;font-size:28px;font-weight:bold;text-align:center;padding:5px;margin:0 0 10px 0;">
			  点击这里，进行注册
		    </div>
		  </a>
		</div>-->
	    <div style="width:192px;float:left;">
		  <?php include '../src/project_index.php'?>
		</div>
		<div class="content" style="width:760px;float:left;">
			<div id="week1" name="week1" class="index_feature_box al_left" style="margin:28px 10px;min-height:200px;line-height:28px;">
			  <div>
			    <div style="float:left;height:120px;overflow:hidden;">
				  <img src="../src/images/html.jpg" style="width:200px;"/>
				</div>
				<div style="float:left;padding:0px 20px;line-height:22px;font-size:12px;">
				  <div><span style="color:#999999;margin:0 10px 0 0;">课程时长</span><span>共6周，6周后进行DEMO</span></div>
				  <div><span style="color:#999999;margin:0 10px 0 0;">团队要求</span><span>3-6人组成小组</span></div>
				  <div><span style="color:#999999;margin:0 10px 0 0;">课程目标</span><span>1.社团/班级网站；2.个人博客；3.小企业网站</span></div>
				  <div><span style="color:#999999;margin:0 10px 0 0;">关联课程</span><span>1.PHP/JSP；2.MySQL；3.Javascript</span></div>
				  <div><span style="color:#999999;margin:0 10px 0 0;">建议</span><span>有兴趣的同学均可，利用课下时间和同学一起完成</span></div>
				</div>
				  <?php 
					include '../lib/db.php';
					
					$username = isset($_SESSION["user"])?$_SESSION["user"]:"";
					if(!empty($username)){
						$sql = "select * from sgfw_user where username='".base64_encode($username)."'";
						$result = mysql_query($sql,$conn);
						$row = mysql_fetch_array($result);
					}
				  ?>
				  <div style="float:right;width:140px;">
				  <a href="selectCourse.php?course=website">
				    <div style="margin:5px 0 5px 10px;background-color:#FFFFFF;font-size:20px;font-weight:bold;text-align:center;padding:14px 0;color:#0099FF;border:2px solid #FF9900;">
				      <span>
					  <?php if(empty($username) || !isset($row["project"]) || $row["project"]!="website"){?>
					  学习此课程
					  <?php }
					  else{?>
					  已选择
					  <?php }?>
					  </span>
				    </div>
			      </a>
				  </div>
				  <div style="clear:float;clear:both;"></div>
				  <div style="color:#333333;">
				    <div style="margin:20px 0px;padding:0 20px;font-weight:normal;font-size:18px;color:#333333;width:100%;height:32px;background-color:#F5F5F5;border-left:2px solid #00A2C9;">你将会学到：</div>
				    <div style="padding:0 10px;">
					  <div style="font-weight:bold;margin:10px 0;">
					    <span style="font-size:14px;color:#0099FF;margin:0 22px 0 0;">HTML部分</span>
					  </div>
					  <ul style="padding:0px;">
					    <li>了解HTML及其标签及CSS常用样式</li>
					    <li>完成个人简介网页制作</li>
						<li>div table br span p a img等标签</li>
						<li>常用网站风格、分组完成网站各个页面</li>
						<li>协调完成网站组合，并优化测试</li>
					  </ul>
					</div>
					<div style="padding:10px;">
					  <div style="font-weight:bold;margin:10px 0;">
					    <span style="font-size:14px;color:#FF9900;margin:0 22px 0 0;">CSS部分</span>
					  </div>
					  <ul style="margin:0px;padding:0px;">
					    <li>CSS是什么、有什么作用</li>
						<li>常用CSS样式</li>
						<li>浏览器兼容性处理</li>
						<li>对现有CSS样式进行整理方法</li>
					  </ul>
					</div>
					<div style="padding:10px;">
					  <div style="font-weight:bold;margin:10px 0;font-size:14px;color:#FF0099;">团队部分</div>
					  <ul style="margin:0px;padding:0px;">
					    <li>团队成员间互相协作</li>
						<li>掌握网页开发、网站开发基本步骤，能够快速按照需求完成网站原型开发</li>
						<li>网站、项目开发设计文档</li>
						<li>域名、Apache服务器及网站发布</li>
					  </ul>
					</div>
				  </div>
			  </div>
			</div>
		  </div>
		  </div>
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
	<?php include '../src/footer.php'?>
  </body>
</html>