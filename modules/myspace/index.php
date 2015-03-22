<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>让梦想在时光中飞舞·推动高校学生梦想实践的平台</title>
	<script src="../../src/js/account.js" type="text/javascript"></script>
	<style>
	  #basic_info input {height:32px;border:2px solid #0099FF;font-weight:bold;font-size:14px;background-color:#F2F2F2;padding:4px;margin:2px;}
	  .team {font-size:13px;}
	  .btn,button{font-weight: bold; text-align:center;line-height: 26px; box-shadow: 0px 0px 2px rgb(220, 220, 220); min-width: 60px;padding:0 10px;margin:0 10px; font-size: 16px; border-radius: 0.5em; border: 2px solid #FF9900; color:#0099FF; background-color: rgb(255, 255, 255);}
	  .btn:hover,button:hover{border:2px solid #0099FF;color:#FF9900;}
	  .btn a {color:#0099FF;}
	  .btn a:hover {color:#FF9900;}
	  th {font-weight:normal;font-size:14px;text-align:right;padding:0 10px 0 0;color:#CCCCCC;}
	  td {font-weight:normal;font-size:14px;}
	</style>
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
				return ;
			}
		  ?>
	<div>
	  <div class="main index" style="padding-top:32px;min-width:960px;margin:0 auto;font-size:14px;min-height:400px;">
	    
	    <?php include '../../src/myspace_index.php'?>
		<div class="content" style="width:800px;float:left;margin:0 0 40px 200px;min-height:320px;">
		<div>
		  <?php
			include '../../lib/db.php';
			$data = array();
			if(isset($_SESSION["user"])){
				$result = mysql_query("select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'");
				$data = mysql_fetch_array($result); 
				$result_team = mysql_query("select * from sgfw_team where member LIKE '%".$_SESSION["user"]."%'");
				$team = mysql_fetch_array($result);
			}
			
			if(!isset($data["id"]) or empty($data["id"])){
				echo "<script>alert('请先登录');window.location.href='../../login.php'</script>";
				return ;
			}
			$edit = isset($_GET["edit"]);
		  ?>
		  <div style="margin:20px 20px;">
		    <a href="../createTeam.php" class="btn" style="float:left;">创建团队</a>&nbsp;&nbsp;<!--<a href="../createProject.php">创建项目</a>&nbsp;&nbsp;-->
			<?php if($edit){?>
			  <div class="btn" style="float:left;"><a href="index.php">返回</a></div>
			<?php }
			  else{
			?>
			  <div class="btn" style="float:left;"><a href="index.php?edit=true">编辑</a></div>
			<?php }?>
			<span style="float:right;font-weight:bold;font-size:16px;color:#00AAFF;">QQ群：376265741</span>
		  </div>
		  <div id="basic_info" style="width:400px;float:left;">
		  <form action="../../lib/saveAccount.php?edit=true" method="post">
		    <table style="line-height:28px;">
			  <tr>
			    <th width="100">用户名</th>
				<td><?php echo base64_decode($data["username"]);?></td>
			  </tr>
			  <tr>
			    <th>QQ</th>
				<td><?php 
					if($edit){
					?>
					<input type="text" name="account[qq]" value="<?php echo $data['qq'];?>">
					<?php
					}
					else{
						echo $data["qq"];
					}?>
				</td>
			  </tr>
			  <tr>
			    <th>Email</th>
				<td><?php 
					if($edit){
					?>
					<input type="text" name="account[email]" value="<?php echo $data['email'];?>">
					<?php
					}
					else{
						echo $data["email"];
					}?>
				</td>
			  </tr>
			  <tr>
			    <th>学校</th>
				<td><?php 
					if($edit){
					?>
					<input type="text" name="account[college]" value="<?php echo $data['college'];?>">
					<?php
					}
					else{
						echo $data["college"];
					}?>
				</td>
			  </tr>
			  <?php if(!empty($data["create_time"])){?>
			  <tr>
			    <th>注册时间</th>
				<td><?php echo date("Y年m月d日 H:i:s",$data["create_time"])?></td>
			  </tr>
			  <?php }?>
			  <?php if($edit){?>
			  <tr>
			    <th></th>
				<td><button type="submit">确定</button></td>
			  </tr>
			  <?php }?>
			</table>
		  </form>
		  </div>
		  <div style="width:280px;float:left;">
		    <?php if(file_exists("../../data/upload/".$data["img"])){?>
		    <img src="<?php echo $workspace."data/upload/".$data["img"]?>" style="width:100px;"/>
			<?php }
			else{?>
			<div style="width:100px;height:100px;border:1px solid #CCCCCC;">请上传头像</div>
			<?php }?>
			<form action="../../lib/saveAccount.php?action=upload" method="post" enctype="multipart/form-data">
			  <input type="file" name="file" style="width:148px;float:left;" />
			  <button type="submit">确定</button>
			</form>
		  </div>
		  </div>
		  <div style="clear:float;clear:both;"></div>
		  <div style="height:400px;border-top:2px solid #CCCCCC;font-size:22px;text-align:center;padding:20px 10px;">
		    <div style="width:132px;height:60px;margin:10px;border:1px solid #0099FF;float:left;padding:20px;">
			  <span>①注册账号，完善信息</span>
			</div>
			<div style="width:132px;height:60px;margin:10px;border:1px solid #0099FF;float:left;padding:20px;">
			  <span>②创建/加入团队</span>
			</div>
			<div style="width:132px;height:60px;margin:10px;border:1px solid #0099FF;float:left;padding:20px;">
			  <span>③选择课程，加入QQ群</span>
			</div>
			<div style="width:132px;height:60px;margin:10px;border:1px solid #0099FF;float:left;padding:20px;">
			  <span>④开始第一周任务</span>
			</div>
		  </div>
		  </div>
		
		<div class="project_item" style="width:300px;height:100%;float:right;padding:10px 20px 10px 20px;border-left:2px solid #CCCCCC;">
		  <?php while($team = mysql_fetch_array($result_team)){?>
		  <fieldset>
		  <legend>我的团队</legend>
		  <div class="team">
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
			</div>
		  </fieldset>
		  <?php }?>
		</div>
		</div>
	</div>
	<div style="clear:float;clear:both;"></div>
  </body>
</html>
<script>
<?php if(!empty($_GET["info"])){?>
alert("<?php echo $_GET["info"]?>");
<?php if($_GET["info"]=="请选择图片"){?>
window.location.href="index.php";
<?php }
else{?>
window.location.href="../register.php";
<?php }}?>
</script>