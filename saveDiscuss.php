<?php
	include 'db.php';
	session_start();
	
	$action = "saveDiscuss";
	if(isset($_GET["action"]))
		$action = $_GET["action"];
	
	if($action=="saveDiscuss"){
		//var_dump($_SESSION,$_POST);
		$username = $_SESSION["user"];
		$info = "";
		if(empty($info)){
			$sql = "insert into sgfw_discuss (username,content,create_time) values('".base64_encode($username)."','".$_POST["content"]."','".(time()+3600*8)."')";
			$result = mysql_query($sql,$conn);
			if(!$result){
				$info = "发表失败";
				//var_dump(mysql_error());
				//die;
			}
			$info = "发表成功";
			//$_SESSION["user"] = $data["username"];
			//$_SESSION["code"] = md5($data["password"]);
		}
	}
	//var_dump(mysql_error());
	//var_dump($info,empty($info));
	file_put_contents(md5($username).".txt",$info);
?>
<script>
window.location.href="discuss.php";
</script>