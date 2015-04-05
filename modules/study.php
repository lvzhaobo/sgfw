<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;font-size:14px;color:#000000;}
	  a {color:#FFFFFF;text-decoration:none;}
	  .project_item {width:206px;height:240px;margin:20px 0px 0px 20px;float:left;color:#333333;border:2px solid #FFFFFF;box-shadow:0 0 0px #DCDCDC;}
	  .project_item:hover {border:2px solid #FF9900;background-color:#F3F3F3;#color:#FF6600;}
	  .project_item_title {margin:10px 0;font-size:14px;font-weight:weight;text-align:center;}
	  .project_item hr {color:#FFFFFF;height:1px;display:none;}
	  .text {margin:5px;font-size:12px;font-weight:normal;}
	</style>
	<script src="src/js/account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include '../src/header.php'?>
	<div>
	  <div class="main_index" style="width:960px;margin:0 auto;font-size:14px;">
	    <div style="width:100%;margin:60px 0 40px 0;min-height:814px;">
		  <div style="margin:0 0 0 0px;height:48px;border-bottom:2px solid #F3F3F3;">
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
			  <div style="clear:float;clear:both;"></div>
			  <div style="margin:0 0 0 0px;height:48px;border-bottom:2px solid #F3F3F3;">
			    <div style="float:left;text-align:middle;padding:10px 20px;color:#333333;">
			      <span style="font-size:22px;font-weight:bold;margin:0 5px;">学习课程</span>
				  <span>每个项目都有指导老师按照计划安排学习。所有项目均为公益性质（完全免费）。</span>
				  <span style="font-weight:bold;font-size:16px;color:#00AAFF;">QQ群：376265741</span>
				</div>
			  </div>
			  <div style="clear:float;clear:both;"></div>
			  <?php 
			      $data = array(
								array("name"=>"C语言基础","url"=>$workspace."course/c.php","img"=>$workspace."src/images/c.jpg","text"=>"辅助大学课程，最重要的基础课程","type"=>"basic"),
								array("name"=>"数据库","url"=>$workspace."course/database.php","img"=>$workspace."src/images/mysql.jpg","text"=>"软件开发必不可少的一部分，通过本课程学习可以让你轻松应对期末数据库考试。","type"=>"basic"),
								
								array("name"=>"HTML CSS","url"=>$workspace."course/website.php","img"=>$workspace."src/images/html.jpg","text"=>"开发静态网站，满足院系、社团、兴趣小组、中小企业官方网站的需求。","type"=>"project"),
								array("name"=>"PHP","url"=>$workspace."course/php.php","img"=>$workspace."src/images/php.jpg","text"=>"适合用于动态网站，例如论坛、交流网站，更方便开发静态网站。","type"=>"project"),
								array("name"=>"Java（JSP）","url"=>$workspace."course/jsp.php","img"=>$workspace."src/images/java.png","text"=>"高大上的综合性开发语言。","type"=>"project"),
								array("name"=>"JavaScript","url"=>"","img"=>$workspace."src/images/jquery.jpg","text"=>"（敬请期待）在前端页面处理中的王者语言。","type"=>"project"),
								
								array("name"=>"IOS开发","url"=>"","img"=>$workspace."src/images/ios.jpg","text"=>"（敬请期待）IOS开发","type"=>"project"),
								array("name"=>"Android开发","url"=>"","img"=>$workspace."src/images/android.png","text"=>"（敬请期待）Andriod开发","type"=>"project"),
								
								array("name"=>"ACM","url"=>"","img"=>$workspace."src/images/acm.jpg","text"=>"（敬请期待）不必羡慕ACMer，你也可以成为他们，从这里开始。","type"=>"advanced"),
								//array("name"=>"软件测试","url"=>"","img"=>"src/images/test.jpg","text"=>"多方面、多角度掌握软件测试，你掌握的不仅是书本上的知识。"),
								//array("name"=>"计算机网络","url"=>"","img"=>"","text"=>"（敬请期待）在实践中学习互联网互通互联的原理。"),
								array("name"=>"Linux服务器","url"=>"","img"=>$workspace."src/images/ubuntu.jpg","text"=>"（敬请期待）在Linux系统中搭建各种服务，包括FTP服务器、Samba服务器、WEB服务器等。","type"=>"advanced"),
								
								//array("name"=>"云存储","url"=>"","img"=>"","text"=>"百度云、Dropbox、Google Drive等云存储服务商提供了丰富的API、SDK，赶紧加入云存储吧。"),
								array("name"=>"第三方开发","url"=>"","img"=>$workspace."src/images/devleporplatform.jpg","text"=>"百度、Google等公司有开发者平台，开发者可以在这些平台上方便快捷的开发、部署应用。","type"=>"advanced"),
								array("name"=>"等你来发掘","url"=>"","img"=>$workspace."src/images/dream.jpg","text"=>"如果你有好的想法，能够帮助自己或别人请联系我们。","type"=>""),
				  );
			  ?>
			  <?php foreach($data as $item){?>
			    <a href="<?php echo $item['url']?>">
			    <div class="project_item">
			      <img src="<?php echo $item['img']?>" style="width:204px;height:128px;border:1px solid #DCDCDC;box-shadow:0 0 5px #DCDCDC;" />
			      <div class="project_item_title" style="">
				    <?php echo $item["name"]?>
				    <?php if($item["type"]=="basic"){?>
					<span style="color:#FF9900;">（基本课程）</span>
					<?php }
						  else if($item["type"]=="project"){?>
					<span style="color:#0099FF;">（综合项目）</span>
					<?php }
						  else if($item["type"]=="advanced"){?>
					<span style="color:#FF0099;">（进阶）</span>
					<?php }?>
				  </div>
				  <div class="text"><?php echo $item['text']?></div>
			    </div>
			  </a>
			  <?php }?>
		  </div>
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
	<?php include '../src/footer.php';?>
  </body>
</html>