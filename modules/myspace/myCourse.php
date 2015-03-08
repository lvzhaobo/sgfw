<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {color:#FFFFFF;text-decoration:none;}
	  .team a {color:#FF9900;text-decoration:none;margin:10px;}
	  table {font-size:13px;}
	  ul {margin:0 0 0 -20px;}
	  .project_item {background-color:#F2F2F2;padding:0 10px 10px 10px;;line-height:20px;font-size:13px;}
	  .project_item:hover{background-color:#EEEEEE;}
	  .intro_title {color:#666666;font-weight:bold;margin:5px 0 0 0;}
	  .intro_content {color:#999999;}
	  .current {color:#FF9900;}
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
			}
		  ?>
	<div>
	  <div class="main index" style="padding-top:32px;min-width:960px;margin:0 auto;font-size:14px;min-height:400px;">
	    
	    <div style="width:200px;height:100%;z-index:0;float:left;position:fixed;font-weight:bold;font-size:16px;background-color:#F3F3F3;padding:10px 0;line-height:40px;border-right:2px solid #CCCCCC;">
		<div style="margin:10px 0;text-align:center;border-bottom:2px solid #FFFFFF;">
		  <div><img src="<?php echo $workspace."/data/upload/".$data["img"]?>" style="width:80px;height:80px;border-radius:3em;" /></div>
		  <div style="line-height:28px;color:#666666;margin:5px 0;"><?php echo base64_decode($data["username"]);?></div>
		  <div style="color:#999999;font-size:13px;"><?php $time = $data["create_time"];$date = $time==0?"2014-10-24":date("Y-m-d H:i:s");echo "注册时间：".$date?></div>
		</div>
		<div style="text-align:center;">
		  <a href="index.php">
		  <div style="color:#000000;">
		    <span>基本信息</span>
		  </div>
		  </a>
		  <a href="myStudy.php">
		  <div style="color:#FF9900;">
		    <span>我的课程</span>
		  </div>
		  </a>
		  <a href="#">
		  <div style="color:#CCCCCC;">
		    <span>我的作业</span>
		  </div>
		  </a>
		  <a href="myResource.php">
		  <div style="color:#000000;">
		    <span>学习资源</span>
		  </div>
		  </a>
		</div>
		</div>
		<div class="content" style="width:800px;float:left;margin:0 0 40px 200px;min-height:320px;">
		  <iframe src="../../course/<?php echo empty($_GET["course"])?"website":$_GET["course"]?>/<?php echo empty($_GET["process"])?"week1":$_GET["process"]?>.php" style="border:0px;width:100%;height:800px;"></iframe>
		</div>
		<div class="project_item" style="width:300px;float:right;padding:10px 20px 10px 20px;border-left:2px solid #CCCCCC;">
		<iframe src="../../course/<?php echo empty($_GET["course"])?"website":$_GET["course"]?>/intro.php?course=<?php echo $_GET["course"]."&process=".$_GET["process"]?>" style="border:0px;width:100%;height:800px;"></iframe>
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
  </body>
</html>
<script>
//alert("测试阶段，以网站设计或PHP为例");
<?php if(!empty($_GET["info"])){?>
alert("<?php echo $_GET["info"]?>");
window.location.href="myStudy.php";
<?php }?>
</script>