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
		  <div style="clear:float;clear:both;"></div>
		  <div style="height:28px;margin:20px 0 0 0;background-color:#F3F3F3;border-bottom:1px solid #00AAFF;border-top:1px solid #00AAFF;padding:6px 20px;color:#333333;">
			  <div style="width:200px;float:left;">标题</div><div style="width:280px;float:left;">内容</div><div style="float:left;">创建时间</div>
		  </div>
		  <?php 
			$dir_path = "../../data/users/".$_SESSION["user"];
			if(is_dir($dir_path)){
				$dir = dir($dir_path);
				$result = mysql_query("select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'");
				//var_dump(mysql_error());
				$data = mysql_fetch_array($result);
				
				$result = mysql_query("select * from sgfw_homework where type='note' AND user_id='".$data["id"]."'");
				//$homework = mysql_fetch_array($result);
				//var_dump($homework);
				while($homework = mysql_fetch_array($result)){
				//var_dump($homework);//die;
				//continue;
				//while(($file = $dir->read()) !== false){
					//if($file!="." && $file!=".."){
						list($file_name,$file_ext) = explode("_",$homework["file"]);
						$file_real_name = base64_decode($file_name);
						
		  ?>
		    <div style="height:28px;border-bottom:1px solid #00AAFF;padding:6px 20px;color:#333333;line-height:28px;color:#333333;">
			  <div style="width:200px;float:left;overflow:hidden;"><?php echo mb_substr($file_real_name,0,28);?></div><div style="width:280px;float:left;overflow:hidden;"><?php echo mb_substr($homework["comment"],0,28);?></div><div style="width:200px;float:left;"><?php echo $homework["create_time"]?></div><div style="float:left;"><a href="myNoteView.php?id=<?php echo $homework['id']?>">查看</a></div>
			</div>
		  <?php //}
		  }}
		  else{
			  exec("mkdir -p ".$dir_path);
			  exec("chmod 0777 ".$dir_path);
		  }?>
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