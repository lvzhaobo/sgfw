<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {color:#FFFFFF;text-decoration:none;}
	  input,select {height:32px;border:2px solid #0099FF;font-weight:bold;font-size:14px;background-color:#F2F2F2;padding:4px;margin:2px;}
	  th {text-align:right;}
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include 'src/header.php'?>
	<div>
	  <div class="main index" style="padding-top:30px;width:960px;margin:0 auto;font-size:14px;">
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
		  <legend>注册</legend>
		  <form action="saveAccount.php" method="post">
		    <table>
			  <tr>
			    <th width="100">用户名：</th>
				<td><input name="account[username]"></td>
			  </tr>
			  <tr>
			    <th>密码：</th>
				<td><input name="account[password]" type="password"></td>
			  </tr>
			  <tr>
			    <th>确认密码：</th>
				<td><input name="account[password_2]" type="password"></td>
			  </tr>
			  <tr>
			    <th>QQ：</th>
				<td><input name="account[qq]"></td>
			  </tr>
			  <tr>
			    <th>Email：</th>
				<td><input name="account[email]"></td>
			  </tr>
			  <tr>
			    <th>学习课程：</th>
				<td><select name="account[project]">
				  <option value="website">网站设计</option>
				  <option value="database">数据库</option>
				  <option value="php">PHP</option>
				  <option value="javascript">JavaScript</option>
				  <option value="jsp">Java(JSP)</option>
				  <option value="software_test">软件测试</option>
				  
				</select></td>
			  </tr>
			  <tr>
			    <th>分组：</th>
				<td>
				  <select name="account[team]">
				    <option value="1">小组1</option>
				    <option value="2">小组2</option>
					<option value="3">小组3</option>
					<option value="4">小组4</option>
					<option value="5">小组5</option>
				    <option value="6">小组6</option>
					<option value="7">小组7</option>
					<option value="8">小组8</option>
				  </select>
				  <span>暂时分组，待注册结束后可微调，建议希望在一组的同学先选择同一个小组。</span>
				</td>
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
window.location.href="register.php";
<?php }?>
</script>