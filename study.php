<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;font-size:14px;color:#000000;}
	  a {color:#FFFFFF;text-decoration:none;}
	  .project_item {width:206px;height:240px;margin:20px 0px 0px 20px;float:left;color:#333333;border:2px solid #FFFFFF;box-shadow:0 0 0px #DCDCDC;}
	  .project_item:hover {border:2px solid #FF9900;color:#FF6600;}
	  .project_item_title {margin:10px 0;font-size:14px;font-weight:weight;text-align:center;}
	  .project_item hr {color:#FFFFFF;height:1px;display:none;}
	  .text {margin:5px;font-size:12px;font-weight:normal;}
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include 'src/header.php'?>
	<div>
	  <div class="main_index" style="width:960px;margin:0 auto;font-size:14px;">
	    <div style="width:100%;margin:60px 0 40px 0;min-height:814px;">
			  <div style="margin:0 0 0 0px;height:48px;border-bottom:2px solid #F3F3F3;">
			    <div style="float:left;text-align:middle;padding:10px 20px;color:#333333;">
			      <span style="font-size:22px;font-weight:bold;margin:0 5px;">学习课程</span>
				  <span>每个项目都有指导老师按照计划安排学习。所有项目均为公益性质（完全免费）。</span>
				</div>
			  </div>
			  <div style="clear:float;clear:both;"></div>
			  <?php 
			      $data = array(
								array("name"=>"HTML CSS","url"=>"website.php","img"=>"image/html.jpg","text"=>"开发静态网站，满足院系、社团、兴趣小组、中小企业官方网站的需求。"),
								array("name"=>"PHP","url"=>"php.php","img"=>"image/php.jpg","text"=>"适合用于动态网站，例如论坛、交流网站，更方便开发静态网站。"),
								array("name"=>"数据库","url"=>"database.php","img"=>"image/mysql.jpg","text"=>"软件开发必不可少的一部分，通过本课程学习可以让你轻松应对期末数据库考试。"),
								array("name"=>"ACM","url"=>"","img"=>"image/acm.jpg","text"=>"（敬请期待）不必羡慕ACMer，你也可以成为他们，从这里开始。"),
								array("name"=>"JavaScript","url"=>"","img"=>"image/jquery.jpg","text"=>"在前端页面处理中的王者语言。"),
								array("name"=>"Java（JSP）","url"=>"","img"=>"image/java.png","text"=>"高大上的综合性开发语言。"),
								array("name"=>"软件测试","url"=>"","img"=>"image/test.jpg","text"=>"多方面、多角度掌握软件测试，你掌握的不仅是书本上的知识。"),
								//array("name"=>"计算机网络","url"=>"","img"=>"","text"=>"（敬请期待）在实践中学习互联网互通互联的原理。"),
								array("name"=>"Linux服务器","url"=>"","img"=>"image/ubuntu.jpg","text"=>"（敬请期待）在Linux系统中搭建各种服务，包括FTP服务器、Samba服务器、WEB服务器等。"),
								array("name"=>"IOS开发","url"=>"","img"=>"image/ios.jpg","text"=>"IOS开发"),
								array("name"=>"Android开发","url"=>"","img"=>"image/android.png","text"=>"Andriod开发"),
								//array("name"=>"云存储","url"=>"","img"=>"","text"=>"百度云、Dropbox、Google Drive等云存储服务商提供了丰富的API、SDK，赶紧加入云存储吧。"),
								array("name"=>"第三方开发","url"=>"","img"=>"image/devleporplatform.jpg","text"=>"百度、Google等公司有开发者平台，开发者可以在这些平台上方便快捷的开发、部署应用。"),
								array("name"=>"等你来发掘","url"=>"","img"=>"image/dream.jpg","text"=>"如果你有好的想法，能够帮助自己或别人请联系我们。"),
				  );
			  ?>
			  <?php foreach($data as $item){?>
			    <a href="<?php echo $item['url']?>">
			    <div class="project_item">
			      <img src="<?php echo $item['img']?>" style="width:204px;height:128px;border:1px solid #DCDCDC;box-shadow:0 0 5px #DCDCDC;" />
			      <div class="project_item_title" style=""><?php echo $item["name"]?></div>
				  <div class="text"><?php echo $item['text']?></div>
			    </div>
			  </a>
			  <?php }?>
			  <!--<a href="website.php">
			  <div class="project_item">
			    <span class="project_item_title" style="">HTML CSS</span><hr />
				<p>开发静态网站，满足院系、社团、兴趣小组、中小企业官方网站的需求。</p>
			  </div>
			  </a>
			  <a href="php.php">
			    <div class="project_item" style="box-shadow:0 0 5px #F3F3F3;">
			      <img src="image/php.jpg" style="width:100%;height:128px;border:1px solid #DCDCDC;box-shadow:0 0 5px #DCDCDC;" />
			      <div class="project_item_title" style="">PHP</div>
				  <div class="text">适合用于动态网站，例如论坛、交流网站，更方便开发静态网站。</div>
			    </div>
			  </a>
			  <a href="database.php">
			  <div class="project_item">
			    <span class="project_item_title" style="">数据库</span><hr />
				<p>软件开发必不可少的一部分，通过本课程学习可以让你轻松应对期末数据库考试。</p>
			  </div>
			  </a>
			  <div class="project_item">
			    <span class="project_item_title" style="">ACM</span><hr />
				<p>（敬请期待）不必羡慕ACMer，你也可以成为他们，从这里开始。</p>
			  </div>
			  <div class="project_item">
			    <span class="project_item_title" style="">JavaScript</span><hr />
				<p>在前端页面处理中的王者语言。</p>
			  </div>
			  <div class="project_item">
			    <span class="project_item_title" style="">Java（JSP）</span><hr />
				<p>高大上的综合性开发语言。</p>
			  </div>
			  <div class="project_item">
			    <span class="project_item_title" style="">软件测试</span><hr />
				<p>多方面、多角度掌握软件测试，你掌握的不仅是书本上的知识。</p>
			  </div>
			  <div class="project_item">
			    <span class="project_item_title" style="">计算机网络</span><hr />
				<p>（敬请期待）在实践中学习互联网互通互联的原理。</p>
			  </div>
			  <div class="project_item">
			    <span class="project_item_title" style="">Linux服务器</span><hr />
				<p>（敬请期待）在Linux系统中搭建各种服务，包括FTP服务器、Samba服务器、WEB服务器等。</p>
			  </div>
			  <div class="project_item">
			    <span class="project_item_title" style="">云存储</span><hr />
				<p>百度云、Dropbox、Google Drive等云存储服务商提供了丰富的API、SDK，赶紧加入云存储吧。</p>
			  </div>
			  <div class="project_item">
			    <span class="project_item_title" style="">第三方开发</span><hr />
				<p>百度、Google等公司有开发者平台，开发者可以在这些平台上方便快捷的开发、部署应用。</p>
			  </div>
			  <div class="project_item">
			    <span class="project_item_title" style="">等你来发掘</span><hr />
				<p>如果你有好的想法，能够帮助自己或别人请联系我们。</p>
			  </div>
			  <div style="clear:float;clear:both;"></div>
			</div>-->
			
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