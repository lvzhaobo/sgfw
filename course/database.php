<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
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
			    <div style="float:left;height:120px;">
				  <img src="../src/images/mysql.jpg" style="width:200px;"/>
				</div>
				<div style="float:left;padding:0px 20px;line-height:22px;">
				  <div><span style="color:#999999;">课程时长：</span><span>共8周，8周后进行DEMO</span></div>
				  <div><span style="color:#999999;">团队要求：</span><span>2-6人组成小组</span></div>
				  <div><span style="color:#999999;">课程目标：</span><span>开发论坛（实践）、学习数据库知识（理论）</span></div>
				  <div><span style="color:#999999;">关联课程：</span><span>1.HTML&CSS；2.动态语言；3.小项目开发</span></div>
				  <div><span style="color:#999999;">建议：</span><span>本学期开设数据库的学生同步课下学习</span></div>
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
				  <a href="../lib/selectCourse.php?course=database">
				    <div style="margin:5px 0 5px 10px;background-color:#FFFFFF;font-size:20px;font-weight:bold;text-align:center;padding:14px 0;color:#0099FF;border:2px solid #FF9900;">
				      <span>
					  <?php if(empty($username) || !isset($row["project"]) || $row["project"]!="database"){?>
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
					<div style="padding:10px;">
					  <div style="font-weight:bold;margin:10px 0;">
					    <span style="font-size:14px;color:#FF9900;margin:0 22px 0 0;">MySQL部分</span>
						<span style="color:#CCCCCC;">可使用：</span>
						<a href="#" style="margin:0 10px 0 0;"><span style="">Sqlite</span></a>
						<a href="#" style=""><span style="">Sql Server</span></a>
					  </div>
					  <ul style="margin:0px;padding:0px;">
					    <li>数据库的作用、MySQL数据库的结构（数据库、表、列、数据）等</li>
						<li>MySQL的安装、连接</li>
						<li>手动创建数据库、手动创建数据表、手动添加数据</li>
						<li>对数据库进行查询、删除</li>
						<li>在数据库中插入数据、修改数据</li>
						<li>复杂查询及数据库理论知识</li>
						<li>和动态语言（PHP、JSP等）交互</li>
						<li>数据库设计</li>
					  </ul>
					</div>
					<div style="padding:0 10px;">
					  <div style="font-weight:bold;margin:10px 0;">
					    <span style="font-size:14px;color:#0099FF;margin:0 22px 0 0;">PHP部分（不作为重点）</span>
						<span style="color:#CCCCCC;">可使用：</span>
						<a href="#" style="text-decoration:underline;"><span style="">Java(JSP)</span></a>
					  </div>
					  <ul style="padding:0px;">
					    <li>运行PHP代码，和HTML&CSS结合</li>
					    <li>PHP基本语法，包括代码格式、变量（数字、字符串、数组）等</li>
						<li>PHP逻辑处理，包括if else/switch判断，for/foreach/while循环</li>
						<li>配合数据库进行操作</li>
					  </ul>
					</div>
					<div style="padding:10px;">
					  <div style="font-weight:bold;margin:10px 0;font-size:14px;color:#FF0099;">团队部分</div>
					  <ul style="margin:0px;padding:0px;">
					    <li>团队成员间互相协作</li>
						<li>数据库设计初识</li>
						<li>调试方法及遇到问题时的自我解决问题能力</li>
					  </ul>
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