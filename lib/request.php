﻿<?php
	include 'db.php';
	session_start();
	if(isset($_GET["action"]))
		$action = $_GET["action"];
	
	if($action=="zan"){
		if(!isset($_SESSION["user"]) || empty($_SESSION["user"])){
			echo '<script>
window.location.href="../modules/login.php";
</script>';
			return ;
		}
		
		if(!isset($_GET["college"]) || empty($_GET["college"]))
			return ;
		
		$sign = $_SERVER["REMOTE_ADDR"]."-".$_GET["college"];
		$data = file_get_contents("../data/request_ip.json");
		$data = empty($data) ? array() : $data;
		$data = json_decode($data,true);
		if(in_array($sign,$data)){
			echo '<script>
			alert("每个IP地址只能赞一次");
window.location.href="../modules/team.php";
</script>';
			return ;
		}
		$data[] = $sign;
		file_put_contents("../data/request_ip.json",json_encode($data));
		$sql = "SELECT * FROM sgfw_college WHERE id='".$_GET["college"]."'";
		$result = mysql_query($sql,$conn);
		$college = mysql_fetch_array($result);
		$sql = "UPDATE sgfw_college SET zan = '".++$college["zan"]."' WHERE id='".$_GET["college"]."'";
		$result = mysql_query($sql,$conn);
		if(!$result){
			$info = "点赞失败";
			//var_dump(mysql_error());
			//die;
		}
		$info = "点赞成功";
		//$_SESSION["user"] = $data["username"];
		//$_SESSION["code"] = md5($data["password"]);
	}
	
	if($action=="getCollegeNames"){
		$sql = "SELECT * FROM sgfw_college";
		$result = mysql_query($sql,$conn);
		$college = array();
		$str = $_GET["str"];
		while($data = mysql_fetch_array($result)){
			if(!empty($str) && preg_match("/".$str."/",base64_decode($data["name"])))
				$college[] = base64_decode($data["name"]);
			else if(empty($str))
				$college[] = base64_decode($data["name"]);
		}
		
		//$college = array("郑州大学（南校区）","郑州大学（新校区）");
		echo join("<br />",$college);
		return ;
	}
	//var_dump(mysql_error());
	//var_dump($info,empty($info));
	file_put_contents(md5($_SESSION["user"]).".txt",$info);
?>
<script>
window.location.href="../modules/team.php";
</script>