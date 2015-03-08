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
	/*$sql = "CREATE TABLE sgfw_team(
		id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		name varchar(256),
		member varchar(256),
		slogan varchar(256),
		label varchar(256),
		website varchar(256),
		connect varchar(256),
		introduction varchar(256),
		config varchar(256),
		creater varchar(256),
		create_time varchar(256)
	)";*/
	/*mysql_query($sql,$conn);
	var_dump(mysql_error());
	$sql = "SELECT * FROM sgfw_team;";
	$a = mysql_query($sql,$conn);
	var_dump($a);*/
	
	//$result = mysql_query("CREATE TABLE sgfw_user");
	//var_dump($result);
	//var_dump($_POST);
	//var_dump($_POST);
	$data = $_POST["team"];
	$info = "";
	
	if(empty($data["name"]))
		$info = "团队名称不能为空";
	$sql = "select * from sgfw_team where name='".base64_encode($data["name"])."'";
	$result = mysql_query($sql,$conn);
	$row = mysql_fetch_array($result);
	
	if((isset($row["id"]) && !empty($row["id"])) && empty($info))
		$info = "团队名称已被使用";
	if(empty($info)){
		$sql = "insert into sgfw_team (name,member,slogan,label,website,connect,introduction,creater,create_time) values('".base64_encode($data["name"])."','".$data["member"]."','".$data["slogan"]."','".$data["label"]."','".$data["website"]."','".$data["connect"]."','".$data["introduction"]."','lvzhaobo','".time()."')";
		$result = mysql_query($sql,$conn);
		if(!$result)
			$info = "创建团队失败";
		//var_dump(mysql_error());
		//session_start();
		//$_SESSION["user"] = $data["username"];
		//$_SESSION["code"] = md5($data["password"]);
	}
	//var_dump(mysql_error());
	//var_dump($info,empty($info));die;
?>
<script>
<?php if(empty($info)){?>
window.location.href="../modules/myspace/index.php";
<?php }
else{
?>
window.location.href="../modules/createTeam.php?info="+"<?php echo $info;?>";
<?php }?>
</script>