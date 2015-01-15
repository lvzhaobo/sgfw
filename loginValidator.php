<?php
	include 'db.php';
	include 'notice.php';
	session_start();
	
	//$conn = mysql_connect("127.0.0.1","root");
	//mysql_select_db("sgfw");
	$data = $_POST["account"];
	$info = "";
	
	$sql = "select * from sgfw_user where username='".base64_encode($data["username"])."'";
	$result = mysql_query($sql,$conn);
	@$row = mysql_fetch_array($result);
	if($row["password"]==$data["password"]){
		$_SESSION["user"] = $data["username"];
		$_SESSION["code"] = md5($data["password"]);
	}
	else{
		$info = "登录失败";
	}
	noticeObject::setNotice($info);
?>
<script>
<?php if(empty($info)){?>
window.location.href="mySpace.php";
<?php }
else{
?>
window.location.href="login.php";
<?php }?>
</script>