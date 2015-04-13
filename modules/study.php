<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;font-size:14px;color:#000000;}
	  a {color:#FFFFFF;text-decoration:none;}
	  .project_item {width:100%;height:140px;margin:10px;float:left;color:#333333;border:1px solid #F3F3F3;box-shadow:0 1px 5px #999999;background-color:#F3F3F3;}
	  .project_item:hover {border:1px solid #CCCCCC;background-color:#F3F3F3;#color:#FF6600;background-color:#F6F6F6;}
	  .project_item_title {padding:5px 20px;font-size:14px;font-weight:normal;text-align:left;width:560px;height:100%;}
	  .project_item hr {color:#FFFFFF;height:1px;display:none;}
	  .text {margin:5px;padding:20px 10px;font-size:12px;font-weight:normal;float:left;width:80px;text-align:center;}
	  .button {font-weight: normal; line-height: 32px; box-shadow: 0px 0px 2px rgb(220, 220, 220); width: 80px; font-size: 13px; border-radius: 0.5em; margin: 0px 0px 0px 204px; border: 2px solid #FF9900; color:#0099FF; background-color: rgb(255, 255, 255);}
	  .button:hover {border:2px solid #0099FF;color:#FF9900;text-align:center;}
	</style>
	<script src="src/js/account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include '../src/header.php'?>
	<div>
	  <div class="main_index" style="width:960px;margin:0 auto;font-size:14px;">
	    <div style="width:100%;margin:60px 0 40px 0;min-height:814px;">
		  <!--<div style="margin:0 0 0 0px;height:48px;border-bottom:2px solid #F3F3F3;">
			    <div style="float:left;text-align:middle;padding:10px 20px;color:#333333;">
			      <span style="font-size:22px;font-weight:bold;margin:0 5px;">学习计划</span>
				  <span></span>
				  <span style="font-weight:bold;font-size:16px;color:#00AAFF;"></span>
				</div>
			  </div>
			  <div style="clear:float;clear:both;"></div>
			  <div style="width:48px;height:168px;float:left;border:1px solid #CCCCCC;text-align:center;">
			    测试
			  </div>
			  <div style="height:280px;width:280px;text-align:center;line-height:40px;float:left;">
			    <div style="width:100%;height:40px;border:1px solid #CCCCCC;">
				  HTML+CSS[+JavaScript?]
				</div>
				<div style="width:100%;height:40px;">
				  <div style="width:40px;float:left;border:1px solid #CCCCCC;">PHP</div>
				  <div style="width:40px;float:left;border:1px solid #CCCCCC;">JSP</div>
				  <div style="width:40px;float:left;border:1px solid #CCCCCC;">.Net</div>
				  <div style="width:40px;float:left;border:1px solid #CCCCCC;">C</div>
				  <div style="width:40px;float:left;border:1px solid #CCCCCC;">......</div>
				  <div style="clear:float;clear:both;"></div>
				</div>
				<div style="clear:float;clear:both;"></div>
				<div style="width:100%;height:40px;border:1px solid #CCCCCC;">
				  <div style="width:138px;float:left;border:1px solid #CCCCCC;">业务领域</div>
				  <div style="width:138px;float:left;border:1px solid #CCCCCC;">第三方API?</div>
				</div>
				<div style="clear:float;clear:both;"></div>
				<div style="width:100%;height:40px;">
				  <div style="width:138px;float:left;border:1px solid #CCCCCC;">操作系统</div>
				  <div style="width:138px;float:left;border:1px solid #CCCCCC;">数据库</div>
				</div>
				<div style="clear:float;clear:both;"></div>
			  </div>
			  <div style="width:48px;height:168px;float:left;border:1px solid #CCCCCC;text-align:center;">
			      软件工程（团队、迭代、执行等）
			    </div>
			  <div style="clear:float;clear:both;"></div>-->
			  
			  
			  <div style="margin:0 0 0 0px;height:48px;border-bottom:2px solid #F3F3F3;">
			    <div style="float:left;text-align:middle;padding:10px 20px;color:#333333;">
			      <span style="font-size:22px;font-weight:bold;margin:0 5px;">学习课程</span>
				  <span>每个项目都有指导老师按照计划安排学习。</span>
				  <span style="font-weight:bold;font-size:16px;color:#00AAFF;">QQ群：376265741</span>
				</div>
			  </div>
			  <div style="clear:float;clear:both;"></div>
			  <?php 
			      $data = array(
								array("name"=>"C语言基础","url"=>$workspace."course/c.php","img"=>$workspace."src/images/c.jpg","text"=>"辅助大学课程，最重要的基础课程","type"=>"basic","started"=>true,"required"=>"建议本学期开设C语言课程的同学同步学习"),
								array("name"=>"数据库","url"=>$workspace."course/database.php","img"=>$workspace."src/images/mysql.jpg","text"=>"软件开发必不可少的一部分，通过本课程学习可以让你轻松应对期末数据库考试。","type"=>"basic","started"=>true,"required"=>"建议本学期开设数据库课程的同学同步学习"),
								
								array("name"=>"HTML CSS","url"=>$workspace."course/website.php","img"=>$workspace."src/images/html.jpg","text"=>"开发静态网站，满足院系、社团、兴趣小组、中小企业官方网站的需求。","type"=>"project","started"=>true,"required"=>"面向零基础的同学，同时欢迎非计算机专业同学学习"),
								array("name"=>"PHP","url"=>$workspace."course/php.php","img"=>$workspace."src/images/php.jpg","text"=>"适合用于动态网站，例如论坛、交流网站，更方便开发静态网站。","type"=>"project","started"=>true,"required"=>"需要了解基本HTML和CSS知识，对PHP等语言要求为零基础"),
								array("name"=>"Java（JSP）","url"=>$workspace."course/jsp.php","img"=>$workspace."src/images/java.png","text"=>"高大上的综合性开发语言。","type"=>"project","started"=>true,"required"=>"需要了解基本HTML和CSS知识，建议了解Java的同学学习"),
								
								array("name"=>"WordPress建站","url"=>$workspace."course/wordpress.php","img"=>$workspace."src/images/wordpress.jpg","text"=>"最流行的内容管理系统软件，不需要编写代码即可建设网站","type"=>"project","started"=>true,"required"=>"对代码完全零基础，也不需要写代码"),
								
								array("name"=>"ACM入门","url"=>$workspace."course/acm.php","img"=>$workspace."src/images/acm.jpg","text"=>"不必羡慕ACMer，你也可以成为他们，从这里开始。","type"=>"advanced","started"=>true,"required"=>"面向需要整体了解ACM并进行入门的同学，要求了解过C、C++、Java等语言"),
								
								array("name"=>"云存储","url"=>$workspace."course/cloudstorage.php","img"=>$workspace."src/images/cloudstorage1.jpg","type"=>"advanced","text"=>"百度云、Dropbox、Google Drive等云存储服务商提供了丰富的API、SDK，赶紧加入云存储吧。","started"=>true,"required"=>"要求掌握PHP、HTML基础知识"),
								
								array("name"=>"Linux服务器","url"=>$workspace."course/linux_config.php","img"=>$workspace."src/images/ubuntu.jpg","text"=>"在Linux系统中搭建各种服务，包括FTP服务器、Samba服务器、WEB服务器等。","type"=>"advanced","started"=>false,"required"=>"对Linux系统有基本了解或有决心去学习Linux的同学"),
								
								array("name"=>"JavaScript","url"=>"","img"=>$workspace."src/images/jquery.jpg","text"=>"（敬请期待）在前端页面处理中的王者语言。","type"=>"project","startd"=>false),
								
								array("name"=>"IOS开发","url"=>"","img"=>$workspace."src/images/ios.jpg","text"=>"（敬请期待）IOS开发","type"=>"project","startd"=>false),
								array("name"=>"Android开发","url"=>"","img"=>$workspace."src/images/android.png","text"=>"（敬请期待）Andriod开发","type"=>"project","startd"=>false),
								
								
								//array("name"=>"软件测试","url"=>"","img"=>"src/images/test.jpg","text"=>"多方面、多角度掌握软件测试，你掌握的不仅是书本上的知识。"),
								//array("name"=>"计算机网络","url"=>"","img"=>"","text"=>"（敬请期待）在实践中学习互联网互通互联的原理。"),
								
								
								
								array("name"=>"第三方开发","url"=>"","img"=>$workspace."src/images/devleporplatform.jpg","text"=>"百度、Google等公司有开发者平台，开发者可以在这些平台上方便快捷的开发、部署应用。","type"=>"advanced"),
								array("name"=>"等你来发掘","url"=>"","img"=>$workspace."src/images/dream.jpg","text"=>"如果你有好的想法，能够帮助自己或别人请联系我们。","type"=>""),
				  );
			  ?>
			  <?php foreach($data as $item){?>
			    <div class="project_item">
			      <img src="<?php echo $item['img']?>" style="width:222px;height:140px;float:left;" />
			      <div class="project_item_title" style="float:left;">
				  <div style="font-size:14px;font-weight:normal;color:#333333;line-height:28px;"><?php echo $item["name"]?></div>
				    <?php if($item["type"]=="basic"){?>
					<span style="color:#FF9900;line-height:28px;">基本课程</span>
					<?php }
						  else if($item["type"]=="project"){?>
					<span style="color:#0099FF;line-height:28px;">综合项目</span>
					<?php }
						  else if($item["type"]=="advanced"){?>
					<span style="color:#FF0099;line-height:28px;">进阶</span>
					<?php }?>
					<div style="color:#333333;font-size:13px;line-height:22px;">
					  <span style="color:#999999">课程简介：</span><?php echo $item['text']?>
					</div>
					<div style="color:#333333;font-size:13px;line-height:22px;">
					  <span style="color:#999999;">知识要求：</span><?php echo isset($item['required'])?$item['required']:""?>
					</div>
				  </div>
				  <div class="text">
				    <div style="font-size:14px;font-weight:normal;"><?php echo (isset($item["started"])&&$item["started"])?"已开课":"暂未开课"?></div>
					<?php if((isset($item["started"])&&$item["started"])){?>
					<div><a href="<?php echo $item['url']?>"><div type="submit" style="margin:16px 0 0 0;text-align:center;" class="button">查看课程</div></a></div>
					<?php }?>
				  </div>
			    </div>
			  <?php }?>
		  </div>
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
	<?php include '../src/footer.php';?>
  </body>
</html>