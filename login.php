<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {color:#FFFFFF;text-decoration:none;}
	  input,select {line-height:28px;width:280px;border:2px solid #CCCCCC;font-weight:bold;font-size:14px;padding:4px 10px;margin:2px 4px;border-radius:0.5em;}
	  input:hover,select:hover {color:#0099FF;border:2px solid #FF9900;}
	  th {text-align:right;font-weight:normal;font-size:14px;}
	  button {font-weight: bold; line-height: 32px; box-shadow: 0px 0px 2px rgb(220, 220, 220); width: 80px; font-size: 16px; border-radius: 0.5em; margin: 0px 0px 0px 204px; border: 2px solid #FF9900; color:#0099FF; background-color: rgb(255, 255, 255);}
	  button:hover {border:2px solid #0099FF;color:#FF9900;}
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include 'src/header.php'?>
	<?php include 'src/notice.php'?>
	<div class="main index" style="padding-top:60px;width:960px;height:422px;margin:0 auto;font-size:14px;">
	  <div style="margin:60px 0 0 0;">
	    <div style="float:left;width:400px;">
		  <img src="image/dream.jpg" style="width:400px;">
		</div>
		<div class="content" style="width:560px;float:left;margin:60px 0 0 0;">
		  <form action="loginValidator.php" method="post">
		    <table>
			  <tr>
			    <th width="100">用户名</th>
				<td><input name="account[username]"></td>
			  </tr>
			  <tr>
			    <th>密码</th>
				<td><input name="account[password]" type="password"></td>
			  </tr>
			  <tr>
			    <th></th>
				<td><button type="submit" style="">确定</button></td>
			  </tr>
			</table>
		  </form>
		</div>
	</div>
	</div>
	<div style="clear:float;clear:both;"></div>
	<?php include 'src/footer.php'?>
  </body>
</html>
<script>
<?php if(!empty($_GET["info"])){?>
alert("<?php echo $_GET["info"]?>");
window.location.href="register.php";
<?php }?>
</script>