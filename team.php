<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {color:#FFFFFF;text-decoration:none;}
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include 'src/header.php'?>
	  <div class="main index">
		  <div class="content" style="width:960px;margin:0 auto;font-size:14px;">
		    <div style="width:100%;margin:40px 0;min-height:480px;">
			  <div style="margin:0 0 0 10px;">
			    <span style="font-size:28px;font-weight:bold;">参与学校</span><br />
				<span>每个项目有具体计划，对某个项目感兴趣请加入我们。可在完成一个项目后参与其他项目，所有项目均为公益性质（完全免费）。</span>
			  </div>
			  <a href="register.php">
				<div style="margin:5px 0 5px 10px;height:40px;background-color:#0099FF;font-size:28px;font-weight:bold;text-align:center;padding:5px 0;">
				  点击这里，加入我们
				</div>
			  </a>
			  <a href="website.php">
			  <div style="width:210px;height:128px;background-color:#00A7FF;margin:10px 0 10px 10px;float:left;color:#FFFFFF;padding:10px;" onmouseover="this.style.backgroundColor='#FF0099';" onmouseout="this.style.backgroundColor='#00A7FF';">
			    <span style="margin:20px 0 0 20px;font-size:18px;font-weight:bold;">郑州大学（新校区）</span><hr />
				<p onmouseover="this.style.fontWeight='bold';" onmouseout="this.style.fontWeight='normal';"></p>
			  </div>
			  </a>
			  <div style="width:210px;height:128px;background-color:#71CE01;margin:10px 0 10px 10px;float:left;color:#FFFFFF;padding:10px;" onmouseover="this.style.backgroundColor='#FF0099';" onmouseout="this.style.backgroundColor='#71CE01';">
			    <span style="margin:20px 0 0 20px;font-size:18px;font-weight:bold;">郑州大学（南校区）</span><hr />
				<p onmouseover="this.style.fontWeight='bold';" onmouseout="this.style.fontWeight='normal';"></p>
			  </div>
			  <a href="database.php">
			  <div style="width:210px;height:128px;background-color:#FFB500;margin:10px 0 10px 10px;float:left;color:#FFFFFF;padding:10px;" onmouseover="this.style.backgroundColor='#FF0099';" onmouseout="this.style.backgroundColor='#FFB500';">
			    <span style="margin:20px 0 0 20px;font-size:18px;font-weight:bold;">郑州大学（北校区）</span><hr />
				<p onmouseover="this.style.fontWeight='bold';" onmouseout="this.style.fontWeight='normal';"></p>
			  </div>
			  </a>
			  <div style="width:210px;height:128px;background-color:#B83AFE;margin:10px 0 10px 10px;float:left;color:#FFFFFF;padding:10px;" onmouseover="this.style.backgroundColor='#FF0099';" onmouseout="this.style.backgroundColor='#B83AFE';">
			    <span style="margin:20px 0 0 20px;font-size:18px;font-weight:bold;">河南大学</span><hr />
				<p></p>
			  </div>
			  <div style="width:210px;height:128px;background-color:#5883E2;margin:10px 0 10px 10px;float:left;color:#FFFFFF;padding:10px;" onmouseover="this.style.backgroundColor='#FF0099';" onmouseout="this.style.backgroundColor='#5883E2';">
			    <span style="margin:20px 0 0 20px;font-size:18px;font-weight:bold;">河南大学（软件学院）</span><hr />
				<p></p>
			  </div>
			  <div style="width:210px;height:128px;background-color:#347ABF;margin:10px 0 10px 10px;float:left;color:#FFFFFF;padding:10px;" onmouseover="this.style.backgroundColor='#FF0099';" onmouseout="this.style.backgroundColor='#347ABF';">
			    <span style="margin:20px 0 0 20px;font-size:18px;font-weight:bold;">黄河科技学院</span><hr />
				<p></p>
			  </div>
			  <div style="width:210px;height:128px;background-color:#347ABF;margin:10px 0 10px 10px;float:left;color:#FFFFFF;padding:10px;" onmouseover="this.style.backgroundColor='#FF0099';" onmouseout="this.style.backgroundColor='#347ABF';">
			    <span style="margin:20px 0 0 20px;font-size:18px;font-weight:bold;">郑州轻工业学院</span><hr />
				<p></p>
			  </div>
			  <div style="width:210px;height:128px;background-color:#00CBAE;margin:10px 0 10px 10px;float:left;color:#FFFFFF;padding:10px;" onmouseover="this.style.backgroundColor='#FF0099';" onmouseout="this.style.backgroundColor='#00CBAE';">
			    <span style="margin:20px 0 0 20px;font-size:18px;font-weight:bold;">河南工业大学</span><hr />
				<p></p>
			  </div>
			  <div style="width:210px;height:128px;background-color:#0099FF;margin:10px 0 10px 10px;float:left;color:#FFFFFF;padding:10px;" onmouseover="this.style.backgroundColor='#FF0099';" onmouseout="this.style.backgroundColor='#0099FF';">
			    <span style="margin:20px 0 0 20px;font-size:18px;font-weight:bold;">静候新学校加入</span><hr />
				<p></p>
			  </div>
			</div>
			<div style="clear:float;clear:both;"></div>
			<div style="margin:20px 0 40px 0;">
			  <div style="margin:0 0 0 10px;">
			    <span style="font-size:28px;font-weight:bold;">参与学校</span><br />
				<span>每个项目有具体计划，对某个项目感兴趣请加入我们。可在完成一个项目后参与其他项目，所有项目均为公益性质（完全免费）。</span>
			  </div>
			  <?php
				include 'db.php';
				$result = mysql_query("select * from sgfw_user where id>=5 order by id desc");
				while($item = mysql_fetch_array($result)){
				//foreach($data as $item){
			  ?>
			  <div style="width:420;height:140px;border:1px solid #0099FF;padding:10px;font-size:14px;line-height:22px;float:left;">
			    <div class="team_item_title" style="font-weight:bold;color:#FF9900;font-size:18px;line-height:40px;">
				  <?php echo base64_decode($item["username"])?>
				</div>
				<div style="">
				  <span>小组成员：<?php echo base64_decode($item["username"])?><span>
				</div>
				<div style="">
				  （小组口号、小组简介、小组项目介绍等任何信息。）
				</div>
			  </div>
			  <?php }?>
			  <div style="width:420;height:140px;border:1px solid #0099FF;padding:10px;font-size:14px;line-height:22px;float:left;">
			    <div class="team_item_title" style="font-weight:bold;color:#FF9900;font-size:18px;line-height:40px;">
				  梦想之星
				</div>
				<div style="">
				  <span>小组成员：吕昭波<span>
				</div>
				<div style="">
				  音乐播放器，在首页中显示本地音乐，包含用户喜欢指数、推荐指数等，还有歌曲搜索框方便添加新的音乐。本软件适用于班级或团体，用于推荐自己喜欢的音乐。
				</div>
			  </div>
			  <div style="clear:float;clear:both;"></div>
			</div>
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