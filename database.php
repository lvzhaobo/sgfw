<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {color:#FFFFFF;text-decoration:none;}
	  .main_index a {color:#000000;font-weight:bold;}
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include 'src/header.php'?>
	<div>
	  <div class="main_index" style="padding-top:10px;width:960px;margin:0 auto;font-size:14px;">
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
			<div id="week1" name="week1" class="index_feature_box al_left" style="margin:10px 10px;min-height:200px;line-height:10px;">
			  <div class="index_feature_intro_title">
				  <div style="float:left;">
				  <img src="p2.jpg" style="height:40px;" />
				  </div>
				  <div style="float:left;color:#108ac6;">
				  <h1>数据库介绍</h1>
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
				  <a href="selectCourse.php?course=database">
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
				  <p>数据库在软件开发中是必不可少的一部分，数据库课程在大学中也是非常重要的，通过本课程的学习，你将掌握数据库基础知识及真实项目实践经验，对通过大学期末考试也是很有帮助的。</p>
				<p>在大学通过上课，很难真正理解数据库的真实使用情况，通过实践，你能很容易的掌握数据库基本操作，较真实的理解数据库使用，不必再为书本上枯燥的理论知识烦心。</p>
				<p>本课程中使用PHP语言作为网页语言（仅使用基本语法，对PHP有兴趣的同学可以再选择PHP的课程进行系统学习），MySQL数据库（将会接触到命令行访问、浏览器访问、桌面软件访问），重点学习数据库基础知识的使用和数据库实际操作。有疑问请加我们QQ群。</p>
				<p>本课程中有宿舍学生信息管理、社团会员信息管理等实际项目，如你有感兴趣的项目，我们欢迎自行和同学组成小组进行开发。</p>
			  </div>
			</div>
			<div style="margin:40px 0;width:100%;height:28px;border:1px solid #CCCCCC;font-size:16px;text-align:middle;padding:5px;color:#FF0099;">
			  以下为第一周任务预览，更多资料，请先注册。小组指导员会根据小组成员实际情况进行调整。
			</div>
			<div id="week1" name="week1" class="index_feature_box al_left" style="margin:10px 10px;min-height:200px;line-height:10px;">
				<div class="index_feature_intro_title">
				  <div style="float:left;">
				  <img src="p2.jpg" style="height:40px;" />
				  </div>
				  <div style="float:left;color:#108ac6;">
				  <h1>前期准备</h1>
				  </div>
				  <div style="clear:float;clear:both;"></div>
				  <ul style="line-height:28px;">
				    <li>1. 在线报名本课程，选择并加入一个小组。</li>
					<li>2. 和小组成员认识，并推选以为小组长，负责每周计划推进及问题协调。</li>
					<li>3. 在电脑上安装XAMPP软件（包括Apache、Mysql、PHP、Perl工具和语言）。首先动手制作最简单的PHP页面。本课程默认使用PHP语言，但都是最最基本的，本课程侧重点是数据库学习，如果有同学对C++或JSP等有了解，可以联系我们。</li>
					<li>4. 了解MySQL，并建立数据库和数据表。</li>
				  </ul>
			  </div>
			</div>
			<div style="clear:float;clear:both;"></div>
			<hr />
			
			<div class="index_feature_box al_left" style="margin:10px 10px;min-height:200px;line-height:10px;">
				<div class="index_feature_intro_title">
				  <div style="float:left;">
				  <img src="p2.jpg" style="height:40px;" />
				  </div>
				  <div style="float:left;color:#108ac6;">
				  <h1>任务要求</h1>
				  </div>
				  <div style="clear:float;clear:both;"></div>
				  <ul style="line-height:28px;">
				    <li>1. 安装XAMPP，打开Apache服务器，打开MySQL数据库，编写index.php文件，放在Apache的htdoc文件中。例如XAMPP的安装路径为D盘，则今后所有PHP的文件都在D:/htdoc中，通过localhost在浏览器中访问。</li>
					<li>2. index.php文件内容为输出自己的简介信息。使用localhost/index.php来访问。</li>
					<li>3. 在XAMPP的控制面板中打开MySQL的管理界面，建立一个新的数据库my_db，新建一个数据表，包括id,name,description列，并使用界面来添加至少两行数据。</li>
				  </ul>
			  </div>
			</div>
			<div style="clear:float;clear:both;"></div>
			<hr />
			
			<div class="index_feature_box al_left" style="margin:10px 10px;min-height:200px;line-height:10px;">
				<div class="index_feature_intro_title">
				  <div style="float:left;">
				  <img src="p2.jpg" style="height:40px;" />
				  </div>
				  <div style="float:left;color:#108ac6;">
				  <h1>技巧和说明</h1>
				  </div>
				  <div style="clear:float;clear:both;"></div>
				  <ul style="line-height:28px;">
				    <li>1. 学习数据库，使用某种编程语言调用是少不了的，本课程使用了PHP，简单易容，容易上手，最具有优势的是安装配置简单。</li>
					<li>2. 先从最简单、最基础的内容入手，逐步学习掌握复杂全面的知识，是一个合理的学习过程，循序渐进的学习能够提高学习的效率，也更能体会到乐趣。</li>
					<li>3. 和同学保持沟通、交流，可以方便的完成自己的任务，也可以帮助对方完成任务。</li>
				  </ul>
			  </div>
			</div>
			<div style="clear:float;clear:both;"></div>
			
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