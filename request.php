<?php
	include 'db.php';
	session_start();
	if(isset($_GET["action"]))
		$action = $_GET["action"];
	
	if($action=="zan"){
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
	//var_dump(mysql_error());
	//var_dump($info,empty($info));
	file_put_contents(md5($_SESSION["user"]).".txt",$info);
?>
<script>
window.location.href="team.php";
</script>