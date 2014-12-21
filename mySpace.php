<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
	<script src="account.js" type="text/javascript"></script>
  <head>
  <body style="margin:0px;font-family:'Microsoft YaHei',宋体,Arial;">
    <?php include 'src/header.php'?>
	<div>
	  <div class="main index" style="padding-top:30px;width:960px;margin:0 auto;font-size:14px;min-height:400px;">
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
				
				$result = mysql_query("select * from sgfw_team where member LIKE '%".$_SESSION["user"]."%'");
				//var_dump(mysql_error());
				$team = mysql_fetch_array($result);
				//var_dump($team);
			}
			if(!isset($data["id"]) or empty($data["id"])){
				echo "<script>alert('请先登录');window.location.href='login.php'</script>";
			}
			//var_dump($data);
		  ?>
		  <a href="createTeam.php">创建团队</a>&nbsp;&nbsp;<a href="createProject.php">创建项目</a>
		  <fieldset>
		  <legend>基本信息</legend>
		  <form action="saveAccount.php" method="post">
		    <table>
			  <tr>
			    <th width="100">用户名：</th>
				<td><?php echo base64_decode($data["username"]);?></td>
			  </tr>
			  <tr>
			    <th>QQ：</th>
				<td><?php echo $data["qq"]?></td>
			  </tr>
			  <tr>
			    <th>Email：</th>
				<td><?php echo $data["email"]?></td>
			  </tr>
			  <!--<tr>
			    <th>学习课程：</th>
				<td><?php $project = array("website"=>"网站设计",
										"database"=>"数据库",
										"php"=>"PHP");
							echo $project[$data["project"]];
					?></td>
			  </tr>
			  <tr>
			    <th>分组：</th>
				<td name="team">
				  <?php 
				    if(isset($data["team"]))
						echo "小组".$data["team"];
					else
						echo "小组1";
				  ?>
				</td>
			  </tr>-->
			  <?php if(!empty($data["create_time"])){?>
			  <tr>
			    <th>注册时间：</th>
				<td><?php echo date("Y年m月d日 H:i:s",$data["create_time"]+3600*7)?></td>
			  </tr>
			  <?php }?>
			</table>
		  </form>
		  </fieldset>
		  
		  <fieldset>
		  <legend>我的团队</legend>
		    <table>
			  <tr>
			    <th width="100">团队名称：</th>
				<td><?php echo base64_decode($team["name"]);?></td>
			  </tr>
			  <tr>
			    <th>成员：</th>
				<td><?php echo $team["member"]?></td>
			  </tr>
			  <tr>
			    <th>口号：</th>
				<td><?php echo $team["slogan"]?></td>
			  </tr>
			  <tr>
			    <th>标签：</th>
				<td><?php echo $team["label"]?></td>
			  </tr>
			  <tr>
			    <th>主页：</th>
				<td><?php echo $team["website"]?></td>
			  </tr>
			  <?php if(!empty($team["create_time"])){?>
			  <tr>
			    <th>注册时间：</th>
				<td><?php echo date("Y年m月d日 H:i:s",$team["create_time"]+3600*7)?></td>
			  </tr>
			  <?php }?>
			</table>
		  </fieldset>
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