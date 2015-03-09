<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {color:#FFFFFF;text-decoration:none;}
	  input,select,textarea {height:32px;border:2px solid #0099FF;font-weight:bold;font-size:14px;background-color:#F2F2F2;padding:4px;margin:2px;}
	  textarea {height:100px;width:280px;}
	  th {text-align:right;}
	</style>
	<script src="../src/js/account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include '../src/header.php'?>
	<div>
	  <div class="main index" style="padding-top:60px;width:960px;margin:0 auto;font-size:14px;">
	    <div style="width:192px;float:left;position:fixed;">
		  <a href="login.php">
		  <div style="width:100%;height:40px;background-color:#FF9900;font-size:24px;">
		    <span style="margin:0 0 0 20px;">登录</span>
		  </div>
		  </a>
		  <a href="register.php">
		  <div style="width:100%;height:40px;background-color:#0099FF;font-size:24px;">
		    <span style="margin:0 0 0 20px;">注册</span>
		  </div>
		  </a>
		  <a href="mySpace.php">
		  <div style="width:100%;height:40px;background-color:#9900FF;font-size:24px;">
		    <span style="margin:0 0 0 20px;">我的空间</span>
		  </div>
		  </a>
		  <a href="logout.php">
		  <div style="width:100%;height:40px;background-color:#FF0099;font-size:24px;">
		    <span style="margin:0 0 0 20px;">退出</span>
		  </div>
		  </a>
		</div>
		<div class="content" style="width:760px;float:left;margin:0 0 0 200px;min-height:320px;">
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
				<td><button type="submit" style="margin:0 0 0 100px;font-weight:bold;width:60px;height:32px;background-color:#0099FF;border:2px solid #CCCCCC;">确定</button></td>
			  </tr>
			</table>
		  </form>
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
window.location.href="createProject.php";
<?php }?>
</script>