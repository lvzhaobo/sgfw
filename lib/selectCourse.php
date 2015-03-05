<?php
	include 'db.php';
	include 'notice.php';
	session_start();
	
	$username = isset($_SESSION["user"])?$_SESSION["user"]:"";
	if(empty($username)){
		echo "<script>window.location.href='register.php?info=请先注册';</script>";
	}
	$course = $_GET["course"];
	//$data = $_POST["account"];
	$info = "";
	
	$sql = "select * from sgfw_user where username='".base64_encode($username)."'";
	$result = mysql_query($sql,$conn);
	$row = mysql_fetch_array($result);
	//if(isset($row["project"])&&!empty($row["project"]))
		//$info = "已选择课程，不能再选择其他课程";
	if(!empty($course)){
		$sql = "UPDATE sgfw_user SET project ='".$course."' WHERE username='".base64_encode($username)."'";
		//$sql = "insert into sgfw_user (username,password,qq,email,recommender,college,create_time) values('".base64_encode($data["username"])."','".$data["password"]."','".$data["qq"]."','".$data["email"]."','".$data["recommender"]."','".$data["college"]."','".time()."')";
		//var_dump($sql);
		$result = mysql_query($sql,$conn);
		if(!$result){
			$info = "选择失败";
			var_dump(mysql_error());
			die;
		}
		$info = "选择成功";
		//var_dump($result);die;
		//session_start();
		//$_SESSION["user"] = $data["username"];
		//$_SESSION["code"] = md5($data["password"]);
	}
	noticeObject::setNotice($info);
	echo '<script>window.location.href="myStudy.php";</script>';
	//var_dump(mysql_error());
	//var_dump($info,empty($info));die;
?>