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
	/*$sql = "CREATE TABLE sgfw_project(
		id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		name varchar(256),
		label varchar(256),
		website varchar(256),
		connect varchar(256),
		introduction varchar(256),
		config varchar(256),
		team varchar(256)
	)";
	mysql_query($sql,$conn);
	var_dump(mysql_error());
	$sql = "SELECT * FROM sgfw_project;";
	$a = mysql_query($sql,$conn);
	var_dump($a);*/
	
	//$result = mysql_query("CREATE TABLE sgfw_user");
	//var_dump($result);
	//var_dump($_POST);
	//var_dump($_POST);
	$data = $_POST["project"];
	$info = "";
	
	if(empty($data["name"]))
		$info = "项目名称不能为空";
	$sql = "select * from sgfw_project where name='".base64_encode($data["name"])."'";
	$result = mysql_query($sql,$conn);
	$row = mysql_fetch_array($result);
	
	if((isset($row["id"]) && !empty($row["id"])) && empty($info))
		$info = "项目名称已被使用";
	if(empty($info)){
		$sql = "insert into sgfw_project (name,label,website,connect,introduction,team) values('".base64_encode($data["name"])."','".$data["label"]."','".$data["website"]."','".$data["connect"]."','".$data["introduction"]."','dreamstar')";
		$result = mysql_query($sql,$conn);
		if(!$result)
			$info = "创建项目失败";
		var_dump(mysql_error());
		//session_start();
		//$_SESSION["user"] = $data["username"];
		//$_SESSION["code"] = md5($data["password"]);
	}
	//var_dump(mysql_error());
	//var_dump($info,empty($info));die;
?>
<script>
<?php if(empty($info)){?>
window.location.href="mySpace.php";
<?php }
else{
?>
window.location.href="createProject.php?info="+"<?php echo $info;?>";
<?php }?>
</script>