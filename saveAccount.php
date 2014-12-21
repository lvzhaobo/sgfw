<?php
	include 'db.php';
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
	$data = $_POST["account"];
	$info = "";
	
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
			var_dump(mysql_error());
			die;
		}
		session_start();
		$_SESSION["user"] = $data["username"];
		$_SESSION["code"] = md5($data["password"]);
	}
	//var_dump(mysql_error());
	//var_dump($info,empty($info));die;
?>
<script>
<?php if(empty($info)){?>
window.location.href="mySpace.php?info=注册成功";
<?php }
else{
?>
window.location.href="register.php?info="+"<?php echo $info;?>";
<?php }?>
</script>