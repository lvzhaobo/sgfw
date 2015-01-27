<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;font-size:13px;color:#000000;margin:5px 0;}
	  a {color:#FFFFFF;text-decoration:none;}
	  .project_item {width:300px;height:148px;margin:0px 5px 0px 0px;float:left;padding:5px;border:2px solid #FFFFFF;color:#333333;background-color:#F3F3F3;}
	  .project_item_title {margin:20px 0 0 0px;font-size:16px;font-weight:bold;color:#FF6600;line-height:28px;}
	  .project_item hr {height:1px;display:none;}
	  .label_part {padding:1px 2px;margin:0 2px;line-height:26px;border:1px solid #0099FF;border-radius:0.5em;}
	  .college_item {width:168px;height:200px;margin:10px 20px 10px 0px;float:left;color:#333333;border:1px solid #DCDCDC;box-shadow:0 0 5px #DCDCDC;text-align:center;}
	  .college_item:hover {box-shadow:0 0 5px #0099FF;}
	  .zan a{color:#999999;}
	  .zan a:hover {color:#FF9900;}
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include 'src/header.php'?>
	  <div class="main index">
		  <div class="content" style="width:960px;margin:0 auto;font-size:14px;">
		    <div style="width:100%;margin:60px 0;min-height:480px;">
			  <div style="margin:0 0 0 0px;height:48px;border-bottom:2px solid #F3F3F3;">
			    <div style="float:left;text-align:middle;padding:10px 20px;color:#333333;">
			      <span style="font-size:20px;font-weight:bold;margin:0 5px;">参与学校</span>
				  <span>已经参与的学校/校区，如果没找到你的学校，请第一个注册并让你的学校/校区显示在这里吧。</span>
				</div>
			  </div>
			  <div>
			  <div style="width:100%;float:left;">
			  <!--<a href="website.php">
			  <div style="width:210px;min-height:128px;background-color:#00A7FF;margin:10px 0 10px 10px;float:left;color:#FFFFFF;padding:10px;" onmouseover="this.style.backgroundColor='#FF0099';" onmouseout="this.style.backgroundColor='#00A7FF';">
			    <span style="margin:20px 0 0 20px;font-size:18px;font-weight:bold;">郑州大学（新校区）</span><hr />
				<div style="font-size:48px;text-align:center;" onmouseover="this.style.fontWeight='bold';" onmouseout="this.style.fontWeight='normal';">8</div>
				<div style=""><img src="image/comment.jpg" style="height:40px;"/><span style="font-size:20px;">10</span><img src="image/like.jpg" style="height:40px;"/><span style="font-size:20px;">20</span></div>
			  </div>
			  </a>-->
			  <?php 
			    include 'db.php';
				$data = array();
					$result = mysql_query("select * from sgfw_college");
					//var_dump(mysql_error());
					while($college = mysql_fetch_array($result)){
				/*$colleges = array(
					array("name"=>"郑州大学（新校区）","color"=>"#00A7FF","img"=>"image/college/zzu.jpg","start_time"=>"2015年3月10日"),
					array("name"=>"郑州大学（南校区）","color"=>"#71CE01","img"=>"image/college/zzu.jpg","start_time"=>"2015年3月10日"),
					array("name"=>"郑州大学（北校区）","color"=>"#FFB500","img"=>"image/college/zzu.jpg","start_time"=>"2015年3月10日"),
					array("name"=>"河南大学","color"=>"#B83AFE","img"=>"image/college/hnu.jpg","start_time"=>"2015年3月10日"),
					array("name"=>"河南大学（软件学院）","color"=>"#5883E2","img"=>"image/college/hnu.jpg","start_time"=>"2015年3月10日"),
					array("name"=>"黄河科技学院","color"=>"#347ABF","img"=>"image/college/hstc.jpg","start_time"=>"2015年3月10日"),
					array("name"=>"郑州轻工业学院","color"=>"#347ABF","img"=>"image/college/zq.jpg","start_time"=>"2015年3月10日"),
					array("name"=>"河南工业大学","color"=>"#00CBAE","start_time"=>"2015年3月10日"),
				);*/
				//foreach($colleges as $college){
			  ?>
			  <div class="college_item" style=""><!-- onmouseover="this.style.backgroundColor='#FF0099';" onmouseout="this.style.backgroundColor='#00A7FF';">-->
			    <div style="margin:20px;align:center;height:60px;">
				  <img src="<?php echo $college['image']?>" style="width:80px;float:left;margin:0 20px;align:middle;">
				</div>
				<!--<div style="float:left;padding:5px 20px;font-size:48px;text-align:center;">8</div>-->
				<div style="clear:float;clear:both;"></div>
				<br />
				<div style="background-color:#FAFAFA;line-height:28px;">
				  <span style="margin:20px 0 0 5px;font-size:14px;font-weight:bold;"><?php echo base64_decode($college["name"])?></span>
				</div>
				<div style="background-color:#FAFAFA;margin-top:2px;font-size:14px;">
				  <div style="">
					<span style="color:#0099FF;"><?php echo $college["zan"]?></span>
					<?php 
						$sign = $_SERVER["REMOTE_ADDR"]."-".$college["id"];
						$data = file_get_contents("data/request_ip.json");
						$data = empty($data) ? array() : $data;
						$data = json_decode($data,true);
						if(!in_array($sign,$data)){
					?>
					<span style="color:#999999;"><a href="request.php?action=zan&college=<?php echo $college["id"]?>" style="text-decoration:underline;">点赞</a></span>&nbsp;
					<?php }
					else{?>
					<span style="color:#999999;">已赞</span>&nbsp;
					<?php }?>
					<!--<span style="color:#0099FF;">20</span>
					<span style="color:#999999;">留言</span>
					<span style="color:#FF9900;">20</span>
					<span style="color:#999999;">同学</span>-->
				  </div>
				  <div style="margin:5px 0 0 0;">
				    <span style="color:#FF9900;"><?php echo $college["register_time"];?></span>&nbsp;<span style="color:#CCCCCC;">开放注册</span>
				  </div>
				</div>
			  </div>
			  <?php }?>
			  <!--<div style="width:210px;height:128px;background-color:#71CE01;margin:10px 0 10px 10px;float:left;color:#FFFFFF;padding:10px;" onmouseover="this.style.backgroundColor='#FF0099';" onmouseout="this.style.backgroundColor='#71CE01';">
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
			  </div>-->
			  <!--<div style="width:210px;height:150px;background-color:#0099FF;margin:10px 0 10px 10px;float:left;color:#FFFFFF;padding:10px;" onmouseover="this.style.backgroundColor='#FF0099';" onmouseout="this.style.backgroundColor='#0099FF';">
			    <span style="margin:20px 0 0 20px;font-size:18px;font-weight:bold;">静候新学校加入</span><hr />
				<p>想成为你们学校的首位加入我们的成员吗？赶紧联系我们。</p>
			  </div>
			  </div>-->
			  <!--<div style="width:230px;min-height:548px;margin:10px 0 0 5px;float:left;border:2px solid #0099FF;">
			  
			  </div>-->
			  </div>
			</div>
			<div style="clear:float;clear:both;"></div>
			<div style="margin:20px 0 40px 0px;">
			  <div style="margin:0 0 0 0px;height:48px;border-bottom:2px solid #F3F3F3;">
			    <div style="float:left;text-align:middle;padding:10px 20px;color:#333333;">
			      <span style="font-size:20px;font-weight:bold;margin:0 5px;">梦想团队</span>
				  <span>想显示在此处？先注册页面，尽可能好的完成课程学习、项目开发，让更多的人认识你。</span>
				</div>
			  </div>
			  <?php
				include 'db.php';
				$result = mysql_query("select * from sgfw_team order by id desc");
				$i = 0;
				while($item = mysql_fetch_array($result)){
				//foreach($data as $item){
			  ?>
			  <a href="">
			    <div class="project_item" onmouseover="this.style.border='2px solid #FF9900';" onmouseout="this.style.border='2px solid #FFFFFF';">
			      <div style="width:100%;">
				    <div style="width:100px;max-height:100px;float:left;overflow:hidden;">
					  <?php $img = "bg".($item["id"]%7).".jpg";
						if($img=="bg0.jpg")
							$img = "bg.jpg";
						if(isset($item["img"]) && !empty($item["img"]))
							$img = $item["img"];
					  ?>
				      <img src="<?php echo $img;?>" style="width:80px;height:80px;border-radius:3em;"/>
				    </div>
				    <div style="max-width:200px;float:left;margin:0px 0;">
				      <!--<span class="project_item_title" style=""><?php echo base64_decode($item["name"])?></span><hr />-->
				      <div style="margin:0 0 0 10px;">
					    <span style="font-weight:bold;"><?php echo base64_decode($item["name"])?></span><br />
						
				        <span title="喜欢：8" style="margin-left:10px;font-size:20px;color:#FF9900;">0</span>
						<span>赞</span><br />
						<span style="font-size:12px;"><span class="label_part">标签1</span>
						<span class="label_part">标签2</span><br />
						
				      </div>
				    </div>
				  </div>
			      <div style="clear:float;clear:both;"></div>
				  <div style="margin:10px 0 0 0;color:#333333;font-weight:normal;">
				  <div style="margin:0 0 5px 0;">
				    <span>成员：<?php echo $item["member"]?></span>
				  </div>
				  <span><?php echo $item["slogan"]?></span>
				  </div>
				  <p></p>
			    </div>
			  </a>
			  <?php }?>
			  <div style="clear:float;clear:both;"></div>
			  <div style="margin:20px 0 0 0px;height:48px;border-bottom:2px solid #F3F3F3;">
			    <div style="float:left;text-align:middle;padding:10px 20px;color:#333333;">
			      <span style="font-size:20px;font-weight:bold;margin:0 5px;">注册用户</span>
				  <span></span>
				</div>
			  </div>
			  <?php
				include 'db.php';
				$result = mysql_query("select * from sgfw_user order by id desc");
				$i = 0;
				while($item = mysql_fetch_array($result)){
			  ?>
			  <div style="width:200px;height:140px;text-align:center;border:0px solid #0099FF;padding:10px;margin:10px;font-size:14px;line-height:22px;float:left;">
			    <div style="">
				  <img src="<?php echo empty($item["img"])?"image/dream.jpg":$item["img"]?>" style="width:80px;height:80px;border-radius:5em;border:2px solid #CCCCCC;" />
				</div>
			    <div class="team_item_title" style="font-weight:bold;color:#FF9900;font-size:18px;line-height:40px;">
				  <?php echo base64_decode($item["username"])?>
				</div>
				<div>
				  <?php echo $item["college"]?>
				</div>
				<!--<div style="">
				  <span>小组成员：<?php echo base64_decode($item["username"])?><span>
				</div>
				<div style="">
				  （小组口号、小组简介、小组项目介绍等任何信息。）
				</div>-->
			  </div>
			  <?php }?>
			  <div style="clear:float;clear:both;"></div>
			  <!--<div style="width:420;height:140px;border:1px solid #0099FF;padding:10px;font-size:14px;line-height:22px;float:left;">
			    <div class="team_item_title" style="font-weight:bold;color:#FF9900;font-size:18px;line-height:40px;">
				  梦想之星
				</div>
				<div style="">
				  <span>小组成员：吕昭波<span>
				</div>
				<div style="">
				  音乐播放器，在首页中显示本地音乐，包含用户喜欢指数、推荐指数等，还有歌曲搜索框方便添加新的音乐。本软件适用于班级或团体，用于推荐自己喜欢的音乐。
				</div>
			  </div>-->
			  <div style="clear:float;clear:both;"></div>
			</div>
		  </div>
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
	<?php include 'src/footer.php';?>
  </body>
</html>