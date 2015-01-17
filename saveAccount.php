<?php
	include 'db.php';
	include 'notice.php';
	session_start();
	//$conn = mysql_connect("rdsbezbquaqzfyn.mysql.rds.aliyuncs.com","lvzb","111111");
	//if(!$conn){
	//	die("connect mysql error.");
	//}
	//var_dump(mysql_error());
	//die;
	/*if (mysql_query("CREATE DATABASE sgfw",$conn)){
		echo "Database created";
	}
	else
		var_dump(mysql_error());
	*/
	//mysql_select_db("sgfw");
	/*$sql = "CREATE TABLE sgfw_user(
		id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		username varchar(64),
		password varchar(64),
		qq int,
		email varchar(64),
		project varchar(64),
		team varchar(64),
		config varchar(256)
	)";
	mysql_query($sql,$conn);
	var_dump(mysql_error());*/
	//$result = mysql_query("CREATE TABLE sgfw_user");
	//var_dump($result);
	//var_dump($_POST);
	//var_dump($_POST);
	$action = "";
	if(isset($_GET["action"]))
		$action = $_GET["action"];
	
	if($action=="upload"){
		//var_dump($_FILES);
		$file_name = "upload/" . time()."_".base64_encode($_FILES["file"]["name"]);
		/*if ($_FILES["file"]["error"] > 0){
			echo "Error: " . $_FILES["file"]["error"] . "<br />";
		}
		else{
			echo "Upload: " . $file_name . "<br />";
			echo "Type: " . $_FILES["file"]["type"] . "<br />";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			echo "Stored in: " . $_FILES["file"]["tmp_name"];
		}*/

		if (file_exists($file_name)){
			//echo $_FILES["file"]["name"] . " already exists. ";
		}
		else{
			move_uploaded_file($_FILES["file"]["tmp_name"],$file_name);
			//echo "Stored in: " . $file_name;
			$sql = "UPDATE sgfw_user SET img='".$file_name."' WHERE username='".base64_encode($_SESSION["user"])."'";
			$result = mysql_query($sql,$conn);
			//var_dump($result);
			if(!$result){
				//echo mysql_error();
			}
			$info = "upload_success";
			//var_dump($info);
		}
	}
	else{
		$edit = @$_GET["edit"];
		$data = $_POST["account"];
		$info = "";
		if($edit!="true"){
			if(empty($data["username"]))
				$info = "用户名不能为空";
			if(($data["password"]!=$data["password_2"]) && empty($info))
				$info = "两次密码不相同";
			$sql = "select * from sgfw_user where username='".base64_encode($data["username"])."'";
			$result = mysql_query($sql,$conn);
			$row = mysql_fetch_array($result);
			
			if((isset($row["id"]) && !empty($row["id"])) && empty($info))
				$info = "用户名已被使用";
			if(empty($info)){
				$sql = "insert into sgfw_user (username,password,qq,email,recommender,college,create_time) values('".base64_encode($data["username"])."','".$data["password"]."','".$data["qq"]."','".$data["email"]."','".$data["recommender"]."','".$data["college"]."','".time()."')";
				$result = mysql_query($sql,$conn);
				if(!$result){
					$info = "注册失败";
					//var_dump(mysql_error());
					//die;
				}
				$info = "注册成功";
				$_SESSION["user"] = $data["username"];
				$_SESSION["code"] = md5($data["password"]);
			}
			noticeObject::setNotice($info);
		}
		else{
			$username = $_SESSION["user"];
			$sql = "UPDATE sgfw_user SET qq='".$data["qq"]."' , email='".$data["email"]."' , college='".$data["college"]."'";
			$result = mysql_query($sql);
			if(!$result){
				$info = "更新失败";
			}
			$info = "更新成功";
			noticeObject::setNotice($info);
		}
		echo '<script>window.location.href="mySpace.php";</script>';
	}
	//var_dump(mysql_error());
	
	//var_dump($info,empty($info));die;
?>
<script>
//alert("burning");
<?php if(empty($info)){?>/
window.location.href="mySpace.php?info=注册成功";
<?php }
else if($info=="upload_success"){
?>
window.location.href="mySpace.php";
<?php
}
else{
?>
window.location.href="register.php?info="+"<?php echo $info;?>";
<?php }?>
</script>