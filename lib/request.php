<?php
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
	
	if($action=="uploadHomework"){
		$file_name = $_FILES["file"]["name"];
		if(empty($file_name)){
			echo '<script>window.location.href="../modules/myspace/myHomework.php?info=请选择文件";</script>';
			return ;
		}
		$img = explode(".",$_FILES["file"]["name"]);
		$file_name = base64_encode($img[0]).".".$img[1];
		
		$sql = "select * from sgfw_user where username='".base64_encode($_SESSION["user"])."'";
		$result = mysql_query($sql,$conn);
		$row = mysql_fetch_array($result);
		
		//TODO 检查文件名为空时
		//TODO 检查上传的文件类型、大小，上传次数
		if((isset($row["id"]) && !empty($row["id"])))
			$user_id = $row["id"];
		else{
			echo '<script>alert("请先登录");window.location.href="../modules/login.php";</script>';
			return ;
		}
			
		if (!file_exists($file_name)){
			move_uploaded_file($_FILES["file"]["tmp_name"],"../data/users/".$_SESSION["user"]."/".$file_name);
			//echo "Stored in: " . $file_name;
			//$sql = "UPDATE sgfw_user SET img='".$file_name."' WHERE username='".base64_encode($_SESSION["user"])."'";
			$sql = "INSERT INTO sgfw_homework (user_id,file,comment,create_time) VALUES ('".$user_id."','".$file_name."','".$_POST["content"]."','".date("Y-m-d H:i:s",time())."');";
			$result = mysql_query($sql,$conn);
			//var_dump($result);
			if(!$result){
				echo mysql_error();die;
			}
			$info = "upload_success";
			//var_dump($info);
			echo '<script>
window.location.href="../modules/myspace/myHomework.php";
</script>';
		}
	}
	//var_dump(mysql_error());
	//var_dump($info,empty($info));
	file_put_contents(md5($_SESSION["user"]).".txt",$info);
?>
<script>
window.location.href="../modules/team.php";
</script>