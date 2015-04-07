<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;font-size:13px;color:#000000;margin:5px 0;}
	  a {color:#FFFFFF;text-decoration:none;}
	  .project_item {width:280px;height:148px;margin:10px 10px 0px 0px;float:left;padding:5px;border:1px solid #FFFFFF;border-radius:0.5em;color:#333333;background-color:#F3F3F3;}
	  .project_item_title {margin:20px 0 0 0px;font-size:16px;font-weight:bold;color:#FF6600;line-height:28px;}
	  .project_item hr {height:1px;display:none;}
	  .label_part {padding:1px 2px;margin:0 2px;line-height:26px;border:1px solid #0099FF;border-radius:0.5em;}
	  .college_item {width:168px;height:200px;margin:10px 20px 10px 0px;float:left;color:#333333;border:1px solid #DCDCDC;box-shadow:0 0 5px #DCDCDC;text-align:center;}
	  .college_item:hover {box-shadow:0 0 5px #0099FF;}
	  .zan a{color:#999999;}
	  .zan a:hover {color:#FF9900;}
	  .team_item_title {font-weight:normal;color:#0099FF;font-size:16px;line-height:40px;}
	  .team_item_title:hover {font-weight:normal;color:#FFAA00;font-size:16px;line-height:40px;}
	</style>
	<script src="../src/js/account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include '../src/header.php'?>
	  <div class="main index">
		  <div class="content" style="width:960px;margin:0 auto;font-size:14px;">
		    <div style="width:100%;margin:60px 0;min-height:480px;">
			  <div style="margin:20px 0px;padding:0 20px;font-weight:normal;font-size:18px;line-height:32px;color:#333333;width:100%;height:32px;background-color:#F5F5F5;border-left:2px solid #00A2C9;">新同学</div>
			  <?php
				include '../lib/db.php';
				$result = mysql_query("select * from sgfw_user where id > 4 order by id desc");
				//$i = 0;
				$data = array();
				while($item_tmp = mysql_fetch_array($result)){
					$data[] = $item_tmp;
				}
				shuffle($data);
				
				/*$count = count($data);
				for($i=$count;$i>0;$i--){
					$key = rand(0,$i);
					$item = $data[$key];
					unset($data[$key]);*/
				foreach($data as $item){
					//if(++$i>12)
						//break;
			  ?>
			  <div style="width:200px;height:140px;text-align:center;border:0px solid #0099FF;padding:10px;margin:10px;font-size:14px;line-height:22px;border-radius:0.5em;float:left;">
			    <div style="">
				  <?php $img_path = $workspace."data/upload/".str_replace("upload","",$item["img"]);?>
				  <img src="<?php echo empty($item["img"])?"../src/images/dream.jpg":($img_path)?>" style="width:80px;height:80px;border-radius:5em;border:2px solid #CCCCCC;" />
				</div>
			    <div class="team_item_title">
				  <?php echo base64_decode($item["username"])?>
				</div>
				<div>
				  <?php //echo $item["college"]?>
				</div>
				<!--<div style="">
				  <span>小组成员：<?php echo base64_decode($item["username"])?><span>
				</div>
				<div style="">
				  （小组口号、小组简介、小组项目介绍等任何信息。）
				</div>-->
				<div>
				  <?php 
					if(!empty($item["config"])){
				  ?>
				  <div style="overflow:hidden;height:40px;">  
				  <span title="<?php echo $item["config"]?>"><?php echo $item["config"];?></span>
				  </div>
				  <?php
				    }
					else{
				  ?>
				    <div style="color:#BBBBBB;">
					  <?php echo "我是传说，没人知道我";?>
					</div>
				  <?php
				    }
				  ?>
				</div>
			  </div>
			  <?php }?>
			  <div style="clear:float;clear:both;"></div>
			  <div style="margin:20px 0px;padding:0 20px;font-weight:normal;font-size:18px;line-height:32px;color:#333333;width:100%;height:32px;background-color:#F5F5F5;border-left:2px solid #00A2C9;">大学</div>
			  <div>
			  <div style="width:100%;float:left;">
			  <?php 
			    include '../lib/db.php';
				$data = array();
				$result = mysql_query("select * from sgfw_college");
				while($college = mysql_fetch_array($result)){
			  ?>
			  <div class="college_item" style=""><!-- onmouseover="this.style.backgroundColor='#FF0099';" onmouseout="this.style.backgroundColor='#00A7FF';">-->
			    <div style="margin:20px;align:center;height:60px;">
				  <img src="<?php echo $workspace."src/".preg_replace("/image\//","images/",$college['image'])?>" style="width:80px;float:left;margin:0 20px;align:middle;">
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
						$data = file_get_contents("../data/request_ip.json");
						$data = empty($data) ? array() : $data;
						$data = json_decode($data,true);
						if(!in_array($sign,$data)){
					?>
					<span style="color:#999999;"><a href="../lib/request.php?action=zan&college=<?php echo $college["id"]?>" style="text-decoration:underline;">点赞</a></span>&nbsp;
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
			  </div>
			</div>
			<div style="clear:float;clear:both;"></div>
			<div style="margin:20px 0 40px 0px;">
			  <div style="margin:0 0 0 0px;height:48px;border-bottom:2px solid #F3F3F3;">
			    <div style="float:left;text-align:middle;padding:10px 20px;color:#333333;">
			      <span style="font-size:20px;font-weight:bold;margin:0 5px;">梦想团队</span>
				  <span>查找自己的小伙伴？我们是最佳合伙人。加入团队，一起学习。</span>
				</div>
			  </div>
			  <?php
				//include 'db.php';
				$result = mysql_query("select * from sgfw_team order by id desc");
				$i = 0;
				while($item = mysql_fetch_array($result)){
				//foreach($data as $item){
			  ?>
			  
			    <div class="project_item" onmouseover="this.style.border='1px solid #FF9900';" onmouseout="this.style.border='1px solid #FFFFFF';">
			      <div style="width:100%;">
				    <div style="width:100px;max-height:100px;float:left;overflow:hidden;">
					  <?php $img = "bg".($item["id"]%7).".jpg";
						if($img=="bg0.jpg")
							$img = "bg.jpg";
						if(isset($item["img"]) && !empty($item["img"]))
							$img = $item["img"];
					  ?>
				      <img src="<?php echo "../src/images/dream.jpg";?>" style="width:80px;height:80px;border-radius:3em;"/>
				    </div>
				    <div style="max-width:200px;float:left;margin:0px 0;">
				      <!--<span class="project_item_title" style=""><?php echo base64_decode($item["name"])?></span><hr />-->
				      <div style="margin:0 0 0 10px;">
					    <span style="font-weight:bold;"><?php echo base64_decode($item["name"])?></span><br />
						
				        <!--<span title="喜欢：8" style="margin-left:10px;font-size:20px;color:#FF9900;">0</span>
						<span>赞</span><br />
						<span style="font-size:12px;"><span class="label_part">标签1</span>
						<span class="label_part">标签2</span><br />-->
						<br />
						<span>成员：<?php echo $item["member"]?></span>
				      </div>
				    </div>
				  </div>
			      <div style="clear:float;clear:both;"></div>
				  <div style="margin:10px 0 0 0;color:#333333;font-weight:normal;">
				  <div style="margin:0 0 5px 0;">
				    <!--<span>成员：<?php echo $item["member"]?></span>-->
				  </div>
				  <span><?php $str = $item["slogan"];echo empty($str)?"<span style='color:#CCCCCC;'>没有团队简介哦</span>":$str;?></span>
				  </div>
				  <p></p>
			    </div>
			  
			  <?php }?>
			  <div style="clear:float;clear:both;"></div>
			  
			</div>
		  </div>
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
	<?php include '../src/footer.php';?>
  </body>
</html>