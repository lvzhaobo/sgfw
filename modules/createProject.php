<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {color:#FFFFFF;text-decoration:none;}
	  input,select {line-height:28px;width:240px;border:2px solid #CCCCCC;font-weight:bold;font-size:14px;padding:4px 10px;margin:2px 4px;border-radius:0.5em;}
	  input:hover,select:hover {color:#0099FF;border:2px solid #FF9900;}
	  th {text-align:right;font-weight:normal;font-size:14px;}
	  textarea {height:100px;width:280px;}
	  button {font-weight: bold; line-height: 32px; box-shadow: 0px 0px 2px rgb(220, 220, 220); width: 80px; font-size: 16px; border-radius: 0.5em; margin: 0px 0px 0px 204px; border: 2px solid #FF9900; color:#0099FF; background-color: rgb(255, 255, 255);}
	  button:hover {border:2px solid #0099FF;color:#FF9900;}
	</style>
	<script src="../src/js/account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include '../src/header.php'?>
	<?php
			include '../lib/db.php';
			$data = array();
			if(isset($_SESSION["user"])){
				$result = mysql_query("select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'");
				//var_dump(mysql_error());
				$data = mysql_fetch_array($result);
			}
			if(!isset($data["id"]) or empty($data["id"])){
				echo "<script>alert('请先登录');window.location.href='login.php'</script>";
			}
		  ?>
	<div>
	  <div class="main index" style="padding-top:32px;min-width:960px;margin:0 auto;font-size:14px;min-height:400px;">
	    <?php include '../src/myspace_index.php'?>
		<div class="content" style="width:600px;float:left;margin:0 0 40px 200px;min-height:320px;padding:20px;">
		  <fieldset>
		  <legend>创建项目</legend>
		  <form action="../lib/saveProject.php" method="post">
		    <table>
			  <tr>
			    <th width="100">项目名称：</th>
				<td><input name="project[name]" /></td>
			  </tr>
			  <tr>
			    <th>项目标签：</th>
				<td><input name="project[label]" /></td>
			  </tr>
			  <tr>
			    <th>主页：</th>
				<td><input name="project[website]" /></td>
			  </tr>
			  <tr>
			    <th>联系方式：</th>
				<td><input name="project[connect]" /></td>
			  </tr>
			  <tr>
			    <th>项目简介：</th>
				<td><textarea name="project[introduction]"></textarea></td>
			  </tr>
			  <tr>
			    <th></th>
				<td><button type="submit">确定</button></td>
			  </tr>
			</table>
		  </form>
		  </fieldset>
		</div>
		<div class="project_item" style="width:300px;float:right;padding:10px 20px 10px 20px;border-left:2px solid #CCCCCC;">
		  
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
  </body>
</html>
<script>
<?php if(!empty($_GET["info"])){?>
alert("<?php echo $_GET["info"]?>");
window.location.href="../modules/createProject.php";
<?php }?>
</script>