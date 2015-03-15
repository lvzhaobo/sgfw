<?php
$conn = mysql_connect("localhost","root");
if(!$conn){
	die("connect mysql error.");
}
mysql_select_db("sgfw");

@session_start();
$workspace = "http://".$_SERVER["HTTP_HOST"]."/sgfw/";
$data = array();

if(isset($_SESSION["user"]) && !empty($_SESSION["user"])){
	$result = mysql_query("select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'");
	$data = mysql_fetch_array($result);
}

if(!isset($data["id"]) or empty($data["id"])){
	echo "<script>alert('请先登录');window.location.href='../login.php'</script>";
}

$img_path = $workspace."/data/upload/".str_replace("upload","",$data["img"]);
$name = base64_decode($data["username"]);
$time = $data["create_time"];
$date = $time==0?"2014-10-24":date("Y-m-d H:i:s");
$date = "注册时间：".$date;

$index = <<<EOF
    <div style="width:200px;height:100%;z-index:0;float:left;position:fixed;font-weight:bold;font-size:16px;background-color:#F3F3F3;padding:10px 0;line-height:40px;border-right:2px solid #CCCCCC;">
		<div style="margin:10px 0;text-align:center;border-bottom:2px solid #FFFFFF;">
		  <div><img src="$img_path" style="width:80px;height:80px;border-radius:3em;" /></div>
		  <div style="line-height:28px;color:#666666;margin:5px 0;">$name</div>
		  <div style="color:#999999;font-size:13px;">$date</div>
		</div>
		<div style="text-align:center;">
		  <a href="index.php">
		  <div style="color:#000000;">
		    <span>基本信息</span>
		  </div>
		  </a>
		  <a href="myStudy.php">
		  <div style="color:#FF9900;">
		    <span>我的课程</span>
		  </div>
		  </a>
		  <a href="#">
		  <div style="color:#CCCCCC;">
		    <span>我的作业</span>
		  </div>
		  </a>
		  <a href="myResource.php">
		  <div style="color:#000000;">
		    <span>学习资源</span>
		  </div>
		  </a>
		</div>
		</div>
EOF;
	echo $index;