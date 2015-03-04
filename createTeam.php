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
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include 'src/header.php'?>
	<div>
	  <div class="main index" style="padding-top:60px;width:960px;margin:0 auto;font-size:14px;">
	    <div style="width:192px;float:left;position:fixed;font-weight:bold;font-size:16px;">
		  <a href="mySpace.php">
		  <div style="width:100%;height:40px;color:#FF9900;">
		    <span style="margin:0 0 0 20px;">基本信息</span>
		  </div>
		  </a>
		  <a href="myStudy.php">
		  <div style="width:100%;height:40px;color:#000000;">
		    <span style="margin:0 0 0 20px;">我的课程</span>
		  </div>
		  </a>
		  <a href="myDiscuss.php">
		  <div style="width:100%;height:40px;color:#000000;">
		    <span style="margin:0 0 0 20px;">学习讨论</span>
		  </div>
		  </a>
		</div>
		<div class="content" style="width:760px;float:left;margin:0 0 0 200px;min-height:320px;">
		  <fieldset>
		  <legend>创建团队</legend>
		  <form action="saveTeam.php" method="post">
		    <table>
			  <tr>
			    <th width="100">团队名称：</th>
				<td><input name="team[name]" /></td>
			  </tr>
			  <tr>
			    <th>成员：</th>
				<td><input name="team[member]" /></td>
			  </tr>
			  <tr>
			    <th>口号：</th>
				<td><input name="team[slogan]" /></td>
			  </tr>
			  <tr>
			    <th>团队标签：</th>
				<td><input name="team[label]" /></td>
			  </tr>
			  <tr>
			    <th>主页：</th>
				<td><input name="team[website]" /></td>
			  </tr>
			  <tr>
			    <th>联系方式：</th>
				<td><input name="team[connect]" /></td>
			  </tr>
			  <tr>
			    <th>团队简介：</th>
				<td><textarea name="team[introduction]"></textarea></td>
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
window.location.href="createTeam.php";
<?php }?>
</script>