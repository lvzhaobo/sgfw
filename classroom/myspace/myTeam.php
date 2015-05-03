<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  #basic_info input {height:32px;border:2px solid #0099FF;font-weight:bold;font-size:14px;background-color:#F2F2F2;padding:4px;margin:2px;}
	  .team {font-size:13px;}
	  .btn,button{font-weight: bold; text-align:center;line-height: 26px; box-shadow: 0px 0px 2px rgb(220, 220, 220); min-width: 60px;padding:0 10px;margin:0 10px; font-size: 16px; border-radius: 0.5em; border: 2px solid #FF9900; color:#0099FF; background-color: rgb(255, 255, 255);}
	  .btn:hover,button:hover{border:2px solid #0099FF;color:#FF9900;}
	  .btn a {color:#0099FF;}
	  .btn a:hover {color:#FF9900;}
	  th {font-weight:normal;font-size:14px;text-align:right;padding:0 10px 0 0;color:#CCCCCC;}
	  td {font-weight:normal;font-size:14px;}
	  .file {
	  width:60px;
    position: relative;
    display: inline-block;
    #background: #D0EEFF;
    #border: 1px solid #99D3F5;
    border-radius: 4px;
    padding: 4px 12px;
    overflow: hidden;
    color: #1E88C7;
    text-decoration: none;
    text-indent: 0;
    line-height: 20px;
	margin: 10px 20px 0 40px;
}
.file input {
    position: absolute;
    font-size: 100px;
    right: 0;
    top: 0;
    opacity: 0;
}
.file:hover {
    #background: #AADFFD;
    #border-color: #78C3F3;
    color: #004974;
    text-decoration: none;
}
	.button {font-weight: normal; line-height: 32px; box-shadow: 0px 0px 2px rgb(220, 220, 220); width: 80px; font-size: 13px; border-radius: 0.5em; margin: 0px 0px 0px 204px; border: 2px solid #FF9900; color:#0099FF; background-color: rgb(255, 255, 255);}
	.button:hover {border:2px solid #0099FF;color:#FF9900;text-align:center;}
	</style>
	<script src="../../src/js/account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include '../../src/header.php'?>
	<?php
			include '../../lib/db.php';
			$data = array();
			if(isset($_SESSION["user"])){
				$result = mysql_query("select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'");
				//var_dump(mysql_error());
				$data = mysql_fetch_array($result);
			}
			if(!isset($data["id"]) or empty($data["id"])){
				echo "<script>alert('请先登录');window.location.href='../login.php'</script>";
				return ;
			}
		  ?>
	<div>
	  <div class="main index" style="padding-top:32px;min-width:960px;margin:0 auto;font-size:14px;min-height:400px;">
	    
	    <?php include '../../src/classroom_index.php';?>
		<div class="content" style="width:800px;float:left;margin:0 0 40px 200px;min-height:320px;">
		<div>
		  <?php
			//include '../../lib/db.php';
			$data = array();
			if(isset($_SESSION["user"])){
				$result = mysql_query("select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'");
				$data = mysql_fetch_array($result); 
				$result_team = mysql_query("select * from sgfw_team where member LIKE '%".$_SESSION["user"]."%'");
				$team = mysql_fetch_array($result);
			}
			
			if(!isset($data["id"]) or empty($data["id"])){
				echo "<script>alert('请先登录');window.location.href='../../login.php'</script>";
				return ;
			}
			$edit = isset($_GET["edit"]);
		  ?>
		
		<div class="content" style="width:800px;float:left;margin:0 0 40px 0px;padding:20px 10px;min-height:320px;">
		  <div style="">
		    <a style="margin:0px 0 0 0px;float:right;" href="myNoteCreate.php"><div type="submit" style="margin:16px 0 0 0;text-align:center;" class="button">创建</div></a>
		  </div>
		  列出班级/团队中的成员，可以查看其它人的状态、基本信息、公开的作业及笔记等，可以提交疑问或作业检查等<br />
		  老师、管理员会特殊标记，便于发送站内信息等
		  <div style="clear:float;clear:both;"></div>
		  <?php
				//include '../../lib/db.php';
				$result = mysql_query("select * from sgfw_user where id > 4 order by id desc");
				//$i = 0;
				$data = array();
				while($item_tmp = mysql_fetch_array($result)){
					$item = $item_tmp;
				//	$data[] = $item_tmp;
				//}
				//shuffle($data);
				//foreach($data as $item){
					//if(++$i>12)
						//break;
			  ?>
			  <div style="width:200px;height:140px;text-align:center;border:0px solid #0099FF;padding:10px;margin:10px;font-size:14px;line-height:22px;border-radius:0.5em;float:left;">
			    <div style="">
				  <?php $img_path = $workspace."data/upload/".str_replace("upload","",$item["img"]);?>
				  <img src="<?php echo empty($item["img"])?"../../src/images/dream.jpg":($img_path)?>" style="width:80px;height:80px;border-radius:5em;border:2px solid #CCCCCC;" />
				</div>
			    <div class="team_item_title">
				  <?php echo base64_decode($item["username"])?>
				</div>
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
	    </div>
	<div style="clear:float;clear:both;"></div>
  </body>
</html>
<script>
<?php if(!empty($_GET["info"])){?>
alert("<?php echo $_GET["info"]?>");
window.location.href="myHomework.php";
<?php }?>
</script>