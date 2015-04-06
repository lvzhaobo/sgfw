<?php
include 'db.php';
/*$conn = mysql_connect("localhost","root");
if(!$conn){
	die("connect mysql error.");
}
mysql_select_db("sgfw");
*/
@session_start();
$workspace = "http://".$_SERVER["HTTP_HOST"];
$data = array();

if(isset($_SESSION["user"]) && !empty($_SESSION["user"])){
	$result = mysql_query("select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'");
	$data = mysql_fetch_array($result);
}

if(!isset($data["id"]) or empty($data["id"])){
	echo "<script>alert('请先登录');window.location.href='../login.php'</script>";
}

$img_path = $workspace."/data/upload/".str_replace("upload","",$data["img"]);
if(!file_exists($img_path))
	$img_path = $workspace."/src/images/dream.jpg";
$name = base64_decode($data["username"]);
$time = $data["create_time"];
$date = $time==0?"2014-10-24":date("Y-m-d H:i:s",$time);
$date = "注册时间：".$date;

$img = $workspace."/data/upload/".$data["img"];

$current_page = preg_replace("/.*\//","",$current_page);

$nav = array(
			array('href'=>$workspace.'/modules/myspace/index.php','label'=>'基本信息','links'=>array('index.php')),
			array('href'=>$workspace.'/modules/myspace/myStudy.php','label'=>'我的课程','links'=>array('myStudy.php','myCourse.php')),
			array('href'=>$workspace.'/modules/myspace/myHomework.php','label'=>'我的作业','links'=>array('myHomework.php')),
			array('href'=>$workspace.'/modules/myspace/myResource.php','label'=>'学习资源','links'=>array('myResource.php'))
		);

$nav_str = "";
foreach($nav as $key=>$item){
	$selected = in_array($current_page,$item['links'])?" class='myspace_selected'":"";
	$nav_str .= '
		<a href="'.$item['href'].'" style="color:#737373;">
		  <div'.$selected.' style="border-top:1px solid #EEEEEE;">
		    <span>'.$item['label'].'</span>
		  </div>
		</a>';
}

$index = <<<EOF
	<style>
	.myspace_selected {border-left:4px solid #FFAA00;color:#FFAA00;background-color:#EEEEEE;font-weight:bold;};
	</style>
    <div style="width:200px;height:100%;z-index:0;float:left;position:fixed;font-weight:bold;font-size:16px;background-color:#FFFFFF;padding:10px 0;margin:-30px 0 0 0;line-height:48px;border-right:0px solid #F3F3F3;box-shadow:0px 1px 5px #CCCCCC;">
		<div style="margin:10px 0;text-align:center;border-bottom:2px solid #FFFFFF;">
		  <div><img src="$img" style="width:80px;height:80px;border-radius:3em;" /></div>
		  <div style="line-height:28px;color:#666666;margin:5px 0;">$name</div>
		  <div style="color:#999999;font-size:12px;font-weight:normal;">$date</div>
		</div>
		<div style="text-align:center;font-weight:normal;font-size:14px;">
		  $nav_str
		</div>
		</div>
EOF;
	echo $index;