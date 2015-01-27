<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include 'src/header.php'?>
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
		  <?php include 'src/project_index.php'?>
		</div>
		<div class="content" style="width:760px;float:left;">
			<div id="week1" name="week1" class="index_feature_box al_left" style="margin:28px 10px;min-height:200px;line-height:28px;">
			  <div>
			    <div style="float:left;height:140px;width:200px;overflow:hidden;margin:-20px 0 0 0;">
				  <img src="image/c.jpg" style="height:140px;width:200px;margin:0px 0 0 0px;"/>
				</div>
				<div style="float:left;padding:0px 20px;line-height:22px;font-size:12px;">
				  <div><span style="color:#999999;margin:0 10px 0 0;">课程时长</span><span>共8周，8周后进行DEMO</span></div>
				  <div><span style="color:#999999;margin:0 10px 0 0;">团队要求</span><span>2-4人组成小组</span></div>
				  <div><span style="color:#999999;margin:0 10px 0 0;">课程目标</span><span>1.开发论坛；2.开发团购网</span></div>
				  <div><span style="color:#999999;margin:0 10px 0 0;">后续课程</span><span>1.数据结构；2.ACM；3.网站设计</span></div>
				  <div><span style="color:#999999;margin:0 10px 0 0;">建议</span><span>本学期开设C语言课程的同学，课下学习</span></div>
				</div>
				  
				  <?php 
					include 'db.php';
					
					$username = isset($_SESSION["user"])?$_SESSION["user"]:"";
					if(!empty($username)){
						$sql = "select * from sgfw_user where username='".base64_encode($username)."'";
						$result = mysql_query($sql,$conn);
						$row = mysql_fetch_array($result);
					}
				  ?>
				  <div style="float:right;width:140px;">
				  <a href="selectCourse.php?course=c">
				    <div style="margin:5px 0 5px 10px;background-color:#FFFFFF;font-size:20px;font-weight:bold;text-align:center;padding:14px 0;color:#0099FF;border:2px solid #FF9900;">
				      <span>
					  <?php if(empty($username) || !isset($row["project"]) || $row["project"]!="c"){?>
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
					    <span style="font-size:14px;color:#0099FF;margin:0 22px 0 0;">C语言基础</span>
					  </div>
					  <ul style="padding:0px;">
					    <li>C语言运行环境、文本编辑工具</li>
					    <li>使用“printf”运行C语言程序</li>
						<li>使用“scanf”输入数字、字符、字符串，并输出结果</li>
						<li>if/else、switch、for、while等逻辑处理</li>
						<li>自定义函数</li>
						<li>数组、结构体</li>
						<li>读、写文件</li>
						<li>进销存软件开发</li>
					  </ul>
					</div>
				  </div>
			  </div>
			</div>
		  </div>
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
	<?php include 'src/footer.php'?>
  </body>
</html>