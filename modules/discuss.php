<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	<script src="../src/js/account.js" type="text/javascript"></script>
	<script type="text/javascript" src="../src/js/jquery.min.js"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include '../src/header.php'?>
	<?php include '../src/notice.php'?>
	<div style="margin:80px 0 0 0;">
	  <div class="main_index" style="width:960px;margin:0 auto;font-size:14px;background-image:url('image/dream.jpg');">
	    <div style="width:100%;margin:20px auto;min-height:814px;">
		    
			  <div style="clear:float;clear:both;"></div>
			  <div style="margin:20px;text-align:center;">
			    <form action="../lib/saveDiscuss.php" method="post" id="discuss">
				  <?php 
				  if(array_key_exists("user",$_SESSION) && isset($_SESSION["user"]) && $_SESSION["user"]!=""){?>
				  <textarea name="content" style="" id="discuss_content"></textarea><br />
				  <span id="msg_content" class="message"></span>
				  <?php }
				  else{?>
				  <textarea name="content" style="text-align:center;" disabled="disabled">请先登录</textarea>
				  <?php }?>
				  <br />
				  <button type="submit" style="margin:10px 0 0 0;">发表</button>
				</form>
			  </div>
			  <div style="width:600px;margin:0 auto;">
			  <?php 
				include '../lib/db.php';
			    $perpage = 10;
				$typeQuery = "";
				if(isset($_GET["type"])&&!empty($_GET["type"]))
					$typeQuery = " WHERE category = '".$_GET["type"]."'";
			    $query_1 = mysql_query("select count(*) as NUM from sgfw_discuss");
				$result_1 = mysql_fetch_array($query_1);
				$total = $result_1["NUM"];
				$pages = (int)($total/$perpage);
				$pages = $total%$perpage==0 ? $pages : $pages+1;
				
			    $page = isset($_GET["page"])&&!empty($_GET["page"]) ? $_GET["page"] : 1;
				$pre = $page<2?"":$page-1;
				$max = $pages;
				
				$params = (isset($_GET["type"])&&!empty($_GET["type"])) ? ("&type=".$_GET["type"]) : "";
			  ?>
			  
			  <?php
				$db = new dream_mysql();
				$data = $db->getDiscuss($perpage,$page);
				//$sql = "SELECT * FROM sgfw_discuss ORDER BY create_time DESC;";
				//$result = mysql_query($sql,$conn);
				//while($item = @mysql_fetch_array($result)){
				foreach($data as $item){
			  ?>
			  <div class="discuss_item">
			    <div>
				  <span style="color:#0099FF;"><?php echo base64_decode($item["username"])?></span>&nbsp;&nbsp;<span style="color:333333;"><?php echo date("Y-m-d H:i:s",$item["create_time"]-8*3600)?></span>
				  <div>
				    <?php 
						if($item["id"]<=41)
							echo $item["content"];
						else
							echo htmlentities(base64_decode($item["content"]),ENT_QUOTES);
					?>
				  </div>
				</div>
			  </div>
			<?php }?>
			
			  
			  <div style="height:40px;text-align:center;line-height:32px;">
			    <?php if($total>=1){?>
			    <a href="<?php echo "discuss.php?page=1".$params?>">
			    <div style="width:40px;height:32px;border:1px solid #CCCCCC;margin:2px;float:left;<?php if($page==1)echo 'background-color:#0099FF;color:#F3F3F3;'?>">1</div>
				</a>
				<?php }?>
				<?php if($page>3){?>
				<div style="width:40px;height:32px;border:1px solid #CCCCCC;margin:2px;float:left;">...</div>
				<?php }?>
				<?php if($page>=3){?>
				<a href="<?php echo "discuss.php?page=".($page-1).$params?>">
				<div style="width:40px;height:32px;border:1px solid #CCCCCC;margin:2px;float:left;"><?php echo $page-1?></div>
				</a>
				<?php }?>
				<?php if(($page!=1)&&($page!=$max)){?>
				<a href="<?php echo "discuss.php?page=".$page.$params?>">
				<div style="width:40px;height:32px;border:1px solid #CCCCCC;margin:2px;float:left;background-color:#0099FF;color:#F3F3F3;"><?php echo $page?></div>
				</a>
				<?php }?>
				<?php if($max-$page>=2){?>
				<a href="<?php echo "discuss.php?page=".($page+1).$params?>">
				<div style="width:40px;height:32px;border:1px solid #CCCCCC;margin:2px;float:left;"><?php echo $page+1?></div>
				</a>
				<?php }?>
				<?php if($max-$page>=3){?>
				<div style="width:40px;height:32px;border:1px solid #CCCCCC;margin:2px;float:left;">...</div>
				<?php }?>
				<?php if($max>1){?>
				<a href="<?php echo "discuss.php?page=".$max.$params?>">
				<div style="width:40px;height:32px;border:1px solid #CCCCCC;margin:2px;float:left;<?php if($page==$max)echo 'background-color:#0099FF;color:#F3F3F3;'?>"><?php echo $max?></div>
				</a>
				<?php }?>
			  </div>
			</div>
		  </div>
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
	<?php include '../src/footer.php'?>
  </body>
</html>
<script>
$(document).ready(function(){
  
  //表单
	var form = $('#discuss');
    //用户名
	var user 	 = $('#discuss_content');
	var msg_user = $('#msg_content');
	var mode_user = /.{10,500}$/;
	
	//触发验证函数
	user.change(function(){
		if( !fields( user , mode_user) ){
			msg( msg_user , "<font color='red'>&times;请输入至少10个字符</font>");
		}
		else{
			msg( msg_user ,"");
		}
	})
	
	//一般字段验证
	function fields( field , mode ){
		console.log(field.val());
		if( mode.test( field.val() ) ){
			return true;
		}
		return false;
	}
	//密码交叉验证
	function cross( passwordA , passwordB , mode){
		if( fields( passwordA , mode) && fields( passwordB , mode)){
			if( passwordA.val() == passwordB.val()){
				return true;
			}
		}
		return false;
	}
	
	//提交验证
	form.submit(function(){
		if( !fields( user , mode_user ) ){
			msg( msg_user , "<font color='red'>请输入最少10个字符，最多500个字符</font>");
		}else{
			return true;
		}
		return false;
	})
	//信息提示
	function msg( msg_field , str ){
		msg_field.html(str);
	}
});
</script>