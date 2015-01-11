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
	  button {font-weight: bold; line-height: 32px; box-shadow: 0px 0px 2px rgb(220, 220, 220); width: 80px; font-size: 16px; border-radius: 0.5em; margin: 0px 0px 0px 204px; border: 2px solid #FF9900; color:#0099FF; background-color: rgb(255, 255, 255);}
	  button:hover {border:2px solid #0099FF;color:#FF9900;}
	  .discuss_item {margin:14px 0;line-height:24px;}
	  textarea {width:600px;height:120px;border:1px solid #FF9900;box-shadow:0 0 3px #FF9900;color:#0099FF;padding:2px 5px;border-radius:0.5em;}
	  textarea:hover {border:1px solid #0099FF;box-shadow:0 0 3px #0099FF;}
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include 'src/header.php'?>
	<div>
	  <div class="main_index" style="width:960px;margin:0 auto;font-size:14px;background-image:url('image/dream.jpg');">
	    <div style="width:100%;margin:20px auto;min-height:814px;">
		  <?php include 'src/notice.php'?>
			  <div style="clear:float;clear:both;"></div>
			  <div style="margin:20px;text-align:center;">
			    <form action="saveDiscuss.php" method="post">
				  <textarea name="content" style=""></textarea>
				  <br />
				  <button type="submit" style="margin:10px 0 0 0;">发表</button>
				</form>
			  </div>
			  <div style="width:600px;margin:0 auto;">
			  <?php
			    include 'db.php';
				$sql = "SELECT * FROM sgfw_discuss ORDER BY create_time DESC;";
				$result = mysql_query($sql,$conn);
				while($item = mysql_fetch_array($result)){
			  ?>
			  <div class="discuss_item">
			    <div>
				  <span style="color:#0099FF;"><?php echo base64_decode($item["username"])?></span>&nbsp;&nbsp;<span style="color:333333;"><?php echo date("Y-m-d H:i:s",$item["create_time"])?></span>
				  <div>
				    <?php echo $item["content"]?>
				  </div>
				</div>
			  </div>
			<?php }?>
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