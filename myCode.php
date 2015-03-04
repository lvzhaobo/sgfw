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
	<div>
	  <div class="main index" style="padding-top:30px;width:960px;margin:0 auto;font-size:14px;">
	    <div style="width:192px;float:left;position:fixed;font-weight:bold;font-size:16px;">
		  <a href="mySpace.php">
		  <div style="width:100%;height:40px;color:#000000;">
		    <span style="margin:0 0 0 20px;">基本信息</span>
		  </div>
		  </a>
		  <a href="myStudy.php">
		  <div style="width:100%;height:40px;color:#000000;">
		    <span style="margin:0 0 0 20px;">课程</span>
		  </div>
		  </a>
		  <a href="myDiscuss.php">
		  <div style="width:100%;height:40px;color:#000000;">
		    <span style="margin:0 0 0 20px;">学习讨论</span>
		  </div>
		  </a>
		  <a href="myCode.php">
		  <div style="width:100%;height:40px;color:#FF9900;">
		    <span style="margin:0 0 0 20px;">我的代码</span>
		  </div>
		  </a>
		</div>
		
		<div class="content" style="width:760px;float:left;margin:0 0 0 200px;min-height:320px;">
		  <?php
			include 'db.php';
			//session_start();
			//var_dump($_SESSION);
			//$conn = mysql_connect("127.0.0.1","root");
			//mysql_select_db("sgfw");
			//var_dump("select * from sgfw_user where username='".$_SESSION["user"]."';");
			$data = array();
			if(isset($_SESSION["user"])){
				$result = mysql_query("select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'");
				//var_dump(mysql_error());
				$data = mysql_fetch_array($result);
			}
			if(!isset($data["id"]) or empty($data["id"])){
				echo "<script>alert('请先登录');window.location.href='login.php'</script>";
			}
			//var_dump($data);
		  ?>
		  <fieldset>
		  <legend>我的空间</legend>
		  
		  </fieldset>
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
<script>
<?php if(!empty($_GET["info"])){?>
alert("<?php echo $_GET["info"]?>");
window.location.href="register.php";
<?php }?>
</script>