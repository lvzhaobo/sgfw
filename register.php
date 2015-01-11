<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
    <style type="text/css">
	  p {text-indent:2em;line-height:1.6em;}
	  a {color:#FFFFFF;text-decoration:none;}
	  input,select {line-height:28px;width:280px;border:2px solid #CCCCCC;font-weight:bold;font-size:14px;padding:4px 10px;margin:2px 4px;border-radius:0.5em;}
	  input:hover,select:hover {color:#0099FF;border:2px solid #FF9900;}
	  th {text-align:right;font-weight:normal;}
	  button {font-weight: bold; line-height: 32px; box-shadow: 0px 0px 2px rgb(220, 220, 220); width: 80px; font-size: 16px; border-radius: 0.5em; margin: 0px 0px 0px 204px; border: 2px solid #FF9900; color:#0099FF; background-color: rgb(255, 255, 255);}
	  button:hover {border:2px solid #0099FF;color:#FF9900;}
	</style>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include 'src/header.php'?>
	<?php include 'src/notice.php'?>
	<div>
	  <div class="main index" style="padding-top:30px;width:960px;height:380px;margin:0 auto;font-size:14px;background-image:url('image/dream.jpg');">
		<div class="content" style="width:760px;float:left;margin:0 0 0 220px;min-height:320px;">
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
			    <th>推荐人：</th>
				<td><input name="account[recommender]" value="<?php echo (isset($_GET["r"])?base64_decode($_GET["r"]):"")?>"></td>
			  </tr>
			  <tr>
			    <th>学校：</th>
				<td><input name="account[college]"></td>
			  </tr>
			  <!--<tr>
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
			  </tr>-->
			  <tr>
			    <th></th>
				<td><button type="submit" style="">确定</button></td>
			  </tr>
			</table>
		  </form>
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