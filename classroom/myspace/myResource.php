<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	<script src="../../js/src/account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include '../../src/header.php'?>
	<?php
			include '../../lib/db.php';
			$data = array();
			if(isset($_SESSION["user"])){
				$result = mysql_query("select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'");
				$data = mysql_fetch_array($result);
			}
			if(!isset($data["id"]) or empty($data["id"])){
				echo "<script>alert('请先登录');window.location.href='../login.php'</script>";
			}
		  ?>
	<div>
	  <div class="main index" style="padding-top:32px;min-width:960px;margin:0 auto;font-size:14px;min-height:400px;">
	    
	    <?php include '../../src/myspace_index.php'?>
		<div class="content" style="width:800px;float:left;margin:0 0 40px 200px;padding:20px 60px;min-height:320px;line-height:24px;">
		  <div style="font-weight:bold;margin:10px 0;">
		    视频：
		  </div>
		  <div>
		    <a href="../../website-1.htm" target="_blank">第一周（1）</a><br />
			<a href="../../website-2.htm" target="_blank">第一周（2）</a>
		  </div>
		  <div style="font-weight:bold;margin:10px 0;">
		    网站：
		  </div>
		  <div style="">
		    w3school: &nbsp;&nbsp;<a href="http://www.w3school.com.cn/html/index.asp" target="_blank">http://www.w3school.com.cn/html/index.asp</a>
		  </div>
		  <div style="font-weight:bold;margin:10px 0;">
		    书籍：
		  </div>
		  <div style="">
		    HTML CSS JavaScript网页制作从入门到精通 : &nbsp;&nbsp;<a href="http://item.jd.com/11145284.html" target="_blank">http://item.jd.com/11145284.html</a>
		  </div>
		  
	    </div>
	<div style="clear:float;clear:both;"></div>
  </body>
</html>
<script>
<?php if(!empty($_GET["info"])){?>
alert("<?php echo $_GET["info"]?>");
window.location.href="myStudy.php";
<?php }?>
</script>